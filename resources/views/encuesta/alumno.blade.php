<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumno | Registro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="{{asset('js/jquery-3.5.1.min.js')}}"> </script>
    <script src="{{asset('js/alertify.min.js')}}"> </script>
    <link rel="stylesheet" href="{{asset('css/alertify.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <script src="{{asset('js/progress/progress.js')}}"> </script>
    <link rel="stylesheet" href="{{asset('js/progress/progressjs.css')}}">
    <link rel="icon" type="image/png" href="/images/escudo_borde.png" />

    <link rel="stylesheet" href="{{asset('/plugins/select2/css/select2.min.css')}}">
    <script src="{{asset('plugins/select2/dist/js/select2.js')}}"> </script>



</head>
<body  id="quiz-body">
    <header class="header">
            <div class="text-center">
            <img src="/images/uttecam_logo2.png"  class="img-fluid mt-2" alt="Logo UTTECAM" >
            </div>

    </header>

    <section id="" class="container  col-11 col-lg-6 ">  

          
          {{-- aviso  inicio --}}

          <div class="mb-3 questionBoxAlert border rounded-top rounded-bottom"  id="container-aviso" >
            <div class="form-group m-4 pb-2">
                <h3 class='text-center text-danger fw-bold' >Aviso</h3>
                <p >
                    <strong>  Antes de iniciar a responder </strong>la siguiente encuesta, <strong> se te solicita tengas a la mano tu certificado de vacunación</strong>  contra el Covid-19 en formato pdf, ya que, en caso de que tengas completo tu esquema de vacunación, <strong>se te solicitará por este medio.</strong> 

                </p>
            </div>
        </div>
          
          {{-- aviso fin --}}
        
          <div class="container mt-4 p-4 questionBox1 border rounded-top rounded-bottom">
                <h6 class="mb-3 color-green">Te identificas como...</h6>

                {{-- <div class="form-check  ">
        
                    <input class="form-check-input" type="radio" name="TrabajadorCheck" id="TrabajadorCheck">
                    <label class="form-check-label" for="TrabajadorCheck">
                        Personal de la institución 
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="alumnoCheck" id="alumnoCheck" >
                    <label class="form-check-label" for="alumnoCheck">
                        Alumno de la institución                    
                    </label>
                </div>   --}}

                <div class="form-check" id="containerCheck">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="checkAlumnoForm">
                    <label class="form-check-label" for="checkAlumnoForm">
                        Alumno de la institución                    

                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="checkPersonalForm" >
                    <label class="form-check-label" for="checkPersonalForm">
                        Personal o trabajador de la institución 
                    </label>
                  </div>
           </div>

          


        <form action="{{route('save_alumno')}}" id="dataAlumno" method="POST"  style="display: none"  >
            
                
            @csrf
         

            <div id="box0" class="mb-3 questionBox1 border rounded-top rounded-bottom"  >
                                
                <div class="form-group m-4">
                    <label for="nombreAlumno">Nombre</label>
                    <input type="text" class="form-control mt-2" name="nombreAlumno" id="nombreAlumno"  onkeypress="return !(event.charCode >= 48 && event.charCode <= 57)"  onkeydown="handleInput(event);" title="El nombre ingresado debe tene el formato adecuado." placeholder="Ingresa tu nombre"    minlength="3" maxlength="40" required>
                </div>

                <div class="form-group m-4">
                    <label for="apellidoPaAlumno">Apellido Paterno</label>
                    <input type="text" class="form-control mt-2" name="apellidoPaAlumno" id="apellidoPaAlumno" onkeypress="return !(event.charCode >= 48 && event.charCode <= 57)" onkeydown="handleInput(event);" title="El apellido ingresado debe tene el formato adecuado." placeholder="Ingresa tu apellido paterno"  minlength="3" maxlength="40" required>
                </div>

                
                <div class="form-group m-4">
                    <label for="apellidoMaAlumno">Apellido Materno</label>
                    <input type="text" class="form-control mt-2" id="apellidoMaAlumno" name="apellidoMaAlumno"  onkeypress="return !(event.charCode >= 48 && event.charCode <= 57)" onkeydown="handleInput(event);"  title="El apellido ingresado debe tene el formato adecuado."  placeholder="Ingresa tu apellido materno"     minlength="3" maxlength="40" required>
                </div>

                <div class="form-group m-4">
                    <label for="GeneroAlumno">Género</label>
                    <div class="form-check mt-2">
                        <input class="form-check-input" type="radio"  id="GeneroAlumno"  value="M" name="GeneroAlumno" required >
                        <label class="form-check-label" for="flexRadioDefault1" >
                            Masculino 
                        </label>
                    </div>
                    <div class="form-check mt-2">
                        <input class="form-check-input" type="radio" id="GeneroAlumno" value="F" name="GeneroAlumno" >
                        <label class="form-check-label" for="flexRadioDefault2">
                            Femenino
                        </label>
                    </div>


                </div>


                <div class="form-group m-4">
                    <label for="edadAlumno">Edad</label>
                    <input type="number" class="form-control mt-2" id="edadAlumno" name="edadAlumno" pattern="^[0-9]+" onkeypress="return event.charCode >= 48" min="16" max="80" title="La edad ingresada debe tene el formato adecuado."placeholder="Ingresa tu edad"  onblur='edadEvaluate()'   minlength="1" maxlength="2" required>
                </div>

                
                <div class="form-group m-4">
                    <label for="MatriculaAlumno">Matrícula</label>
                    <input type="number" class="form-control mt-2" id="MatriculaAlumno" name="MatriculaAlumno"   title="El Matricula ingresada debe tene el formato adecuado." placeholder="Ingresa tu matrícula" minlength="4" maxlength="12" onchange='verifyNumPositiveMatricula()' required>
                </div>

                
                <div class="form-group m-4">
                    <label for="CurpAlumno">Correo electrónico</label>
                    <input type="email" class="form-control mt-2" id="EmailAlumno" name="EmailAlumno" onblur="validaCorreo()" title="La email ingresadó debe tene el formato adecuado." placeholder="Ingresa tu correo electrónico"   minlength="2"  maxlength="90" required>
                </div>

                <div class="form-group m-4">
                    <label for="CurpAlumno">CURP</label>
                    <input type="text" class="form-control mt-2" onkeyup="mayus(this);" id="CurpAlumno" name="CurpAlumno"  title="La CURP ingresada debe tene el formato adecuado." placeholder="Ingresa tu CURP"   onblur='verificationCurp()' maxlength="18" required>

                </div>

                <div class="form-group m-4">
                    <label for="programaEducativoAlumno"  class="mb-3">Programa educativo al que pertence</label>
                    <select class="form-select "  id="programaEducativoAlumno" name="programaEducativoAlumno" aria-label=".form-select-lg example" required >
                        <option value="1" >PE PROCESOS BIOALIMENTARIOS </option>
                        <option value="2">PE AGRICULTURA SUSTENTABLE Y PROTEGIDA</option>
                        <option value="3">PE MANTENIMIENTO INDUSTRIAL</option>
                        <option value="4">PE PROCESOS INDUSTRIALES</option>
                        <option value="5">PE CONTADURÍA</option>
                        <option value="6">PE ADMINISTRACIÓN  </option>
                        <option value="7">PE DESARROLLO DE NEGOCIOS Y MERCADOTECNIA</option>
                        <option value="8">ING. EN TECNOLOGIAS DE LA INFORMACIÓN</option>
                        <option value="9">PE MECATRÓNICA</option>
                        

                    </select>
                </div>

                <div class="form-group m-4">
                    <label for="CuatrimestreAlumno" class="mb-3">Cuestrimestre</label>
                    <select class="form-select "  id="CuatrimestreAlumno" name="CuatrimestreAlumno" aria-label=".form-select-lg example" required>
                        <option value="1" >1er cuatrimestre</option>
                        <option value="2">2do cuatrimestre</option>
                        <option value="3">3er cuestrimestre</option>
                        <option value="4">4to. cuestrimestre</option>
                        <option value="5">5to. cuestrimestre</option>
                        <option value="6">6to. cuestrimestre</option>
                        <option value="7">7mo. cuestrimestre</option>
                        <option value="8">8vo. cuestrimestre</option>
                        <option value="9">9no. cuestrimestre</option>
                        <option value="10">10mo. cuestrimestre</option>
                        <option value="11">11vo. cuestrimestre</option>
                    </select>
                </div>
                

                <div class="form-group m-4">
                    <label for="TelefonoAlumno">Número de teléfono </label>
                    <input type="tel" class="form-control mt-2" id="TelefonoAlumno" name="TelefonoAlumno" title="El numero de teléfono  ingresado debe tene el formato adecuado."  placeholder="Ingresa tu número de teléfono"   minlength="10" maxlength="13" required onblur='validationNumber()'>
                </div>

                <div class=" d-flex justify-content-end  me-2 mb-2">
                    <button  type="submit" class="btn form__buttom-next">Continuar encuesta</button>
                </div>
            </div>




        </form>
        
        <form action="{{route('save_alumno')}}" id="dataPersonal" method="POST" style="display: none"  >
                
            @csrf
         

            <div id="box0" class="mb-3 questionBox1 border rounded-top rounded-bottom"  >
                                
                <div class="form-group m-4">
                    <label for="nombreAlumno">Nombre</label>
                    <input type="text" class="form-control mt-2" name="nombreAlumno" id="nombreAlumno"  onkeypress="return !(event.charCode >= 48 && event.charCode <= 57)"  onkeydown="handleInput(event);" title="El nombre ingresado debe tene el formato adecuado." placeholder="Ingresa tu nombre"    minlength="3" maxlength="40" required>
                </div>

                <div class="form-group m-4">
                    <label for="apellidoPaAlumno">Apellido Paterno</label>
                    <input type="text" class="form-control mt-2" name="apellidoPaAlumno" id="apellidoPaAlumno" onkeypress="return !(event.charCode >= 48 && event.charCode <= 57)" onkeydown="handleInput(event);" title="El apellido ingresado debe tene el formato adecuado." placeholder="Ingresa tu apellido paterno"  minlength="3" maxlength="40" required>
                </div>

                
                <div class="form-group m-4">
                    <label for="apellidoMaAlumno">Apellido Materno</label>
                    <input type="text" class="form-control mt-2" id="apellidoMaAlumno" name="apellidoMaAlumno"  onkeypress="return !(event.charCode >= 48 && event.charCode <= 57)" onkeydown="handleInput(event);"  title="El apellido ingresado debe tene el formato adecuado."  placeholder="Ingresa tu apellido materno"     minlength="3" maxlength="40" required>
                </div>

                <div class="form-group m-4">
                    <label for="GeneroAlumno">Género</label>
                    <div class="form-check mt-2">
                        <input class="form-check-input" type="radio"  id="GeneroAlumno"  value="M" name="GeneroAlumno" required >
                        <label class="form-check-label" for="flexRadioDefault1" >
                            Masculino 
                        </label>
                    </div>
                    <div class="form-check mt-2">
                        <input class="form-check-input" type="radio" id="GeneroAlumno" value="F" name="GeneroAlumno" >
                        <label class="form-check-label" for="flexRadioDefault2">
                            Femenino
                        </label>
                    </div>


                </div>


                <div class="form-group m-4">
                    <label for="edadAlumno">Edad</label>
                    <input type="number" class="form-control mt-2" id="edadAlumno" name="edadAlumno" pattern="^[0-9]+" onkeypress="return event.charCode >= 48" min="16" max="80" title="La edad ingresada debe tene el formato adecuado."placeholder="Ingresa tu edad"  onblur='edadEvaluate()'   minlength="1" maxlength="2" required>
                </div>

                
                <div class="form-group m-4">
                    <label for="MatriculaAlumno">Matrícula</label>
                    <input type="number" class="form-control mt-2" id="MatriculaAlumno" name="MatriculaAlumno"   title="El Matricula ingresada debe tene el formato adecuado." placeholder="Ingresa tu matrícula" minlength="4" maxlength="12" onchange='verifyNumPositiveMatricula()' required>
                </div>

                
                <div class="form-group m-4">
                    <label for="CurpAlumno">Correo electrónico</label>
                    <input type="email" class="form-control mt-2" id="EmailAlumno" name="EmailAlumno" onblur="validaCorreo()" title="La email ingresadó debe tene el formato adecuado." placeholder="Ingresa tu correo electrónico"   minlength="2"  maxlength="90" required>
                </div>

                <div class="form-group m-4">
                    <label for="CurpAlumno">CURP</label>
                    <input type="text" class="form-control mt-2" onkeyup="mayus(this);" id="CurpAlumno" name="CurpAlumno"  title="La CURP ingresada debe tene el formato adecuado." placeholder="Ingresa tu CURP"   onblur='verificationCurp()' maxlength="18" required>

                </div>

                <div class="form-group m-4">
                    <label for="programaEducativoAlumno"  class="mb-3">Programa educativo al que pertence</label>
                    <select class="form-select "  id="programaEducativoAlumno" name="programaEducativoAlumno" aria-label=".form-select-lg example" required >
                        <option value="1" >PE PROCESOS BIOALIMENTARIOS </option>
                        <option value="2">PE AGRICULTURA SUSTENTABLE Y PROTEGIDA</option>
                        <option value="3">PE MANTENIMIENTO INDUSTRIAL</option>
                        <option value="4">PE PROCESOS INDUSTRIALES</option>
                        <option value="5">PE CONTADURÍA</option>
                        <option value="6">PE ADMINISTRACIÓN  </option>
                        <option value="7">PE DESARROLLO DE NEGOCIOS Y MERCADOTECNIA</option>
                        <option value="8">ING. EN TECNOLOGIAS DE LA INFORMACIÓN</option>
                        <option value="9">PE MECATRÓNICA</option>
                        

                    </select>
                </div>

                <div class="form-group m-4">
                    <label for="CuatrimestreAlumno" class="mb-3">Cuestrimestre</label>
                    <select class="form-select "  id="CuatrimestreAlumno" name="CuatrimestreAlumno" aria-label=".form-select-lg example" required>
                        <option value="1" >1er cuatrimestre</option>
                        <option value="2">2do cuatrimestre</option>
                        <option value="3">3er cuestrimestre</option>
                        <option value="4">4to. cuestrimestre</option>
                        <option value="5">5to. cuestrimestre</option>
                        <option value="6">6to. cuestrimestre</option>
                        <option value="7">7mo. cuestrimestre</option>
                        <option value="8">8vo. cuestrimestre</option>
                        <option value="9">9no. cuestrimestre</option>
                        <option value="10">10mo. cuestrimestre</option>
                        <option value="11">11vo. cuestrimestre</option>
                    </select>
                </div>
                

                <div class="form-group m-4">
                    <label for="TelefonoAlumno">Número de teléfono </label>
                    <input type="tel" class="form-control mt-2" id="TelefonoAlumno" name="TelefonoAlumno" title="El numero de teléfono  ingresado debe tene el formato adecuado."  placeholder="Ingresa tu número de teléfono"   minlength="10" maxlength="13" required onblur='validationNumber()'>
                </div>

                <div class=" d-flex justify-content-end  me-2 mb-2">
                    <button  type="submit" class="btn form__buttom-next">Continuar encuesta</button>
                </div>
            </div>




        </form>
