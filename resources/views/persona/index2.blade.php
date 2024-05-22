<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de personas</title>
</head>
<body>
    <form action="{{route('persona.index')}}" method="get">
        <label for="">Buscar:</label>
        <input type="text" name="texto" value="{{$texto}}">
        <input type="submit" value="Buscar">
    </form>
    <a href="{{route('persona.create')}}">Nuevo</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>DNI</th>
                <th>Edad</th>
            </tr>
        </thead>
        <tbody>
            @foreach($registros as $reg)
            <tr>
                <td>{{$reg->id}}</td>
                <td>{{$reg->nombre}}</td>
                <td>{{$reg->apellido}}</td>
                <td>{{$reg->dni}}</td>
                <td>{{$reg->edad}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{$registros->appends(["texto" => $texto])}}
</body>
</html>
