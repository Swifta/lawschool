<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Authenticator{
    
    private $url = "";
    private $username;
    private $password;
    
    
    public function __construct($u, $p) {
        $this->username = $u;
        $this->password = $p;
    }
    
    public function auth(){
        $ch = curl_init();

        // Set query data here with the URL
        curl_setopt($ch, CURLOPT_URL, $this->api); 
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $this->data);
        $content = curl_exec($ch);
        //var_dump($content);
        $this->response = json_decode($content,true);
        curl_close($ch);
    }
}
?>
