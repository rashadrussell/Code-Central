<?php
require_once('cdeC_db.php');
require_cdeC_db();

    class User {
        private $id;
        private $firstname;
        private $lastname;
        private $email;
        private $country;
        private $website;
        private $bio;
        private $date;  // Date of registration
        
        public function __construct() { //$id, $firstname, $lastname, $email, $country, $website, $bio, $date) {
            /*
            $this->id        = $id;
            $this->firstname = $firstname;
            $this->lastname  = $lastname;
            $this->email     = $email;
            $this->country   = $country;
            $this->website   = $website;
            $this->bio       = $bio;
            $this->date      = $date;
            */
        }
        
        public function getFirstname()
        {
            
            return $this->firstname;
        }
        
        public function getLastName()
        {
            
            return $this->lastname;
        }
        
        public function getEmail()
        {
            
            return $this->email;
        }
        
        public function getCountry()
        {
            
            return $this->country;
        }
        
        public function getWebsite()
        {
            
            return $this->website;
        }
        
        public function getBio()
        {
            
            return $this->bio;
        }
        
        public function getDate()
        {
            
            return $this->date;
        }
        
        public function signup($firstname, $lastname, $email, $password, $country, $website) {
            global $cdeCdb;
            
            $firstname = stripslashes($firstname);
            $lastname  = stripslashes($lastname);
            $email     = stripslashes($email);
            $password  = stripslashes($password);
            $country   = stripslashes($country);
            $website   = stripslashes($website);

            $firstname = mysql_real_escape_string($firstname);
            $lastname  = mysql_real_escape_string($lastname);
            $email     = mysql_real_escape_string($email);
            $password  = mysql_real_escape_string($password);
            $country   = mysql_real_escape_string($country);
            $website   = mysql_real_escape_string($website);
            
            $password = md5($password);
            
            $sql = $cdeCdb->query("INSERT INTO users (firstname, lastname, email, password, country, website)
                            VALUES ('$firstname', '$lastname', '$email', '$password', '$country', '$website')");
            
            if($sql) {
                return true;
            } else {
                return false;
            }
        }
        
        public function login($email, $password) {
            global $cdeCdb;
            
            $email    = addslashes($email);
            $password = addslashes($password);

            $email    = mysql_real_escape_string($email);
            $password = mysql_real_escape_string($password);
            
            $password = md5($password);

            $sql = $cdeCdb->query("SELECT * FROM users WHERE email='$email' AND password='$password'");

            $count = mysql_num_rows($sql);
            
            if($count == 1) {
    
                $userInfo = mysql_fetch_array($sql);
                
                $_SESSION['id']      = $userInfo[id];
                $_SESSION['name']    = $userInfo[firstname] . ' ' . $userInfo[lastname];
                $_SESSION['email']   = $userInfo[email];
                $_SESSION['bio']     = $userInfo[bio];
                $_SESSION['country'] = $userInfo[country];
                $_SESSION['website'] = $userInfo[website];
                
                return $_SESSION['login'] = true;
                
            } else {
                
                return $_SESSION['login'] = false;
            }
        }
        
        public function sendMessage() {}
        public function getFriends() {}
        public function deleteAccount() {}
        
        
    }

?>