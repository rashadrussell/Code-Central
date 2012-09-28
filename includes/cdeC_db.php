<?php
require_once(dirname(__DIR__) . '/' . 'config/' . 'config.php');

    class Database {
        
        private $db_host;
        private $db_user;
        private $db_pass;
        private $db_name;
        
        public function __construct($db_host, $db_user, $db_pass, $db_name) {
            
            $this->db_host = $db_host;
            $this->db_user = $db_user;
            $this->db_pass = $db_pass;
            $this->db_name = $db_name;
            
            $this->connect();
            
        }
        
        public function connect() {
            
            //Open the database connection
	    $this->openConnection();
	 
	    //Select the database
	    $this->selectDatabase();
        }
        
        public function openConnection() {
            
            $this->connection = mysql_connect($this->db_host, $this->db_user, $this->db_pass) or die(mysql_error());
        }
        
        public function selectDatabase() {
            
            $this->selection = mysql_select_db($this->db_name) or die(mysql_error());
        }
        
        public function query($query)
	{
		
		//Run the query and return the result
		$this->result = mysql_query($query) or die(mysql_error());
		return $this->result;
		
	}
        
        public function disconnect() {}
        public function insert() {}
        public function select() {}
        public function update() {}
        public function delete() {}
        
    } // End of Class
    
    function require_cdeC_db() {
        global $cdeCdb;
        
        $cdeCdb = new Database(HOSTNAME, USERNAME, PASSWORD, DATABASENAME);
    }
    
?>
