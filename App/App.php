<?php
require('App/lib/Controller.php');
class App {
     
    protected $Controller;
    protected $Request = '';
    protected $Parameters = [];
    
    public function  __construct($req) {
              $req = trim($req,"/");
            $this->Request = $req;
           // echo $this->Request;
           // var_dump($this->Request);
          $this->FilterURL();
    }
    public function FilterURL() {
       
        $url = explode('/',$this->Request);
        $this->Parameters =$url;
        //echo $this->Parameters[0];
    }

    public function GetResponse() {
        
        $this->Controller = new Controller($this->Parameters[0],$this->Parameters);
        $this->Controller->GetViewAndData();
    }
    public function DefPage($dp) {
        $this->Controller = new Controller($dp,$this->Parameters);
        $this->Controller->GetViewAndData();
    }
}

?>