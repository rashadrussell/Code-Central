<?php
    class Post {
        
        private $id;
        private $title;
        private $author;
        private $date;
        
        public function __construct($id, $title, $author, $date) {
            $this->id = $id;
            $this->title = $title;
            $this->author = $author;
            $this->date = $date;
        }
        
/*---------------------------------------------*/
        
        public function getPostId()
        {
            return $this->id;
        }
        
/*---------------------------------------------*/
        
        public function getTitle()
        {
            return $this->title;
        }
        
/*---------------------------------------------*/
        
        public function getAuthor()
        {
            return $this->author;
        }
        
/*---------------------------------------------*/ 
        
        public function getPostDate()
        {
            return $this->date;
        }
        
/*---------------------------------------------*/
        
        public function setTitle($title)
        {
            $this->title = $title;
        }
        
/*---------------------------------------------*/
        
        public function setAuthor($author)
        {
            $this->title = $author;
        }
        
/*---------------------------------------------*/
        
        
        
        
        
    }



?>