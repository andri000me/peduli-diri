<?php
session_start();

if (empty($_SESSION['IsLogged'])) {
    header("location: masuk");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>PeduliDiri</title>
    <link rel="stylesheet" href="http://localhost/peduli-diri-native/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="http://localhost/peduli-diri-native/assets/vendors/feather/feather.css">
    <link rel="stylesheet" href="http://localhost/peduli-diri-native/assets/vendors/base/vendor.bundle.base.css">
    <link rel="stylesheet" href="http://localhost/peduli-diri-native/assets/vendors/flag-icon-css/css/flag-icon.min.css" />
    <link rel="stylesheet" href="http://localhost/peduli-diri-native/assets/vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://localhost/peduli-diri-native/assets/vendors/jquery-bar-rating/fontawesome-stars-o.css">
    <link rel="stylesheet" href="http://localhost/peduli-diri-native/assets/vendors/jquery-bar-rating/fontawesome-stars.css">
    <link rel="stylesheet" href="http://localhost/peduli-diri-native/assets/vendors/jquery.skeleton.loader/dist/jquery.skeleton.css">
    <link rel="stylesheet" href="http://localhost/peduli-diri-native/assets/css/animate.min.css">
    <link rel="stylesheet" href="http://localhost/peduli-diri-native/assets/vendors/DataTables/css/dataTables.bootstrap4.min.css">

    <link rel="stylesheet" href="http://localhost/peduli-diri-native/assets/css/style.css">
    <link rel="shortcut icon" href="http://localhost/peduli-diri-native/assets/images/favicon.png" />
</head>

<body>
    <div class="container-scroller">
        <!-- Navbar -->
        <?php include "layout/navbar_layout.php"; ?>
        <div class="container-fluid page-body-wrapper">
            <!-- Sidebar -->
            <?php include "layout/sidebar_layout.php"; ?>
            <!-- Content -->
            <div class="main-panel">
                <?php include "content.php"; ?>
                <!-- Footer -->
                <?php include "layout/footer_layout.php"; ?>
            </div>
        </div>
    </div>

    <script src="http://localhost/peduli-diri-native/assets/vendors/base/vendor.bundle.base.js"></script>
    <script src="http://localhost/peduli-diri-native/assets/js/off-canvas.js"></script>
    <script src="http://localhost/peduli-diri-native/assets/js/hoverable-collapse.js"></script>
    <script src="http://localhost/peduli-diri-native/assets/js/template.js"></script>
    <script src="http://localhost/peduli-diri-native/assets/vendors/chart.js/Chart.min.js"></script>
    <script src="http://localhost/peduli-diri-native/assets/vendors/jquery-bar-rating/jquery.barrating.min.js"></script>
    <script src="http://localhost/peduli-diri-native/assets/js/dashboard.js"></script>
    <script src="http://localhost/peduli-diri-native/assets/vendors/jquery.skeleton.loader/dist/jquery.scheletrone.js"></script>
    <script src="http://localhost/peduli-diri-native/assets/vendors/DataTables/js/jquery.dataTables.min.js"></script>
    <script src="http://localhost/peduli-diri-native/assets/vendors/DataTables/js/dataTables.bootstrap4.min.js"></script>
    <script src="http://localhost/peduli-diri-native/assets/vendors/sweetalert2/package/dist/sweetalert2.all.min.js"></script>
    <script src="http://localhost/peduli-diri-native/assets/js/logout.js"></script>
    <script src="https://mattboldt.github.io/typed.js/lib/typed.js"></script>

    <script>
        var typed = new Typed('#infoText', {
            strings: ["PeduliDiri", "Jaga diri Anda dan Keluarga dari Virus Corona (Covid-19)", "Disipilin Menerapkan 3M", "Memakai Masker", "Menjaga Jarak", "Mencuci Tangan", "#Stay Safe and Healthy", "#Indonesia Bisa", "#Indonesia Kuat"],
            typeSpeed: 50,
            backDelay: 1000,
            // startDelay: 500,
            backSpeed: 50,
            loop: true,
        });
    </script>

    <?php
    if ($_GET['page'] == 'home') { ?>
        <script src="http://localhost/peduli-diri-native/assets/js/home.js"></script>
    <?php
    } else if ($_GET['page'] == 'catatan-perjalanan') { ?>
        <script src="http://localhost/peduli-diri-native/assets/js/travel-log.js"></script>
    <?php
    } else if ($_GET['page'] == 'tambah-catatan') { ?>
        <script src="http://localhost/peduli-diri-native/assets/js/insert.js"></script>
    <?php
    } else if ($_GET['page'] == 'edit-catatan') { ?>
        <script src="http://localhost/peduli-diri-native/assets/js/update.js"></script>
    <?php
    }
    ?>
</body>

</html>