<?php
include"inc/header.php";

?>
<?php
class person{
public $name="Tusto";
public $age;
public function personname(){
    echo "Person Name is:" .$this->name."<br/>";

}
public function personage(){
    echo "Person Age is:" .$this->age;
    } 
}
$personOne = new person;
// echo $personOne->name
$personOne->name="Tusto";
$personOne->personName();
$personOne->age="18";
// $personOne->personAge("18");
$personOne->personAge();
?>