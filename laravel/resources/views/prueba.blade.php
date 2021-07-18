<html>

<head>
<meta charset="UTF-8">
<title>Página Web</title>
<link rel="stylesheet" href="estilos.css">
</head>

<body>

<form action="{{url('/carpe')}}" method="POST">
    @csrf
@include('carpe.formulario');


</form>
<form><br><a href="{{url('/carpe/consulta')}}">
    <input type="submit" value="Actualizar" /*name="btnactualizar"*/></a> <br></form>
<form><br><input type="submit" onclick="return confirm('¿Quieres Eliminar?')"
value="Eliminar" /*name="btneliminar"*/> <br></form>
<form action="{{url('/carpe/consulta')}}" method="GET"><br>
    <input type="submit" value="Mostrar" /*name="btnbuscar"*/></a> <br></form>
</body>
</html>
