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
    <link rel="icon" type="image/png" href="/images/escudo_borde.png" />
    
</head>
<body >
    <header class="header">
        <div class="text-center">
        <img src="/images/uttecam_logo2.png"  class="img-fluid mt-2" alt="Logo UTTECAM" >
        </div>

    </header>
    
    <section id="quiz-container" class="container d-flex justify-content-center">  

            <div id="box0" class="mb-3 questionBox1 border rounded-top rounded-bottom m-5"  >
                <label class="p-3"> Descargar tu último comprobante PDF</label>                                
                <div class="form-group m-4">
                    <label for="MatriculaAlumno">Matrícula</label>
                    <input type="number" class="form-control mt-2" id="MatriculaAlumno" name="MatriculaAlumno"  minlength="8" title="El Matricula ingresada debe tene el formato adecuado." placeholder="Ingresa tu matrícula" minlength="4" maxlength="12" onchange='verifyNumPositiveMatricula()' required>
                </div>

                <div class="form-group m-4">
                    <label for="MatriculaAlumno">Teléfono</label>
                    <input type="tel" class="form-control mt-2" id="TelefonoAlumno" name="TelefonoAlumno"  minlength="10" placeholder="Ingresa tu teléfono" minlength="4" maxlength="12" onchange='verifyNumPositiveMatricula()' required>
                </div>

                <div class=" d-flex justify-content-end  me-2 mb-2">
                    <button onclick="sendMatricula()" type="submit" class="btn form__buttom-next">Buscar PDF</button>
                </div>
            </div>


        <br>
        
</section>

<footer class="bg-light text-center text-lg-start position-fixed-0"  >
    <div class="text-center p-4" style="background-color: rgba(138,221,45,0.2);">Consulta Nuestro Aviso de Privacidad.
      © 2022 Copyright <a style="text-decoration:none"   href="https://uttecam.edu.mx/eduma/portfolio/avisos-de-privacidad/" Target="_blank" rel="noopener noreferrer">Politica de privacidad</a>
    </div>
  </footer>

  
    <script>
       function sendMatricula(){
           
            const MatriculaAlumno = document.getElementById("MatriculaAlumno").value;
            const TelefonoAlumno = document.getElementById("TelefonoAlumno").value;
            if(MatriculaAlumno.length >= 8 && TelefonoAlumno.length == 10){
                var url = window.location.origin+"/encuesta/resultados/pdf/"+MatriculaAlumno+"/tel"+TelefonoAlumno;
                location.href=url;
            }else{
                alert("¡MATRICULA O TELEFONO INCORRECTOS!");
            }
            
       }
    </script>          
</body>
</html>