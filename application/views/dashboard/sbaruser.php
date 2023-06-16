<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - SmartDry Dashboard</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('dashboardlaundry/dist/assets/css/bootstrap.css')?>">

    <link rel="stylesheet" href="<?php echo base_url('dashboardlaundry/dist/assets/vendors/iconly/bold.css')?>">

    <link rel="stylesheet" href="<?php echo base_url('dashboardlaundry/dist/assets/vendors/perfect-scrollbar/perfect-scrollbar.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('dashboardlaundry/dist/assets/vendors/bootstrap-icons/bootstrap-icons.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('dashboardlaundry/dist/assets/css/app.css')?>">
    <link rel="shortcut icon" href="<?php echo base_url('dashboardlaundry/dist/assets/images/favicon.svg" type="image/x-icon')?>">
</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
                            <a href="lp"><img src="<?php echo base_url('dashboardlaundry/dist/assets/images/logo/logo.png')?>" alt="Logo" srcset=""></a>
                        </div>
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-title">Menu</li>

                        <li class="sidebar-item active ">
                            <a href="<?php echo base_url('C_Laundry/dashboarduser')?>" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>

                        <!-- <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-stack"></i>
                                <span>Akses Admin</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="<?= base_url("C_Laundry/getUser") ?>">User</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="<?= base_url("C_Laundry/getPemesanan") ?>">Penjualan</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="registeruser">Register User</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="component-button.html">Button</a>
                                </li>
                                
                            </ul>
                        </li> -->
                <!--
                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-collection-fill"></i>
                                <span>Extra Components</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="extra-component-avatar.html">Avatar</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="extra-component-sweetalert.html">Sweet Alert</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="extra-component-toastify.html">Toastify</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="extra-component-rating.html">Rating</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="extra-component-divider.html">Divider</a>
                                </li>
                            </ul>
                        </li>
                -->
                        

                        <!-- <li class="sidebar-title">Forms &amp; Tables</li> -->

                        <!-- <li class="sidebar-item ">
                            <a href="<?= base_url("C_Laundry/inputPemesanan") ?>" class='sidebar-link'>
                                <i class="bi bi-hexagon-fill"></i>
                                <span>Pemesanan</span>
                            </a>
                           
                        </li> -->

                        <!-- <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-map-fill"></i>
                                <span>Maps</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="ui-map-google-map.html">Google Map</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="ui-map-jsvectormap.html">JS Vector Map</a>
                                </li>
                            </ul>
                        </li> -->

                        <li class="sidebar-title">Pages</li>

                        

                        <li class="sidebar-item  ">
                            <a href="<?= base_url("C_Laundry/riwayatpembelian") ?>" class='sidebar-link'>
                                <i class="bi bi-basket-fill"></i>
                                <span>Riwayat Pembelian</span>
                            </a>
                        </li>
                        <li class="sidebar-item  ">
                            <a href="<?= base_url("C_Laundry/pembayaran") ?>" class='sidebar-link'>
                                <i class="bi bi-file-earmark-medical-fill"></i>
                                <span>Pembayaran</span>
                            </a>
                        </li>
                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-person-badge-fill"></i>
                                <span>Authentication</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="<?= base_url("C_Laundry/login") ?>">Login</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="auth-register.html">Register</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="auth-forgot-password.html">Forgot Password</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="lp">Exit</a>
                                </li>
                            </ul>
                        </li>

                        

                        

                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>
        
    </div>
    <script src="<?php echo base_url('dashboardlaundry/dist/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js')?>"></script>
    <script src="<?php echo base_url('dashboardlaundry/dist/assets/js/bootstrap.bundle.min.js')?>"></script>

    <script src="<?php echo base_url('dashboardlaundry/dist/assets/vendors/apexcharts/apexcharts.js')?>"></script>
    <script src="<?php echo base_url('dashboardlaundry/dist/assets/js/pages/dashboard.js')?>"></script>

    <script src="<?php echo base_url('dashboardlaundry/dist/assets/js/main.js')?>"></script>
</body>

</html>