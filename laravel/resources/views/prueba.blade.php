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

@if (session('/carpe'))
<div class="alert alert-sucess mt-3">
    {{session('/carpe')}}
</div>
@endif
<form action="{{url('/carpe/consulta')}}" method="GET"><br>
    <input type="submit" value="Mostrar" /*name="btnbuscar"*/></a> <br></form>
</body>
</html>
