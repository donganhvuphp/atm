<?php
    if(isset($_GET['money'])){
        $money = $_GET['money'];
        $_SESSION['stk']['money'] -= $money;
        $sql = "UPDATE `taikhoan` SET `money`= '".$_SESSION['stk']['money']."' WHERE `id_kh`= '".$_SESSION['stk']['id']."'";
        execute($sql);
    }
?>
<h1 class="text-center" style="color:red;"><img src="img/logo.png" width="200" alt=""></h1>
<h4 class="text-center" style="color:grey;">Quý khách có đồng ý các điều khoản dịch vụ không ?</h4>
<a href="index.php?page=bill"><button type="button" style="right: 0; bottom: 100px;" class="btn btn-success position-absolute">Đồng ý</button></a>
<a href="index.php?page=getmoney"><button type="button" style="right: 0; bottom: 50px;" class="btn btn-danger position-absolute">Hủy bỏ</button></a>