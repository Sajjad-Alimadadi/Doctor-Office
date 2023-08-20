<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>ورود اپراتور</title>
    <link rel="stylesheet" href="/assets/css/fonts.css">
    <link rel="stylesheet" href="/assets/css/boxicons.css">
    <link rel="stylesheet" href="/assets/css/style.css">

</head>
<body>

<div id="layoutAuthentication">
    <div id="layoutAuthentication_content">
        <main>
            <div class="container-xl px-4 is-rtl">
                <div class="row justify-content-center">

                    @if (session()->has('SignupResult') )
                        <div class="alert alert-success alert-solid mt-3"
                             role="alert">{{ session('SignupResult') }}</div>
                        @php
                            session()->forget('SignupResult');
                        @endphp
                    @endif

                    @if (session()->has('LoginResult') && session('LoginResult')== 1 )
                        <div class="alert alert-success alert-solid mt-3" role="alert"> ورود موفق کد ملی
                            - {{ Cache::get('operation')['nationalcode'] }}</div>

                        <script type="text/javascript">
                            const myTimeout = setTimeout(greeting, 2000);

                            function greeting() {
                                window.location = '/operation/dashboard';
                            }
                        </script>

                        @php
                            session()->forget('LoginResult');
                        @endphp
                    @endif

                    <div class="col-lg-4">

                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header justify-content-center"><h3 class="fw-light my-2">ورود به حساب
                                    اپراتور</h3></div>
                            <div class="card-body">

                                <form id="formAuthentication" action="/operation/login/check" method="post">

                                    @csrf

                                    <!-- Equivalent to... -->
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}"/>


                                    <!-- نام کاربری -->
                                    <div class="mb-3">
                                        <label class="small mb-1" for="mobile">شماره موبایل</label>
                                        <input class="form-control" name="mobile" type="text" value="{{old('mobile')}}">
                                    </div>

                                    <!-- رمز عبور -->
                                    <div class="mb-3">
                                        <label class="small mb-1" for="pass">رمز عبور</label>
                                        <input class="form-control" name="pass" id="inputUsername" type="password"
                                               value="{{old('pass')}}">
                                    </div>

                                    <a class="action-link" href="../forgetpwd/basic.html">
                                        فراموشی رمز عبور
                                        <i class="bx bx-left-arrow-alt"></i>
                                    </a>
                                    <button type="submit" class="btn btn-primary btn-block w-100">ورود</button>

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

</body>
</html>
