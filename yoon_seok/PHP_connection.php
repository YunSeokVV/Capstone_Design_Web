<?php

  $con = mysqli_connect("52.78.19.35", "chu", "root", "yoohyeok");

  if(mysqli_connect_errno($con)){
    echo "Failed to connect to MySQL: " .mysqli_connect_error();
  }

  mysqli_set_charset($con,"utf8");

  $res=mysqli_query($con,"select * from HumanInfo");


  $result=array();

  while($row = mysqli_fetch_array($res)){
    array_push($result,array('id'=>$row[0],'name'=>$row[1],'address'=>$row[2]));
  }

  echo json_encode(array("result"=>$result), JSON_UNESCAPED_UNICODE);

  mysqli_close($con);

 ?>
