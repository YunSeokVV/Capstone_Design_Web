<?php
header('Content-Type: text/html; charset=UTF-8');
//ㄹㅇ 암거나 연습 ㄱㄱ


$test2="1/2/3/4/5/6";
$test3="통영 굴/맥주/치킨/라면/볶음면/꽈배기";

//문자열 자르기 : 배열로 저장된다.
$divided =explode('/' , $test2);
$divided2 =explode('/' , $test3);

//배열 크기 가져오기
$size = count($divided);

print_r($divided);
print_r($divided2);

$con=mysqli_connect('localhost', 'chu2', 'A@!dakota3276', 'Shop');//서버접속정보
mysqli_query($con, "set session character_set_connection=utf8;");
mysqli_query($con, "set session character_set_results=utf8;");
mysqli_query($con, "set session character_set_client=utf8;");
for($i = 0 ; $i < $size ; $i++){
  echo $i;

  $query="INSERT INTO test(count, name)VALUES('$divided[$i]','$divided2[$i]');";//쿼리문
  $ex_query=mysqli_query($con, $query) or die(mysqli_error());//쿼리 실행, 오류시 오류내용 출력
  $result=mysqli_fetch_array($ex_query);//쿼리 결과값 저장

}




 ?>
