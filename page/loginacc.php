<?php
    if(isset($_POST['loginacc'])){
        $stk = $_POST['stk'];
        $sql = "SELECT khachhang.id , khachhang.name , khachhang.pass , khachhang.stk , taikhoan.money 
        FROM khachhang , taikhoan WHERE khachhang.id = taikhoan.id_kh AND khachhang.stk = '$stk'";
        $result = executeResult($sql);
        if(!empty($result)){
            $_SESSION['stk'] = $result[0];
            header('Location:index.php?page=loginpass');
        }else{
?>
    <script>alert('Số tài khoản không tồn tại');</script>
<?php
        }
    }
?>
<h1 class="text-center" style="color:red;"><img src="img/logo.png" width="200" alt=""></h1>
<h4 class="text-center" style="color:grey;">Quý khách nhập số tài khoản</h4>
<form action="" method="POST">
<input type="number" class="position-absolute form-control" style="right: 75px; width: 220px; bottom: 200px;" placeholder="Số tài khoản" maxlength="13" name="stk" id="">
<button type="submit" name="loginacc" style="right: 0; bottom: 100px;" class="btn btn-success position-absolute">Đồng ý</button>
</form>
<button type="button" style="right: 0; bottom: 50px;" class="btn btn-danger position-absolute">Hủy bỏ</button>
