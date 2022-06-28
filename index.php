<?php 
//how to create a associative array 
//  $froot = array("sweetfroot" => "apply","litesweet" => "banana","malai" => "mango");
// print_r($key2);

// foreach($froot as $key => $value){
//     echo $key .' is ' . $value;
//     echo "<br>";
// }

// $length = count($froot);
// print_r($froot);

// $family['father'] = "ram dayal";
// $family['son'] = "pramod , vinod" ;
// $family['doughter'] = "suman, kiran" ;

// $length = count($family);

// echo $length;

// foreach ($family as $key=>$value){
//     echo $key . 'of' . $value;
//     echo "<br>" ;
// }



?>

<!-- <form action="index.php" methon="post">
    <input type="text" name = "message" >
    <input type="submit" name="btn" value="submit">
</form> -->
<?php 

// $message = $_GET['message'];
// echo $message;
// $rev = strrev($message);
// echo '<br>' . $rev;

// if($message == $rev){
//     echo '<br> submited data is palindrome ';
// }
// else {
//     echo " <br>it is not a palindrome number" ;
// }

/*-----------------------------------------------------------------------------*/

// without strrev function used 
// $num = 4321;
// $rev = 0 ;

// while($num > 0 ){
//     $reminder = ($num % 10);
//     $rev = ($rev * 10) + $reminder ; // ( 0 *10 + 1 ) = 1
//     $num = (int)($num / 10) ; 
// }

// echo $rev;

// $message = $_GET['message'];
// echo $message;
// $flag = 0 ;
// for($i = 2; $i<$message; $i++){
//     if($message % $i == 0 ){
//         $flag = 1 ; 
//         break;
//     }
// }

// if($flag == 1 ){
//     echo "Not Prime" ;

// }

// else {
//     echo "Prime";
// }

?>

<!-- <form action = "index.php" methon = "post">
    <input type="number" name="num">
    <button type="submit" value = "submit"> Button </button>
</form> -->

<?php 
// $num = $_GET['num'];
// echo "<br> Entered number is ".$num;

// $rev = 0;

// while($num > 0 ){
//     $reminder = ($num % 10 );
//     $rev = ($rev *10 ) + $reminder;
//     $num = (int)($num / 10) ; 

// }

// echo "<br>".$rev ; 


// if($num == $rev ){
//     echo "The entered number is Palindrome";
// }
// else{
//     echo "The entered number is not Palindrome";
// }








/*-----------------------------------------------------------*/
// $rev = strrev($num);
// echo $rev;

// if($num == $rev ){
//     echo "The entered number is palindrome";

// }
// else {
//     echo "Entered number is not palindrome number";
// }

/*-----------------------------------------------------------*/
// $rev = 0 ; 
// while ($num > 0 ){
//     $reminder = ($num % 10);
//     $rev  =  ($rev * 10 ) + $reminder ;
//     $num = (int)($num / 10) ; 
// }
// echo $rev;

// $flag = 0 ; 
// for($i=2; $i<$num ; $i++){
//     if($num % $i == 0){
//         $flag = 1 ;
//         break;
//     }
// }
// if($flag==1){
//     echo "NOT Prime";
// }
// else {
//     echo "Prime" ;
// }


/*-----------------------------------------------------------*/

// function Palindrome_num($input){
//     $number = $input;
//     $sum = 0;
//     while(floor($number)){
//         $reminder = ($number % 10 );
//         $sum = ($sum *10 ) + $reminder; 
//         $number = $number / 10 ; 

//     }
//     if($sum == $input){
//         return true; 
//     }
//     else {
//          return false;
//     }

// }

// $input_number = 1234567;
// $result = Palindrome_num($input_number);
// if($result){
//     echo "<br>"." $input_number is a Palindrome"; 
// }
// else{
//     echo "<br>"."$input_number is not a Palindrome";  //if not equal show $input is not a palindrome number
// }
 

/*-----------------------------------------------------------*/

