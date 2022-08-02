
<style>
    @page {
        margin:0cm;
    }
    body {
        margin-top: 3cm;
        margin-left: 2cm;
        margin-right: 2cm;
        margin-bottom: 2cm;
    }
    header {
        position: fixed;
        top: 1cm;
        left: 0cm;
        right: 0cm;
        height: 2cm;
    }
    footer {
        position: fixed; 
        bottom: 0cm; 
        left: 0cm; 
        right: 0cm;
        height: 8cm;
        background-image: url("images/footer_membrete.jpg" );
        text-align: center;
        line-height: 1.5cm;
    }

    img{
        width: 80%
    }
    #info_alumno{
        line-height : 1px;
    }
</style>
<body>
      <!-- Defina bloques de encabezado y pie de página antes de su contenido -->
        <header>
            <center><img src="images/logo1.png" alt="UTTECAM" class="logo"></center>
        </header>

        <footer>
        </footer>

        <!-- Envuelva el contenido de su PDF dentro de una etiqueta principal -->
        <main>
            <h5 style="text-align: right">Fecha De Aplicación: {{$alumno->created_at}}</h5>
            <h3 style="text-align: center">Resultados De Encuesta</h3>
             <hr>
            <table style="width: 100%;text-align: center">
                <tr>
                    <th>Nombre</th>
                    <th>Matrícula</th>
                    
                </tr>
                <tr>
                    <td>{{$alumno->nombre }} {{$alumno->ape_paterno }} {{$alumno->ape_materno }}</td>
                    <td>{{$alumno->matricula}}</td>
                </tr>
                <tr>
                    <th>CURP</th>
                    <th>Programa Educativo</th>
                </tr>
                <tr>
                    <td>{{$alumno->curp}}</td>
                    <td>{{$alumno->carrera}}</td>
                </tr>
            </table>
            <hr>
            <div id="status" style="text-align: center">
                @if ($alumno->resultado === 0)
                    <p style="border: 1px solid green">"Puedes Ingresar Normalmente"</p>
                @elseif ($alumno->resultado === 1)
                <p style="border: 1px solid orangered">"SE TE SUGIERE NO INGRESAR a la universidad, si es necesario tu ingreso acude al servicio medico de la universidad presentando una receta medica de tu estado de salud."</p>
                @elseif ($alumno->resultado === 2)
                <p style="border: 1px solid red;color:red;">"SE TE SUGIERE NO INGRESAR A LA UNIVERSIDAD, tomando en consideración tus respuestas"</p>
                @endif
                
            </div>
            <br>
            <div class="qr-image">
                <center>
                   <img src="data:image/png;base64, {{ base64_encode(QrCode::size(100)->generate($alumno->matricula)) }}" style="width: 300px">
                </center>
            </div>
            <br>
            <div>
                <p>Al ingresar a la institución te solicitaran esta hoja, puedes imprimirla o guardarla en tu telefono para presentarlo en el acceso.</p>
            </div>
        </main>
</body>