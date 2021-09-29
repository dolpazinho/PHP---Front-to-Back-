<?php

class Person {
   private $name;
   private  $email;

    public function __construct($name, $email)
    {
        $this->name = $name;
        $this->email = $email;
     echo __CLASS__. ' '. 'created <br>';
   }

    public function __destruct()
    {
        echo __CLASS__. ' '. 'destroyed <br>';
    }

   public function setName($name){
       $this->name = $name;
   }

   public function getName(){
       return $this->name. '<br>';
   }

    public function setEmail($email){
        $this->name = $email;
    }

    public function getEmail(){
        return $this->email. '<br>';
    }
}

// $person1 = new Person('Olasunkanmi Ade', 'Dolpaz@gmail.com');
// echo $person1->getName();
// $person1->setName('Dolpaz');
// echo $person1->getName();
// $person1 ->name = 'Olasunkanmi Adeniji';

// echo $person1->name;

class Customer extends Person {
    private $balance;

    public function __construct($name, $email, $balance)
    {
        parent::__construct($name, $email);
        $this->balance = $balance;
        echo 'A new '. __CLASS__.' '. 'has been created'. '<br>';
    }

    public function setBalance($balance){
        $this->balance = $balance;
    }

    public function getBalance(){
        return $this->balance. '<br>';
    }
}


// $customer1 = new Customer('Olasunkanmi Adeniji', 'Dolpaz11@gmail.com', 3000);

// echo $customer1->getBalance();