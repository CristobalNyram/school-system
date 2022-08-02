<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <title>VERIFICACIÓN</title>
</head>
<style>
    .header-login {
    width: 100%;
    height: 80px;
    margin-bottom: -5em;
    background: rgb(0, 168, 135);
    background: linear-gradient(
        90deg,
        rgba(0, 168, 135, 1) 0%,
        rgba(255, 255, 255, 0.9752275910364145) 100%
    );
}
</style>
<body id="body_back">
  <audio id="audio_c" controls style="display: none">
    <source type="audio/mp3" src="images/c.mp3" >
  </audio>
  <audio id="audio_i" controls style="display: none">
    <source type="audio/mp3" src="images/e.mp3" >
  </audio>
    @yield('content')
    <script src="/plugins/Jquery/dist/jquery.min.js"></script>
   <script src="/plugins/jquery-ui/jquery-ui.min.js"></script>
    <script src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
 <script type="text/javascript">
 cargarDatos();
 
 let intervaloDeCarga;

function cicloParaCargarDatos() {
  intervaloDeCarga = setInterval(cargarDatos, 60000);
}

let intervaloDeCargaWeb;

function cicloCargaWeb() {
  intervaloDeCargaWeb = setInterval(recargaWeb, 600000);
}

function recargaWeb(){
  location.reload();
}

cicloCargaWeb();
cicloParaCargarDatos();

 function buscarDatos(matricula){
		
		var alum = localStorage.getItem(matricula);
		var result = JSON.parse(alum);
		
		var audio_c = document.getElementById("audio_c");
        var audio_i = document.getElementById("audio_i");
        var body = document.getElementById('body_back');
        var resultados = document.getElementById('resultados');
try {

	if(result.resultado == 0){
            document.getElementById('alert').classList.add('alert-success');
            document.getElementById('mensaje').innerHTML = '"PUEDE INGRESAR NORMALMENTE"';
            document.getElementById('nombre').innerHTML = result.nombre;
            document.getElementById('matricula').innerHTML = result.matricula;
            document.getElementById('carrera').innerHTML = result.carrera;
            document.getElementById('fecha_contesto').innerHTML = result.created_at;
            resultados.style.display = '';
            audio_c.play();
            body.style.backgroundColor = '#00BB2D';
          }else if(result.resultado == 1){
            document.getElementById('alert').classList.add('alert-warning');
            document.getElementById('mensaje').innerHTML = '"VERIFICAR CON PERSONAL MÉDICO"';
            document.getElementById('nombre').innerHTML = result.nombre;
            document.getElementById('matricula').innerHTML = result.matricula;
            document.getElementById('carrera').innerHTML = result.carrera;
            document.getElementById('fecha_contesto').innerHTML = result.created_at;
            resultados.style.display = '';
            audio_i.play();
            body.style.backgroundColor = '#FFA420';
          }else if(result.resultado == 2){
            document.getElementById('alert').classList.add('alert-danger');
            document.getElementById('mensaje').innerHTML = '"NO PUEDE INGRESAR"';
            document.getElementById('nombre').innerHTML = result.nombre;
            document.getElementById('matricula').innerHTML = result.matricula;
            document.getElementById('carrera').innerHTML = result.carrera;
            document.getElementById('fecha_contesto').innerHTML = result.created_at;
            resultados.style.display = '';
            audio_i.play();
            body.style.backgroundColor = 'red';
          }else{
            document.getElementById('alert').classList.add('alert-danger');
            document.getElementById('mensaje').innerHTML = '"NO PUEDE INGRESAR"';
            document.getElementById('nombre').innerHTML = result.nombre;
            document.getElementById('matricula').innerHTML = result.matricula;
            document.getElementById('carrera').innerHTML = result.carrera;
            document.getElementById('fecha_contesto').innerHTML = result.created_at;
            resultados.style.display = '';
            audio_i.play();
            body.style.backgroundColor = 'red';
          }
          setTimeout(function(){
            document.getElementById('alert').classList.remove('alert-success','alert-warning','alert-danger');
			document.getElementById('nombre').innerHTML = '';
			document.getElementById('matricula').innerHTML = '';
			document.getElementById('carrera').innerHTML = '';
			document.getElementById('fecha_contesto').innerHTML = '';
			body.style.backgroundColor = '';
			resultados.style.display = 'none';
          },2000);

} catch (err) {
	cargarDatos();
			var resultados = document.getElementById('resultados');
			document.getElementById('alert').classList.add('alert-danger');
            document.getElementById('mensaje').innerHTML = '"NO PUEDE INGRESAR - Intentalo en 5 segundos"';
            resultados.style.display = '';
 
			setTimeout(function(){
            document.getElementById('alert').classList.remove('alert-success','alert-warning','alert-danger');
			document.getElementById('nombre').innerHTML = '';
			document.getElementById('matricula').innerHTML = '';
			document.getElementById('carrera').innerHTML = '';
			document.getElementById('fecha_contesto').innerHTML = '';
			body.style.backgroundColor = '';
			resultados.style.display = 'none';
          },4000);
}
        
	}
	function cargarDatos(){
    console.log('CARGANDO DATOS...');
		$.get("{{ route('datosLocales')}}", function(data, status){
          var data1 = JSON.parse(data);

          localStorage.clear();
          $.each(data1, function(i, alumno) {
				localStorage.setItem(alumno.matricula,JSON.stringify(alumno));
            });
        });
	}
      
      let scanner = new Instascan.Scanner({video: document.getElementById('lector') });
      scanner.addListener('scan', function (matricula) {

	  buscarDatos(matricula);                             

      });
      Instascan.Camera.getCameras().then(function (cameras) {
        if (cameras.length > 0) {
          scanner.start(cameras[0]);
        }else {
          console.error('Camaras no encontradas');
        }
      }).catch(function (e) {
        console.error(e);                           
      });
    </script>
</body>
</html>