<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>نمایش</title>
    <link rel="stylesheet" href="/assets/css/fonts.css">
    <link rel="stylesheet" href="/newviewer/bootstrap.css">
    <link rel="stylesheet" href="/newviewer/bootstrap.min.css">
    <link href="/newviewer/site.css" rel="stylesheet">
    <link href="/newviewer/viewer.css" rel="stylesheet">
    <link href="/newviewer/fa/css/font-awesome.min.css" rel="stylesheet">
    <script src="/newviewer/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/newviewer/main.js"></script>
    <link href="/newviewer/contentviewer.css" rel="stylesheet">
    <script src="/newviewer/html2canvas.min.js"></script>
    <style>
        .btn-outline-info {
            background-color: white;
        }

        .dropzone {
            background-color: #ccc;
            border: 3px dashed #888;
            width: 100%;
            height: 150px;
            border-radius: 25px;
            font-size: 20px;
            color: #777;
            padding-top: 50px;
            text-align: center;
        }

        .dropzone.over {
            opacity: .7;
            border-style: solid;
        }

        #dropzone .dropzone {
            margin-top: 25px;
            padding-top: 60px;
        }

        ::-webkit-scrollbar {
            -webkit-appearance: none;
        }

        ::-webkit-scrollbar:vertical {
            width: 6px;
        }

        ::-webkit-scrollbar:horizontal {
            height: 6px;
        }

        ::-webkit-scrollbar-thumb {
            background-color: darkblue;
            border-radius: 0px;
            border: 1px solid #ffffff;
        }

        ::-webkit-scrollbar-track {
            border-radius: 0px;
            background-color: #ffffff;
        }

        @media only screen and (max-width: 600px) {
            .dropzone {
                display: none;
            }
        }

        body {
            color: white;
        }
    </style>
    <script src="/js/build/pdf.js"></script>
    <script src="/js/build/pdf.worker.js"></script>
</head>
<body>

