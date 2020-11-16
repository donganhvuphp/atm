<h1 class="text-center" style="color:red;"><img src="img/logo.png" width="200" alt=""></h1>
<h4 class="text-center" style="color:grey;">Quý khách nhập vào mật khẩu</h4>
<form action="" method="POST" class="" style="">
    <input type="password" placeholder="mã pin cũ" class="position-absolute input-group form-control" maxlength="6" style="right: 110px; bottom : 220px;width: 150px; text-align: center;" name="pass" id="">
    <input type="password" placeholder="mã pin mới" class="position-absolute center-blockinput-group form-control" maxlength="6" style="right: 110px; bottom : 170px;width: 150px;text-align: center;" name="newpass" id="">
    <input type="password" placeholder="xác nhận mã pin " class=" position-absolute input-group form-control" maxlength="6" style="right: 110px; bottom : 120px;width: 150px;text-align: center;" name="renewpass" id="">
    <button type="submit" style="left: 10px; bottom: 50px;" name="repass" class="btn btn-success position-absolute">Đồng ý</button>
</form>
<a href="index.php?page=option"><button type="button" style="right: 10px; bottom: 50px;" class="btn btn-danger position-absolute">Hủy bỏ</button></a>
<?php
if (isset($_POST['repass'])) {
    $pass = $_POST['pass'];
    $newpass = $_POST['newpass'];
    $renewpass = $_POST['renewpass'];
    if (empty($pass) || empty($newpass) || empty($renewpass)) {
?>
        <script>
            alert('Không được bỏ trống!!');
        </script>
        <?php
    } else {
        if ($_SESSION['stk']['pass'] != $pass) {
        ?>
            <script>
                alert('Mật khẩu cũ không đúng!!');
            </script>
        <?php
        } elseif ($renewpass != $newpass) {
        ?>
            <script>
                alert('Xác nhận mật khẩu mới không đúng!!');
            </script>
<?php
        }else{
            $sql = "UPDATE khachhang SET pass = '$renewpass' WHERE id = '".$_SESSION['stk']['id']."'";
            execute($sql) ; 
            $_SESSION['repass'] = 1;
            header('Location:index.php?page=option');
        }
    }
}
?>