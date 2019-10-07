<?php 
require_once('App/Constants/Constants.php');
class Model {
    
     public function GetAllPosts($query){
         $conn = $this->DbConnect();
          $result = mysqli_query($conn,$query);
         // $result = mysqli_fetch_all($result,MYSQLI_ASSOC);
         $this->CloseConnection($conn);
         return $result;        
    }

    private function DbConnect(){
          $conn = mysqli_connect(Db_HOST,Db_USERNAME,Db_PASSWORD,Db_NAME);
       // $conn = mysqli_connect("localhost","root","","posts");
          return $conn;
    }
    
    private function CloseConnection($conn) {
           mysqli_close($conn);
    }

    public function InsertPost($PT,$PD,$PK,$PC,$PB,$PA)
    {
        $conn = $this->DbConnect();
        $PT = mysqli_real_escape_string($conn,$PT);
        $PD = mysqli_real_escape_string($conn,$PD);
        $PK = mysqli_real_escape_string($conn,$PK);
        $PC = mysqli_real_escape_string($conn,$PC);
        $PB = mysqli_real_escape_string($conn,$PB);
        $PA = mysqli_real_escape_string($conn,$PA);
        $query = "INSERT INTO allposts ( post_author,post_title,post_content,post_categories,post_body,post_keyword ) VALUES( '$PA','$PT','$PB','$PC','$PD','$PK') ";
        mysqli_query($conn,$query);
        //echo mysqli_error($conn);
        $this->CloseConnection($conn);
      
    }

    public function checkLogin($username,$password) {
        $conn = $this->DbConnect();
        $username = mysqli_real_escape_string($conn,$username);
        $password = mysqli_real_escape_string($conn,$password);
        $query = "SELECT * FROM users WHERE username='$username' and password= '$password'";
        $result = mysqli_query($conn,$query);
        $this->CloseConnection($conn);
        return $result;
    }

    public function RecentPost($query){
        $conn = $this->DbConnect();
        $result = mysqli_query($conn,$query);
        $this->CloseConnection($conn);
        return $result;
    }

    public function DeletePost($query){
        $conn = $this->DbConnect();
         $result = mysqli_query($conn,$query);
        // $result = mysqli_fetch_all($result,MYSQLI_ASSOC);
        $this->CloseConnection($conn);
        return $result;        
   }

   public function UpdatePost($ID,$PT,$PD,$PK,$PC,$PB,$PA)
   {
    
    $conn = $this->DbConnect();
    $ID = mysqli_real_escape_string($conn,$ID);
    $PT = mysqli_real_escape_string($conn,$PT);
    $PD = mysqli_real_escape_string($conn,$PD);
    $PK = mysqli_real_escape_string($conn,$PK);
    $PC = mysqli_real_escape_string($conn,$PC);
    $PB = mysqli_real_escape_string($conn,$PB);
    $PA = mysqli_real_escape_string($conn,$PA);
    $query = "UPDATE allposts SET  post_author='$PA',post_title='$PT',post_content='$PB',post_categories='$PC',post_body='$PD',post_keyword='$PK' WHERE post_id='$ID'";
    mysqli_query($conn,$query);
    $this->CloseConnection($conn);

   }
}

?>