<?php
 require_once('App/Model/Model.php');

class User {
     protected $DB = '';
    function __construct()
    {
        $this->DB = new Model();
    }
    
    public function Login($UserName,$Password)
    {
        $result = $this->DB->checkLogin($UserName,$Password);
        $result = mysqli_fetch_array($result);
        
        $_SESSION['userdata'] = $result;
        
        if(!empty($result['username']) and !empty($result['password'])) {
            return 200;
        } else {
            return 0;
        }
    }

    public function TitleAndId()
    {
        $query = 'SELECT post_id,post_title FROM allposts';
        $result = $this->DB->GetAllPosts($query);
        return $result;
    }

    public function AllDataForUpdation($id)
    {
        $query = "SELECT * FROM allposts WHERE post_id=$id";
        $result = $this->DB->GetAllPosts($query);
        return $result;
    }

    public function UpdatePost($ID,$PT,$PD,$PK,$PC,$PB,$PA)
    {
        $PT = htmlentities($PT);
        $PD = htmlentities($PD);
        $PK = htmlentities($PK);
        $PC = htmlentities($PC);
        $PB = htmlentities($PB);
        $PA = htmlentities($PA);
        $ID = htmlentities($ID);
        $this->DB->UpdatePost($ID,$PT,$PD,$PK,$PC,$PB,$PA);
    }
     
    public function DeletePost($PID){
        $query = "DELETE FROM allposts WHERE post_id=$PID";
        $this->DB->DeletePost($query);
    }

    public function RecentPost(){
        $query = 'SELECT post_title FROM allposts';
        $posts_recent = $this->DB->GetAllPosts($query);
        //$posts_recent = mysql_fetch_array($posts_recent);
        return $posts_recent;
    }
    public function NewPost($PT,$PD,$PK,$PC,$PB,$PA) {
        $PT = htmlentities($PT);
        $PD = htmlentities($PD);
        $PK = htmlentities($PK);
        $PC = htmlentities($PC);
        $PB = htmlentities($PB);
        $PA = htmlentities($PA);
        $this->DB->InsertPost($PT,$PD,$PK,$PC,$PB,$PA);
        
    }
}


?>