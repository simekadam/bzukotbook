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

class DefaultPresenter extends BasePresenter{

    public function  getFacebook() {
        return parent::getFacebook();
    }
    
    public function showMyStatuses(){
        $statuses = $this->getFacebook()->api("/me/statuses");
        return $statuses;
    }

    public function handleDefault(){
        if($this->isAjax()){
            $this->invalidateControl('zkouska');
        }

    }

    public function renderDefault(){
        $this->invalidateControl('zkouska');
        $this->template->statuses = $this->showMyStatuses();
    }
    //put your code here
}
