<?php

if (isset($_POST['checkpass'])) {
    $pass = $_POST['pass'];
    if($_SESSION['stk']['pass'] == $pass){
        $_SESSION['success'] = 1;
        header('Location:index.php?page=league');
    }else{
?>
    <script>alert('Sai mã pin');</script>
<?php
    }
} elseif (isset($_POST['reacc'])){
    session_destroy();
    header('Location:index.php');
}
?>
<h1 class="text-center" style="color:red;"><img src="img/logo.png" width="200" alt=""></h1>
<h4 class="text-center" style="color:grey;">Quý khách nhập vào mật khẩu</h4>
<form action="" method="POST">
    <input type="password" placeholder="Mã pin" class="input-group form-control position-absolute" style="width: 150px; right: 130px; bottom: 200px;" name="pass" id="">
    <!-- <a href="index.php?page=league"> -->
    <button type="submit" name="checkpass" style="right: 0; bottom: 100px;" class="btn btn-success position-absolute">Đồng ý</button></a>
    <button type="submit" name="reacc" style="right: 0; bottom: 50px;" class="btn btn-danger position-absolute">Hủy bỏ</button>
</form>