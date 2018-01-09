
<!-- ======================================= 
            ==start Seassion booking section== 
        =======================================-->
<section id="section-contact" class="section nomargin nobottompadding nobg page-section">
    <div class="row clearfix">
        <div class="col-sm-5 col-sm-offset-1 col-xs-10 col-xs-offset-1">
            <div class="heading-block nobottomborder bottommargin-sm">
                <h3 class="cookie-font capitalize color">Reservar ahora</h3>
            </div>

            <div class="contact-widget">
                <div class="contact-form-result"></div>
                <form class="nobottommargin" id="template-contactform" name="template-contactform" action="include/sendemail.php" method="post">

                    <div class="form-process"></div>

                    <div class="col_half">
                        <label for="template-contactform-name">Nombre <small>*</small></label>
                        <input type="text" id="template-contactform-name" name="template-contactform-name" value="" class="sm-form-control required" />
                    </div>

                    <div class="col_half col_last">
                        <label for="template-contactform-phone">Teléfono</label>
                        <input type="text" id="template-contactform-phone" name="template-contactform-phone" value="" class="sm-form-control" />
                    </div>

                    <div class="clear"></div>

                    <div class="col_half">
                        <label for="template-contactform-email">Email <small>*</small></label>
                        <input type="email" id="template-contactform-email" name="template-contactform-email" value="" class="required email sm-form-control" />
                    </div>
                    <div class="col_half col_last">
                        <label for="template-contactform-subject">Tema <small>*</small></label>
                        <input type="text" id="template-contactform-subject" name="template-contactform-subject" value="" class="required sm-form-control" />
                    </div>

                    <div class="clear"></div>

                    <div class="col_full">
                        <label for="template-contactform-message">Mensaje <small>*</small></label>
                        <textarea class="required sm-form-control" id="template-contactform-message" name="template-contactform-message" rows="6" cols="30"></textarea>
                    </div>

                    <div class="col_full hidden">
                        <input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="sm-form-control" />
                    </div>

                    <div class="col_full nobottommargin">
                        <button class="button button-3d nomargin" type="submit" id="template-contactform-submit" name="template-contactform-submit" value="submit">Enviar Mensaje</button>
                    </div>

                </form>

            </div>
        </div>
        <div class="col-sm-6">
            <img class="topmargin" src="{{ asset('images/others/3.jpg') }}" alt="">
        </div>
    </div>
</section>
    <!-- ======================================= 
            ==End Seassion booking section== 
    =======================================-->


