<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuestionario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="{{asset('js/alertify.min.js')}}"> </script>
       <link rel="stylesheet" href="{{asset('css/alertify.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />


    <link rel="icon" type="image/png" href="/images/escudo_borde.png" />

</head>
<body  id="quiz-body" >
                        <header class="header">
                            <center>
                                <img src="/images/logo1.png" style="max-width:22em; margin-top:0.5em">
                            </center>
                        </header>
                <section id="quiz-container" class="container d-flex justify-content-center ">

                     

                                <form action="#" id="cuestionario_covid" name="cuestionario_covid" class="form   col-12  col-sm-9 col-md-7" enctype="multipart/form-data">
                           

                                    <div id="box1" class="mb-3 questionBox border rounded-top rounded-bottom"  >
                                        
                                        <label for="" class="form__labbel form-label mb-4 mt-2 ms-2">
                                                <p >1. ¿Tienes alguna enfermedad crónico degenerativa?<br> (diabetes, hipertensión arterial, asma, lupus, artritis, tuberculosis, enfermedad pulmonar, cáncer) </p>
                                        </label>
                                       
                                                  <div class="form__options ms-4 mb-4">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="p1" value="Si" id='p1r1'  >
                                                                <label class="form-check-label" for="p1r1">
                                                                        Si
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="p1"  value="No"  id='p1r2'  >
                                                                <label class="form-check-label" for="p1r2">
                                                                       No
                                                                </label>
                                                            </div>
                                                  </div>


                                        <div class=" d-flex justify-content-end  me-2 mb-2">
                                            <a id="btn-next1" type="" class="btn form__buttom-next">Siguiente </a>
                                        </div>
                                    </div>

                                    <div id="box2" class="mb-3 questionBox border rounded-top rounded-bottom" style="display: none;" >
                                        
                                        <label for="" class="form__labbel form-label mb-4 mt-2 ms-2">
                                                <p class="">2.- ¿Cuál enfermedad crónica degenerativa padeces?</p>
                                        </label>
                                       
                                                  <div class="form__options ms-4 mb-4">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="p2" id="p2r1" value="Diabetes Mellitus" name="p2">
                                                                <label class="form-check-label" for="p2r1"  >
                                                                    Diabetes Mellitus

                                                                </label>
                                                            </div>

                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio"  id="p2r2" value="Hipertensión Arterial" name="p2">
                                                                <label class="form-check-label" for="p2r2">
                                                                    Hipertensión Arterial

                                                                </label>
                                                            </div>
                                                           
                                                           

                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio"  id="p2r3" value="Cáncer" name="p2" >
                                                                <label class="form-check-label" for="p2r3">
                                                                    Cáncer
                                                                </label>
                                                            </div>

                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio"  id="p2r4" value="Artritis Reumatoide." name="p2">
                                                                <label class="form-check-label" for="p2r4">
                                                                    Artritis Reumatoide
                                                                </label>
                                                            </div>

                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio"  id="p2r5" value="Lupus Eritematoso sistémico" name="p2">
                                                                <label class="form-check-label" for="p2r5">
                                                                    Lupus Eritematoso Sistémico
                                                                </label>
                                                            </div>

                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio"  id="p2r6" value="Otra" name="p2">
                                                                <label class="form-check-label" for="p2r6" >
                                                                    Otra
                                                                </label>
                                                            </div>
                                                  </div>


                                        <div class=" d-flex justify-content-end  me-2 mb-2">
                                            <a  id="btn-next2" type="" class="btn form__buttom-next">Siguiente</a>
                                        </div>
                                    </div>

                                    <div id="box3" class="mb-3 questionBox border rounded-top rounded-bottom"  style="display: none;">
                                        
                                        <label for="" class="form__labbel form-label mb-4 mt-2 ms-2">
                                                <p class="">3.-¿ Algún familiar, conocido, amigo ha estado enfermo de sars-cov-2 (Covid-19) ? </p>
                                        </label>
                                       
                                                  <div class="form__options ms-4 mb-4">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio"  id="p3r1" value="Si" name="p3" required >
                                                                <label class="form-check-label" for="p3r1">
                                                               Si 
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" id="p3r2" value="No" name="p3" >
                                                                <label class="form-check-label" for="p3r2" >
                                                                No
                                                                </label>
                                                            </div>
                                                  </div>


                                        <div class=" d-flex justify-content-end  me-2 mb-2">
                                            <a  id="btn-next3" type="" class="btn form__buttom-next">Siguiente</a>
                                        </div>
                                    </div>


                                    <div id="box4" class="mb-3 questionBox border rounded-top rounded-bottom" style="display: none;" >
                                        
                                        <label for="" class="form__labbel form-label mb-4 mt-2 ms-2">
                                                <p class="">4.-¿Hace cuánto tiempo estuvo enfermo de covid-19?</p>
                                        </label>
                                                  <div class="form__options ms-4 mb-4">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="p4" id="p4r1" value="1 a 4 días">
                                                                <label class="form-check-label" for="p4r1">
                                                                    1 a 4 días
                                                                </label>
                                                            </div>


                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="p4" id="p4r2" value="hace 5 a 7 días" >
                                                                <label class="form-check-label" for="p4r2">
                                                                    hace 5 a 7 días
                                                                </label>
                                                            </div>

                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="p4" id="p4r3" value="de 7 a 10 días" >
                                                                <label class="form-check-label" for="p4r3">
                                                                    de 7 a 10 días
                                                                </label>
                                                            </div>

                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="p4" id="p4r4"  value="ya hace 15 días">
                                                                <label class="form-check-label" for="p4r4">
                                                                    ya hace 15 días
                                                                </label>
                                                            </div>

                                                            
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="p4" id="p4r5" value="hace más de 1 unmes" >
                                                                <label class="form-check-label" for="p4r5">
                                                                    hace más de 1 un mes
                                                                </label>
                                                            </div>


                                                            


                                                  </div>


                                        <div class=" d-flex justify-content-end  me-2 mb-2">
                                            <a id="btn-next4" type="" class="btn form__buttom-next">Siguiente</a>
                                        </div>
                                    </div>


                                    <div id="box5" class="mb-3  questionBox border rounded-top rounded-bottom" style="display: none;" >
                                        
                                        <label for="" class="form__labbel form-label mb-4 mt-2 ms-2">
                                                <p class="">5.- ¿Tú o algún miembro cercano de tu familia, estuvo en contacto directo con él?  </p>
                                        </label>
                                       
                                                  <div class="form__options ms-4 mb-4">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="p5" id="p5r1" value="1">
                                                                <label class="form-check-label" for="p5r1">
                                                               Si 
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="p5" id="p5r2" value="0">
                                                                <label class="form-check-label" for="p5r2" >
                                                                No
                                                                </label>
                                                            </div>
                                                  </div>


                                        <div class=" d-flex justify-content-end  me-2 mb-2">
                                            <a  id="btn-next5" type="" class="btn form__buttom-next">Siguiente</a>
                                        </div>
                                    </div>



                                    <div id="box6" class="mb-3 questionBox border rounded-top rounded-bottom" style="display: none;">
                                        
                                        <label for="" class="form__labbel form-label mb-4 mt-2 ms-2">
                                                <p class="">6.- ¿Te has sentido con cuerpo cortado o malestar corporal recientemente?</p>
                                        </label>
                                       
                                                  <div class="form__options ms-4 mb-4">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="p6" id="p6r1" value="1">
                                                                <label class="form-check-label" for="p6r1">
                                                               Si 
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="p6" id="p6r2" value="0">
                                                                <label class="form-check-label" for="p6r2" >
                                                                    No
                                                                </label>
                                                            </div>
                                                  </div>


                                        <div class=" d-flex justify-content-end  me-2 mb-2">
                                            <a id="btn-next6" type="" class="btn form__buttom-next">Siguiente</a>
                                        </div>
                                    </div>



                                    <div id="box7" class="mb-3 questionBox border rounded-top rounded-bottom" style="display: none;">
                                        
                                        <label for="" class="form__labbel form-label mb-4 mt-2 ms-2">
                                                <p class="">7.- ¿Has tenido fiebre?</p>
                                        </label>
                                       
                                                  <div class="form__options ms-4 mb-4">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="p7" id="p7r1" value="2" >
                                                                <label class="form-check-label" for="p7r1">
                                                               Si 
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="p7" id="p7r2" value="0" >
                                                                <label class="form-check-label" for="p7r2" >
                                                                No
                                                                </label>
                                                            </div>
                                                  </div>


                                        <div class=" d-flex justify-content-end  me-2 mb-2">
                                            <a id="btn-next7" type="" class="btn form__buttom-next">Siguiente</a>
                                        </div>
                                    </div>
                                    

                                    <div id="box8" class="mb-3 questionBox border rounded-top rounded-bottom" style="display: none;">
                                        
                                        <label for="" class="form__labbel form-label mb-4 mt-2 ms-2">
                                                <p class="">8.- ¿Has tenido Tos? </p>
                                        </label>
                                       
                                                  <div class="form__options ms-4 mb-4">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="p8" id="p8r1" value="2">
                                                                <label class="form-check-label" for="p8r1">
                                                               Si 
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="p8" id="p8r2" value="0">
                                                                <label class="form-check-label" for="p8r2" >
                                                                No
                                                                </label>
                                                            </div>
                                                  </div>


                                        <div class=" d-flex justify-content-end  me-2 mb-2">
                                            <a id="btn-next8" type="" class="btn form__buttom-next">Siguiente</a>
                                        </div>
                                    </div>


                               

                                    <div  id="box9" class="mb-3  questionBox border rounded-top rounded-bottom" style="display: none;">
                                        
                                        <label for="" class="form__labbel form-label mb-4 mt-2 ms-2">
                                                <p class="">9.- ¿Has tenido malestar en la garganta (dolor o irritación)?</p>
                                        </label>
                                       
                                                  <div class="form__options ms-4 mb-4">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="p9" id="p9r1" value="1">
                                                                <label class="form-check-label" for="p9r1">
                                                               Si 
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="p9" id="p9r2" value="0" >
                                                                <label class="form-check-label" for="p9r2" >
                                                                No
                                                                </label>
                                                            </div>
                                                  </div>


                                        <div class=" d-flex justify-content-end  me-2 mb-2">
                                            <a id="btn-next9" type="" class="btn form__buttom-next">Siguiente</a>
                                        </div>
                                    </div>


                                    <div   id="box10" class="mb-3 questionBox border rounded-top rounded-bottom" style="display: none;">
                                        
                                        <label for="" class="form__labbel form-label mb-4 mt-2 ms-2">
                                                <p class="">10.- ¿Tienes o tuviste recientemente gripe? </p>
                                        </label>
                                       
                                                  <div class="form__options ms-4 mb-4">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="p10" id="p10r1" value="1">
                                                                <label class="form-check-label" for="p10r1">
                                                               Si 
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="p10" id="p10r2" name="0" value="0">
                                                                <label class="form-check-label" for="p10r2" >
                                                                No
                                                                </label>
                                                            </div>
                                                  </div>


                                        <div class=" d-flex justify-content-end  me-2 mb-2">
                                            <a id="btn-next10" type="" class="btn form__buttom-next">Siguiente</a>
                                        </div>
                                    </div>



                                    <div  id="box11" class="mb-3 questionBox border rounded-top rounded-bottom" style="display: none;">
                                        
                                        <label for="" class="form__labbel form-label mb-4 mt-2 ms-2">
                                                <p class="">11.- ¿Tienes o has tenido dificultad para respirar?  </p>
                                        </label>
                                       
                                                  <div class="form__options ms-4 mb-4">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="p11" id="p11r1" value="1">
                                                                <label class="form-check-label" for="p11r1">
                                                               Si 
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="p11" id="p11r2" value="0">
                                                                <label class="form-check-label" for="p11r2" >
                                                                No
                                                                </label>
                                                            </div>
                                                  </div>


                                        <div class=" d-flex justify-content-end  me-2 mb-2">
                                            <a  id="btn-next11" id="btn-next10" type="" class="btn form__buttom-next">Siguiente</a>
                                        </div>
                                    </div>

                                    <div  id="box12" class="mb-3 questionBox border rounded-top rounded-bottom" style="display: none;">
                                        
                                        <label for="" class="form__labbel form-label mb-4 mt-2 ms-2">
                                                <p class="">12.- ¿Tienes o has tenido algún síntoma gastrointestinal (diarrea, dolor abdominal)?</p>
                                        </label>
                                       
                                                  <div class="form__options ms-4 mb-4">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="p12" id="p12r1"  value="1">
                                                                <label class="form-check-label" for="p12r1">
                                                               Si 
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="p12" id="p12r2" value="0">
                                                                <label class="form-check-label" for="p12r2" >
                                                                No
                                                                </label>
                                                            </div>
                                                  </div>


                                        <div class=" d-flex justify-content-end  me-2 mb-2">
                                            <a  id="btn-next12" type="" class="btn form__buttom-next">Siguiente</a>
                                        </div>
                                    </div>


                                    <div  id="box13" class="mb-3 questionBox border rounded-top rounded-bottom" style="display: none;">
                                        
                                        <label for="" class="form__labbel form-label mb-4 mt-2 ms-2">
                                                <p class="">13.- Con referencia a las preguntas anteriores que hacen referencia a los síntomas ¿te has atendido con?:</p>
                                        </label>
                                       
                                                  <div class="form__options ms-4 mb-4">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="p13" id="p13r1" value="Médico particular">
                                                                <label class="form-check-label" for="p13r1">
                                                                    Médico particular
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="p13" id="p13r2" value="Médico de (IMSS, ISSSTE, ISSSTEP, SSA)" >
                                                                <label class="form-check-label" for="p13r2">
                                                                    Médico de; IMSS, ISSSTE, ISSSTEP o SSA
                                                                </label>
                                                            </div>

                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="p13" id="p13r3" value="Te has auto medicado">
                                                                <label class="form-check-label" for="p13r3">
                                                                    Te has auto medicado
                                                                </label>
                                                            </div>

                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="p13" id="p13r4" value="Nada" >
                                                                <label class="form-check-label" for="p13r4">
                                                                    Nada
                                                                </label>
                                                            </div>
                                                         
                                                  </div>


                                        <div class=" d-flex justify-content-end  me-2 mb-2">
                                            <a id="btn-next13" type="" class="btn form__buttom-next">Siguiente</a>
                                        </div>
                                    </div>
                                    


                                    <div  id="box14" class="mb-3  questionBox border rounded-top rounded-bottom" style="display: none;">
                                        
                                        <label for="" class="form__labbel form-label mb-4 mt-2 ms-2">
                                                <p class="">14.- ¿Qué medio de transporte usas a diario?</p>
                                        </label>
                                       
                                                  <div class="form__options ms-4 mb-4">
                                       
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="p14" id="p14r1" value="Auto particular">
                                                                <label class="form-check-label" for="p14r1">
                                                                    Auto partícular.
                                                                </label>
                                                            </div>


                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="p14" id="p14r2" value="Camión">
                                                                <label class="form-check-label" for="p14r2">
                                                                    Camión.
                                                                </label>
                                                            </div>

                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="p14" id="p14r3"  value="Combi">
                                                                <label class="form-check-label" for="p14r3">
                                                                    Combí.
                                                                </label>
                                                            </div>

                                                                                                   
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="p14" id="p14r4" value="Motocicleta">
                                                                <label class="form-check-label" for="p14r4">
                                                                    Motocicleta.
                                                                </label>
                                                            </div>
                                       
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="p14" id="p14r5" value="Biciicleta">
                                                                <label class="form-check-label" for="p14r5">
                                                                    Bicicleta. 
                                                                </label>
                                                            </div>
                                       
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="p14" id="p14r6" value="Me traslado a Pie">
                                                                <label class="form-check-label" for="p14r6">
                                                                    Me traslado a pie.
                                                                </label>
                                                            </div>

                                                  </div>


                                        <div class=" d-flex justify-content-end  me-2 mb-2">
                                            <a id="btn-next14" type="" class="btn form__buttom-next">Siguiente</a>
                                        </div>
                                    </div>



                                    <div  id="box15"class="mb-3  questionBox border rounded-top rounded-bottom" style="display: none;">
                                        
                                        <label for="" class="form__labbel form-label mb-4 mt-2 ms-2">
                                                <p class="">15.- En las últimas 2 semanas ¿has asistido a algún acto o evento concurrido, (fiesta, reunión, velorio, curso, congreso, concierto)?</p>
                                        </label>
                                       
                                                  <div class="form__options ms-4 mb-4">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="p15" id="p15r1" value="1">
                                                                <label class="form-check-label" for="p15r1">
                                                               Si 
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="p15" id="p15r2"  value="0">
                                                                <label class="form-check-label" for="p15r2" >
                                                                No
                                                                </label>
                                                            </div>
                                                  </div>


                                        <div class=" d-flex justify-content-end  me-2 mb-2">
                                            <a id="btn-next15" type="" class="btn form__buttom-next">Siguiente</a>
                                        </div>
                                    </div>


                                    <div  id="box16" class="mb-3 questionBox border rounded-top rounded-bottom" style="display: none;">
                                        
                                        <label for="" class="form__labbel form-label mb-4 mt-2 ms-2">
                                                <p class="">16.- ¿Estás vacunado contra el  COVID-19?</p>
                                        </label>
                                       
                                                  <div class="form__options ms-4 mb-4">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="p16" id="p16r2" value="Si">
                                                                <label class="form-check-label" for="p16r2">
                                                               Si 
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="p16" id="p16r3" value="No">
                                                                <label class="form-check-label" for="p16r3 " >
                                                                No
                                                                </label>
                                                            </div>
                                                  </div>


                                        <div class=" d-flex justify-content-end  me-2 mb-2">
                                            <a id="btn-next16" type="" class="btn form__buttom-next">Siguiente</a>
                                        </div>
                                    </div>

                                    <div  id="box16_1" class="mb-3 questionBox border rounded-top rounded-bottom" style="display: none;">
                                        
                                        <label for="" class="form__labbel form-label mb-4 mt-2 ms-2">
                                                <p class="">Sube tu comprobante de vacunación</p>
                                        </label>

                                 

                                        <div class=" d-flex  justify-content-between m-3">
                                             <a id="btn-next16_1_omitir" type="" class="btn form__buttom-next-red  justify-content-start mr-5 ml-5">Omitir</a>
                                            <a id="btn-next16_1" type="" class="btn form__buttom-next  justify-content-end">Siguiente</a>
                                        </div>
                                    </div>



                                    
                                    <div  id="box17"class="mb-3 questionBox border rounded-top rounded-bottom" style="display: none;">
                                        
                                        <label for="" class="form__labbel form-label mb-4 mt-2 ms-2">
                                                <p class="">17.- ¿Tienes algún hábito o protocolo de higiene y desinfección al llegar a casa o al trabajo?</p>
                                        </label>
                                                  <div class="form__options ms-4 mb-4">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="p17" id="p17r1" value="Si"> 
                                                                <label class="form-check-label" for="p17r1">
                                                               Si 
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="p17" id="p17r2" value="No">
                                                                <label class="form-check-label" for="p17r2" >
                                                                No
                                                                </label>
                                                            </div>
                                                  </div>


                                        <div class=" d-flex justify-content-end  me-2 mb-2">
                                            <a  id="btn-next17" type="" class="btn form__buttom-next">Siguiente</a>
                                        </div>
                                    </div>

                    
                                    <div  id="box18" class="mb-3 questionBox border rounded-top rounded-bottom" style="display: none;">
                                        
                                        <label for="" class="form__labbel form-label mb-4 mt-2 ms-2">
                                                <p class="">Menciona brevemente que realizas como higiene y desinfección al llegar a casa o en el trabajo diariamente.
                                                </p>
                                        </label>

                                                  <div class="form__options ms-3 me-3 mb-4 ">
                                                    <textarea class="form-control" aria-label="With textarea" minlength="20" id="p18" name="p18" ></textarea>
                                                     
                                                  </div>


                                        <div class=" d-flex justify-content-end  me-2 mb-2">


                                            <a id="btn-next18" type="" class="btn form__buttom-next">Siguiente</a>
                                        </div>
                                    </div>
                    

                                    <div  id="box19" class="mb-3 questionBox border rounded-top rounded-bottom" style="display: none;">
                                        
                                      
                                       <div class="m-4 text-center">
                                        <h5>
                                            Gracias por contestar la encuesta.
                                            <br>
                                           
                                        </h5>
                                       </div>

                                        <div class=" d-flex justify-content-center  mb-2 me-2 mb-2">
                                            <button id="btn-next19" type="submit"  class="btn form__buttom-send">Ver resultados</button>
                                        </div>
                                        <div class=" d-flex justify-content-center  mt-4 me-2 mb-2">
                                            <a href="/" class="btn btn-success">Volver a la página principal</a>
                                        </div>
                                       
                                    </div>
                                </form>                                
                                
                </section>
                <div class="container d-flex justify-content-center ">
                    <form action="{{ route('save_comprobante') }}" method="POST" enctype="multipart/form-data" class="dropzone" id='image-upload' style="border: 1px dashed red;">
                        @csrf
                        <div>
                            <h3 class="text-center">Comprobante De Vacunación</h3>
                        </div>
                        <div class="dz-message" data-dz-message><span>Carga Tu Comprobante Aquí</span></div>
                        <input type="hidden" name="folio_comp" id="folio_comp" value="0">
                    </form>
                </div>


    <footer class="bg-light text-center text-lg-start position-absolute bottom-0 end-0"  style="width: 100%;">
    <div  class="text-center p-4" style="background-color: rgba(138,221,45,0.2);">Consulta Nuestro Aviso de Privacidad.
      © 2022 Copyright <a style="text-decoration:none"   href="https://uttecam.edu.mx/eduma/portfolio/avisos-de-privacidad/" Target="_blank" rel="noopener noreferrer">Politica de privacidad</a>
    </div>
  </footer>
                <script type="text/javascript" src="{{asset('js/functions.js')}}">
                 </script>

    
