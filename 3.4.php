<?php
    /*class User{
        public $name='User';
        public $email;
        public function __construct($name, $email)
        {
            $this->name=$name;
            $this->email=$email;
        }

        public function getName(){
            return $this->name;
        }
        public function getEmail(){
            return $this->email;
        }
        public  function setName($name){
            $this->name=$name;
        }
        public  function setEmail($email){
            $this->email=$email;
        }
        public function __destruct()
        {
            echo 'Удаляем объукт';
            // TODO: Implement __destruct() method.
        }
    }
    $user=new User('Ivan','afa@mil.com');
    echo $user->name.'<br>';
    echo $user->email.'<br>';
    echo $user->getName().'<br>';
    echo $user->getEmail().'<br>';
    $user->setName('Menahem').'<br>';
    $user->setEmail('Menahem@fd.ru').'<br>';
    echo $user->name.'<br>';
    //unset($user);
    echo $user->email.'<br>';*/
    class Point{
        public $x;
        public $y;
        public function __construct($x,$y)
        {
            $this->x=$x;
            $this->y=$y;
        }
        public function getx(){
            return $this->x;
        }
        public function gety(){
            return $this->y;
        }
        public function setx($x){
            $this->x=$x;
        }
        public function sety($y){
            $this->y=$y;
        }
    }
    $user=new Point('5','3');
    echo $user->x.'<br>';
    echo $user->y.'<br>';
    echo $user->getx().'<br>';
    echo $user->gety().'<br>';
    $user->setx(6);
    $user->sety(8);
    echo $user->x.'<br>';
    echo $user->y.'<br>';
?>
