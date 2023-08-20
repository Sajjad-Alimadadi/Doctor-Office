@if(!Cache::get('operation'))
    <script type="text/javascript">
        window.location = '/operation/login';
    </script>
@endif
@php
    if(!Cache::get('operation')) die('');
@endphp
<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>اپراتور</title>
    <link rel="stylesheet" href="/assets/css/fonts.css">
    <link rel="stylesheet" href="/assets/css/boxicons.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/persian-datepicker.css"/>

</head>
<body>

<div id="layoutAuthentication">
    <div id="layoutAuthentication_content">
        <main>
            <div class="container-xl px-4 is-rtl">
                <div class="row justify-content-center">

                    <div class="col-lg-4">

                        <div class="card shadow-lg border-0 rounded-lg mt-5"><a href="/operation/dashboard"
                                                                                class="btn btn-outline-primary"
                                                                                type="button">برگشت به داشبورد
                                اپراتور</a>
                            <div class="card-header justify-content-center"><h3 class="fw-light my-2">ثبت بیمار
                                    جدید</h3></div>
                            <div class="card-body">

                                <form action="/patient/create" method="post">

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
                            <div class="card-footer text-center">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <div id="layoutAuthentication_footer">
        <footer class="footer-admin mt-auto is-rtl">
            <div class="container-xl px-4">
            </div>
        </footer>
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

</script>

</body>
</html>
