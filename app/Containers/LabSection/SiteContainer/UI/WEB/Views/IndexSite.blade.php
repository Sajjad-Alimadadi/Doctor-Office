<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>پاراکلینیک</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <link rel="shortcut icon" href="images/favicon.html">

    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/select2.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/skins/blue.css">

    <link rel="alternate stylesheet" type="text/css" title="orange" href="css/skins/orange.css"/>
    <link rel="alternate stylesheet" type="text/css" title="green" href="css/skins/green.css"/>
    <link rel="alternate stylesheet" type="text/css" title="blue" href="css/skins/blue.css"/>
    <link rel="stylesheet" type="text/css" href="css/styleswitcher.css"/>

    <script src="js/modernizr.js"></script>

</head>

<body class="light">
<div class="wrapper">
    <header class="header">
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="main-logo col-xs-12 col-md-3 col-md-2 col-lg-2 hidden-xs">--}}
{{--                    <a href="index.html">--}}
{{--                        <img id="logo" class="img-responsive" width="50%" src="/images/logo.jpg" alt="logo">--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <div class="col-md-7 col-lg-7"></div>--}}
{{--                <div class="col-md-3 col-lg-3">--}}
{{--                    <ul class="unstyled user">--}}
{{--                        <li class="sign-in"><a href="/admin/login" class="btn btn-info"><i class="fa fa-user"></i>--}}
{{--                                ادمین</a></li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
        <nav class="site-navigation navigation" id="site-navigation">
            <div class="container">
                <div class="site-nav-inner" style="background-color:#086bc2">
{{--                    <a class="logo-mobile" href="index.html">--}}
{{--                        <img id="logo-mobile" width="50%" class="img-responsive" src="/images/logo.jpg" alt="">--}}
{{--                    </a>--}}
                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                            data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="collapse navbar-collapse navbar-responsive-collapse">
                        <ul class="nav navbar-nav" style="background-color:#086bc2">
                            <li class="active"><a href="" class="text-light">خانه</a></li>
                            <li><a href="#about">درباره ما</a></li>
                            <li><a href="#contact">تماس با ما</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <div id="main-slide" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators visible-lg visible-md">
            <li data-target="#main-slide" data-slide-to="0" class="active"></li>
            <li data-target="#main-slide" data-slide-to="1"></li>
            <li data-target="#main-slide" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">

            @if ($result['slider'])
                @php $count=1; @endphp
                @foreach($result['slider'] as $item)
                    <div style="background-image: url('../slider/{{$item['file']}}')" class="item @php if($count===1)  echo "active" @endphp bg-parallax">
                    </div>
                    @php $count++; @endphp
                @endforeach

            @endif
            {{--            <div style="background-image: url('../images/slider/bg1.jpg')" class="item active bg-parallax">--}}
            {{--            </div>--}}
            {{--            <div style="background-image: url('../images/slider/bg2.jpg')" class="item bg-parallax">--}}
            {{--            </div>--}}
        </div>
        <a class="left carousel-control" href="#main-slide" data-slide="prev">
            <span><i class="fa fa-angle-left"></i></span>
        </a>
        <a class="right carousel-control" href="#main-slide" data-slide="next">
            <span><i class="fa fa-angle-right"></i></span>
        </a>
    </div>
    <section class="features">
        <div class="container">
            <div class="row features-row" style="border-radius: 10px;background-color: #086bc2">
                <div class="feature-box col-md-4 col-sm-12">
                    <div class="feature-box-content">
                        <a href="/doctor/login" class="btn btn-primary" style="border-radius: 10px"><i class="fa fa-user"></i>
                            پنل پزشک</a>
                    </div>
                </div>
                <div class="feature-box two col-md-4 col-sm-12">
                    <div class="feature-box-content">
                        <a href="/patient/login" class="btn btn-primary" style="border-radius: 10px"><i class="fa fa-user"></i>
                            پنل بیمار</a>
                    </div>
                </div>
                <div class="feature-box three col-md-4 col-sm-12">
                    <div class="feature-box-content">
                        <a href="/operation/login" class="btn btn-primary" style="border-radius: 10px"><i class="fa fa-user"></i>
                            پنل اپراتور</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="about" class="about-us">
        <div class="container">
            <div class="row text-center">
                <h2 class="title-head"><span style="color: #000000">درباره</span> <span>ما</span></h2>
                <div class="title-head-subtitle">
                    <p>اطلاعات مربوط به ما</p>
                </div>
            </div>
            <div class="row about-content">
                <div class="col-sm-12 col-md-5 col-lg-6 text-center">
                    <img id="about-us" class="img-responsive img-about-us" src="images/about-us.png" alt="about us">
                </div>
                <div id="contact" class="col-sm-12 col-md-7 col-lg-6">
                    <h3 class="title-about">عنوان تستی</h3>
                    <p class="about-text">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد، در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها، و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#menu1">نشانی کلینیک</a></li>
                        <li><a data-toggle="tab" href="#menu2">ساعت کاری</a></li>
                        <li><a data-toggle="tab" href="#menu3">شماره تماس</a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="menu1" class="tab-pane fade in active">
                            <p>تهران - شهرری - خیابان سلمان فارسی - تست</p>
                        </div>
                        <div id="menu2" class="tab-pane fade">
                            <p>از 8 صبح الی 8 شب</p>

                        </div>
                        <div id="menu3" class="tab-pane fade">
                            <p>09109005707</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bitcoin-calculator-section">
        <div class="container">
            <div class="row" style="border-radius: 10px;background-color: #086bc2">
                <div class="col-md-12">
                    <h2 class="title-head text-center"><span style="color: #ffffff">نقشه</span> <span style="color: #000000">گوگل مپ</span></h2>
                </div>
                <div class="col-md-12 text-center">
                    <img width="400px" src="/images/map.jpg">
                </div>
            </div>
        </div>
    </section>
    <section class="blog">
        <div class="container">
            <div class="row text-center">
                <h2 class="title-head"><span style="color: #000000">اخبار</span> <span>ما</span></h2>
                <div class="title-head-subtitle">
                    <p>اطلاعات مربوط به اخبار ما</p>
                </div>
            </div>
            <div class="row latest-posts-content">


                @if ($result['news'])
                    @php $count=1; @endphp
                    @foreach($result['news'] as $item)

                        <div class="col-sm-6 col-md-6 col-xs-12">
                            <div class="latest-post">
                                <div class="post-body">
                                    <h4 class="post-title">
                                        <a href="">{{$item['title']}}</a>
                                    </h4>
                                    <div class="post-text one-line">
                                        <p>{{$item['body']}}</p>
                                    </div>
                                </div>
                                <button onclick="Show('{{ $item['body'] }}')" class="btn btn-sm btn-info">بیشتر</button>
                            </div>
                        </div>


                        @php $count++; @endphp
                    @endforeach

                @endif

            </div>
        </div>
    </section>
    <section class="call-action-all">
        <div class="call-action-all-overlay">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="action-text">
                            <h2>امروز با پاراکلینیک ما شروع کنید</h2>
                            <p class="lead">تست توضیحات</p>
                        </div>
                        <p class="action-btn"><a class="btn btn-primary" href="#">اخبار</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer">
        <div class="bottom-footer">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <p class="text-center">تمام حقوق محفوظ می باشد</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <a href="#" id="back-to-top" class="back-to-top fa fa-arrow-up"></a>

    <script src="js/jquery-2.2.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/select2.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/custom.js"></script>

    <script src="js/styleswitcher.js"></script>
    <script src="/sweetalert2/sweetalert2.all.min.js"></script>

    <script>
        function Show(e) {
            Swal.fire({
                title: 'متن خبر',
                text: e,
                confirmButtonText: 'تایید',
                showCloseButton: true
            })
        }
    </script>

</div>
</body>

</html>
