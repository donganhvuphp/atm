<h1 class="text-center" style="color:red;"><img src="img/logo.png" width="200" alt=""></h1>
<h4 class="text-center" style="color:grey;">Vui lòng lựa chọn loại giao dịch</h4>
<a href="index.php?page=getmoney"><button type="button" style="right: 0; bottom: 200px;" class="btn btn-info position-absolute">Rút tiền</button></a>
<a href="index.php?page=infoacc"><button type="button" style="right: 0; bottom: 150px;" class="btn btn-info position-absolute">Vấn tin tài khoản</button></a>
<a href=""><button type="button" style="right: 0; bottom: 100px;" class="btn btn-info position-absolute">In sao kê</button></a>
<a href=""><button type="button" style="right: 0; bottom: 50px;" class="btn btn-info position-absolute">Dịch vụ khác</button></a>
<a href="index.php?page=repass"><button type="button" style="left: 0; bottom: 200px;" class="btn btn-info position-absolute">Đổi pin</button></a>
<a href=""><button type="button" style="left: 0; bottom: 150px;" class="btn btn-info position-absolute">Thanh toán hóa đơn</button></a>
<a href=""><button type="button" style="left: 0; bottom: 100px;" class="btn btn-info position-absolute">Chuyển khoản</button></a>
<a href=""><button type="button" style="left: 0; bottom: 50px;" class="btn btn-info position-absolute">Gửi tiền có kỳ hạn</button></a>
<?php
    if(isset($_SESSION['repass']) && $_SESSION['repass'] == 1){
?>
    <script>alert('Đổi mã pin thành công!!');</script>
<?php
    unset($_SESSION['repass']);
    }
?>