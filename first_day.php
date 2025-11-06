<?php
// Variable
$greeting = "Hello, World!"; // Use double quotes for strings
$greeting .= " How are you today?"; // Concatenate using .= operator

echo $greeting;
echo "\n\n";

// Associative Array
$marks = [
    ['name' => 'jony', 'marks' => 90],
    ['name' => 'rifat', 'marks' => 85],
    ['name' => 'arif', 'marks' => 78, 'additional_info' => ['age' => 20, 'city' => 'Dhaka']],
    ['name' => 'touhid', 'marks' => 56, 'additional_info' => ['age' => 19, 'city' => 'Chittagong']],
    ['name' => 'shahid', 'marks' => 86, 'additional_info' => ['age' => 25, 'city' => 'Tangail']],
    
        
];
var_dump($marks);
echo "\n";

echo $marks[1]['name']; // Outputs: jony
echo "\n"; // new line

// Accessing nested associative array
echo $marks[2]['additional_info']['city']; // Outputs: Dhaka
echo "\n"; // new line


// Looping through associative array
foreach ($marks as $student) {
    echo $student['name'] . " scored " . $student['marks'] . " marks.\n";
}

// Loop with Condition
foreach ($marks as $student) {
    if ($student['marks'] >= 80) {
        echo $student['name'] . " has passed with distinction.\n";
    } else {
        echo $student['name'] . " needs improvement.\n";
    }
}

echo "\n";

// loop with break and continue
foreach ($marks as $student) {
    if ($student['marks'] < 80) {
        continue; // Skip students with marks less than 80
    }
    echo $student['name'] . " has passed with distinction.\n";
    if ($student['marks'] >= 90) {
        break; // Stop the loop if a student has marks 90 or above
    }
}
echo "\n";

// normal loop 
for ($i = 0; $i < count($marks); $i++) {
    echo $marks[$i]['name'] . " exam-scrore " . $marks[$i]['marks'] . " marks.\n";
}