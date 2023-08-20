<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>نمایش</title>
    <link rel="stylesheet" href="/assets/css/fonts.css">
    <link rel="stylesheet" href="/assets/css/boxicons.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link href="/viewer/viewer.css" rel="stylesheet">

</head>
<body>

<div id="layoutAuthentication">
    <div id="layoutAuthentication_content">
        <main>
            <div class="container-xl px-4 is-rtl">
                <div class="row justify-content-center">
                    <div class="col-lg-9">

                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header justify-content-center"><h3 class="fw-light my-2">نمایش تصویر</h3></div>
                            <div class="row">
                                @if ($result)
                                    @foreach($result as $item)
                                        <div class="card-body col-6">
                                            <a href="/show/{{ Request::segment(2) }}/{{$item['id']}}">
                                                <img id="image" src="/visit-image/{{ $item['image']}}" width="100%"
                                                     alt="visit-image-{{ $item['id'] }}">
                                            </a>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                            <div class="card-footer text-center">

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
<script src="/assets/js/FormValidation/FormValidation.min.js"></script>
<script src="/assets/js/FormValidation/Bootstrap5.min.js"></script>
<script src="/assets/js/FormValidation/AutoFocus.min.js"></script>
<script src="/assets/js/auth-base.js"></script>

</body>
</html>
