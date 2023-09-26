<?php 
$studentGrades = [
   'student1' => ["math" => 74, "english" => 92, "science" => 76],
   'student2' => ["math" => 60, "english" => 90, "science" => 75],
   'student3' => ["math" => 80, "english" => 66, "science" => 70]
];

function gradeChecker ($avg) {
    $gradeOfStudent = $avg >= 80 ? "A" : ($avg >= 70 ? "B" : ($avg >= 60 ? "C" : ($avg >= 50 ? "D" : "F" )));
    return $gradeOfStudent;
}


function average ($gradeValue){
    $sum1=$sum2=$sum3=0;

    foreach ($gradeValue as $key => $value) {
        foreach ($value as $sub_key => $sub_val){
            if ($key == 'student1') {
                $sum1 += $sub_val;
            }
            else if ($key == 'student2'){
                $sum2 += $sub_val;
            }
            else {
                $sum3 += $sub_val;
            }
       }
    }

    // calculating average mark of each student
    $avgOfStudent1 = $sum1/3;
    $avgOfStudent2 = $sum2/3;
    $avgOfStudent3 = $sum3/3;

    // checking the grade according to obtained average mark for each student
    $gradeOfStudent1 = gradeChecker($avgOfStudent1);
    $gradeOfStudent2 = gradeChecker($avgOfStudent2);
    $gradeOfStudent3 = gradeChecker($avgOfStudent3);

    echo "Student1 Grade: $gradeOfStudent1\nStudent2 Grade: $gradeOfStudent2\nStudent3 Grade: $gradeOfStudent3\n";
}

average($studentGrades);



/* 
Task 4: Multidimensional Array

Create a multidimensional array called $studentGrades to store the grades of three students. 
Each student has grades for three subjects: Math, English, and Science. Write a PHP function 
which takes "$studentGrades" as an argument to calculate and print the average grade for each student.
*/