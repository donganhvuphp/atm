<?php include_once 'config/myconfig.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<?php
include_once 'layout/head.php';
if (!isset($_SESSION['stk']) || empty($_SESSION['stk'])) {
    $page = 'loginacc';
} elseif (isset($_GET['page'])) {
    $page = $_GET['page'];
} elseif (!isset($_GET['page']) || empty($_GET['page'])) {
    $page = 'loginacc';
}
?>

<body>
    <div class="container">
        <div class="row" style="height: 400px;">
            <div class="col-md-4 centered border-radius box-shadow position-relative" style=" background: lightgoldenrodyellow; margin-top: 20px;">
                <?php

                if (file_exists("page/" . $page . ".php")) {
                    include_once "page/" . $page . ".php";
                } else {
                    include_once "404.html";
                }
                ?>
            </div>
        </div>
    </div>
    <?php
    if (isset($_SESSION['logout']) && $_SESSION['logout']  == 1) {
    ?>
        <script>
            alert('Cảm ơn quý khách đã sử dụng dịch vụ!');
        </script>
    <?php
    }
    ?>
</body>

</html>