<div class="side-bar-warp" style="padding:0px;">

    <div id="sidebar-menu" class="sidebar-menu small-side-bar flowHide" style="padding:0px;">
        <div id="hamburger" class="hamburger" style="float:right;display:none;">
            <div class="cta">
                <div class="toggle-btn type14"></div>
            </div>
        </div>

        <div class="navbar-nav" style="padding:0px;margin-top:60px;overflow:auto;" id="imagepanel">
            @foreach($photos as $index => $photo)
                <div id="img_{{ $index }}" onclick="viewimage({{ $index }});changeclass({{ $index }})"
                     class="img-real-thumb tumb_imagelist fadeInRight animated nav-link-name name-hide"
                     style="min-height:120px;background-image:url('/visit-image/{{ $photo->image }}');"></div>
                <a class="fadeInRight animated nav-link-name name-hide btn btn-outline-light a-download"
                   style="width:180px;margin-top:3px;margin-right:10px;">ذخیره کردن تصویر <i class="fa fa-download"></i>
                </a>
            @endforeach

            <script>
                function changeclass(id) {
                    for (i = 0; i < 2; i++) {
                        $("#img_" + i).removeClass("selected_thumb");
                    }
                    $("#img_" + id).addClass("selected_thumb");
                }
            </script>
            <input type="hidden" id="imagevalue"/>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row" id="main">
        <section class="col-md-12 scrollmenu" id="scrollmenu">
            <div class="input-group" style="display:none;">
                    <span class="input-group-prepend">
                        <button type="button" class="btn btn-primary" id="viewclick" data-method="view"
                                data-target="#viewIndex" title="View one of the images with image's index">View</button>
                    </span>
                <input type="hidden" class="form-control" id="viewIndex" name="index" value="4" placeholder="index">
            </div>

            <div class="rangs">
                <label for="customRange" style="width:100%;">Brightness : <span class="eng" style="color:white;"
                                                                                id="Brightness_value">0</span> %
                    <button type="button" onclick="Brightness_reset();" class="btn btn-primary"
                            style="font-size:8px;padding:5px;float:right;margin-right:10px;"><i
                            class="fa fa-refresh"></i></button>
                </label>
                <input type="range" class="custom-range" id="br" name="br" min=0 max=200 value=100>
            </div>
            <div class="rangs">
                <label for="customRange2" style="width:100%;">Contrast : <span style="color:white;" class="eng"
                                                                               id="Contrast_value">0</span> %
                    <button type="button" onclick="Contrast_reset();" class="btn btn-primary"
                            style="font-size:8px;padding:5px;float:right;margin-right:10px;"><i
                            class="fa fa-refresh"></i></button>
                </label>
                <input type="range" class="custom-range" id="ct" name="ct" min=0 max=200 value=100>
            </div>
            <a href="#" id="chimg" style="display:none;">Change Image</a>
            <input type="hidden" id="invert" value="0"/>
            <img class="icon-tools no-mobile" src="/newviewer/icon/Zoom.png" data-enable="inline" data-method="reset"
                 onclick="magnify(1);" title="Magnifier Glass" id="magnifyicon"/>
            <img class="icon-tools" src="/newviewer/icon/ZoomIn.png" data-arguments="[0.5]" data-enable="inline"
                 data-method="zoom" title="Zoom in"/>
            <img class="icon-tools" src="/newviewer/icon/ZoomOut.png" data-arguments="[-0.5]" data-enable="inline"
                 data-method="zoom" title="Zoom out"/>
            <img class="icon-tools" src="/newviewer/icon/OneToOne.png" id="oneonone" data-enable="inline"
                 data-method="toggle" title="One To One"/>
            <img class="icon-tools" src="/newviewer/icon/RotateClock.png" data-arguments="[90]" data-enable="inline"
                 data-method="rotate" title="Rotate right" id="rotateright"/>
            <img class="icon-tools disabaled" src="/newviewer/icon/RotateClock.png" title="Rotate right"
                 id="rotateright_disabaled"/>
            <img class="icon-tools" src="/newviewer/icon/RotateCounterClock.png" data-arguments="[-90]"
                 data-enable="inline" data-method="rotate" title="Rotate left" id="rotateleft"/>
            <img class="icon-tools disabaled" src="/newviewer/icon/RotateCounterClock.png" title="Rotate left"
                 id="rotateleft_disabaled"/>
            <img class="icon-tools" src="/newviewer/icon/Reverse.png" id="fliph" data-arguments="[-1]"
                 data-enable="inline" data-method="scaleX" title="Flip horizontal" onclick="fliph();"/>
            <img class="icon-tools disabaled" src="/newviewer/icon/Reverse.png" id="fliph_disabaled"
                 title="Flip horizontal"/>
            <img class="icon-tools" src="/newviewer/icon/Flip.png" data-arguments="[-1]" data-enable="inline"
                 data-method="scaleY" title="Flip vertical" id="flipv" onclick="flipv();"/>
            <img class="icon-tools disabaled" src="/newviewer/icon/Flip.png" title="Flip vertical"
                 id="flipv_disabaled"/>
            <img class="icon-tools" src="/newviewer/icon/InvertColor.png" onclick="invertfunc()" title="Invert Color"
                 id="inverticon"/>
            <img class="icon-tools" src="/newviewer/icon/Reload.png" data-enable="inline" data-method="reset" id="reset"
                 title="Reset"/>
            <img class="icon-tools" src="/newviewer/icon/ToggleTags.png" id="ToggleTags" onclick="infotogle();"
                 title="Show/Hide Information"/>
        </section>

        <section class="col-md-12" id="imageview" data-first-name="{{ $image->visit->patient->name }}"
                 data-last-name="{{ $image->visit->patient->family }}"
                 style="height:100%;background-color:black;border:1px solid red;">
            <div class="namefloatright" id="inforight">
                <p>{{ $image->visit->patient->name . ' ' . $image->visit->patient->family }}<br/>
                    تاریخ تولد : {{ $image->visit->patient->birthday }} <br/>
                    تاریخ ویزیت : {{ $image->visit->date }}
                </p>
            </div>
            <div class="namefloatleft" id="infoleft">
                <p>
                    دکتر : {{ $image->visit->doctor->name . ' ' . $image->visit->doctor->family }}<br/>
                    {{ $image->visit->service->title }}
                </p>
            </div>
            <div class="docs-galley" id="docs-pictures" style="margin-bottom:5px !important;">
                <ul class="docs-pictures clearfix">
                    @foreach($photos as $photo)
                        @if (pathinfo($photo['image'], PATHINFO_EXTENSION) == 'pdf')
                            <li><div id="pdfViewer" onclick="showPDF({{ $photo['id'] }})"></div></li>
                        @else
                            <li><img class="photoViewer" data-original="/visit-image/{{ $photo['image'] }}"
                                     src="/visit-image/{{ $photo['image'] }}" style="display:none;"></li>
                        @endif
                    @endforeach
                </ul>
                <script>
                    function changeclass(id) {
                        for (i = 0; i < 2; i++) {
                            $("#img_" + i).removeClass("selected_thumb");
                        }
                        $("#img_" + id).addClass("selected_thumb");
                    }
                </script>
            </div>

            <a href="" download="{{ $image->visit->patient->name . ' ' . $image->visit->patient->family }}.jpg"
               class="btn btn-primary"
               style="height:44px;width:40px;padding:0px;margin:0px;font-weight:bold;position:fixed;bottom:49px;left:0px;z-index:999999999999;"
               id="ImageSectionDownload"><i class="fa fa-save" style="font-size:20px;margin-top:13.5px"></i></a>
            <div id="collapsbtn" class="btn btn-primary"
                 style="height:44px;width:40px;padding:0px;margin:0px;font-weight:bold;position:fixed;bottom:3px;left:0px;z-index:999999999999;"
                 onclick="showimagesection();"><i id="collapsbtn2" class="fa fa-angle-double-down"
                                                  style="font-size:20px;margin-top:13.5px"></i></div>
            <div class="collapse show imagesection" id="imagesection" style="overflow-y:hidden;">
                @foreach($photos as $index => $photo)
                    <div id="img2_{{ $index }}" data-img="/visit-image/{{ $photo['image'] }}"
                         onclick="viewimage({{ $index }});changeclass2({{ $index }})"
                         class="img-real-thumb tumb_imagelist"
                         style="background-image:url('/visit-image/{{ $photo['image'] }}');"></div>
                @endforeach
                <div class="img-real-thumb tumb_imagelist" style="width:30px;border:0px;"></div>
                <script>
                    function changeclass2(id) {
                        for (i = 0; i < 2; i++) {
                            $("#img2_" + i).removeClass("selected_thumb");
                        }
                        $("#img2_" + id).addClass("selected_thumb");

                    }
                </script>
            </div>
        </section>
    </div>
