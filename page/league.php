<?php
    if(isset($_SESSION['success']) && $_SESSION['success'] == 1){
?>
    <script>alert("Xin chào <?php echo $_SESSION['stk']['name'];?>")</script>
<?php
    unset($_SESSION['success']);
    }
?>
<h1 class="text-center" style="color:red;"><img src="img/logo.png" width="200" alt=""></h1>
<h4 class="text-center" style="color:grey;">Quý khách vui lòng chọn ngôn ngữ</h4>
<a href="index.php?page=option"><button type="button" style="right: 0; bottom: 100px;" class="btn btn-success position-absolute">Tiêng Việt</button></a>
<button type="button" style="right: 0; bottom: 50px;" class="btn btn-danger position-absolute">Tiêng Anh</button>