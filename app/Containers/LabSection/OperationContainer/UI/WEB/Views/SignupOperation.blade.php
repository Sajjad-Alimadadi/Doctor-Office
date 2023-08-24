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
    <title>اپراتور</title>
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

            <header class="page-header page-header-compact page-header-light border-bottom bg-white mb-4">
                <div class="container-xl px-4">
                    <div class="page-header-content">
                        <div class="row align-items-center justify-content-between pt-3 is-rtl">
                            <div class="col-auto mb-3">
                                <h1 class="page-header-title">
                                    <div class="page-header-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round"
                                             class="feather feather-user">
                                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                            <circle cx="12" cy="7" r="4"></circle>
                                        </svg>
                                    </div>
                                    ایجاد اپراتور
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <!-- Main page content-->

            <div class="container-xl px-4 mt-4 is-rtl col-sm-6">
                <!-- Account page navigation-->
                <hr class="mt-0 mb-4">

                <div class="card mb-4">
                    <div class="card-header"></div>
                    <div class="card-body">

                        <form action="/operation/create" method="post">

                            @csrf

                            <!-- Equivalent to... -->
                            <input type="hidden" name="_token" value="{{ csrf_token() }}"/>

                            <!-- کد ملی -->
                            <div class="mb-3">
                                <label class="small mb-1" for="nationalcode">کد ملی</label>
                                <input class="form-control" name="nationalcode" type="text"
                                       value="{{old('nationalcode')}}">
                            </div>

                            <!-- کد ملی -->
                            <div class="mb-3">
                                <label class="small mb-1" for="mobile">شماره موبایل</label>
                                <input class="form-control" name="mobile" type="text" value="{{old('mobile')}}">
                            </div>

                            <!-- نام -->
                            <div class="mb-3">
                                <label class="small mb-1" for="name">نام</label>
                                <input class="form-control" name="name" type="text" value="{{old('name')}}">
                            </div>

                            <!-- نام خانوادگی -->
                            <div class="mb-3">
                                <label class="small mb-1" for="family">نام خانوادگی</label>
                                <input class="form-control" name="family" type="text" value="{{old('family')}}">
                            </div>

                            <!-- تاریخ تولد -->
                            <div class="mb-3">
                                <label class="small mb-1" for="inputBirthday">تاریخ تولد</label>
                                <input class="form-control" id="inputBirthday" type="text" name="birthday"
                                       placeholder="تاریخ تولد خود را انتخاب کنید" value="{{old('birthday')}}">
                            </div>

                            <div class="mb-3">
                                <label class="small mb-1" for="startdate">تاریخ شروع</label>
                                <input class="form-control" id="inputStartDate" type="text" name="startdate"
                                       placeholder="تاریخ شروع را انتخاب کنید" value="{{old('startdate')}}">
                            </div>

                            <!-- رمز عبور -->
                            <div class="mb-3">
                                <label class="small mb-1" for="pass">رمز عبور</label>
                                <input class="form-control" name="pass" type="password" value="{{old('pass')}}">
                            </div>

                            <!-- تکرار رمز عبور -->
                            <div class="mb-3">
                                <label class="small mb-1" for="pass2">تکرار رمز عبور</label>
                                <input class="form-control" name="pass2" type="password"
                                       value="{{old('pass2')}}">
                            </div>

                            <button type="submit" class="btn btn-primary btn-block w-100">ثبت نام</button>

                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                        </form>
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


<script src="/assets/js/bootstrap.bundle.min.js"></script>
<script src="/assets/js/scripts.js"></script>
<script src="/assets/js/jquery.js"></script>
<script src="/assets/js/persian-date.js"></script>
<script src="/assets/js/persian-datepicker.js"></script>
<script src="/assets/js/state-city.js"></script>


<script>

    // Toggle the side navigation
    $(document).ready(function () {
        $('#inputBirthday').persianDatepicker({
            format: 'YYYY/MM/DD',
            autoClose: true
        });

    });

    $(document).ready(function () {
        $('#inputStartDate').persianDatepicker({
            format: 'YYYY/MM/DD',
            autoClose: true
        });

    });

</script>

</body>
</html>

