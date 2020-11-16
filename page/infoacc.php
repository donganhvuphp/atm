<h1 class="text-center" style="color:red;"><img src="img/logo.png" width="200" alt=""></h1>
<h4 class="text-center" style="color:grey;">Thông tin tài khoản</h4>
<div type="button" style="right: 20px; bottom: 200px; color:red; font-weight: bold;" class="position-absolute"><?=$_SESSION['stk']['name'] ;?></div>
<div type="button" style="right: 20px; bottom: 150px;color:red; font-weight: bold;" class=" position-absolute"><?=$_SESSION['stk']['stk'] ;?></div>
<div type="button" style="right: 20px; bottom: 100px;color:red; font-weight: bold;" class=" position-absolute"><?= number_format($_SESSION['stk']['money'], 0, ',', '.') . " VNĐ" ;?></div>
<a href="index.php?page=option"><button type="button" style="right: 15px; bottom: 50px; padding :5px 18px 5px 18px;" class="btn btn-success position-absolute">Tiếp tục</button></a>
<div type="button" style="left: 10px; bottom: 200px;color:grey; font-weight: bold;" class=" position-absolute">Họ và tên :</div>
<div type="button" style="left: 10px; bottom: 150px;color:grey; font-weight: bold;" class=" position-absolute">Số tài khoản :</div>
<div type="button" style="left: 10px; bottom: 100px;color:grey; font-weight: bold;" class=" position-absolute">Số dư tài khoản:</div>