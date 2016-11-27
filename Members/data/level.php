<?php
if($_SESSION['points'] <100){
	$level = '1st';
	$percent = $_SESSION['points'];
	$privilege = 0;
}
else if($_SESSION['points'] <200){
	$level = '2nd';
	if($_SESSION['points'] == 100){
		$percent = 0;
	}else{
		$percent = $_SESSION['points'] - 100;
	}
	$privilege = 500;
}
else if($_SESSION['points'] <300){
	$level = '3rd';
	if($_SESSION['points'] == 200){
		$percent = 0;
	}else{
		$percent = $_SESSION['points'] - 200;
	}
	$privilege = 1000;
}
else if($_SESSION['points'] <400){
	$level = '4th';
	if($_SESSION['points'] == 300){
		$percent = 0;
	}else{
		$percent = $_SESSION['points'] - 300;
	}
	$privilege = 1500;
}
else if($_SESSION['points'] <500){
	$level = '5th';
	if($_SESSION['points'] == 400){
		$percent = 0;
	}else{
		$percent = $_SESSION['points'] - 400;
	}
	$privilege = 2000;
}
else if($_SESSION['points'] <600){
	$level = '6th';
	if($_SESSION['points'] == 500){
		$percent = 0;
	}else{
		$percent = $_SESSION['points'] - 500;
	}
	$privilege = 2500;
}
else if($_SESSION['points'] <700){
	$level = '7th';
	if($_SESSION['points'] == 600){
		$percent = 0;
	}else{
		$percent = $_SESSION['points'] - 600;
	}
	$privilege = 3000;
}
else if($_SESSION['points'] <800){
	$level = '8th';
	if($_SESSION['points'] == 700){
		$percent = 0;
	}else{
		$percent = $_SESSION['points'] - 700;
	}
	$privilege = 3500;
}
else if($_SESSION['points'] <900){
	$level = '9th';
	if($_SESSION['points'] == 800){
		$percent = 0;
	}else{
		$percent = $_SESSION['points'] - 800;
	}
	$privilege = 4000;
}
else{
	$level = '10th';
	if($_SESSION['points'] == 900){
		$percent = 0;
	}else{
		$percent = $_SESSION['points'] - 900;
	}
	$privilege = 5000;
}
?>