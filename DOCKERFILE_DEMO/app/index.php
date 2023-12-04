<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>



<form action="calc.php" method="POST">
    <input type="text" name="num1">
    <input type="text" name="num2">
    <select name="cal">
        <option value="add">Add</option>
        <option value="sub">Subtract</option>
        <option value="mul">Multiply</option>
    </select>
    <button type="submit">Calculate</button>
</form>










<!--Form
<form action="includes/calc.inc.php" method="post">
    <p>My own calculator!</p>
    <input type="number" name="num1" placeholder="First number">
    <select name="oper">
        <option value="add">Addition</option>
        <option value="sub">Subtraction</option>
        <option value="div">Division</option>
        <option value="mul">Multiplication</option>
    </select>
    <input type="number" name="num2" placeholder="Second number">
    <button type="submit" name="submit">Calculate</button>
</form>
-->









<?php


 // $person1 = new Person("Daniel", "Blue", 28);

/*
   try {
    $person1->setName("Daniel");
    echo $person1->getName(); 
   } catch (TypeError $e) {
    echo "Error!: " . $e->getMessage();
   }
*/



/* connects to person.inc.php*/
//echo "The drinking age in the US is: " . Person::$drinkingAge;
//echo "<br>";
//echo "The drinking age in Europe is: " . Person::setEuropeDrinkingAge(18);
//echo Person::$drinkingAge;


/* connects to newclass.inc.php*/
//$object = new NewClass; 
//echo $object->getProperty(); 


    /* linked to person.inc.php */
    //    $person1 = new Person("Daniel", "Blue", 28);
    //    echo $person1->getName(); 


?>


</body>
</html>