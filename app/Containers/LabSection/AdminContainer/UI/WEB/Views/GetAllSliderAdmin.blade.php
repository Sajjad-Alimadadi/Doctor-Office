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
                                    اسلایدر سایت
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <!-- Main page content-->

            <div class="container-xl px-4 mt-4 is-rtl">
                <!-- Account page navigation-->
                <hr class="mt-0 mb-4">

                <div class="card mb-4">
                    <div class="card-header"></div>
                    <div class="card-body">


                        <div class="card-body ">

                            <div class="col-lg-12 mb-4">
                                <!-- Billing card 1-->
                                <div class="card h-100 border-start-lg border-start-primary">
                                    <div class="card-body">

                                        <form action="/admin/slider/create" enctype="multipart/form-data" method="post">
                                            @csrf
                                            <!-- Equivalent to... -->
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}"/>

                                            <div class="alert alert-light alert-solid mt-3"
                                                 role="alert">Width: 1920 px | Height: 570 px | MaxSize: 10240 MB</div>
                                            <div class="mb-3">
                                                <label class="small mb-1" for="file">فایل اسلایدر</label>
                                                <input class="form-control w-50" name="file" type="file"
                                                       value="{{old('file')}}"/>
                                            </div>

                                            <button class="btn btn-primary" type="submit">ثبت اطلاعات</button>
                                        </form>
                                        @if (session()->has('result') )
                                            <div class="alert alert-success alert-solid mt-3"
                                                 role="alert">{{ session('result') }}</div>
                                            @php
                                                session()->forget('result');
                                            @endphp
                                        @endif

                                        @if ($errors->any())
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif


                                    </div>
                                </div>
                            </div>
                        </div>


                        <table id="datatablesSimple">

                            <thead>
                            <tr>
                                <th>فایل</th>
                                <th>عملیات</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>مهارت</th>
                                <th>عملیات</th>
                            </tr>
                            </tfoot>
                            <tbody>
                            @if ($result)
                                @foreach($result as $item)
                                    <tr>
                                        <td>{{ $item['file'] }}</td>
                                        <td><a href="/admin/slider/delete/{{ $item['id'] }}"
                                               class="btn btn-sm btn-danger" type="button">حذف</a></td>
                                    </tr>
                                @endforeach
                            @endif
                            </tbody>
                        </table>
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

<script src="/assets/js/simple-datatables%40latest.js"></script>
<script src="/assets/js/simple-datatables%40demo.js"></script>

</body>
</html>
