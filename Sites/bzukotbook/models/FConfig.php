<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Config
 *
 * @author simekadam
 */
use Nette\Object;

class FConfig extends Object {
    protected $connection;
    private function __construct() {
        $app_id = "124815934249440";
        $app_secret = "c28792395618482b698005d2efd4d40f";

        $facebook = new Facebook(array(
                    'appId' => $app_id,
                    'secret' => $app_secret,
                    'cookie' => true
                ));


        if (is_null($facebook->getUser())) {
            $this->
            header("Location:{$facebook->getLoginUrl(array('req_perms' => 'user_status,publish_stream,user_photos'))}");
            exit;
        }
    }

    public function getFacebook() {
        if($connection==null){
            $connection = new FConfig();
        }
        return $connection;
    }

}

?>
