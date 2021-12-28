<?php 

//classes

class User {

    public $email;
    public $name;

    public function __construct($name,$email){
	    // $this->name = 'mario';
		// $this->email = 'mario@thenetninja.co.uk';
        $this->name = $name;
		$this->email = $email;
    }

    public function login(){

        // echo 'user has logged in';
        echo $this->name . 'logged in';
    }
}

// $userOne = new User();

// $userOne->login();

// echo $userOne->name;
// echo $userOne->email;

$userTwo = new User('shengo','bekashengelia@gmail.com');

// echo $userTwo->name;
// echo $userTwo->email;


 $userTwo->login();




?>




