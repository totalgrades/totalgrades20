<?php

namespace App\Grades;


class LetterGrade
{

    public static function get_letter_grade($total_grade){

        if ($total_grade < 65){
            return "F";
        }elseif ($total_grade<= 66 && $total_grade >=65){
            return "D";
        }elseif ($total_grade<= 69 && $total_grade >=67){
            return "D+";
        }elseif ($total_grade<= 73 && $total_grade >=70){
            return "C-";
        }elseif ($total_grade<= 76 && $total_grade >=74){
            return "C";
        }elseif ($total_grade<= 79 && $total_grade >=77){
            return "C+";
        }elseif ($total_grade<= 83 && $total_grade >=80){
            return "B-";
        }elseif ($total_grade<= 86 && $total_grade >=84){
            return "B";
        }elseif ($total_grade < 90 && $total_grade >=87){
            return "B+";
        }elseif ($total_grade < 94 && $total_grade >=90){
            return "A-";
        }elseif ($total_grade < 97 && $total_grade >=94){
            return "A";
        }elseif ($total_grade >= 97){
            return "A+";
        }

    }
}
