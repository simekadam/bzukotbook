<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DefaultPresenter
 *
 * @author simekadam
 */

use Components\AddStatus;
use Nette\Environment;

class DefaultPresenter extends BasePresenter{


    public function  getFacebook() {
        return parent::getFacebook();
    }

    public function getCurrentUser(){
        return $this->getFacebook()->api("/me");
    }


    public function showMyStatuses(){
        try{
        $statuses = $this->getFacebook()->api("/me/statuses");
        return $statuses;
        }
 catch (FacebookApiException $exception){
     $flash = $this->flashMessage($exception);
     $this->invalidateControl('flashMesagesHomePage');
     $this->redirect('Default');
        }
    }

    public function handleLike($id){
        $ahoj = $this->getFacebook()->api($id.'/likes', 'POST');
        if($this->isAjax()){
            $this->invalidateControl('zkouska');
            $flash[] = $this->flashMessage($ahoj);
        }


    }
    public function   startup() {
        parent::startup();
        parent::actionLogIn($this->getFacebook());
    }

    public function  createComponentAddStatusForm($name) {
        $addStatusForm = new AddStatus($this,'addStatusForm');
        $addStatusForm->onOkClick[] = array($this, 'AddPostOnOkClick');
    }

    public function renderDefault(){
        $this->invalidateControl('zkouska');
        $this->template->statuses = $this->showMyStatuses();
        $this->template->ouser = $this->getCurrentUser();
    }

    public function AddPostOnOkClick(\Nette\Forms\SubmitButton $button){
            $form = $button->getForm();
            $post = $form['status']->getValue();
            try{
            $this->getFacebook()->api('/me/feed', 'POST', array('message' => $post));
            $flash = $this->flashMessage("Your status has been successfuly posted");
            }
 catch (FacebookApiException $exception){
    $flash = $this->flashMessage("Something goes wrong");
 }
 $this->invalidateControl('zkouska');
 $this->invalidateControl('flashMesagesHomePage');
        }

    //put your code here
}
