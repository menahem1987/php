<?php
    class User{
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
    echo $user->email.'<br>';

?>
