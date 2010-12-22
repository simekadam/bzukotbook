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
        if($this->facebook == null){
        $app_id = "124815934249440";
        $app_secret = "c28792395618482b698005d2efd4d40f";

        $this->facebook = new Facebook(array(
                    'appId' => $app_id,
                    'secret' => $app_secret,
                    'cookie' => true,
                ));

        }
        if (is_null($this->facebook->getUser())) {
            $urlF = $this->facebook->getLoginUrl(array('req_perms' => 'user_status,publish_stream,user_photos'));
            echo $urlF;
            $this->redirectUri($urlF);
            exit;
        }
        return $this->facebook;
    }


    public function  beforeRender() {
        $this->getFacebook();
    }

}
