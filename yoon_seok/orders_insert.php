<?php
// 이 파일은 안드로이드에서 사용자가 결제를 하고나면 결제 정보를 토대로 orders 테이블에 데이터를 저장시켜주는 역할을 한다.
    error_reporting(E_ALL);
    ini_set('display_errors',1);

    include('dbcon.php');


    $android = strpos($_SERVER['HTTP_USER_AGENT'], "Android");


    if( (($_SERVER['REQUEST_METHOD'] == 'POST') && isset($_POST['submit'])) || $android )
    {

        // 안드로이드 코드의 postParameters 변수에 적어준 이름을 가지고 값을 전달 받습니다.

        $user_name=$_POST['user_name'];
        $address=$_POST['address'];
        $user_phone=$_POST['user_phone'];
        $o_total_price=$_POST['o_total_price'];

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

        if(!isset($errMSG)) // 이름과 나라 모두 입력이 되었다면
        {
            try{
                // SQL문을 실행하여 데이터를 MySQL 서버의 person 테이블에 저장합니다.
                $stmt = $con->prepare('INSERT INTO orders2(user_name,address,user_phone,o_time,status,o_total_price) VALUES(:user_name, :address, :user_phone, now(), "배송전", :o_total_price)');
                $stmt->bindParam(':user_name', $user_name);
                $stmt->bindParam(':address', $address);
                $stmt->bindParam(':user_phone', $user_phone);
                $stmt->bindParam(':o_total_price', $o_total_price);

                if($stmt->execute())
                {
                    $successMSG = "새로운 데이터를 추가했습니다.";
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
    if (isset($successMSG)) echo $successMSG;

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
