<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Persona</title>
</head>
<body>
<form action="{{route('persona.store')}}" method="post">
        @csrf
        <label for="nombre">Código</label>
        <input type="text" name="nombre" id="nombre">
        
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre">
        
        <label for="apellido">Apellido</label>
        <input type="text" name="apellido" id="apellido">
        
        <label for="dni">DNI</label>
        <input type="number" name="dni" id="dni">
        
        <label for="edad">Edad</label>
        <input type="number" name="edad" id="edad">
        
        <input type="submit" value="Guardar">
    </form>
</body>
</html>