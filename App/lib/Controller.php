<?php 
require('App/Model/Model.php');
require('App/lib/View.php');
class Controller {

    protected $db;
    protected $para=[];
    protected $view;
    protected $model;
    protected $Req;

   public function __construct($Req,$Recpara)
   {
       $this->view = new View($Req);
       $this->para = $Recpara;
       $this->Req = $Req;
   }
              
   public function GetViewAndData() {
       if($this->Req === Home) {
        $query = 'SELECT * FROM allposts';
        $result = $this->GetData($query);
        $query = "SELECT post_title FROM allposts";
        $opt_data = $this->GetData($query);
        $this->view->PageData($result,$opt_data);
        $this->view -> view();
        }
        elseif(strtolower($this->Req) === 'post') {
            // var_dump($this->para);
            if(isset($this->para[1])){
            $postres = str_replace('-', ' ',$this->para[1]);
             $query = "SELECT * FROM allposts WHERE post_title ="."'$postres'";
             $result = $this->GetData($query);
             $query = "SELECT post_title FROM allposts";
             $opt_data = $this->GetData($query);
             $checkdata = mysqli_fetch_array($result);
             if(empty($checkdata['post_title']))
             {
                $this->view->PageData("",$opt_data);
                $this->view->SetPage("posterror");
                $this->view -> view();
             }
             else {
                //  var_dump($result);
                $this->view->PageData($checkdata,$opt_data);
                $this->view->view();
             }
            }
            else {
                $query = "SELECT post_title FROM allposts";
                $opt_data = $this->GetData($query);
                $this->view->PageData("",$opt_data);
                $this->view->SetPage("posterror");
                $this->view -> view();
            }
        } elseif(strtolower($this->Req) === 'login'){
            $this->view->SetPage("adminlogin");
            $this->view->view();
        } elseif(strtolower($this->Req) === 'dashboard'){
            $this->view->SetPage("dashboard");
            $this->view->view();
        } elseif(strtolower($this->Req) === 'contactus'){
            $this->view->view();
        } elseif(strtolower($this->Req) === 'about'){
            $this->view->view();
        } elseif(strtolower($this->Req) === 'insertpost'){
            $this->view->SetPage("insertpost");
            $this->view->view();
        } elseif(strtolower($this->Req) === 'deletepost'){
            $this->view->SetPage("deletepost");
            $this->view->view();
        } elseif(strtolower($this->Req) === 'updatepost'){
            $this->view->SetPage("updatepost");
            $this->view->view();
        } elseif(strtolower($this->Req) === 'allposts'){
            $this->view->SetPage("adminallposts");
            $this->view->view();
        } elseif (strtolower($this->Req) === 'search'){
            $sr_qu =  $this->para[2];
            $filtered_sr_qu = substr($sr_qu,14);
            $filtered_sr_qu = str_replace('+', ' ',$filtered_sr_qu);
            $query = "SELECT * FROM allposts WHERE post_title LIKE '%$filtered_sr_qu%' OR post_content LIKE '%$filtered_sr_qu%'";
            $result = $this->GetData($query);
            $this->view->PageData($result);
            $this->view->view();
        } else {
            $query = "SELECT post_title FROM allposts";
            $opt_data = $this->GetData($query);
            $this->view->PageData("",$opt_data);
            $this->view->view();
        }
   }
   private function GetData($query) {
        $this->model = new Model();
       $result = $this->model-> GetAllPosts($query); 
       return $result;
   }
}
?>