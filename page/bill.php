<?php
    if(isset($_SESSION['logout'] )){
        unset($_SESSION['logout']);
    }
?><h1 class="text-center" style="color:red;"><img src="img/logo.png" width="200" alt=""></h1>
<h4 class="text-center" style="color:grey;">Quý khách có muốn in hóa đơn không ?</h4>
<a href="index.php?page=logout" onclick="alert('Cảm ơn <?php echo $_SESSION['stk']['name'] ;?> đã sử dụng dịch vụ!');"><button type="button" style="right: 0; bottom: 100px;" class="btn btn-success position-absolute">Đồng ý</button></a>
<a href="index.php?page=confirm"><button type="button" style="right: 0; bottom: 50px;" class="btn btn-danger position-absolute">Hủy bỏ</button></a>