<?php


// // Array Example
// $myarray = array("Raja","Moahmed","Jawahar","Ismail");
// // print_r($myarray);
// echo $myarray[0];

// // Conditional Statements

// $user = "User";
// echo "<br>";

// if($user =="User"){
//     print("User is present");
// }else{
//     print("There is no User");
// }
// echo "<br>";

// // ForLoop Statements

// for($i=0;$i<10;$i++){
//     echo $i."<br>";
// }

// for($i=0;$i<sizeof($myarray);$i++){
//     echo $myarray[$i]."<br>";
// }

// foreach($myarray as $key => $value){
//     echo $key."<br>";
//     echo $value."<br>";
// }




if($_POST){
    $myarray = array("Raja","Rahul","Ram","Rathna");

    $isKnown = false;
foreach($myarray as $value){
    if($value == $_POST['name']){
        $isKnown = true;
    }
}
if($isKnown){
    echo " Hi there".$_POST['name'];
}
else{
    echo "I dont know you";
}
}
?>

<form method="post">

    <p>What is your name?</p>
    
    <p><input type="text" name="name"></p>
    
    <p><input type="submit" value="Submit"></p>


</form>