<?php
	function gradepoint($num){
		if($num>=0 && $num<=32){
			$grade_point = 0;
		}
		else if($num>=33 && $num<=40){
			$grade_point = 1;
		}
		else if($num>=40 && $num<=49){
			$grade_point = 2;
		}
		else if($num>=50 && $num<=59){
			$grade_point = 3;
		}
		else if($num>=60 && $num<=69){
			$grade_point = 3.5;
		}
		else if($num>=70 && $num<=79){
			$grade_point = 4;
		}
		else if($num>=80 && $num<=100){
			$grade_point = 5;
		}
		return $grade_point;
	}
	function grade($num){
		if($num>=0 && $num<=32){
			$grade = 'F';
		}
		else if($num>=33 && $num<=40){
			$grade = 'D';
		}
		else if($num>=40 && $num<=49){
			$grade = 'C';
		}
		else if($num>=50 && $num<=59){
			$grade = 'B';
		}
		else if($num>=60 && $num<=69){
			$grade = 'A-';
		}
		else if($num>=70 && $num<=79){
			$grade = 'A';
		}
		else if($num>=80 && $num<=100){
			$grade = 'A+';
		}
		return $grade;
	}
?>