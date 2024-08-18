<?php


// this is single line comment
/**
 * 
 * multiple
 * line 
 * comment 
 * 
 */


// String Data Type
$name = "Ram" || "Shyam";

// Number (Integer, Float, Double ) Data Type 
$phone = 9824367788;

// Boolean Data Type 
$is_raining = true;

// Null Data Type 
$address = null;
$location;

// Empty String
$email = '';


// Array is complex data type in php 
// it contains multiple data 
// $array = [] || array();

//  Array are 3 types 
// 1. Idexed arrays 
$fruits = ['Apple', 'Mango', 'Lichhi'];
$vegetables = array('Carrot', "Patato", 'Tamoto');
// echo $fruits[1];


// 2. Associative arrays 
// key and valu 
$students = ['name'=>"Ram", 'email'=> 'ram@gmail.com','phone'=> 9824367788];
// echo $students['email'];

// 3. Multidimensional arrays 
// array inside array 

// syntax 
$numbers = [
    [2,4,6,8,10],
    [1,3,5,7,9]
];
echo $numbers[0][0];
echo "<br>";

$teachers = array(
    array('name'=>"nitan", 'email'=> 'nitan@gmail.com'),
    array('name'=>'pradip', 'email'=> 'pradip@gmail.com')
);
echo $teachers[1]['email'];

// Concatenation 
$data = $students['name'] . " | " . $students['email'] . " | " . $students['phone'];
// echo $data;

echo "<br>";
// for , while $ foreach 
// 1. for loop 
for($i = 0; $i < 10; $i++){
    echo $i . ",";
}

// white loop 
echo "<br>";
$n = 11;
while($n <= 20){
    echo  $n . ", ";
    $n++;
}


// foreach 
$students_list = [
    [
        "name" => "Emily Johnson",
        "age" => 15,
        "grade" => 10,
        "student_id" => "S20241001",
        "email" => "emily.johnson@email.com"
    ],
    [
        "name" => "Michael Smith",
        "age" => 17,
        "grade" => 12,
        "student_id" => "S20241002",
        "email" => "michael.smith@email.com"
    ],
    [
        "name" => "Sarah Williams",
        "age" => 16,
        "grade" => 11,
        "student_id" => "S20241003",
        "email" => "sarah.williams@email.com"
    ],
    [
        "name" => "David Brown",
        "age" => 14,
        "grade" => 9,
        "student_id" => "S20241004",
        "email" => "david.brown@email.com"
    ],
    [
        "name" => "Jessica Davis",
        "age" => 17,
        "grade" => 12,
        "student_id" => "S20241005",
        "email" => "jessica.davis@email.com"
    ],
    [
        "name" => "Joshua Miller",
        "age" => 15,
        "grade" => 10,
        "student_id" => "S20241006",
        "email" => "joshua.miller@email.com"
    ],
    [
        "name" => "Ashley Wilson",
        "age" => 16,
        "grade" => 11,
        "student_id" => "S20241007",
        "email" => "ashley.wilson@email.com"
    ],
    [
        "name" => "Matthew Moore",
        "age" => 14,
        "grade" => 9,
        "student_id" => "S20241008",
        "email" => "matthew.moore@email.com"
    ],
    [
        "name" => "Olivia Taylor",
        "age" => 15,
        "grade" => 10,
        "student_id" => "S20241009",
        "email" => "olivia.taylor@email.com"
    ],
    [
        "name" => "Christopher Anderson",
        "age" => 17,
        "grade" => 12,
        "student_id" => "S20241010",
        "email" => "christopher.anderson@email.com"
    ]
];




foreach($students as $student){
    echo "Student Name: " . $student['name'];
}













?>