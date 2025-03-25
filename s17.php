<?php

// type of arrays

// single dimensional array

// $ar = ["php","r-p","wordpress"];
// // echo $ar[0];
// echo print_r($ar);

// 2) multipal dimensional array

// $ar = [
// ["He",100],
// ["php",200],
// ["wp",400],
// ["fa",600],

// ];
// echo $ar[3][1];



// jagged arry

// $ar = [
//     ["He",100,"dr",400],
//     ["php"],

    
//     ];

//     echo $ar[0][2];


// associative array


// $ar = [

//     "name" => "junaid",
//         "age" => 20,
//             "city" => "karachi"

// ];

// echo $ar ["name"];
// echo "<br>";
// echo var_dump($ar); 

// function based array

$ar = array(10,9,8,7,6,5,4);
sort ($ar);
foreach($ar as $n){
    echo $n . "<br>";
} 


?>