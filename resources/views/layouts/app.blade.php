<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="SemiColonWeb" />

    <!-- Stylesheets
    ============================================= -->
    <link href="{{ asset('http://fonts.googleapis.com/css?family=Lato:300,400,700|Arimo:400,700|Playfair+Display:400,400italic,700|Cookie') }}" rel="stylesheet" type="text/css" />
    <!-- font awesome css -->
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('style.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/dark.css') }}" type="text/css" />

    <!-- spa Demo Specific Stylesheet -->
    <link rel="stylesheet" href="{{ asset('spa.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/fonts/spa-icons.css') }}" type="text/css" />
    <!-- / -->

    <link rel="stylesheet" href="{{ asset('css/font-icons.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}" type="text/css" />

    <link rel="stylesheet" href="{{ asset('css/fonts.css') }}" type="text/css" />

    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />


    <link rel="stylesheet" href="{{ asset('css/colors.php?color=78c9d1') }}" type="text/css" />

    <!-- SLIDER REVOLUTION 5.x CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('include/rs-plugin/css/settings.css') }}" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{ asset('include/rs-plugin/css/layers.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('include/rs-plugin/css/navigation.css') }}">

    <!-- Document Title
    ============================================= -->
    <title> @yield('title')</title>

    <style>

        .tp-caption.Fashion-SmallText, .Fashion-SmallText,
        .tp-caption.Fashion-TextBlock, .Fashion-TextBlock {
            font-family: 'Lato';
            color: #FFF;
        }

        .tp-caption.Fashion-BigDisplay, .Fashion-BigDisplay {
            font-family: 'Cookie';
            letter-spacing: 1px;
            font-weight: 700;
            color: #FFF;
            text-transform: capitalize;
        }

        .restaurant-reviews .flex-control-nav {
            top: auto;
            bottom: 25px;
        }
    </style>
    <style>
.sticky-side-element {
    position: fixed;
    top: 50%;
    margin-top: -24px;
    left: auto;
    right: -31px;
    height: 48px;
    line-height: 48px;
    padding: 0 15px;
    background-color: #EEE;
    color: #222;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 1px;
    font-size: 14px;
    -webkit-transform: rotate(270deg);
    -ms-transform: rotate(270deg);
    -o-transform: rotate(270deg);
    transform: rotate(270deg);
}
</style>

</head>