</div>

<script src="/newviewer/viewer.js"></script>
<script src="/newviewer/main.js"></script>
<script>
    $("#WarningModal").modal();
</script>
<script>
    $(".a-download").on("click", () => {
        let lastName = $("#imageview").data("last-name");
        let firstName = $("#imageview").data("first-name");

        html2canvas(document.querySelector("#imageview")).then(canvas => {
            let link = document.createElement("a");
            link.download = firstName + " " + lastName + ".jpg";
            link.href = canvas.toDataURL();
            link.click();
        })
    })

    function UploadImageFunction() {
        $("#UploadImageModal").modal();
    }

    function fliph() {
        setTimeout(function () {
            var flip = $("#fliph").attr("data-arguments");
            if (flip == "[1]") {
                $("#fliph").attr("data-arguments", "[-1]");
            } else {
                $("#fliph").attr("data-arguments", "[1]");
            }

        }, 10);

    }

    function flipv() {
        setTimeout(function () {
            var flip = $("#flipv").attr("data-arguments");
            if (flip == "[1]") {
                $("#flipv").attr("data-arguments", "[-1]");
            } else {
                $("#flipv").attr("data-arguments", "[1]");
            }

        }, 10);

    }

    function getWidth() {
        return Math.max(
            document.body.scrollWidth,
            document.documentElement.scrollWidth,
            document.body.offsetWidth,
            document.documentElement.offsetWidth,
            document.documentElement.clientWidth
        );
    }

    function getHeight() {
        return Math.max(
            document.body.scrollHeight,
            document.documentElement.scrollHeight,
            document.body.offsetHeight,
            document.documentElement.offsetHeight,
            document.documentElement.clientHeight
        );
    }


    var width = getWidth();


    if (width > 775) {
        var heights = getHeight() - 63;
        var heightsvie = getHeight() - 66;
        document.getElementById("imageview").style.height = heights + "px";
        document.getElementById("imagepanel").style.height = heights + "px";
        document.getElementById("docs-pictures").style.height = heightsvie + "px";

    } else {
        var heights = getHeight() - 195;
        var heights2 = getHeight() - 198;
        document.getElementById("docs-pictures").style.height = heights2 + "px";
        document.getElementById("imageview").style.height = heights + "px";
        setTimeout(function () {
            $("#img2_0").click();
        }, 100);

        function showimagesection() {
            var heights3 = heights + 100;
            var con = document.getElementById("imageview").style.height;
            if (con === heights3 + "px") {
                document.getElementById("imageview").style.height = heights + "px";
                document.getElementById("docs-pictures").style.height = heights2 + "px";
                document.getElementById("viewer-canvas").style.height = heights2 + "px";
                $("#collapsbtn2").removeClass("fa-angle-double-up");
                $("#collapsbtn2").addClass("fa-angle-double-down");
                //$("#scrollmenu").fadeIn(500);
                $("#imagesection").fadeIn(0);

                document.getElementById("viewer-container").style.height = heights2 + "px";
            } else {

                document.getElementById("imageview").style.height = heights3 + "px";
                document.getElementById("docs-pictures").style.height = heights3 + "px";
                document.getElementById("viewer-canvas").style.height = (heights3 - 3) + "px";
                document.getElementById("viewer-container").style.height = (heights3 - 3) + "px";
                $("#collapsbtn2").removeClass("fa-angle-double-down");
                $("#collapsbtn2").addClass("fa-angle-double-up");
                //$("#scrollmenu").fadeOut(500);
                $("#imagesection").fadeOut(0);

            }


        }
    }

    $('.sidebar-menu').removeClass("flowHide");
    $(".sidebar-menu").toggleClass("full-side-bar");
    $('.nav-link-name').toggleClass('name-hide');
    $('.cta').toggleClass('active');
