<?php
require_once('cdeC_db.php');
require_cdeC_db();

    class Pages {
        
        private $id;
        private $title;
        private $body;
        private $linkTitle;
        
        public function __construct() {//$id, $title, $body, $linkTitle) {
            /*
            $this->id    = $id;
            $this->title = $title;
            $this->body  = $body;
            $this->linkTitle = $linkTitle;
            */
        }
        
        public function getId() {
            return $this->id;
        }
        
        public function getTitle() {
            return $this->title;
        }
        
        public function getBody() {
            return $this->body;
        }
        
        public function getLinkTitle() {
            return $this->linkTitle;
        }
        
        public function addNewPage($title, $linkTitle, $body) {
            global $cdeCdb;
            
            $title     = addslashes($title);
            $linkTitle = addslashes($linkTitle);
            $body      = addslashes($body);
            
            $title     = mysql_real_escape_string($title);
            $linkTitle = mysql_real_escape_string($linkTitle);
            $body      = mysql_real_escape_string($body);


            $sql = $cdeCdb->query("INSERT INTO pages (title, linkTitle, body)
                            VALUES ('$title', '$linkTitle', '$body')");
            
            if($sql) {
                return true;
            } else {
                return false;
            }
        }
        
        
       
    }

?>