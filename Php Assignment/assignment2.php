<?php

function resultFinding($subject1, $subject2, $subject3, $subject4, $subject5) {

$average = ($subject1 + $subject2 + $subject3 + $subject4 + $subject5) / 5;
$total = $subject1 + $subject2 + $subject3 + $subject4 + $subject5;


switch (true) {
    case $subject1<33 || $subject2<33 || $subject3<33 || $subject4<33 || $subject5<33:
        echo "Failed in any subject";
        break;
    case $subject1>100 || $subject1< 0|| $subject2>100 || $subject2<0 || $subject3>100 || $subject3<0 || $subject4>100 || $subject4<0 || $subject5>100 || $subject5<0:
        echo "The input number is invalid";
        break;
    default:
        switch (true) {
            case $average>=80 && $average<=100: 
                printf("Total marks: %d \nAverage Marks: %.2f \nGrade: A+ \n", $total, $average);     
                break;
            case $average>= 70 && $average<= 79:
                printf("Total marks: %d \n", $total);
                printf("Average Marks: %.2f \n", $average);
                echo "Grade: A";
                break;
            case $average>= 60&& $average<= 69:
                printf("Total marks: %d \n", $total);
                printf("Average Marks: %.2f \n", $average);
                echo "Grade: A-";
                break;
            case $average>= 50&& $average<= 59:
                printf("Total marks: %d \n", $total);
                printf("Average Marks: %.2f \n", $average);
                echo "Grade: B";
                break;
            case $average>= 40&& $average<= 49:
                printf("Total marks: %d \n", $total);
                printf("Average Marks: %.2f \n", $average);
                echo "Grade: C";
                break;
            case $average>= 33&& $average<= 39:
                printf("Total marks: %d \n", $total);
                printf("Average Marks: %.2f \n", $average);
                echo "Grade: D";
                break;     
            default:
        }
     
} 

}

resultFinding(50,60,70,80,90);

 
        

