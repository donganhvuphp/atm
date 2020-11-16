<?php
    if(isset($_POST['getmonney'])){
        $money = $_POST['money'];
        if(empty($money)){
?>
    <script>alert('Bạn hãy nhập vào số tiền');</script>
<?php
        }else{
            header("Location:index.php?page=confirm&money=$money");
        }
    }
?>
<h1 class="text-center" style="color:red;"><img src="img/logo.png" width="200" alt=""></h1>
<h4 class="text-center" style="color:grey;">Quý khách vui lòng Nhập số tiền</h4>
<h5 class="text-center" style=" margin-top :40px ;color:red;">Tối thiểu : 50.000đ</h5>
<h5 class="text-center" style=" margin-top :-10px ;color:red;">Tối đa : 1 tỷ</h5>
<form action="" method="POST" ><input type="number" placeholder="nhập số tiền" class="input-group form-control position-absolute" style="width: 150px; right: 130px; bottom: 150px; text-align: center;" name="money" id="">
<button type="submit" name="getmonney" style="right:0; bottom: 100px;" class="btn btn-success position-absolute">Đồng ý</button>
</form>
<a href="index.php?page=getmoney"><button type="button" style="right: 0; bottom: 50px;" class="btn btn-danger position-absolute">Hủy bỏ</button></a>