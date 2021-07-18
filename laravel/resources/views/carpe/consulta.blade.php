<html>
<table class="table table-light">
<thead class="thead-light">
    <tr>
<th>Id</th>
<th>Nombre </th>
<th>Apellidos</th>
<th>Edad</th>
<th> Email</th>

    </tr>
</thead>
<tbody>
    @foreach ($estudiantes as $estudiante )
<tr>
<td>{{$estudiante->id}}</td>
<td>{{$estudiante->nombre}}</td>
<td>{{$estudiante->apellidos}}</td>
<td>{{$estudiante->edad}}</td>
<td>{{$estudiante->email}}</td>
<td> EDITAR | BORRAR </td>
</tr>
@endforeach
</tbody>
</table>>
</html>
