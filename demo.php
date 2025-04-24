<?php
// Variables
$name = "Sujal";
$age = 19;
$marks = 85.5;

// Expression
$total = $marks + 10;

// Indexed Array
$subjects = array("Math", "Science", "English");

// Associative Array
$grades = array("Math" => 90, "Science" => 85, "English" => 88);

// Output
echo "Name: $name<br>";
echo "Age: $age<br>";
echo "Total Marks (with bonus): $total<br>";

// Control Structure - If Else
if ($total >= 90) {
    echo "Grade: A+<br>";
} elseif ($total >= 80) {
    echo "Grade: A<br>";
} else {
    echo "Grade: B<br>";
}

// Loop through Indexed Array
echo "<br>Subjects:<br>";
foreach ($subjects as $subject) {
    echo "$subject<br>";
}

// Loop through Associative Array
echo "<br>Marks in each subject:<br>";
foreach ($grades as $subject => $grade) {
    echo "$subject: $grade<br>";
}
?>
