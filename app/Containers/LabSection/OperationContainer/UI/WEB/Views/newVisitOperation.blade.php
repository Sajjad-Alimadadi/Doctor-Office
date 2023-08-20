@if(!Cache::get('operation'))
    <script type="text/javascript">
        window.location = '/operation/login';
    </script>
@endif
@php
    if(!Cache::get('operation')) die('');

		$url = env('Credit_SMS_URL_Api');
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
    <a class="navbar-brand pe-3 ps-4 ps-lg-2" href="/operation/dashboard">پنل اپراتور</a>

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
                                    ایجاد ویزیت جدید
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
                <div class="row">

                    <div class="col-xl-12">
                        <div class="card mb-4">
                            <div class="card-header"></div>
                            <div class="card-body">
                                <form action="/visit/create" enctype="multipart/form-data" method="post">

                                    @csrf

                                    <!-- Equivalent to... -->
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}"/>

                                    <div class="mt-3">
                                        <label class="small mb-1" for="description">متن نسخه</label>
                                        <textarea class="form-control" name="description" type="text"
                                                  value="{{old('description')}}">{{old('description')}}</textarea>
                                    </div>

                                    <div class="row gx-3 mb-3">

                                        <div class="col-md-6 mt-3">
                                            <label class="small mb-1" for="inputdate">تاریخ مراجعه</label>
                                            <input class="form-control" id="inputdate" type="text" name="date"
                                                   placeholder="تاریخ مراجعه را انتخاب کنید" value="{{old('date')}}">
                                        </div>

                                        {{--                                        <div class="col-md-6 mt-3">--}}
                                        {{--                                            <label class="small mb-1" for="patient_id">کـد ملی بیمار</label>--}}
                                        {{--                                            <input class="form-control" name="patient_id" type="text"--}}
                                        {{--                                                   value="{{old('patient_id')}}"--}}
                                        {{--                                                   placeholder="کد ملی ثبت شده بیمار در سامانه">--}}
                                        {{--                                        </div>--}}

                                        <div class="col-md-6 mt-3">
                                            <label class="small mb-1" for="patient_id">بیمار</label>
                                            <select class="form-control" name="patient_id" id="patient_id">
                                                <option selected="selected" style="display: none;">بیمار را انتخاب نمایید</option>
                                                @if ($result['patient'])
                                                    @foreach($result['patient'] as $item)
                                                        <option value="{{$item['nationalcode']}}">{{$item['name']." ".$item['family']}}</option>
                                                    @endforeach
                                                @endif
                                            </select>
                                        </div>

                                        <div class="col-md-6 mt-3">
                                            <label class="small mb-1" for="doctor_id">پزشک معالج</label>
                                            <select class="form-control" name="doctor_id" id="doctor_id">
                                                <option selected="selected" style="display: none;">پزشک معالج را انتخاب نمایید</option>
                                                @if ($result['doctor'])
                                                    @foreach($result['doctor'] as $item)
                                                        <option value="{{$item['doctorcode']}}">{{$item['name']." ".$item['family']}}</option>
                                                    @endforeach
                                                @endif
                                            </select>
                                        </div>

                                        <div class="col-md-6 mt-3">
                                            <label class="small mb-1" for="service_id">نوع خدمت</label>
                                            <select class="form-control" name="service_id" id="service_id">
                                                <option selected="selected" style="display: none;">نوع خدمت را انتخاب نمایید</option>
                                                @if ($result['service'])
                                                    @foreach($result['service'] as $item)
                                                        <option value="{{$item['id']}}">{{$item['title']}}</option>
                                                    @endforeach
                                                @endif
                                            </select>
                                        </div>

                                        <div class="col-md-6 mt-3">
                                            <label class="small mb-1" for="file">ضمیمه</label>
                                            <input class="form-control" name="file" type="file">
                                        </div>

                                    </div>

                                    <button class="btn btn-primary" type="submit">ثبت اطلاعات</button>

                                    @if (session()->has('CreateVisitResult') )
                                        <div class="alert alert-success alert-solid mt-3"
                                             role="alert">{{ session('CreateVisitResult') }}</div>
                                        @php
                                            session()->forget('CreateVisitResult');
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

                                </form>
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
<script src="/assets/js/jquery.js"></script>
<script src="/assets/js/bootstrap.bundle.min.js"></script>
<script src="/assets/js/scripts.js"></script>

<script src="/assets/js/persian-date.js"></script>
<script src="/assets/js/persian-datepicker.js"></script>
<script src="/assets/js/state-city.js"></script>


<script>

    $(document).ready(function () {
        $('#inputdate').persianDatepicker({
            format: 'YYYY/MM/DD',
            autoClose: true
        });

    });

</script>

</body>
</html>
