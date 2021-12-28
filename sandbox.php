<?php 

//classes

class User {

    private $email;
    private $name;

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
    public function getName(){
        return $this->name;
    }
    public function setName($name){
        if(is_string($name) && strlen($name) > 1){
            $this->name = $name;
            echo "name has been updated to $name";
        } else {
            echo 'not a valid name';
        }
    }

}

// $userOne = new User();

// $userOne->login();

// echo $userOne->name;
// echo $userOne->email;

$userTwo = new User('shengo','bekashengelia@gmail.com');

//echo $userTwo->getName();

// $userTwo-> setName(50)
 echo $userTwo-> setName('ira');
 echo $userTwo-> getName();


// echo $userTwo->name;
// echo $userTwo->email;


 //$userTwo->login();

?>




