<html>
<center> <h2> DATOS DE LOS ALUMNOS </h2> </center>
<table class="table table-light">
<thead class="thead-light">
    <tr class="even">
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
<tr class="odd">
<td>{{$estudiante->id}}</td>
<td>{{$estudiante->nombre}}</td>
<td>{{$estudiante->apellidos}}</td>
<td>{{$estudiante->edad}}</td>
<td>{{$estudiante->email}}</td>
<td> <a href="{{route('editar',$estudiante->id)}}">
    <input type="submit"  onclick="return confirm('¿Quieres Editar?')" value="Editar" /*name="btnactualizar"*/></a> |
 <form action="{{route('eliminar',$estudiante->id)}}" method="POST">
   @csrf
   {{method_field('DELETE')}}
   @csrf
    <input type="submit" onclick="return confirm('¿Quieres Eliminar?')"
    value="Eliminar" /*name="btneliminar"*/>  </form>



    </td>
</tr>
@endforeach
</tbody>
</table>>
<style>
    table {
        width: 100%;
        border: 1px solid rgb(216, 26, 26);
     }
     th, td {
        width: 15%;
        text-align: left;
        vertical-align: top;
        border: 1px solid rgb(14, 7, 7);

     }

</style>
</html>
