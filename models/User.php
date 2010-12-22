<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of User
 *
 * @author simekadam
 */
use \FConfig;
class User {
    //put your code here

    public function getFUser(){
        $user = $FConfig->getFacebook()->getUser();
        return $user;
    }

}
?>
