<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="/images/escudo_borde.png" />

    <title>Encuesta covid UTTECAM</title>
  </head>
  <body>
  <style>
  body {
   overflow-x: hidden;}
  </style>
        <div class="row  m-5 justify-content-center align-items-center">
             <div class="col-auto p-1">
                 <img class="img-fluid" src="https://uttecam.edu.mx/eduma/wp-content/uploads/2018/01/UTtecam.png"  width="300"  height="100">
             </div><p>
         </div>
        <div class="row justify-content-center align-items-center ">
            <div class="card text-center">
                <div class="col-12 card-header"><strong>
                    CUESTIONARIO DE SEMÁFORO COVID-19</strong>
                </div>
                <div class="card-body">

                <h5 class="card-title">LINEAMIENTOS PARA INGRESO Y ESTANCIA EN LA UTTECAM</h5>
                  <p class="card-text m-5">Se solicitará que cada alumno de la universidad conteste el
                    “Cuestionario de semáforo COVID 19 en línea” para tener datos confiables en la detección de
                    padecimientos o síntomas sugerentes a COVID 19. Esta información será validada y analizada por el departamento
                  de Servicio Médico.</p>
                      <div class="row">
                          <div class="row col-12 col-sm-6">
                            <img class="img-responsive col-12 col-sm-6" src="images/3267470.png"  height="380px" >
                           <div class=" row col-12 col-sm-6">
                               <div class="col-12"></div>
                               <div class="col-12"><strong>Al finalizar, la encuesta te dará el indicador de color, te recomendamos lo siguente:</strong></div>
                               <div class="col-12"></div>
                           </div>

                          </div>
                          <div class="row col-12 col-sm-6 m-2 text-light " style="align-items: center;justify-content: center, text-white">
                               <div class="row bg-danger p-3"><strong> Avisa a tu tutor, director de carrera o coordinador. SE TE SUGIERE NO ASISTIR A LA INSTITUCIÓN (UTTECAM),
                                 ve a los servicios de salud que te correspondan IMSS, ISSSTE O ISSSTEP para tu atención inmediata a la brevedad.
                                 Comunícate al departamento de servicio médico, el cual dará seguimiento a tu estado de salud.</strong>
                                </div >
                                <div class="row bg-warning p-3 border"><strong>Repórtate con tu tutor o tú director de carrera. SE TE SUGIERE NO ASISTIR A LA INSTITUCIÓN (UTTECAM), 
                                  acude a consulta para tu valoración de síntomas y descartar cuadro de posible Covid-19, al IMSS, ISSSTE, ISSSTEP o en su caso a medico particular. Al término, 
                                  da aviso a tu tutor o director de carrera para dar seguimiento y comunícate con el departamento de servicio médico para tu seguimiento e indicaciones.  </strong>
                                </div >
                                <div class="row  p-3 border" style="background-color: rgba(10,151,130,255);"><strong>Puedes ingresar y realizar tus labores con normalidad.</strong>
                                </div >
                              </div>
                       </div>
                </div>




                <div class="row" >
                    <div class=" col-12 col-sm-3 card-footer text-muted">
                      <a href="{{ route('info') }}" rel="noopener noreferrer" class="  btn btn-success m-2 p-4  border border-danger">REALIZAR ENCUESTA</a>
                    </div>
                    <div class=" col-12 col-sm-3 card-footer text-muted">
                      <a href="{{ route('dowloadPDFmatricula') }}" rel="noopener noreferrer" class="  btn btn-success m-2 p-4  border border-danger">DESCARGAR PDF</a>
                    </div>
                    <div class="col-12 col-sm-3 p-4 card-footer text-muted">
                        <form method="get" action="PROTOCOLO, FLUJOGRAMA COVID19, 2021.pdf">
                          <a class="btn btn-success  border border-danger" href="/pdf/PROTOCOLO, FLUJOGRAMA COVID19, 2021.pdf">Más información</a>
                          
                        </form>
                    </div>
                    <div class="col-12 col-sm-3 card-footer text-muted">
                        <a href="{{ route('verificacion') }}" class="btn btn-success m-2 p-4  border border-danger">VERIFICAR</a>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
  <footer class="bg-light text-center text-lg-start">
    <div class="text-center p-4" style="background-color: rgba(138,221,45,0.2);">Consulta Nuestro Aviso de Privacidad.
      © 2022 Copyright <a style="text-decoration:none"   href="https://uttecam.edu.mx/eduma/portfolio/avisos-de-privacidad/" Target="_blank" rel="noopener noreferrer">Politica de privacidad</a>
    </div>
  </footer>
</html>