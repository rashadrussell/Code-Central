
<?php
/*
define('HOSTNAME' , 'localhost');
define('USERNAME' , 'root');
define('PASSWORD' , '');
define('DATABASENAME' ,'cde_Central');
*/
?>


<?php
    class Database {
        
        private $db_host;
        private $db_user;
        private $db_pass;
        private $db_name;
        
        function __contruct($db_host, $db_user, $db_pass=NULL, $db_name) {
            
            $this->db_host = $db_host;
            $this->db_user = $db_user;
            $this->db_pass = $db_pass;
            $this->db_name = $db_name;
            
            $this->connect();
            
        }
        
        public function connect() {
            
            $this->openConnection();
            $this->selectDatabase();
                
        }
        
        public function openConnection() {
            
            $this->db_connection = mysql_connect($this->db_host, $this->db_user, $this->db_pass) or die('Database connection failure: ' . mysql_error());
            
        }
        
        public function selectDatabase() {
            
            $this->db_selection = mysql_select_db($this->db_name) or die('Database selection failure: ' . mysql_error());
            
        }
        
        public function query($query) {
            
            $this->result = mysql_query($query) or die('Unable to run query function: ' . mysql_error());
            return $this->result;
        
        }
        
        public function disconnect() {}
        public function insert() {}
        public function select() {}
        public function update() {}
        public function delete() {}
        
    } // End of Class
    
?>
