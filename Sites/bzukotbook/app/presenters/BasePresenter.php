<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BasePresenter
 *
 * @author simekadam
 */
use Nette\Application\Presenter;

class BasePresenter extends Presenter{

    public $oldlayoutMode = FALSE;
    //put your code here

    public $facebook;

    public function getFacebook() {
        try{
        if($this->facebook == null){
        $app_id = "124815934249440";
        $app_secret = "c28792395618482b698005d2efd4d40f";

        $this->facebook = new Facebook(array(
                    'appId' => $app_id,
                    'secret' => $app_secret,
                    'cookie' => true,
                ));

        }
        }
 catch (FacebookApiException $ex){
            if ($this->facebook->getUser()) {
            }
            $this->facebook = null;
            $this->redirect($this);
 }
        return $this->facebook;
    }

    public function actionLogIn($facebookObject){
        if (is_null($facebookObject->getUser())) {
            $urlF = $facebookObject->getLoginUrl(array('req_perms' => 'user_status,publish_stream,user_photos'));
            $this->redirectUri($urlF);
            //exit;
        }
    }

    public function isLoggedInOver(){
        return is_null($this->getFacebook()->getUser())  ? false : true;
    }

    


    

}