{{-- <section id="reservations" class="section reservations">
            <div class="container">
                    <div class="jt_row jt_row-fluid row">
                        <div class="col-md-12 jt_col column_container">
                        <div class="voffset100"></div>
                            <h2 class="section-title">Reservas</h2>
                        </div> 
                        <div class="col-md-6 col-md-offset-3 jt_col column_container">    
                            <div class="section-subtitle">
                                Reserva tu mesa ahora
                            </div>
                        </div>
                        <div class="col-md-12 jt_col column_container">
                        <div class="reservations_logo"></div>
                        <div class="voffset40"></div>

                            <h4><span class="above">Bienvenisod a La Manduca</span></h4>
                            <h3>Reservar ahora</h3>
                            <h4><span>Abierto</span></h4>
                            <div class="voffset50"></div>
                            <!--<p><strong>Domingo a Martes</strong> 09.00 - 24:00 <strong>Viernes y Domingos</strong> 08:00 - 03.00</p>-->
                            <p><strong>Todos los dias</strong></p>
                            <h3 class="reservation-phone">971 31 68 54</h3>
                        </div> 
                        {!!Form::open(['id'=>'reservationform','class'=>'contact-form','name'=>'eservationform'])!!}
                        <div class="col-md-5 col-md-offset-1 jt_col column_container">
                            <p>Reservar la mesa</p>
                            {!!form::text('reservation_datepicker',null,['id'=>'reservation_datepicker','class'=>'text datepicker required','placeholder'=>'Día','required' => ''])!!}
                                           
                            {!!form::text('reservation_time',null,['id'=>'reservation_time','class'=>'text time required','placeholder'=>'Hora','required' => ''])!!}
                              
                            
                            {!!form::number('reservation_person',null,['id'=>'reservation_person','class'=>'text person required','placeholder'=>'Personas','required' => ''])!!}
                        </div>         
                        <div class="col-md-5 jt_col column_container">    
                            <p>Detalles Contacto</p> 
                            {!!form::text('reservation_name',null,['id'=>'reservation_name','class'=>'text reservation_name required','placeholder'=>'Nombre','required' => ''])!!}
                            {!!form::email('reservation_email',null,['id'=>'reservation_email','class'=>'tex email required','placeholder'=>'Correo Electrónico','required' => ''])!!}
                            {!!form::number('reservation_phone',null,['id'=>'reservation_phone','class'=>'text reservation_phone required','placeholder'=>'Teléfono','required' => ''])!!}
                            
                        </div> 
                        <div class="col-md-10 col-md-offset-1 jt_col column_container">  
                                {!!form::textarea('reservation_mensaje',null,['id'=>'reservation_mensaje','class'=>'text area required','placeholder'=>'Mensaje','rows'=>'6','required' => ''])!!}  
                            </div>
                            <div class="col-md-4 col-md-offset-4 jt_col column_container">    
                                 {!!form::button('Reservar', ['name'=>'submit','id'=>'send-message-booking','class'=>'button reservation center'])!!}                          
                            </div>       
                    {!!Form::close()!!}
                    <script src="{{ asset('js/jquery.js') }}"></script>
                    <script src="{{ asset('datePicker/js/bootstrap-datepicker.js') }}"></script>
                    <script src="{{ asset('datePicker/locales/bootstrap-datepicker.es.min.js') }}"></script>
                    <script>
                        $('.datepicker').datepicker({
                        format: "dd/mm/yyyy",
                        language: "es",
                        autoclose: true
                        });
                    </script>
                    <script>
                    // SESERVATION TABLE
                    
                    $("#send-message-booking").click(function(event) {
                        $("#reservationform").valid();
                        var token_reservation = $("input[name=_token]").val();
                        var name_reservation = $("#reservation_name").val();
                        var phone_reservation = $("#reservation_phone").val();
                        var email_reservation = $("#reservation_email").val();
                        var datepicker_reservation = $("#reservation_datepicker").val();
                        var time_reservation = $("#reservation_time").val();
                        var person_reservation = $("#reservation_person").val();
                        var mensaje_reservation = $("#reservation_mensaje").val();
                        var route_reservation = "{{route('book.store')}}";
                        var form_btn_reservation = $("#send-message-booking");
                        var form_result_div_reservation = '#form-result-reservation';
                        $(form_result_div_reservation).remove();
                        form_btn_reservation.before('<div id="form-result-reservation" class="alert alert-success" role="alert" style="display: none;"></div>');
                        var form_btn_reservation_old_msg = form_btn_reservation.html();
                        form_btn_reservation.html(form_btn_reservation.prop('disabled', true).data("loading-text"));
                        $.ajax({
                            url:route_reservation,
                            headers:{'X-CSRF-TOKEN':token_reservation},
                            type:'post',
                            datatype: 'json',
                            data: {name: name_reservation,phone:phone_reservation, email: email_reservation, datepicker: datepicker_reservation,time:time_reservation,person: person_reservation, mensaje: mensaje_reservation},
                            success: function(data) {
                                if (data.success == 'true') {
                                    $(".form-control").val('');
                                    document.getElementById("reservationform").reset();
                                }
                                form_btn_reservation.prop('disabled', false).html(form_btn_reservation_old_msg);
                                $(form_result_div_reservation).html("<div class='formSent'><strong>Tu mensaje ha sido enviado!</strong> le responderemos lo antes posible.</div>").fadeIn('slow');
                                setTimeout(function() { $(form_result_div_reservation).fadeOut('slow'); }, 6000);
                            },
                            error: function(data) {
                                form_btn_reservation.prop('disabled', false).html(form_btn_reservation_old_msg);
                                $(form_result_div_reservation).html("<div class='formSent'><strong>Erroar al enviar el mensaje!</strong> Por favor, intentelo de nuevo.</div>").fadeIn('slow').fadeIn('slow');
                                setTimeout(function() { $(form_result_div_reservation).fadeIn('slow'); }, 6000);
                            }
                        });

                    });
                    </script> 
                        <div class="col-md-12 jt_col column_container">
                        <div class="voffset60"></div>
                            <div class="ornament"></div>
                        </div>
                    </div>
                    
            </div>
        </section> --}}

        
        

  