@extends('master')

@section('content')
    <!--start-banner-->
    <div class="banner">
        <div id="top" class="callbacks_container">
            <ul class="rslides" id="slider4">
                <li>
                    <div class="banner-1"></div>
                </li>
                <li>
                    <div class="banner-2"></div>
                </li>
                <li>
                    <div class="banner-3"></div>
                </li>
            </ul>
        </div>
        <div class="clearfix"></div>
    </div>
    <!--End-banner-->
    <!--Slider-Starts-Here-->
    <script src="js/responsiveslides.min.js"></script>
    <script>
        // You can also use "$(window).load(function() {"
        $(function () {
            // Slideshow 4
            $("#slider4").responsiveSlides({
                auto: true,
                pager: true,
                nav: false,
                speed: 500,
                namespace: "callbacks",
                before: function () {
                    $('.events').append("<li>before event fired.</li>");
                },
                after: function () {
                    $('.events').append("<li>after event fired.</li>");
                }
            });

        });
    </script>
    <!--End-slider-script-->
    <!--start-build-->
    <div class="build">
        <div class="container">
            <div class="build-mian">
                <div class="col-md-8 build-left">
                    <h1>PENDIDIKAN<span>MEMBENTUK PRIBADI</span></h1>

                    <p>Mendidik pribadi yang beriman dan bertaqwa, mencintai keluarga, mengasihi sesama, berguna bagi
                        keluarga, bangsa dan negara, peduli pada lingkungan serta berwawasan internasional.</p>
                </div>
                <div class="col-md-4 build-right">
                    <a href="#">DAFTAR SEKARANG</a>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!--End-build-->

    <div class="register-title-bg">
        <p class="register-title">Prosedur Pendaftaran</p>
    </div>

    <!--start-design-->
    <div class="design">
        <div class="container">
            <div class="design-main">
                <div class="col-md-4 design-left">
                    <div class="design-text">
                        <img src="images/design-2.png" alt=""/>

                        <h3>1. Pendaftaran Online</h3>

                        <p>Lakukan pendaftaran online pada situs ini. Login kemudian isi data diri, lakukan pembayaran,
                            dan unggah bukti pembayaran.</p>
                    </div>
                </div>
                <div class="col-md-4 design-left">
                    <div class="design-text">
                        <img src="images/design-3.png" alt=""/>

                        <h3>2. Seleksi Masuk</h3>

                        <p>Setelah telah melewati proses administrasi, pendaftar akan diundang mengikuti tes tertulis
                            dan interview di Pribadi BBS Bandung.</p>
                    </div>
                </div>
                <div class="col-md-4 design-left">
                    <div class="design-text">
                        <img src="images/design-4.png" alt=""/>

                        <h3>3. Registrasi Ulang</h3>

                        <p>Registrasi ulang dilakukan di Pribadi BBS Bandung dengan membawa dokumen yang dibutuhkan
                            sesuai dengan ketentuan yang berlaku.</p>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!--End-design-->

    <!--Slider-Starts-Here-->
    <script>
        // You can also use "$(window).load(function() {"
        $(function () {
            // Slideshow 4
            $("#slider5").responsiveSlides({
                auto: true,
                pager: true,
                nav: true,
                speed: 500,
                namespace: "callbacks",
                before: function () {
                    $('.events').append("<li>before event fired.</li>");
                },
                after: function () {
                    $('.events').append("<li>after event fired.</li>");
                }
            });

        });
    </script>
    <!--End-slider-script-->
    <!---pop-up-box---->
    <script type="text/javascript" src="js/modernizr.custom.min.js"></script>
    <link href="css/popup-box.css" rel="stylesheet" type="text/css" media="all"/>
    <script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
    <!---//pop-up-box---->
    <div id="small-dialog" class="mfp-hide">
        <div class="login">
            <img src="images/work-1.jpg" alt=""/>
        </div>
    </div>
    <div id="small-dialog1" class="mfp-hide">
        <div class="login">
            <img src="images/work-2.jpg" alt=""/>
        </div>
    </div>
    <div id="small-dialog2" class="mfp-hide">
        <div class="login">
            <img src="images/work-3.jpg" alt=""/>
        </div>
    </div>
    <script>
        $(document).ready(function () {
            $('.popup-with-zoom-anim').magnificPopup({
                type: 'inline',
                fixedContentPos: false,
                fixedBgPos: true,
                overflowY: 'auto',
                closeBtnInside: true,
                preloader: false,
                midClick: true,
                removalDelay: 300,
                mainClass: 'my-mfp-zoom-in'
            });

        });
    </script>
    <!--start-footer-->
    <!-- requried-jsfiles-for owl -->
    <link href="css/owl.carousel.css" rel="stylesheet">
    <script src="js/owl.carousel.js"></script>
    <script>
        $(document).ready(function() {
            $("#owl-demo").owlCarousel({
                items : 5,
                lazyLoad : true,
                autoPlay : true,
                pagination : false,
            });
        });
    </script>
    <!-- //requried-jsfiles-for owl -->

    <!--start-touch-->
    <div class="touch">
        <div class="container">
            <div class="touch-main">
                <div class="col-md-4 touch-left">
                    <h3>Get in touch</h3>
                    <p>Jl. PHH Mustofa No. 41, Bandung</p>
                    <p>Telp: 022-7211674<p>
                    <p>E-mail:<a href="mailto:example@email.com">info@mypribadi.com</a>
                        <span><a href="mailto:example@email.com">bendaharapribadi@gmail.com</a></span></p>
                </div>
                <div class="col-md-4 touch-left">
                    <h3>@twitter</h3>
                    <p>@twitterCheck out this great #codecanyon item 'Responsive Login, Sign Up and Payment Form Wizard' codecanyon.net/item/responsiv…</p>
                    <label>about 2days ago</label>
                </div>
                <div class="col-md-4 touch-right">
                    <ul>
                        <li><a href="#"><span class="fb"> </span></a></li>
                        <li><a href="#"><span class="twt"> </span></a></li>
                        <li><a href="#"><span class="g"> </span></a></li>
                        <li><a href="#"><span class="p"> </span></a></li>
                        <li><a href="#"><span class="drb"> </span></a></li>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!--end-touch-->
@endsection