<body class="stretched" data-loader-color="#103e4d">

    <!-- Document Wrapper
    ============================================= -->
    <div id="wrapper" class="clearfix">
   
        @yield('header')
        @yield('slider')

        <!-- Content
        ============================================= -->
        <section id="content">
            <div class="content-wrap notoppadding">
            <!-- Modal Contact Form
            ============================================= -->

            <div class="modal fade" id="contactFormModal" tabindex="-1" role="dialog" aria-labelledby="contactFormModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="contactFormModalLabel">Haz tu reserva</h4>
                        </div>
                        <div class="modal-body">

                            <div class="contact-widget">
                                <div class="contact-form-result"></div>
                                <form class="nobottommargin" id="template-contactform" name="template-contactform" action="include/sendemail.php" method="post">

                                    <div class="form-process"></div>

                                    <div class="col_half">
                                        <label for="template-contactform-name">Nombre <small>*</small></label>
                                        <input type="text" id="template-contactform-name" name="template-contactform-name" value="" class="sm-form-control required" />
                                    </div>

                                    <div class="col_half col_last">
                                        <label for="template-contactform-email">Email <small>*</small></label>
                                        <input type="email" id="template-contactform-email" name="template-contactform-email" value="" class="required email sm-form-control" />
                                    </div>

                                    <div class="clear"></div>

                                    <div class="col_half">
                                        <label for="template-contactform-phone">Teléfono</label>
                                        <input type="text" id="template-contactform-phone" name="template-contactform-phone" value="" class="sm-form-control" />
                                    </div>

                                    <div class="col_half col_last">
                                        <label for="template-contactform-subject">Tema <small>*</small></label>
                                        <input type="text" id="template-contactform-subject" name="template-contactform-subject" value="" class="required sm-form-control" />
                                    </div>

                                    <div class="col_full">
                                        <label for="template-contactform-message">Mensaje <small>*</small></label>
                                        <textarea class="required sm-form-control" id="template-contactform-message" name="template-contactform-message" rows="6" cols="30"></textarea>
                                    </div>

                                    <div class="col_full hidden">
                                        <input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="sm-form-control" />
                                    </div>

                                    <div class="col_full">
                                        <button class="button button-3d nomargin" type="submit" id="template-contactform-submit" name="template-contactform-submit" value="submit">Reservar</button>
                                    </div>

                                </form>

                            </div>


                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
            <!-- Modal Contact Form End -->
                @yield('content')
            </div>

        </section><!-- #content end -->

        <!-- Footer
        ============================================= -->
        <footer id="footer" class="dark">
        <div class="container">

                <!-- Footer Widgets
                ============================================= -->
                <div class="footer-widgets-wrap clearfix">

                    <div class="col_one_third">

                        <div class="widget clearfix">

                            <h4>PS Harmony & Beauty</h4>

                            <p><!--strong>Simple</strong>, <strong>Creative</strong> &amp; <strong>Flexible</strong> -->Un espacio de relax creado para vos.</p>

                            <div class="clearfix" style="padding: 10px 0;">
                                <div class="col_half">
                                    <address class="nobottommargin">
                                        <i class="fa fa-home"></i> 
                                        <abbr title="Headquarters" style="display: inline-block;margin-bottom: 7px;"><strong>Dirección:</strong></abbr>
                                        Villa Devoto, CABA<br>
                                    </address>
                                </div>
                                <div class="col_half col_last">
                                    <i class="fa fa-phone"></i> 
                                    <abbr title="Phone Number"><strong>Teléfono:</strong></abbr> (011) 15-53192-7025<br>                                     
                                </div>
                                <div class="col_half">
                                    <i class="fa fa-envelope"></i> 
                                    <abbr title="Email Address"><strong>Email:</strong></abbr> patricianseijo@gmail.com
                                </div>
                            </div>

                           

                            <!--<a href="#" class="social-icon si-small si-rounded topmargin-sm si-twitter">
                                <i class="icon-twitter"></i>
                                <i class="icon-twitter"></i>
                            </a>

                            <a href="#" class="social-icon si-small si-rounded topmargin-sm si-gplus">
                                <i class="icon-gplus"></i>
                                <i class="icon-gplus"></i>
                            </a>

                            <a href="#" class="social-icon si-small si-rounded topmargin-sm si-pinterest">
                                <i class="icon-pinterest"></i>
                                <i class="icon-pinterest"></i>
                            </a>

                            <a href="#" class="social-icon si-small si-rounded topmargin-sm si-vimeo">
                                <i class="icon-vimeo"></i>
                                <i class="icon-vimeo"></i>
                            </a>

                            <a href="#" class="social-icon si-small si-rounded topmargin-sm si-github">
                                <i class="icon-github"></i>
                                <i class="icon-github"></i>
                            </a>

                            <a href="#" class="social-icon si-small si-rounded topmargin-sm si-yahoo">
                                <i class="icon-yahoo"></i>
                                <i class="icon-yahoo"></i>
                            </a>

                            <a href="https://www.linkedin.com/in/patricia-seijo-9a983a14/?trk=public-profile-join-page" class="social-icon si-small si-rounded topmargin-sm si-linkedin">
                                <i class="icon-linkedin"></i>
                                <i class="icon-linkedin"></i>
                            </a>
                            -->

                        </div>

                    </div>

                    <div class="col_one_third">

                        <div class="widget clearfix">
                            <h4>Horario</h4>
                            <div class="clearfix"> 
                                <i class="fa fa-clock-o color"></i>                       
                                <abbr title="Apertura"><strong>Lun-Vie: </strong></abbr>9:00-21:00
                                <br>
                                <i class="fa fa-clock-o color"></i>                       
                                <abbr title="Apertura"><strong>Lab: </strong></abbr>9:00-15:00
                                <br>
                                <i class="fa fa-clock-o text-danger"></i>   
                                <abbr title="Cierre"><strong>Dom: </strong></abbr> Cerrado todo el día</p>
                            </div>
                             <a href="https://www.facebook.com/ps.harmony.9" class="social-icon si-small si-rounded topmargin-sm si-facebook">
                                <i class="icon-facebook"></i>
                                <i class="icon-facebook"></i>
                            </a>
                            <a href="https://www.instagram.com/psharmonybeauty" class="social-icon si-small si-rounded topmargin-sm si-pinterest">
                                <i class="icon-instagram"></i>
                                <i class="icon-instagram"></i>
                            </a>

                        </div>
                        <!--<div class="widget clearfix">
                            <h4>Cierre</h4>
                            <div class="clearfix"> 
                                 <i class="fa fa-clock-o"></i>   
                                <abbr title="Cierre"><strong>Sab-Dom:</strong></abbr> Todo el día</p>
                            </div>

                        </div>-->


                    </div>

                    <div class="col_one_third col_last">

                        <div class="widget quick-contact-widget clearfix">

                            <h4>Localización</h4>

                            <div class="quick-contact-form-result"></div>
                            <!-- Google Map
                            ============================================= -->
                            <section id="google-map-footer" class="gmap"></section>

                        </div>

                    </div>

                </div><!-- .footer-widgets-wrap end -->

            </div>

            <!-- Copyrights
            ============================================= -->
            <div id="copyrights">

                <div class="container center clearfix">
                    <p>&copy; 2017 Todos los derechos reservados. Desarrollado <i class="fa fa-heart"></i> por <a target="_blank" href="http://www.creadoreswebs.es">Creadoreswebs</a></p>
                </div>

            </div><!-- #copyrights end -->

        </footer><!-- #footer end -->

    </div><!-- #wrapper end -->

    <!-- Go To Top
    ============================================= -->
    <div id="gotoTop" class="icon-angle-up"></div>
    <a href="#" data-toggle="modal" data-target="#contactFormModal" class="sticky-side-element">Reservar Ahora</a>

    <!-- External JavaScripts
    ============================================= -->
    <script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/plugins.js') }}"></script>

    <!-- Footer Scripts
    ============================================= -->
    <script type="text/javascript" src="{{ asset('js/functions.js') }}"></script>

    <!-- SLIDER REVOLUTION 5.x SCRIPTS  -->
    <script type="text/javascript" src="{{ asset('include/rs-plugin/js/jquery.themepunch.tools.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('include/rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>

    <script type="text/javascript" src="{{ asset('include/rs-plugin/js/extensions/revolution.extension.video.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('include/rs-plugin/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('include/rs-plugin/js/extensions/revolution.extension.actions.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('include/rs-plugin/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('include/rs-plugin/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('include/rs-plugin/js/extensions/revolution.extension.navigation.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('include/rs-plugin/js/extensions/revolution.extension.migration.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('include/rs-plugin/js/extensions/revolution.extension.parallax.min.js') }}"></script>
    <!-- GOOGLE MAPS  -->
    <script type="text/javascript" src="https://maps.google.com/maps/api/js?key=AIzaSyB8-3XZKfofrgR5P9gUJlpCBATeE3y27LY"></script>
    <script type="text/javascript" src="js/jquery.gmap.js"></script>
    <script type="text/javascript">

        jQuery('#google-map-footer').gMap({

            latitude: -34.6,
            longitude: -58.516667,
            maptype: 'ROADMAP',
            zoom: 9,
            markers: [
                {
                    address: "Villa Devoto, CABA, Argentina",
                    html: '<div style="width: 300px;"><h4 style="margin-bottom: 8px;">PS <span>Harmony & Beauty</span></h4><p class="nobottommargin">Aqui ira la información esencial para el negocio.</p></div>',
                    icon: {
                        image: "images/icons/map-icon-red.png",
                        iconsize: [32, 39],
                        iconanchor: [13,39]
                    }
                }
            ],
            doubleclickzoom: false,
            controls: {
                panControl: true,
                zoomControl: true,
                mapTypeControl: true,
                scaleControl: false,
                streetViewControl: false,
                overviewMapControl: false
            }
        });

    </script>
    <script type="text/javascript">

        jQuery('#google-map-contact').gMap({

            latitude: -34.6,
            longitude: -58.516667,
            maptype: 'ROADMAP',
            zoom: 9,
            markers: [
                {
                    address: "Villa Devoto, CABA, Argentina",
                    html: '<div style="width: 300px;"><h4 style="margin-bottom: 8px;">PS <span>Harmony & Beauty</span></h4><p class="nobottommargin">Aqui ira la información esencial para el negocio.</p></div>',
                    icon: {
                        image: "images/icons/map-icon-red.png",
                        iconsize: [32, 39],
                        iconanchor: [13,39]
                    }
                }
            ],
            doubleclickzoom: false,
            controls: {
                panControl: true,
                zoomControl: true,
                mapTypeControl: true,
                scaleControl: false,
                streetViewControl: false,
                overviewMapControl: false
            }
        });

    </script>

    <script type="text/javascript">
        var tpj=jQuery;
        var revapi31;
        tpj(document).ready(function() {
            if(tpj("#rev_slider_679_1").revolution == undefined){
                revslider_showDoubleJqueryError("#rev_slider_679_1");
            }else{
                revapi31 = tpj("#rev_slider_679_1").show().revolution({
                    sliderType:"standard",
                    jsFileLocation:"include/rs-plugin/js/",
                    sliderLayout:"fullwidth",
                    dottedOverlay:"none",
                    delay:16000,
                    hideThumbs:200,
                    thumbWidth:100,
                    thumbHeight:50,
                    thumbAmount:5,
                    navigation: {
                        keyboardNavigation: "on",
                        keyboard_direction: "horizontal",
                        mouseScrollNavigation: "off",
                        onHoverStop: "off",
                        touch: {
                            touchenabled: "on",
                            swipe_threshold: 75,
                            swipe_min_touches: 1,
                            swipe_direction: "horizontal",
                            drag_block_vertical: false
                        },
                        arrows: {
                            style: "hades",
                            enable: true,
                            hide_onmobile: false,
                            hide_onleave: false,
                            tmp: '<div class="tp-arr-allwrapper">   <div class="tp-arr-imgholder"></div></div>',
                            left: {
                                h_align: "left",
                                v_align: "center",
                                h_offset: 10,
                                v_offset: 0
                            },
                            right: {
                                h_align: "right",
                                v_align: "center",
                                h_offset: 10,
                                v_offset: 0
                            }
                        },
                    },
                    responsiveLevels:[1140,1024,778,480],
                    visibilityLevels:[1140,1024,778,480],
                    gridwidth:[1140,1024,778,480],
                    gridheight:[700,768,960,720],
                    lazyType:"none",
                    shadow:0,
                    spinner:"off",
                    stopLoop:"off",
                    stopAfterLoops:-1,
                    stopAtSlide:-1,
                    shuffle:"off",
                    autoHeight:"off",
                    fullScreenAutoWidth:"off",
                    fullScreenAlignForce:"off",
                    fullScreenOffsetContainer: "",
                    fullScreenOffset: "0px",
                    hideThumbsOnMobile:"off",
                    hideSliderAtLimit:0,
                    hideCaptionAtLimit:0,
                    hideAllCaptionAtLilmit:0,
                    debugMode:false,
                    fallbacks: {
                        simplifyAll:"off",
                        nextSlideOnWindowFocus:"off",
                        disableFocusListener:false,
                    }
                });
            }

            revapi31.bind("revolution.slide.onloaded",function (e) {
                setTimeout( function(){ SEMICOLON.slider.sliderParallaxDimensions(); }, 200 );
            });

            revapi31.bind("revolution.slide.onchange",function (e,data) {
                SEMICOLON.slider.revolutionSliderMenu();
            });
        }); /*ready*/
    </script>
    <script type="text/javascript">

        jQuery(window).load(function(){

            var $container = $('#demo-gallery');
            $('#portfolio-filter a').click(function(){
                $('#portfolio-filter li').removeClass('activeFilter');
                $(this).parent('li').addClass('activeFilter');
                var selector = $(this).attr('data-filter');
                $container.isotope({ filter: selector });
                return false;
            });

        });


    </script>

</body>
</html>