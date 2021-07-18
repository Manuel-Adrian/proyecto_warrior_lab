<html>
<table class="table table-light">
<thead class="thead-light">
    <tr>
<th>Id</th>
<th>Nombre </th>
<th>Apellidos</th>
<th>Edad</th>
<th> Email</th>
<th> ACCIONES</th>

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
<td> <a href="{{url('/carpe/'.$estudiante->id.'/edit')}}">
    <input type="submit" value="Editar" /*name="btnactualizar"*/></a>



    |
 <form action="{{url('/carpe/consulta'.$estudiante->id)}}" method="POST">
   @csrf
   {{method_field('DELETE')}}
    <input type="submit" onclick="return confirm('¿Quieres Eliminar?')"
value="Eliminar" /*name="btneliminar"*/>  </form>



    </td>
</tr>
@endforeach
</tbody>
</table>>
</html>
