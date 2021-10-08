<?php
//이 파일은 orders 테이블의 가장 마지막에 저장된 데이터가 몇번째 데이터인지 확인해보기 위해 만든 예제 파일이다.
$con=mysqli_connect('localhost', 'chu2', 'A@!dakota3276', 'Shop');//서버접속정보
$query="SELECT * FROM orders2 ORDER BY o_id DESC LIMIT 1";//쿼리문
$ex_query=mysqli_query($con, $query) or die(mysqli_error());//쿼리 실행, 오류시 오류내용 출력
$result=mysqli_fetch_array($ex_query);//쿼리 결과값 저장
echo $result[0];//결과값 출력
 ?>
