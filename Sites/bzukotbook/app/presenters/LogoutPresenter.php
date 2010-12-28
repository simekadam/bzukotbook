<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of LogoutPresenter
 *
 * @author simekadam
 */
use Nette\Environment;

class LogoutPresenter extends BasePresenter{

    public function isLoggedInOver() {
        parent::isLoggedInOver();
    }

    public function getFacebook() {
        return parent::getFacebook();
    }


    public function  actionLoginMe() {
        $this->redirect("Default:default");
    }

    public function actionLogoutFromFacebook(){
        $logoutUrl = $this->getFacebook()->getLogoutUrl();
        $logoutUrl = str_replace("%2Flogout-from-facebook%2F", "", $logoutUrl);
        $this->redirectUri($logoutUrl);
        exit;
    }

    public function renderDefault(){
        
    }
    //put your code here
}
?>
