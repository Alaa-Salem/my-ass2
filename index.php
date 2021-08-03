<?php

#ex1
$names = ['ahmed', 'mohammed', 'hasan'];
$maximum = array_map('strlen',$names);
$longestString = $names[array_search(max($maximum), $maximum)];
echo " The longest name is ".$longestString;
echo "<hr>";



#ex2
$array = [5,9,12,4,2];
echo "Array before delete element:"."</br>";
print_r($array);
echo "<br>";
unset($array[2]);
echo "Array after delete element:"."</br>";
print_r($array);
echo "<br>";
$array= array_values($array);
echo "Array after reset the index"."</br>";
print_r($array);


//another answer to use  array_splice function
// var_dump($arr1);
// echo "<br>";
// array_splice($arr1, 1, 1); 
// var_dump($arr1)

;

echo "<hr>";



// #ex3
$salaries = [1234.5678,  3000 , 9012.2345 , 6452 , 3234.5678];
echo "Array before round the floats"."<br>";
print_r($salaries);
echo "<br>";

foreach($salaries as $values){
    $numbers[] = round($values ,0);

}
echo "Array after round the floats "."<br>";
print_r($numbers);


echo "<hr>";




#ex4 
$password = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
$password_generate = substr(str_shuffle($password), 0);
echo $password_generate;


//another answer to use  rand() function
// $comb = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
// $pass = array(); 
// $combLen = strlen($comb) - 1; 
// for ($i = 0; $i < 33; $i++) {
//      $n = rand(0, $combLen);
//      $pass[] = $comb[$n];
// }
// print(implode($pass)); 

echo "<hr>";


#ex5
$numbers = range(1, 10);
shuffle($numbers);
foreach ($numbers as $value) {
    echo "$value ";
}
echo "<hr>";



#ex6
$num =1234567.55;
$digits = intval($num);
$length = strlen($digits);
echo "The number of  Digits in a Number =  ".$length; 
echo "<hr>";


#ex7
$names = ['ahmed' , 'mohamed' , 'hasan'];



#ex8
$instructors = [
    'kareem fouad' => [
        'job' => 'backend developer',
        'track' => 'php',
    ],
    'ahmed bahnasy' => [
        'job' => 'frontend developer',
        'track' => 'angular',
    ],
    'ahmed nasr' => [
        'job' => 'backend developer',
        'track' => '.net',
    ],
];



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <!-- answer for ex7 -->
    <ul>
        <?php  foreach($names as $values){ ?>
            <?php echo " <li>$values</li>   " ?>
        <?php } ?>    
    </ul>


    <hr>
    


    <!-- answer for ex8 -->
    <ul>
        <?php $keys = array_keys($instructors); ?>
        <?php for($i = 0; $i < count($instructors); $i++) { ?>
            <?=  "<li>$keys[$i]</li>"  ?>
                <ul>
                    <?php foreach($instructors[$keys[$i]] as $key => $value) { ?>
                        <?= "<li> $key:  $value</li>" ?>
                    <?php } ?> 
                </ul>
        <?php } ?>  
    </ul>







    
</body>
</html>