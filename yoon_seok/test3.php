<?php

$good="4";
$bad="back";

// $con=mysqli_connect('localhost', 'chu2', 'A@!dakota3276', 'Shop');//서버접속정보
// $query="INSERT INTO test(count, name)VALUES('$good','$bad');";//쿼리문
// $ex_query=mysqli_query($con, $query) or die(mysqli_error());//쿼리 실행, 오류시 오류내용 출력
// $result=mysqli_fetch_array($ex_query);//쿼리 결과값 저장
// $successMSG = "새로운 데이터를 추가했습니다".$result[0];

//$con=mysqli_connect('localhost', 'chu2', 'A@!dakota3276', 'Shop');//서버접속정보

// $con=mysqli_connect('localhost', 'chu2', 'A@!dakota3276', 'Shop');//서버접속정보
// 	for($i=0; $i<=10;$i=$i+1)
// 	{
//     echo $i;
//     $query="INSERT INTO test(count,name)VALUES('$good','$bad');";//쿼리문
//     $ex_query=mysqli_query($con, $query) or die(mysqli_error());//쿼리 실행, 오류시 오류내용 출력
//     $result=mysqli_fetch_array($ex_query);//쿼리 결과값 저장
// 	}

$person = array();
$person[0]="김개똥1";
$person[4]="김개똥2";
$person[5]="김개똥3";


$test = array();
$test=$person;

print_r($test);

 ?>