// echo check_prime(14);
// function check_prime($message){
//     $flag = 0 ;
//     for($i = 2; $i<$message; $i++){
//         if($message % $i == 0 ){
//             $flag = 1 ; 
//             break;
//         }
//     }

//     if($flag == 1 ){
//         return "Not Prime" ;

//     }

//     else {
//         return "Prime";
//     }

// }


// ?>
<?php 

// if(isset($_FILES['image'])){
//     // echo "<pre>";
//     // print_r($_FILES);
//     // echo "<pre>";
//     $file_name = $_FILES['image']['name'];
//     $file_type = $_FILES['image']['type'];
//     $file_size = $_FILES['image']['size'];
//     $file_tmp = $_FILES['image']['tmp_name'];

//     move_uploaded_file($file_tmp,"images/".$file_name);
    
// }
?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>file uploaded </title>
</head>
<body>

     <form action = "index.php" method= "post" enctype="multipart/form-data">
        <input type="file" name = "image">
        <input type="submit">
</form>
    
</body>
</html> -->

<!-- /*--------------------------factroial ---------------------------------*/ -->

<?php 
// $num = 5;
// $factorial = 1 ; 
// for($i=$num; $i>=1; $i--){
//     $factorial = $i * $factorial; 
// }

// echo $factorial;

/*-----------------------------------------------------------*/

// $n1 = 0;
// $n2 = 1;
// $num = 0;

// echo $n1.' '.$n2;
// while($num < 10 ){
//     $n3 = $n1 + $n2;
//     echo $n3;
//     $n1 = $n2;
//     $n2 = $n3;
//     $num = $num + 1;
// }

// function Fibonacci($n){
//     $num1=0;
//     $num2=1;
//     $counter = 0 ;
//     while( $counter < $n){
//         echo ''.$num1;
//         $num3 = $num2 + $num1;
//         $num1 = $num2;
//         $num2 = $num3;
//         $counter = $counter + 1;

//     }
// }

// $n = 12;
// Fibonacci($n);


    // $size = 2;
    
    // for ($i = 1; $i <= $size; $i++) {
    //     for ($j = 0; $j < $size - $i; $j++) {
    //         echo "&nbsp;&nbsp;";
    //     }
    //     for ($k = 0; $k < $i; $k++) {
    //         echo "*";
    //     }
    //     echo "<br>";
    // }
    // for ($i = 1; $i <= $size - 1; $i++) {         //*
                                                    // **
                                                    // *
    //     for ($j = 0; $j < $i; $j++) {
    //         echo "&nbsp;&nbsp;";
    //     }
    //     for ($k = 0; $k < $size - $i; $k++) {
    //         echo "*";
    //     }
    //     echo "<br/>";
    // }


    // for($i = 6 ; $i > 1; $i--){   
    //     for($j = 1; $j<$i ; $j++){
    //         echo " * ";
    //     }
    //     echo "<br>";
    // }

    // echo "<hr>";

    // for($i=1; $i<6; $i++){
    //     for($j=0; $j<$i ; $j++){
    //         echo " * ";

    //     }

    //     echo "<br>";
    // }

//   $n = 4;
//    for($i=1; $i<=$n; $i++){
//         for($j=1; $j<=(2*$n)-1; $j++){
//             if($j>= $n - ($i-1) && $j <= $n+($i-1)){
//                 echo "*";            
//             }
//             echo "&nbsp;&nbsp;";
//         }
//         echo "<br>";
//    }

// $str = "pramodkumar";
// $count = strlen($str);
// for($i = 0 ; $i < $count; $i++){
//     for($j = 0; $j< $i ; $j++){
//         echo $str[$j];
//     }
//     echo " <br>";
// }

// p
// pr
// pra
// pram
// pramo
// pramod
// pramodk
// pramodku
// pramodkum
// pramodkuma

// $n =6;
// for($i = 1; $i < $n ; $i++){
//     for($j = 1; $j<=(2*$n)-1; $j++){
//         if($j>=$n-(2*$i)-1 && $j<=$n-(2*$i)+1){

