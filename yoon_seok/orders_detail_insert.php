<?php
// 이 파일은 안드로이드에서 사용자가 결제를 하고나면 결제 정보를 토대로 orders 테이블에 데이터를 저장시켜주는 역할을 한다.
    error_reporting(E_ALL);
    ini_set('display_errors',1);

    include('dbcon.php');


    $android = strpos($_SERVER['HTTP_USER_AGENT'], "Android");

    //각 제품별 사용자가 구매한 개수를 넣는 배열
    $arr_number = array();

    //사용자가 구매한 제품명을 담는 배열
    $arr_name = array();


    if( (($_SERVER['REQUEST_METHOD'] == 'POST') && isset($_POST['submit'])) || $android )
    {

        // 안드로이드 코드의 postParameters 변수에 적어준 이름을 가지고 값을 전달 받습니다.

        $user_name=$_POST['user_name'];
        $address=$_POST['address'];
        $user_phone=$_POST['user_phone'];
        $o_total_price=$_POST['o_total_price'];
        $item_count=$_POST['item_count'];
        $item_name=$_POST['item_name'];

        if(empty($user_name)){
            $errMSG = "사용자 이름을 입력하세요.";
        }
        else if(empty($address)){
            $errMSG = "주소를 입력하세요.";
        }
        else if(empty($user_phone)){
            $errMSG = "핸드폰을 입력하세요";
        }
        else if(empty($o_total_price)){
            $errMSG = "총 금액을 입력하세요";
        }
        else if(empty($item_count)){
            $errMSG = "구매한 상품의 개수를 입력하세요";
        }
        else if(empty($item_name)){
            $errMSG = "구매한 상품의 이름을 입력하세요";
        }

        if(!isset($errMSG)) // 이름과 나라 모두 입력이 되었다면
        {
            try{
                // SQL문을 실행하여 데이터를 MySQL 서버의 person 테이블에 저장합니다.
                $stmt = $con->prepare('INSERT INTO orders2(user_name,address,user_phone,o_time,status,o_total_price) VALUES(:user_name, :address, :user_phone, now(), "배송전", :o_total_price)');
                $stmt->bindParam(':user_name', $user_name);
                $stmt->bindParam(':address', $address);
                $stmt->bindParam(':user_phone', $user_phone);
                $stmt->bindParam(':o_total_price', $o_total_price);

                //orders2 테이블에 데이터를 성공적으로 추가하고 나면 아래 조건문을 실행한다.
                if($stmt->execute())
                {

                  //orders_detail 에 orders_o_id 값을 추가하기 위해서 orders 테이블의 가장 마지막 데이터의 o_id 값을 불러온다. 변수 $result[0] 에 저장된다.
                  $con=mysqli_connect('localhost', 'chu2', 'A@!dakota3276', 'Shop');//서버접속정보
                  mysqli_query($con, "set session character_set_connection=utf8;");
                  mysqli_query($con, "set session character_set_results=utf8;");
                  mysqli_query($con, "set session character_set_client=utf8;");
                  $query="SELECT * FROM orders2 ORDER BY o_id DESC LIMIT 1";//쿼리문
                  $ex_query=mysqli_query($con, $query) or die(mysqli_error());//쿼리 실행, 오류시 오류내용 출력
                  $result=mysqli_fetch_array($ex_query);//쿼리 결과값 저장
                  //$successMSG = "새로운 데이터를 추가했습니다".$result[0];

                  //문자열 자르기 : 사용자가 구매한 상품의 개수들을 배열 저장된다.
                  $divided_item_count =explode('/' , $item_count);
                  // 사용자가 구매한 상품의 이름을 배열에 저장한다.
                  $divided_item_name =explode('/' , $item_name);

                  //배열 크기 가져오기
                  $size = count($divided_item_count);
                  for($i = 0 ; $i < $size ; $i++){
                    $query="INSERT INTO orders_detail2(o_quantity,orders_o_id,product_name)VALUES('$divided_item_count[$i]','$result[0]','$divided_item_name[$i]');";//쿼리문
                    $ex_query=mysqli_query($con, $query) or die(mysqli_error());//쿼리 실행, 오류시 오류내용 출력

                  }

                  //arr_name 과 arr_number 에 담긴 데이터를 바탕으로 orders_detail2 에 데이터를 추가한다.

                }
                else
                {
                    $errMSG = "데이터 추가 에러";
                }

            } catch(PDOException $e) {
                die("Database error: " . $e->getMessage());
            }
        }

    }

?>


<?php
    if (isset($errMSG)) echo $errMSG;
    if (isset($successMSG)) echo $size;

    $android = strpos($_SERVER['HTTP_USER_AGENT'], "Android");

    if( !$android )
    {
?>
    <html>
       <body>

            <form action="<?php $_PHP_SELF ?>" method="POST">
                Name: <input type = "text" name = "name" />
                Country: <input type = "text" name = "country" />
                <input type = "submit" name = "submit" />
            </form>

       </body>
    </html>

<?php
    }
?>
