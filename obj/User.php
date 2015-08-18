<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class User{
    
    private $api = "https://script.google.com/macros/s/AKfycbzawpxG_Wc0B7PCuti5kMuMxgdUFNaj_9Z0S3NoDGowNrR6e3Y/exec";
    private $api_names = "https://script.google.com/macros/s/AKfycbzYcBa6uNksVnxiD5A76HrMb8G2MrQDXKxQYTsltprQJhwVfmyA/exec";
    private $api_user_exist = "https://script.google.com/macros/s/AKfycbyDM6aJ3QpgsMkIYUBEXcMyLRL7HJ2v9BEbCqXh8kXOggqFhxpW/exec";
    private $api_fetch_details = "https://script.google.com/macros/s/AKfycbzaGel-abkFLPhnfXAMPnreGTqg-kRN6ibU4_H8oKCryqqH5xQ/exec";
    private $email; //google email id

    private $data = array();
    
    private $gmail = "smustafa@swifta.com";//priamary key here
    private $surname = "Mustafa";
    private $first_name = "Segun";
    private $middle_name = "Azeez";

    private $religion = "Muslim";
    private $sex = "M";
    private $dob = "25/08/1908";
    private $university = "Bells University Of Technology, Otta";
    private $state = "Osun";
    private $lg = "Irepodun";
    private $phone = "07043486365";
    private $alternate_email = "segsalerty@yahoo.com";
    private $homeaddress = "9, Peter Eleedu Street, Ishashi, Pipeline, Akute, Berger, Lagos. Nigeria";
    private $experience = "Am High !";
    private $image = "";
    private $image_type = "";
    
    private $response;
    
    public function __construct($e) {
        $this->gmail = $e;
    }
    
    public function exec(){
        $this->init();
    }
    
    public function isUserRegistered(){
        
        $em_post = array("email"=>$this->gmail);
        
        //var_dump($em_post);
        
        $ch = curl_init();

        // Set query data here with the URL
        curl_setopt($ch, CURLOPT_URL, $this->api_user_exist); 
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $em_post);
        $content = curl_exec($ch);
        //var_dump($content);
        $response = json_decode($content,true);
        curl_close($ch); 
        
        //$decod = json_decode($response);
        //var_dump($content);
        return $response['report'];
        
    }
    
    public function getUserSurnameAndLastName(){
        $em_post = array("gmail"=>$this->gmail);
        $ch = curl_init();

        // Set query data here with the URL
        curl_setopt($ch, CURLOPT_URL, $this->api_names); 
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $em_post);
        $content = curl_exec($ch);
        //var_dump($content);
        $response = json_decode($content,true);
        curl_close($ch); 
        
        //$decod = json_decode($response);
        //var_dump($content);
        return $response;        
    }
    
    public function getDetails(){
        $em_post = array("email"=>$this->gmail);
        $ch = curl_init();

        // Set query data here with the URL
        curl_setopt($ch, CURLOPT_URL, $this->api_fetch_details); 
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $em_post);
        $content = curl_exec($ch);
        //var_dump($content);
        $response = json_decode($content,true);
        curl_close($ch); 
        
        //$decod = json_decode($response);
        //var_dump($content);
        return $response;         
    }
    
    private function init(){

        $this->data['gmail'] = $this->gmail;
        $this->data['surname'] = $this->surname;
        $this->data['first_name'] = $this->first_name;
        $this->data['middle_name'] = $this->middle_name;
        $this->data['religion'] = $this->religion;
        $this->data['sex'] = $this->sex;
        $this->data['dob'] = $this->dob;
        $this->data['university'] = $this->university;
        $this->data['state'] = $this->state;
        $this->data['lg'] = $this->lg;
        $this->data['phone'] = $this->phone;
        $this->data['alternate_email'] = $this->alternate_email;
        $this->data['homeaddress'] = $this->homeaddress;
        $this->data['experience'] = $this->experience;
        $this->data['file'] = $this->image;
        $this->data['type'] = $this->image_type;
        
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
    
    public function setImageType($t){
        $this->image_type = $t;
    }
    
    public function getData() {
        return $this->data;
    }

    public function setData($data) {
        $this->data = $data;
    }

    public function getSurname() {
        return $this->surname;
    }

    public function setSurname($surname) {
        $this->surname = $surname;
    }

    public function getFirst_name() {
        return $this->first_name;
    }

    public function setFirst_name($first_name) {
        $this->first_name = $first_name;
    }

    public function getMiddle_name() {
        return $this->middle_name;
    }

    public function setMiddle_name($middle_name) {
        $this->middle_name = $middle_name;
    }

    public function getReligion() {
        return $this->religion;
    }

    public function setReligion($religion) {
        $this->religion = $religion;
    }

    public function getSex() {
        return $this->sex;
    }

    public function setSex($sex) {
        $this->sex = $sex;
    }

    public function getDob() {
        return $this->dob;
    }

    public function setDob($dob) {
        $this->dob = $dob;
    }

    public function getUniversity() {
        return $this->university;
    }

    public function setUniversity($university) {
        $this->university = $university;
    }

    public function getState() {
        return $this->state;
    }

    public function setState($state) {
        $this->state = $state;
    }

    public function getLg() {
        return $this->lg;
    }

    public function setLg($lg) {
        $this->lg = $lg;
    }

    public function getPhone() {
        return $this->phone;
    }

    public function setPhone($phone) {
        $this->phone = $phone;
    }

    public function getAlternate_email() {
        return $this->alternate_email;
    }

    public function setAlternate_email($alternate_email) {
        $this->alternate_email = $alternate_email;
    }

    public function getHomeaddress() {
        return $this->homeaddress;
    }

    public function setHomeaddress($homeaddress) {
        $this->homeaddress = $homeaddress;
    }

    public function getExperience() {
        return $this->experience;
    }

    public function setExperience($experience) {
        $this->experience = $experience;
    }

    public function getImage() {
        return $this->image;
    }

    public function setImage($image) {
        $this->image = $image;
    }

    public function getResponse(){
        return $this->response;
    }
}
?>
