<?php
include_once 'top.php';
include_once 'menu.php';
?>
<div>
    <div class="container-fluid p-0">
        <!-- <h1>Selamat datang dihalaman admin</h1> -->
        <?php
        error_reporting(0);

        $url = $_GET['url'];
        if($url == 'dashboard, contact, about, login, data'){
            include_once 'dashboard.php, contact.php, about.php, login.php, data.php';
        } elseif (!empty($url)){
            include_once ''.$url.'.php';
        } else {
            include_once 'dashboard.php';
        }

        ?>
    </div>
</div>
<?php
include_once 'bottom.php';
?>