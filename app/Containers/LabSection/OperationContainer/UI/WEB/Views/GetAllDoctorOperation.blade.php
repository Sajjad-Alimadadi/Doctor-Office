@if(!Cache::get('operation'))
    <script type="text/javascript">
        window.location = '/operation/login';
    </script>
@endif
@php
    if(!Cache::get('operation')) die('');

    		$url = env('CREDIT_SMS_URL_API');
		$param = array();

		$handler = curl_init($url);
		curl_setopt($handler, CURLOPT_CUSTOMREQUEST, "POST");
		curl_setopt($handler, CURLOPT_POSTFIELDS, $param);
		curl_setopt($handler, CURLOPT_RETURNTRANSFER, true);
		$response2 = curl_exec($handler);
        curl_close($handler);
        $response=json_decode($response2,true);
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
    <a class="navbar-brand pe-3 ps-4 ps-lg-2" href="/operation/dashboard">اپراتور - {{ operationInfo(Cache::get('operation')['id']) }} </a>

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
                        <div class="dropdown-user-details-email">مدیر سیستم</div>
                    </div>
                </h6>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="/operation/signout">
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

                    <div class="snav-menu-heading">منوی خدمات</div>

                    <a class="nav-link" href="/operation/dashboard">
                        <div class="nav-link-icon"><i class="bx bx-bar-table"></i></div>
                        داشبورد
                    </a>

                    <a class="nav-link" href="/doctor/signup">
                        <div class="nav-link-icon"><i class="bx bx-bar-chart"></i></div>
                        ثبت پزشک جدید
                    </a>
                    <a class="nav-link pt-0" href="/operation/doctor/get">
                        <div class="nav-link-icon"><i class="bx bx-bar-chart"></i></div>
                        لیست پزشک
                    </a>

                    <a class="nav-link" href="/patient/signup">
                        <div class="nav-link-icon"><i class="bx bx-bar-chart"></i></div>
                        ثبت بیمار جدید
                    </a>
                    <a class="nav-link pt-0" href="/operation/patient/get">
                        <div class="nav-link-icon"><i class="bx bx-bar-chart"></i></div>
                        لیست بیمار
                    </a>

                    <a class="nav-link" href="/operation/service">
                        <div class="nav-link-icon"><i class="bx bx-bar-chart"></i></div>
                        ثبت خدمات مرکز
                    </a>

                    <a class="nav-link pt-0" href="/operation/skill">
                        <div class="nav-link-icon"><i class="bx bx-bar-chart"></i></div>
                        ثبت تخصص پزشک
                    </a>

                    <a class="nav-link" href="/operation/visit">
                        <div class="nav-link-icon"><i class="bx bx-bar-chart"></i></div>
                        ثبت ویزیت جدید
                    </a>

                    <a class="nav-link pt-0" href="/operation/visit/get">
                        <div class="nav-link-icon"><i class="bx bx-bar-chart"></i></div>
                        ویزیت ها
                    </a>


                    <!-- جدول -->
                    <a class="nav-link" target="_blank" href="https://mediana.ir/login-panel/">
                        <div class="nav-link-icon"><i class="bx bx-coin"></i></div>
                        اعتبار:
                        {{ $response['Message'] }}
                        ریال
                    </a>


                    <!-- جدول -->
                    <a class="nav-link" href="/operation/signout">
                        <div class="nav-link-icon"><i class="bx bx-exit"></i></div>
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
                                    لیست پزشک
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

                        @if (session()->has('SignupResult') )
                            <div class="alert alert-success alert-solid mt-3"
                                 role="alert">{{ session('SignupResult') }}</div>
                            @php
                                session()->forget('SignupResult');
                            @endphp
                        @endif

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

                        <table id="datatablesSimple">

                            <thead>
                            <tr>
                                <th>نام</th>
                                <th>فامیلی</th>
                                <th>موبایل</th>
                                <th>عملیات</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>نام</th>
                                <th>فامیلی</th>
                                <th>موبایل</th>
                                <th>عملیات</th>
                            </tr>
                            </tfoot>
                            <tbody>
                            @if ($result)
                                @foreach($result as $item)
                                    <tr>
                                        <td>{{ $item['name'] }}</td>
                                        <td>{{ $item['family'] }}</td>
                                        <td>{{ $item['mobile'] }}</td>
                                        <td>
                                            <button class="btn btn-sm btn-primary" type="button" onclick='myFunction("{{$item['id']}}","{{$item['doctorcode']}}","{{$item['nationalcode']}}","{{$item['name']}}","{{$item['family']}}","{{$item['mobile']}}","{{$item['birthday']}}")' data-bs-toggle="modal" data-bs-target="#exampleModal">ویرایش</button>
                                            <a href="/operation/doctor/get/delete/{{ $item['id'] }}"
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
            <div class="modal-body">

                <form id="formAuthentication" action="/operation/doctor/update" method="post">

                    @csrf

                    <!-- Equivalent to... -->
                    <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                    <input class="form-control" id="id" name="id" type="hidden">

                    <div class="mb-3 text-start">
                        <label class="small mb-1" for="nationalcode">کد ملی</label>
                        <input class="form-control" id="nationalcode" name="nationalcode" type="text">
                    </div>

                    <div class="mb-3 text-start">
                        <label class="small mb-1" for="doctorcode">نظام پزشکی</label>
                        <input class="form-control" id="doctorcode" name="doctorcode" type="text">
                    </div>

                    <div class="mb-3 text-start">
                        <label class="small mb-1" for="name">نام</label>
                        <input class="form-control" id="name" name="name" type="text" value="">
                    </div>

                    <div class="mb-3 text-start">
                        <label class="small mb-1" for="family">فامیلی</label>
                        <input class="form-control" id="family" name="family" type="text" value="">
                    </div>

                    <div class="mb-3 text-start">
                        <label class="small mb-1" for="mobile">موبایل</label>
                        <input class="form-control" id="mobile" name="mobile" type="text" value="">
                    </div>

                    <!-- تاریخ تولد -->
                    <div class="mb-3 text-start">
                        <label class="small mb-1" for="inputBirthday">تاریخ تولد</label>
                        <input class="form-control" id="inputBirthday" type="text" name="birthday"
                               placeholder="تاریخ تولد خود را انتخاب کنید">
                    </div>


                    <div class="mb-3 text-start">
                        <label class="small mb-1" for="pass">تغییر پسورد</label>
                        <input class="form-control" name="pass" type="text" value="">
                    </div>

            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary btn-block w-100">ثبت اطلاعات</button>
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
<script src="/assets/js/persian-date.js"></script>
<script src="/assets/js/persian-datepicker.js"></script>
<script src="/assets/js/state-city.js"></script>


<script>

    let timeout;

    function myFunction(id,doctorcode,nationalcode, name, family, mobile, birthday) {
        setTimeout(edit(id,doctorcode,nationalcode, name, family, mobile, birthday), 1000);
    }

    function edit(id,doctorcode,nationalcode, name, family, mobile, birthday) {
        document.getElementById("id").value = id;
        document.getElementById("doctorcode").value = doctorcode;
        document.getElementById("name").value = name;
        document.getElementById("family").value = family;
        // document.getElementById("mobile").value = mobile;
        document.getElementById("inputBirthday").value = birthday;

    }

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
