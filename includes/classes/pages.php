<?php
require_once('cdeC_db.php');
require_cdeC_db();

    class Pages {
        
        private $id;
        private $title;
        private $body;
        private $linkTitle;
        
        public function __construct($id, $title, $body, $linkTitle) {
            $this->id    = $id;
            $this->title = $title;
            $this->body  = $body;
            $this->linkTitle = $linkTitle;
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
        
        public function setTitle($title) {
            $this->title = $title;
        }
        
        public function setBody($body) {
            $this->body  = $body;
        }
        
        public function setLinkTitle() {
            $this->linkTitle = $linkTitle;
        }
        
       
    }

?>