</script>
<script>
    function viewimage(id) {
        $("#br").val("100");      // brightness
        $("#ct").val("100");      // contrast
        $("#invert").val("0");
        $("#inverticon").css("border", "0px");
        editImage();
        $("#viewIndex").val(id);
        $("#viewclick").click();
        $("#imgglass").remove();
        $("#magnifyicon").css("border", "0px solid red").css("border-radius", "0px");
        $("#rotateright").show();
        $("#rotateright_disabaled").hide();
        $("#rotateleft").show();
        $("#rotateleft_disabaled").hide();
        $("#fliph").show();
        $("#fliph_disabaled").hide();
        $("#flipv").show();
        $("#flipv_disabaled").hide();
        $("#ImageSectionDownload").attr("href", $("#img2_" + id).attr("data-img"));
        $("#reportmodal").modal("hide");
    }

    setTimeout(function () {
        $("#img_0").click();
    }, 100);

    function CallRemovePage() {
        $.ajax({
            url: 'RemoveFolder',
            cache: false,
            type: "GET",
            data: {id: 1},
            beforeSend: function () {
            },
            success: function (data) {

            },
            error: function () {
            }
        });
    }

    //CallRemovePage();

</script>
<script>
    $("#pdfViewer").hide();
    function showPDF(id) {
        let url = '';
        let photos = [
                @foreach($photos as $photo)
            {
                id: {{ $photo['id'] }},
                url: "/visit-image/{{ $photo['image'] }}",
            },
            @endforeach
        ];
        for (let i in photos) {
            if (photos[i]['id'] === id) {
                url = photos[i]['url'];
                break;
            }
        }
        pdfjsLib.getDocument(url).promise.then(function (pdf) {
            pdf.getPage(1).then(function (page) {
                let canvas = document.createElement('canvas');
                let container = document.getElementById('pdfViewer');
                container.appendChild(canvas);
                let viewport = page.getViewport({
                    scale: 1
                });
                canvas.height = viewport.height;
                canvas.width = viewport.width;
                let ctx = canvas.getContext('2d');
                let renderContext = {
                    canvasContext: ctx,
                    viewport: viewport
                };
                page.render(renderContext);
                $("#pdfViewer").show();
                $(".photoViewer").hide();
                $("#viewer-canvas").hide();
            });
        });
    }
</script>
</body>
</html>
