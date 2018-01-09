<!-- ======================================= 
        ==Start Contact-info section== 
    =======================================-->
<!-- Page Title
        ============================================= -->
        
        <section id="content">

            <div class="content-wrap">

                <div class="container clearfix">

                    <!-- Postcontent
                    ============================================= -->
                    <div class="postcontent nobottommargin">

                        <h3>Contacto</h3>

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
                                    <button class="button button-3d nomargin" type="submit" id="template-contactform-submit" name="template-contactform-submit" value="submit">Enviar Mensaje</button>
                                </div>

                            </form>
                        </div>

                    </div><!-- .postcontent end -->

                    <!-- Sidebar
                    ============================================= -->
                    <div class="sidebar col_last topmargin-lg">

                        <address>
                            <strong>Dirección:</strong><br>
                            Villa Devoto, CABA<br>
                        </address>
                        <abbr title="Phone Number"><strong>Teléfono:</strong></abbr> (011) 15-53192-7025<br>
                        <abbr title="Email Address"><strong>Email:</strong></abbr> patricianseijo@gmail.com

                        <!--<div class="widget noborder notoppadding">

                            <div class="fslider customjs testimonial twitter-scroll twitter-feed" data-username="envato" data-count="3" data-animation="slide" data-arrows="false">
                                <i class="i-plain i-small color icon-twitter nobottommargin" style="margin-right: 15px;"></i>
                                <div class="flexslider" style="width: auto;">
                                    <div class="slider-wrap">
                                        <div class="slide"></div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        -->

                        <div class="widget noborder notoppadding">

                            <a href="https://www.facebook.com/ps.harmony.9" class="social-icon si-small si-dark si-facebook">
                                <i class="icon-facebook"></i>
                                <i class="icon-facebook"></i>
                            </a>
                            <a href="https://www.instagram.com/psharmonybeauty" class="social-icon si-small si-dark si-pinterest">
                                <i class="icon-instagram"></i>
                                <i class="icon-instagram"></i>
                            </a>

                            <!--<a href="#" class="social-icon si-small si-dark si-twitter">
                                <i class="icon-twitter"></i>
                                <i class="icon-twitter"></i>
                            </a>

                            <a href="#" class="social-icon si-small si-dark si-dribbble">
                                <i class="icon-dribbble"></i>
                                <i class="icon-dribbble"></i>
                            </a>

                            <a href="#" class="social-icon si-small si-dark si-forrst">
                                <i class="icon-forrst"></i>
                                <i class="icon-forrst"></i>
                            </a>

                            <a href="#" class="social-icon si-small si-dark si-pinterest">
                                <i class="icon-pinterest"></i>
                                <i class="icon-pinterest"></i>
                            </a>

                            <a href="#" class="social-icon si-small si-dark si-gplus">
                                <i class="icon-gplus"></i>
                                <i class="icon-gplus"></i>
                            </a>-->

                        </div>

                    </div><!-- .sidebar end -->

                </div>

            </div>

        </section><!-- #content end -->
        <!-- Google Map
        ============================================= -->
        <section id="google-map-contact" class="gmap"></section>
        <!-- Content
        ============================================= -->
    <!-- ======================================= 
        ==End Contact-info section==  
    =======================================-->

    


<!-- BEGIN CONTACT SECTION -->
        {{--  <section id="contact" class="section contact dark">
            <div class="container">
                <div class="jt_row jt_row-fluid row">

                    <div class="col-md-12 jt_col column_container">
                    <div class="voffset100"></div>
                        <h2 class="section-title">Contacto</h2>
                    </div>
                    <div class="col-md-6 col-md-offset-3 jt_col column_container">
                        <div class="section-subtitle">
                            Tu dirección, Ibiza (España)   971 31 68 54
                        </div>
                    </div>
                    {!!Form::open(['id'=>'contactform','class'=>'contact-form','name'=>'contactform'])!!}
                        <div class="col-md-6 jt_col column_container">
                            
                            {!!form::text('name',null,['id'=>'name','class'=>'text name required','placeholder'=>'Nombre','required' => ''])!!}
                                           
                            {!!form::email('email',null,['id'=>'email','class'=>'tex email required','placeholder'=>'Correo Electrónico','required' => ''])!!}
                              
                            
                            {!!form::text('subject',null,['id'=>'subject','placeholder'=>'Tema','required' => ''])!!}
                        </div>    
                        <div class="col-md-6 jt_col column_container">    
                            {!!form::textarea('mensaje',null,['id'=>'message','class'=>'text area required','placeholder'=>'Mensaje','rows'=>'10','required' => ''])!!}
                        </div>     
                        <div class="col-md-4 col-md-offset-4 jt_col column_container"> 
                                {!!form::button('Enviar', ['name'=>'submit','id'=>'send-message','class'=>'button contact center'])!!}
                        </div>        
                    {!!Form::close()!!}
                    <script src="{{ asset('js/jquery.js')}}"></script>
                    <script>
                    // SESERVATION TABLE
              
                    $("#send-message").click(function(event) {
                        $("#contactform").valid();
                        var token = $("input[name=_token]").val();
                        var name = $("#name").val();
                        var email = $("#email").val();
                        var subject = $("#subject").val();
                        var mensaje = $("#message").val();
                        var route = "{{route('contact.store')}}";
                        var form_btn = $("#send-message");
                        var form_result_div = '#form-result';
                 
                        $(form_result_div).remove();
                        form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
                        var form_btn_old_msg = form_btn.html();
                        form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
                        $.ajax({
                            url:route,
                            headers:{'X-CSRF-TOKEN':token},
                            type:'post',
                            datatype: 'json',
                            data: {name: name,email: email, subject: subject,mensaje:mensaje },
                            success: function(data) {
                                if (data.success == 'true') {
                                    $(".form-control").val('');
                                    document.getElementById("contactform").reset();
                                }
                                form_btn.prop('disabled', false).html(form_btn_old_msg);
                                $(form_result_div).html("<div class='formSent'><strong>Tu mensaje ha sido enviado!</strong> Gracias por contactar con nosotros.</div>").fadeIn('slow');
                                setTimeout(function() { $(form_result_div).fadeOut('slow'); }, 6000);
                            },
                            error: function(data) {
                                form_btn.prop('disabled', false).html(form_btn_old_msg);
                                $(form_result_div).html("<div class='formSent'><strong>Erroar al enviar el mensaje!</strong> Por favor, intentelo de nuevo.</div>").fadeIn('slow').fadeIn('slow');
                                setTimeout(function() { $(form_result_div).fadeIn('slow'); }, 6000);
                            }
                        });

                    });
                    </script>    
            
                    <div class="voffset100"></div>
                </div>
                    <div class="voffset50"></div>
            </div>
            
        </section>
        --}}
        <!-- END CONTACT SECTION -->
  

