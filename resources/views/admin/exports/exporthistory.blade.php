<table>
    <thead>
    <tr>
        <th>Matricula</th>
        <th>Carrera</th>
        <th>Nombre Completo</th>
        <th>Genero</th>
        <th>Edad</th>
        <th>Cuatrimestre</th>
        <th>Telefono</th>
        <th>Email</th>
        <th>Resultado</th>
        <th>Puntos</th>
        <th>Fecha</th>
        <th>p1</th>
        <th>p2</th>
        <th>p3</th>
        <th>p4</th>
        <th>p5</th>
        <th>p6</th>
        <th>p7</th>
        <th>p8</th>
        <th>p9</th>
        <th>p10</th>
        <th>p11</th>
        <th>p12</th>
        <th>p13</th>
        <th>p14</th>
        <th>p15</th>
        <th>p16</th>
        <th>p17</th>
        <th>p18</th>
    </tr>
    </thead>
    <tbody>
    @foreach($users as $user)
        <tr>
            <td>{{ $user->matricula }}</td>
            <td>{{ $user->carrera }}</td>
            <td>{{$user->nombre}} {{$user->ape_paterno}} {{$user->ape_materno}}</td>
            <td>{{ $user->genero }}</td>
            <td>{{ $user->edad }}</td>
            <td>{{ $user->cuatrimeste }}</td>
            <td>{{ $user->telefono }}</td>
            <td>{{ $user->email }}</td>
            <td>
                @if($user->resultado === 0)
                Verde
                @elseif ($user->resultado === 1)
                Amarillo
                @elseif ($user->resultado === 2)
                Rojo
                @else()
                
                @endif
            </td>
            <td>{{ $user->puntos }}</td>
            <td>{{ $user->created_at }}</td>
            <td>{{ $user->p_1 }}</td>
            <td>{{ $user->p_2 }}</td>
            <td>{{ $user->p_3 }}</td>
            <td>{{ $user->p_4 }}</td>
            <td>{{ $user->p_5 }}</td>
            <td>{{ $user->p_6 }}</td>
            <td>{{ $user->p_7 }}</td>
            <td>{{ $user->p_8 }}</td>
            <td>{{ $user->p_9 }}</td>
            <td>{{ $user->p_10 }}</td>
            <td>{{ $user->p_11 }}</td>
            <td>{{ $user->p_12 }}</td>
            <td>{{ $user->p_13 }}</td>
            <td>{{ $user->p_14 }}</td>
            <td>{{ $user->p_15 }}</td>
            <td>{{ $user->p_16 }}</td>
            <td>{{ $user->p_17 }}</td>
            <td>{{ $user->p_18 }}</td>
        </tr>
    @endforeach
    </tbody>
</table>