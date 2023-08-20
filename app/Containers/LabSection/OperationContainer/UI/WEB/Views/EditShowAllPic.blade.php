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
                            <div class="card-body">

                                <div class="row mx-auto my-auto">

                                    <div class="col-6 ">

                                        <div class="row">
                                            <div class="col-12">
                                                روشنایی -
                                                <span dir="ltr" id="brightnessid">( 0 % )</span>
                                                <input type="range" id="brightness" oninput="brightnessFunc()" class="custom-range" min="0" max="200" value="100">
                                            </div>
                                            <div class="col-12">
                                                کنتراست -
                                                <span dir="ltr" id="contrastid">( 0 % )</span>
                                                <input type="range" id="contrast" oninput="contrastFunc()" class="custom-range" min="0" max="200" value="100">
                                            </div>

                                        </div>

                                    </div>
                                    <div class="col-6 text-start mx-auto my-auto">
                                        <img class="icon-tools mb-1" src="/assets/img/png/InvertColor.png" onclick="invertFunc()" title="Invert Color" style="border: 0px none;">
                                    </div>


                                </div>
                                <div>
                                    @if ($result)
                                        @foreach($result as $item)
                                            <img id="image" src="/visit-image/{{ $item['image']}}" width="100%"
                                                 alt="visit-image-{{ $item['id'] }}">
                                        @endforeach
                                    @endif
                                </div>

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

<script src="/viewer/viewer.js"></script>
<script src="/viewer/jquery-viewer.js"></script>

<script>
    document.getElementsByTagName("img")[1].style.visibility = "hidden"

    var $image = $('#image');

    $image.viewer({
        inline: true,
        loading: true,
        focus: true,
        backdrop: true,
        navbar: false,
        viewed: function () {
            $image.viewer('zoomTo', 0.5);
        }
    });

    // Get the Viewer.js instance after initialized
    var viewer = $image.data('viewer');

    // View a list of images
    $('#images').viewer();
</script>

<script>
    function invertFunc() {

        if (document.getElementsByTagName("img")[2].style.filter === "invert(100%)") {

            document.getElementsByTagName("img")[2].style.filter += "invert(0%)";
            // document.getElementsByTagName("img")[2].style.filter += "brightness(100%)"
            // document.getElementsByTagName("img")[2].style.filter += "contrast(100%)"

        } else {
            document.getElementsByTagName("img")[2].style.filter += "invert(100%)";
            // document.getElementsByTagName("img")[2].style.filter += "brightness(100%)"
            // document.getElementsByTagName("img")[2].style.filter += "contrast(100%)"
        }
        // filter: brightness(100%) contrast(100%) invert(100%);
    }

    function brightnessFunc() {
        var result = document.getElementById('brightness').value;
        var p = (result / 10 * 10) - 100;
        document.getElementById('brightnessid').innerHTML = "( " + p + " % ) ";
        document.getElementsByTagName("img")[2].style.filter = "brightness(" + result + "%)";
    }

    function contrastFunc() {
        var result = document.getElementById('contrast').value;
        var p = (result / 10 * 10) - 100;
        document.getElementById('contrastid').innerHTML = "( " + p + " % ) ";
        document.getElementsByTagName("img")[2].style.filter = "contrast(" + result + "%)";
    }
</script>

</body>
</html>
