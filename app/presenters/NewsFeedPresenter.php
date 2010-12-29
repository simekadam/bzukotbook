<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of NewsFeedPresenter
 *
 * @author simekadam
 */
class NewsFeedPresenter extends BasePresenter{
    //put your code here
    public function  getFacebook() {
       return parent::getFacebook();
    }


    public function showMyNewsFeed(){
        $newsFeed = $this->getFacebook()->api("/me/home");
        return $newsFeed;
    }

    public function handleDefault(){
        if($this->isAjax()){
            $this->invalidateControl('zkouska');
        }

    }

    public function renderDefault(){
        $this->invalidateControl('zkouska');
        $this->template->newsFeedDatas = $this->showMyNewsFeed();
    }
}
?>
