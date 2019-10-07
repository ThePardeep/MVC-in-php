<?php 

class View {
    protected $pageReq = '';
    protected $data = '';
    protected $opt_data = " ";

    public function __construct($page) {
             $this->pageReq = $page;
    }
    
    public function SetPage($page) {
      $this->pageReq = $page;
    }

    public function view(){

        //echo $this->pageReq;
        if($this->pageReq === Home){
          $result=$this->data;
          $opt_data = $this->opt_data;
           require('App/View/HomePage.php');
          }
        else {
          $result =$this->data;
            $opt_data = $this->opt_data;
            if(file_exists('App/View/'.$this->pageReq.'.php')){
            require('App/View/'.$this->pageReq.'.php');
            } elseif( $this->pageReq === 'adminlogin') {
              require('App/View/Admin/'.$this->pageReq.'.php');
            } elseif($this->pageReq === 'dashboard') {
              require('App/View/Admin/'.$this->pageReq.'.php');
            } elseif($this->pageReq === 'insertpost') {
              require('App/View/Admin/'.$this->pageReq.'.php');
            } elseif($this->pageReq === 'deletepost') {
              require('App/View/Admin/'.$this->pageReq.'.php');
            } elseif($this->pageReq === 'updatepost') {
              require('App/View/Admin/'.$this->pageReq.'.php');
            } elseif($this->pageReq === 'adminallposts') {
              require('App/View/Admin/'.$this->pageReq.'.php');
            }
            else {
              $result = $this->data;
              $opt_data = $this->opt_data;
              require('App/View/posterror.php');
            }

        }
    }
    
    public function PageData($data,$opt_data=0){
      $this->data = $data;
      $this->opt_data = $opt_data;
    }
    
}
?>