</section>

<footer class="bg-light text-center text-lg-start">
    <div class="text-center p-4" style="background-color: rgba(138,221,45,0.2);">Consulta Nuestro Aviso de Privacidad.
      © 2022 Copyright <a style="text-decoration:none"   href="https://uttecam.edu.mx/eduma/portfolio/avisos-de-privacidad/" Target="_blank" rel="noopener noreferrer">Politica de privacidad</a>
    </div>
  </footer>
    <script>

    $(document).ready(function() {
        $('#CuatrimestreAlumno').select2();
        $('#programaEducativoAlumno').select2();
    });
        function mayus(e) {
            e.value = e.value.toUpperCase();
        }

        function validaCorreo(){
            let str = document.getElementById('EmailAlumno').value;
            let arr = str.split('@'); 
            if(arr.length === 2){
                if(arr[1] === 'gmail.com' || arr[1] === 'hotmail.com' || arr[1] === 'outlook.com'){
                   
                }else{
                    console.log(arr[1]);
                    alertify.error('Ingresa un correo valido');
                    document.getElementById('EmailAlumno').value = "";
                }
            }else{
                alertify.error('Ingresa un correo valido');
            }
            
        }
        
        var edad_v =  document.getElementById('nombreAlumno');
       edad_v.addEventListener('input',function(){
            if (this.value.length > 30) 
                this.value = this.value.slice(0,30); 
            })
        var edad_v =  document.getElementById('apellidoPaAlumno');
       edad_v.addEventListener('input',function(){
            if (this.value.length > 30) 
                this.value = this.value.slice(0,30); 
            })
        var edad_v =  document.getElementById('apellidoMaAlumno');
       edad_v.addEventListener('input',function(){
            if (this.value.length > 30) 
                this.value = this.value.slice(0,30); 
            })
       var edad_v =  document.getElementById('edadAlumno');
       edad_v.addEventListener('input',function(){
            if (this.value.length > 2) 
                this.value = this.value.slice(0,2); 
            })
        var matricula_v =  document.getElementById('MatriculaAlumno');
        matricula_v.addEventListener('input',function(){
            if (this.value.length > 8) 
                this.value = this.value.slice(0,8); 
            })
        var matricula_v =  document.getElementById('TelefonoAlumno');
        matricula_v.addEventListener('input',function(){
            if (this.value.length > 10) 
                this.value = this.value.slice(0,10); 
            })

         
                    

        function edadEvaluate()
        {
            var edadAlumno = document.getElementById('edadAlumno').value;
            
            console.log(edadAlumno);
            
            if(edadAlumno<=5)
            {
                alertify.error('Debes ingresar tu edad real.');
                document.getElementById('edadAlumno').value="";

            }


        }
        

        function verificationCurp()
        {
            
            var matricula_v =  document.getElementById('CurpAlumno');
            if (matricula_v.value.length <= 17) 
            alertify.error('Tu CURP debe contener 18 digitos.');

        }


        function validationNumber()
        {
            

            var numberPhoneAlert = document.getElementById('TelefonoAlumno').value;
            
            console.log(numberPhoneAlert);
            
            if(Math.sign(numberPhoneAlert)==1)
            {
                
            }
            else
            {
                
                alertify.error('Debe escribir el numero de telefono en un formato correcto.(almenos 10 digitos)');
               
                document.getElementById('TelefonoAlumno').value="";

            }

        }


        function verifyNumPositiveMatricula()
        {
          var MatriculaAlert = parseInt(document.getElementById('MatriculaAlumno').value);
            console.log(parseInt(MatriculaAlert));
            if(parseInt(MatriculaAlert) <= 15)
            {console.log(MatriculaAlert);
                document.getElementById('MatriculaAlumno').value="";
                alertify.error('No puedes ingresar numeros negativos o letras');

            }

                   

            
        }


        
        const formulario = document.getElementById('dataAlumno');

        formulario.addEventListener('submit',(event)=>
        {
            //stop the refres of page
  
            const formData= new FormData(formulario);

            const nombre =formData.get('nombreAlumno');
            const apellidoPaterno =formData.get('apellidoPaAlumno');
            const apellidoMaterno = formData.get('apellidoMaAlumno');
            const GeneroAlumno =formData.get('GeneroAlumno');
            const edadAlumno =formData.get('edadAlumno');
            const MatriculaAlumno =formData.get('MatriculaAlumno');
            const CurpAlumno = formData.get('EmailAlumno');
            const programaEducativoAlumno = formData.get('programaEducativoAlumno');
            const CuatrimestreAlumno = formData.get('CuatrimestreAlumno');
            const TelefonoAlumno =formData.get('TelefonoAlumno');
            
            var valoresAceptados = /^[0-9]+$/;
            var valoresAceptadosTexto=/^[0-9a-zA-Z]+$/;
            // console.log(edadAlumno);
            if(nombre == '' 
                ||  apellidoPaterno =='' 
                || apellidoMaterno == ''
                ||  MatriculaAlumno =='' 
                || CurpAlumno=='' 
                || TelefonoAlumno=='' 
                 )
                {
                    alertify.error('Debe de llenar todos los campos');
                }
                else
                {

                        if(CuatrimestreAlumno!=0)
                        {
                                    if(programaEducativoAlumno!=0)
                                    {
                                       
                                        if(MatriculaAlumno.match(valoresAceptados))
                                        {
                                                if(edadAlumno.match(valoresAceptados) )
                                                {
                                                    if(edadAlumno>=100 || edadAlumno<=8 )
                                                        {
                                                            
                                                            alertify.error('Ingrese una edad realista.');
                                                        }
                                                        else
                                                        {
                                                            let dataSendOfStudent=
                                                            [
                                                                nombre,
                                                                apellidoPaterno,
                                                                apellidoMaterno,
                                                                GeneroAlumno,
                                                                edadAlumno,
                                                                MatriculaAlumno,
                                                                CurpAlumno,
                                                                programaEducativoAlumno,
                                                                CuatrimestreAlumno,
                                                                TelefonoAlumno
                                                            ];
                                                           

                                                        }
                                                }
                                                else
                                                {
                                                    alertify.error('Ingrese la edad en un formato adecuado');

                         
                                                }
                                            
                                           
                                        }
                                        else
                                        {
                                                alertify.error('Ingrese la matrícula en un formato adecuado');

                                        }
                                    }
                                    else
                                    {
                                        alertify.error('Seleccione el programa educativo en que se encuentra');
                                    }
                        }
                        else
                        {
                            alertify.error('Seleccione el cuatrimestre en que se encuentra');
                        }
                }
                document.getElementById("dataAlumno").submit();
        });

        
    function handleInput(e) {
     var ss = e.target.selectionStart;
     var se = e.target.selectionEnd;
     e.target.value = e.target.value.toUpperCase();
     e.target.selectionStart = ss;
     e.target.selectionEnd = se;
    }
    </script>    
    
    

    <script type="text/javascript">
        //  $('containerCheck').hide();
        $('#container-aviso').hide();
        progressJs().setOptions({overlayMode: true, theme: 'blueOverlay'}).start().autoIncrease(500,500);
        
        if(window.attachEvent) {
            window.attachEvent('onload', function(){ progressJs().end(); });
        } else {
            if(window.onload) {
                var curronload = window.onload;
                var newonload = function() {
                    curronload();
                    progressJs().end();
               
                  
                };
                window.onload = newonload;
            } else {
              
                  
                window.onload = function(){ progressJs().end(); };
              
            }
                    // $('#containerCheck').show(1000);
                    $('#container-aviso').show(1600);
        }
  
  
      </script>
      

      <script>
        $('#checkAlumnoForm').click(()=>{
            $('#dataPersonal').hide();
            $('#dataAlumno').show("slow");
        });
        $('#checkPersonalForm').click(()=>{
            $('#dataAlumno').hide();

            $('#dataPersonal').show("slow");
        });


      </script>
        


</body>
</html>