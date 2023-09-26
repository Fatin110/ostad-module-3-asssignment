<?php 
$studentGrades = [
   [74, 92, 66],
   [84, 62, 80],
   [72, 88, 78]
];
function average ($gradeValue){
    $length = count($gradeValue);
    $sum1=$sum2=$sum3=0;
    for ($i=0; $i<$length; $i++){
        for ($j=0; $j<$length; $j++){

           if ($i == 0) {
                $sum1+=$gradeValue[$i][$j];
            }
            else if ($i == 1){
                $sum2+=$gradeValue[$i][$j];
            }
            else {
                $sum3+=$gradeValue[$i][$j];
            }
        }
    }
    $avgOfStudent1 = $sum1/3;
    $avgOfStudent2 = $sum2/3;
    $avgOfStudent3 = $sum3/3;
    echo "Student1 Average: $avgOfStudent1\nStudent2 Average: $avgOfStudent2\nStudent3 Average: $avgOfStudent3\n";
}

average($studentGrades);