//             echo "*";


//         }
//         echo "&nbsp;&nbsp";
        
//     }
//     echo "<br>";

// }
?>

 <!-- *
    * * *
  * * * * *
* * * * * * * -->

<form action = "index.php" method= "post">
   <input type="text" name="value">
   <input type= "submit" name="submit">
</form>

<?php 

// if(isset($_POST['submit'])){
//     $num = $_POST['num'];
//     $fact = 1; 
//     function factroial_Num($num){
//         global $fact;
//         for($i=$num; $i>=1; $i--){
//              $fact = $i * $fact; 
//         }
//         return $fact;
//     }
// $fact = factroial_Num($num);
// echo $fact;

// }   factorial program using function 

// if(isset($_POST['submit'])){
//     $num = $_POST['num'];
//     $fact = 1 ;
//     function Factorial_digit($num){
//         for($i = $num ; $i>=1; $i--){
//             global $fact; 
//             $fact = $i * $fact; 
//         }
//         return $fact;
//     }
// }

// $factorial = Factorial_digit($num);
// echo $factorial; 


// if(isset($_POST['submit'])){
//     $number = $_POST['num'];
//     $fact = 1; 
//     for($i = $number ; $i >= 1 ; $i--){
//         $fact = $i * $fact; 

//     }
//     echo $fact;
// }                without function 


if(isset($_POST['submit'])){
    $value = $_POST['value'];
    // $fact =1;
    // function factorial_program($value){
    //     global $fact;
    //     for($i = $value ; $i>=1; $i--){
    //         $fact = $i * $fact ; 
    //     }
    //     return $fact ;
    // }
    // $factorial = factorial_program($value);
    // echo $factorial;
    // $rev = 0 ; 
    // while ($value!= 0 ){
    //     $reminder = ($value %10) ;
    //     $reverse = ($rev * 10 )+ $reminder;
    //     $value = (int)$value / 10 ; 
    // }
    // echo $reverse;
    // if($value == $reverse ){
    //     echo "  it is palindrome ";
    // }

    // else {
    //     echo "No is not palindrome";
    // }
 

    // Logic: Initialize first and second number as 0 and 1 Print the first and second number third number will be sum of first and second Fourth number will sum of second and third and so on


    // $first_number = 0 ; 
    // $second_number = 1 ;
    // $num = 0 ; 
    // while ($num < $value ){
    //     echo ' '.$first_number;
    //     $third = $first_number + $second_number ; 
    //     $first_number = $second_number ;
    //     $second_number = $third; 
    //     $num = $num + 1;
    // }

    // $n1 = 0 ; 
    // $n2 = 1 ; 
    // $num = 0 ; 
    
    // while ($num < $value ){
    //     echo ' '.$n1 ;
    //     $n3 = $n2 + $n1 ; 
    //     $n1 = $n2 ; 
    //     $n2 = $n3;
    //     $num = $num + 1; 

    // }

    // $flag = 0 ;
    // for($i = 2 ; $i <=($value/2) ; $i ++ ){
    //     if($value % $i == 0 ){
    //        $flag = 1 ;
    //        break;
    //     }
    // }
    // if($flag == 0){
    //     echo "no is prime ";
    // }
    // else {
    //     echo " no is not prime ";
    // }


    // $flag = 0 ; 
    // for($i = 2 ; $i <= ($value/2); $i++){
    //     if($value%$i == 0 ){
    //         $flag = 1 ;
    //         break; 
    //     }
    // }

    // if($flag == 1 ){
    //     echo " $value is not a prime ";

    // }
    // else {
    //     echo "$value is a prime ";
    // }

    // $a = 10 ; 
    // $b = 5 ; 

    // $a = $a + $b ;
    // $b = $a - $b ;
    // echo "the value of b : $b" ; 
    // echo "<br>";

    // $a = $a - $b ;
    // echo "THe value of a : $a " ;





}



?>