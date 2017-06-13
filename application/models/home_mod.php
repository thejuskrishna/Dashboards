<?php
class home_mod extends CI_Model
{
	   function __construct() 
    {
        parent::__construct();
        $this->load->database();
        
    }
   
  
    public function createdb($data)
   {
     $this->db->insert('data_base', $data);

   }
   public function table_delete($dynamicDB,$table)
    {
      $dynamicDB = $this->load->database($dynamicDB, TRUE);      
      $this->myforge = $this->load->dbforge($dynamicDB, TRUE);
      if($this->myforge)
      {
        echo "hello";
      }
      /*$fields = array(
        'blog_id' => array('type' => 'INT','constraint' => 5,'unsigned' => TRUE),
        'blog_title' => array('type' => 'VARCHAR','constraint' => '100','unique' => TRUE),
        'blog_author' => array('type' =>'VARCHAR','constraint' => '100','default' => 'King of Town'),
        'blog_description' => array('type' => 'TEXT','null' => TRUE 
        );
      $this->myforge->add_field($fields);*/
      $this->myforge->drop_table($table);
    }
    public function field_delete($dynamicDB,$table,$field)
    {
      //echo "db".$dynamicDB['database'];
      $dynamicDB = $this->load->database($dynamicDB, TRUE);      
      $this->myforge = $this->load->dbforge($dynamicDB, TRUE);
      
      $this->myforge->drop_column($table,$field);
    }
    public function database_delete($dynamicDB,$data_base)
    {
      $dynamicDB = $this->load->database($dynamicDB, TRUE);      
      $this->myforge = $this->load->dbforge($dynamicDB, TRUE);
      $this->myforge->drop_database($data_base);
    }


    public function field_add($dynamicDB,$table,$field)
    {
      $dynamicDB = $this->load->database($dynamicDB, TRUE);      
      $this->myforge = $this->load->dbforge($dynamicDB, TRUE);
      
      $this->myforge->add_column($table,$field);
    }


    
    public function viewdb($username)
   {
     $res=$this->db->query('SELECT * FROM data_base WHERE user =\''.$username.'\'');
     return $res->result();

   }
   public function deletedb($id,$username)
   {
     $this->db->query('DELETE FROM data_base WHERE id = \'' .$id.'\'AND user=\''.$username.'\'' );
   }
   public function getentry($id)
   {
      $res=$this->db->query('SELECT * FROM data_base WHERE id =\''.$id.'\'');
      return $res->row();
   }
  public function select($dynamicDB, $id) {
       $dynamicDB = $this->load->database($dynamicDB, TRUE);
       $tables = $dynamicDB->list_tables();
       $table_data = array();
  foreach ($tables as $table)
  {
      //echo $table."\r\n";
      $fields = $dynamicDB->list_fields($table);
      $table_data[$table]=$fields;
      
      

  }
  return $table_data;
  
 }
   public function test($id)
   {
       $dbinfo = $this->home_mod->getentry($id);
      
      
     
      
      
      /*
      $db['another_db']['hostname'] = 'localhost';
      $db['another_db']['username'] = 'root';
      $db['another_db']['password'] = '';
      $db['another_db']['database'] = 'prorep';
      $db['another_db']['dbdriver'] = 'mysql';
      $db['another_db']['dbprefix'] = '';
      $db['another_db']['pconnect'] = TRUE;
      $db['another_db']['db_debug'] = TRUE;
      $db['another_db']['cache_on'] = FALSE;
      $db['another_db']['cachedir'] = '';
      $db['another_db']['char_set'] = 'utf8';
      $db['another_db']['dbcollat'] = 'utf8_general_ci';
      $db['another_db']['swap_pre'] = '';
      $db['another_db']['autoinit'] = TRUE;
      $db['another_db']['stricton'] = FALSE;
      
      $another_db = $this->load->database('another_db', TRUE);
      //if(!$this->load->database($config))*/
      $this->load->database();
      $this->db->hostname = 'localhost';
    $this->db->username = 'root';
    $this->db->password = '';
    
    $this->db->dbprefix = '';
    $this->db->pconnect = FALSE;
    $this->db->db_debug = TRUE;
    $dsn = 'mysqli://root:@localhost/prorep';
    $db1=$this->load->database($dsn);
    
    //$res=$this->db->query('SELECT * FROM student WHERE id =\'123\'');
    //echo $this->db->database;
    $query = $db1->get('student');
  echo $this->db->database;
    
    $this->db->database = 'prorep';
    $this->load->database();
    echo $this->db->database;
        echo 'succe';

      //$res=$this->db1->query('SELECT * FROM student WHERE id =\'123\'');
      return $res->row();
   }
   
   
}
?>