</body>
</html>
<script>
    document.getElementById("image-upload").style.display = "none";
    var url_comp = window.location.pathname;
    let arr_comp = url_comp.split('/');
    var folio = document.getElementById('folio_comp').value = arr_comp[4];
    Dropzone.options.myGreatDropzone = { // camelized version of the `id`
      paramName: "file", // The name that will be used to transfer the file
      maxFilesize: 2, // MB
      accept: function(file, done) {
        if (file.name == "justinbieber.jpg") {
          done("Naha, you don't.");
        }
        else { done(); }
      }
    };
  </script>
<script>

    const formulario = document.getElementById('cuestionario_covid');
    formulario.addEventListener('submit',(event)=>
        {
            
                
                let cuesRespuesta1 =document.querySelector('input[name=p1]:checked').value;
                if(cuesRespuesta1===1)
                {
                    var cuesRespuesta2 =document.querySelector('input[name=p2]:checked').value;

                }
                else
                {
                    var cuesRespuesta2='no tiene enfermades degenearativas.';

                }
                let cuesRespuesta3 =document.querySelector('input[name=p3]:checked').value;
                if(cuesRespuesta3==1)
                {
                    var cuesRespuesta4 =document.querySelector('input[name=p4]:checked').value;

                }
                else
                {
                    var cuesRespuesta4='no tiene familiares que esten enfermos';
                }
                let cuesRespuesta5 =document.querySelector('input[name=p5]:checked').value;
                let cuesRespuesta6 =document.querySelector('input[name=p6]:checked').value;
                let cuesRespuesta7 =document.querySelector('input[name=p7]:checked').value;
                let cuesRespuesta8 =document.querySelector('input[name=p8]:checked').value;
                let cuesRespuesta9 =document.querySelector('input[name=p9]:checked').value;
                let cuesRespuesta10 =document.querySelector('input[name=p10]:checked').value;
                let cuesRespuesta11 =document.querySelector('input[name=p11]:checked').value;
                let cuesRespuesta12 =document.querySelector('input[name=p12]:checked').value;
                let cuesRespuesta13 =document.querySelector('input[name=p13]:checked').value;
                let cuesRespuesta14 =document.querySelector('input[name=p14]:checked').value;
                let cuesRespuesta15 =document.querySelector('input[name=p15]:checked').value;
                
                let cuesRespuesta16 =document.querySelector('input[name=p16]:checked').value;
                if(cuesRespuesta16===1)
                {
                    var CombrobanteVacunaAlumno=document.querySelector('CombrobanteVacunaAlumno').value;
                    
                }
                else
                {

                    var CombrobanteVacunaAlumno='no tiene comprobante';
                }
                
                
                let cuesRespuesta17 =document.querySelector('input[name=p17]:checked').value;
                if(cuesRespuesta17===1)
                {
                    var cuesRespuesta18 =document.querySelector('#p18').value;
                }
                else
                {
                    var cuesRespuesta18='no tiene un protocolo de higene';
                }
             

                let respuestas =
                [
                    cuesRespuesta1,
                    cuesRespuesta2,
                    cuesRespuesta3,
                    cuesRespuesta4,
                    cuesRespuesta5,
                    cuesRespuesta6,
                    cuesRespuesta7,
                    cuesRespuesta8,
                    cuesRespuesta9,
                    cuesRespuesta10,
                    cuesRespuesta11,
                    cuesRespuesta12,
                    cuesRespuesta13,
                    cuesRespuesta14,
                    cuesRespuesta15,
                    cuesRespuesta16,
                    cuesRespuesta17,
                    cuesRespuesta18
                ];
                
                var datosJson = JSON.stringify(respuestas);
                console.log(respuestas);
                console.log(datosJson);
                var url = window.location.pathname;
                let arr = url.split('/');
                $.ajax({
                    url: "{{ route('save_encuesta')}}",
                    data: "datosJson="+datosJson+"&_token={{ csrf_token()}}&folio="+arr[4]+"",
                    dataType: "json",
                    method: "POST",
                    success: function(result)
                    {   var url = '/encuesta/resultados/pdf/'+arr[3]+'/'+arr[4];
                        console.log("Si esta funcionando"+result);
                        window.open(url, '_blank');
                    },
                    fail: function(){
                        console.log('error');
                    },
                    beforeSend: function(){
                        console.log('nada');
                    }
                });    
                event.preventDefault();  
        });
</script>
<script type="text/javascript">
    Dropzone.options.imageUpload ={
        maxFilesize:1,
        acceptedFiles: ".pdf",
    };
</script>
<script src="{{asset('js/jquery-3.5.1.min.js')}}"> </script>
