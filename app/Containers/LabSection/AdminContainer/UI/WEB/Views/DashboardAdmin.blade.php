@if(!Cache::get('admin'))
    <script type="text/javascript">
        window.location = '/admin/login';
    </script>
@endif
@php
    if(!Cache::get('admin')) die('');
@endphp
<!DOCTYPE html>
<html lang="fa" class="overflow-unset">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>مدیر</title>
    <link rel="stylesheet" href="/assets/css/fonts.css">
    <link rel="stylesheet" href="/assets/css/boxicons.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/persian-datepicker.css"/>

    <script defer="" src="/assets/js/feather.min.js"></script>
    <script defer="" src="/assets/js/font-awesome.min.js"></script>
</head>
<body class="nav-fixed">

<nav
    class="is-rtl topnav navbar navbar-expand shadow justify-content-between justify-content-sm-start navbar-light bg-white"
    id="snavAccordion">
    <button class="btn btn-icon btn-transparent-dark order-1 order-lg-0 me-2 ms-lg-2 me-lg-0" id="sidebarToggle">
        <i class="bx bx-menu bx-sm"></i>
    </button>
    <a class="navbar-brand pe-3 ps-4 ps-lg-2" href="/patient/dashboard">مدیر - {{ adminInfo(Cache::get('admin')['id']) }}</a>
    <!-- Navbar Items-->
    <ul class="navbar-nav align-items-center ms-auto">

        <!-- User Dropdown-->
        <li class="nav-item dropdown no-caret dropdown-user me-3 me-lg-4">
            <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownUserImage"
               href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-haspopup="true"
               aria-expanded="false"><img class="img-fluid" src="/assets/img/profile-1.jpg"></a>
            <div class="dropdown-menu dropdown-menu-w15 dropdown-menu-end border-0 shadow animated--fade-in-up"
                 aria-labelledby="navbarDropdownUserImage">
                <h6 class="dropdown-header d-flex align-items-center">
                    <img class="dropdown-user-img" src="/assets/img/profile-1.jpg">
                    <div class="dropdown-user-details">
                        <div class="dropdown-user-details-email">پنل مدیر</div>
                    </div>
                </h6>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="/admin/signout">
                    <div class="dropdown-item-icon"><i class="bx bx-log-out"></i></div>
                    خروج
                </a>
            </div>
        </li>

    </ul>
</nav>
<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="snav shadow-right snav-light">
            <div class="snav-menu">
                <div class="nav accordion" id="accordionSidenav">

                    <div class="snav-menu-heading">داشبورد</div>

                    <a class="nav-link pt-0" href="/admin/dashboard">
                        <div class="nav-link-icon"><i class="bx bx-bar-chart"></i></div>
                        صفحه اصلی
                    </a>

                    <a class="nav-link " href="/operation/signup">
                        <div class="nav-link-icon"><i class="bx bx-bar-chart"></i></div>
                        ایجاد اپراتور
                    </a>
                    <a class="nav-link pt-0" href="/admin/operation/get">
                        <div class="nav-link-icon"><i class="bx bx-bar-chart"></i></div>
                        لیست اپراتور
                    </a>

                    <a class="nav-link " href="/admin/slider">
                        <div class="nav-link-icon"><i class="bx bx-bar-chart"></i></div>
                        اسلایدر سایت
                    </a>

                    <a class="nav-link " href="/admin/news">
                        <div class="nav-link-icon"><i class="bx bx-bar-chart"></i></div>
                        اخبار سایت
                    </a>

                    <a class="nav-link " data-bs-toggle="modal" data-bs-target="#exampleModal" href="/admin/news">
                        <div class="nav-link-icon"><i class="bx bx-bar-chart"></i></div>
                        تغییر پسورد
                    </a>

                    <!-- جدول -->
                    <a class="nav-link" href="/admin/signout">
                        <div class="nav-link-icon"><i class="bx bx-table"></i></div>
                        خروج
                    </a>
                </div>
            </div>
        </nav>
    </div>
    <div id="layoutSidenav_content">

        <main class="is-rtl">
            <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
                <div class="container-xl px-4">
                    <div class="page-header-content pt-4">
                        <div class="row align-items-center justify-content-between">
                            <div class="col-auto mt-4">
                                <h1 class="page-header-title">
                                    <div class="page-header-icon"><i class="bx bx-pulse"></i></div>
                                    پنل مدیر
                                </h1>
                                <div class="page-header-subtitle">مدیر عزیز ، خوش آمدید</div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- Main page content-->
            <div class="container-xl px-4 mt-n10 is-rtl">

                <div class="row">
                    <div class="col-xxl-4 col-xl-12 mb-4">
                        <div class="card h-100">
                            <div class="card-body h-100 p-5">
                                <div class="row align-items-center">
                                    <div class="col-xl-8 col-xxl-12">
                                        <div class="text-center text-xl-start text-xxl-center mb-4 mb-xl-0 mb-xxl-4">
                                            <h1 class="text-primary"> مدیریت محترم ، {{ adminInfo(Cache::get('admin')['id']) }} عزیز خوش آمدید</h1>
                                            {{--<p class="text-gray-700 mb-0">اینجا برای شما کلی المان ها و طراحی های حرفه--}}
                                            {{--                                                ای تدارک دیده ایم نمونه ها مشاهده کنید لذت ببرید. در صورت رضایت نسخه--}}
                                            {{--                                                اصلی آن را از راستچین خریداری نمایید.</p>--}}
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-xxl-12 text-center"><img class="img-fluid"
                                                                                      src="/assets/img/svg/at-work.svg"
                                                                                      style="max-width: 26rem"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <footer class="footer-admin mt-auto footer-light is-rtl">
            <div class="container-xl px-4">
            </div>
        </footer>
    </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="بستن"></button>
            </div>
            <div class="modal-body text-start">

                <form action="/admin/newpass" method="post">
                    @csrf
                    <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                    <input class="form-control mb-1" name="id" type="hidden" value="{{Cache::get('admin')['id']}}">
                    <input dir="rtl" class="form-control mb-1" name="pass" type="text" placeholder="رمز جدید">
                    <button class="btn btn-sm btn-primary" type="submit">ثبت</button>
                </form>

            </div>
        </div>
    </div>
</div>

<script src="/assets/js/jquery.js"></script>
<script src="/assets/js/bootstrap.bundle.min.js"></script>
<script src="/assets/js/scripts.js"></script>

</body>
</html>
