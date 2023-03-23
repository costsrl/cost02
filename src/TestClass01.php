<?php
namespace Cost02;
class TestClass01 {
    public $name = "";
    public $surname = "";

    public function __construct(string $n, $sn){
        $this->name = $n;
        $this->surname = $sn;
    }

    public function getDetails(){
        return "CL01 Surname: ".$this->surname." - Name: ". $this->name ;
    }
}

?>