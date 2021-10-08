
<!DOCTYPE html>
<meta charset="utf-8">
<html>
<head>
   <title>Order Infomation</title>
   <style>
body{
        text-align: center; }

   a { text-decoration: none;}
   a:link { color: black; text-decoration: none;}
   a:visited { color: black; text-decoration: none;}
   a:hover { color: black; text-decoration: none;} 

   p{
        font-style: italic;
        font-weight: bold;
        font-size: 60px; }
   table{
        width: 95%;
        border: 1px solid #444444;
        border-collapse: collapse;
        background-color: gray;
        margin:auto;
       }
   th,td { 
         border: 1px solid #444444;
        padding: 10px; }
      }
   th{
         background-color: white
      }
   td{
         border: 1px solid #444444;
        padding: 10px;
        background-color: white;
        
      }
   div{
         padding:15px;
      }
   .left{
         text-align:left;}
      }
   </style>
   </head>
<body>
   <div class="left">
      <a href="main_page.html">메인화면</a>
   </div>
   <p><a href="OrderInfo.php">Order Information</a></p>

   <div id="search" style="background-color: #EFA3A3">
   <form action="OrderInfo_search.php" method="post">
   <select name="search_option" style="width:80px;height:30px;">
          <option value="none">주문번호<?php echo $_post["none"]; ?></option>
            <option value="1">고객명<option>
            <option value="2">주소<?php echo $_post["2"]; ?></option>
            <option value="3">연락처<?php echo $_post["3"]; ?></option>
         
   </select>
         <input type="text" style="width:600px;height:25px;" placeholder="정보입력" name="Info"size="20">
         <input type="submit" style="width:70px;height:30px;" value="검색">
         <img src="https://cdn-icons-png.flaticon.com/128/25/25051.png" width="23" height="23">
    </form>
         <br>    
   <table>
            <th>주문번호</th>
            <th>고객명</th>
            <th>주소</th>
            <th>연락처</th>
            <th>주문시간</th>
            <th>배송상태</th>
            <th>총 주문금액</th>
  
<?php
$host = "localhost";
$user = "chu2";
$pw = "A@!dakota3276";
$dbName = "Shop";

$conn = new mysqli($host, $user, $pw, $dbName);

/* DB 연결 확인 */
mysqli_query($conn, "set session character_set_connection=utf8;");
mysqli_query($conn, "set session character_set_results=utf8;");
mysqli_query($conn, "set session character_set_client=utf8;");

$search_option = $_POST['search_option'];
$Info = $_POST['Info'];

if(strlen($Info) > 0) {
    switch ($search_option) {
      case "none": 
         $sql = "SELECT * FROM orders2 where o_id LIKE '$Info'";
         echo("고객명");
       break;
    case "1": 
        $sql = "SELECT * FROM orders2 where user_name LIKE '%$Info%'";
      break;
    case "2":
      $sql="SELECT * FROM orders2 where address LIKE '%$Info%'";
       break;
    case "3":
      $sql ="SELECT * FROM orders2 where user_phone LIKE '%$Info%'";
       break;
   }
   $result = $conn->query($sql);
   $num_result = $result->num_rows; 

} else

$sql = "select * from orders2";
$result = $conn->query($sql);
$num_result = $result->num_rows;

while($row = mysqli_fetch_array($result)){
    echo'<tr><td>' .$row['o_id'].'</td><td> '.$row['user_name'].'</td><td> '.$row['address'].
    '</td><td> '.$row['user_phone'].'</td><td> '.$row['o_time'].'</td><td> '.$row['status'].'</td><td> '.$row['o_total_price']."<br>";
 }
mysql_close($conn);
?>

 </table>
   </div>
</body>
</html>