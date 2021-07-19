<html>
<h2> DATOS DE LOS ALUMNOS </h2>
<br>
<br>
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
    {
        margin: 0;
        padding: 0;
        font-family: sans-serif;
        box-sizing: border-box;
      }

      :focus {
        outline: none;
      }

      body {
        background: #ec380b;
        display: flex;
        min-height: 100vh;
      }

      form {
        margin: auto;
        width: 80%;
        max-width: 500px;
        background: #f3efef;
        padding: 20px;
        border: 1px solid rgba(0, 0, 0, 0.2);
      }

      h2 {
        text-align: center;
        margin-bottom: 10px;
        color: rgba(8, 8, 8, 0.5);
        font-family: Arial Black;
      }

      input {
        display: block;
        padding: 10px;
        width: 50%;
        margin: 30px 0;
        font-size: 20px;
      }

      input[type="submit"] {
        background: linear-gradient(#f0efeb, #FFB940);
        border: 0;
        color: black;
        opacity: 0.8;
        cursor: pointer;
         font-family: Arial;
        border-radius: 20px;
        margin-bottom: 0;
      }

      input[type="submit"]:hover {
        opacity: 1;


      }

      input[type="submit"]:active {
        transform: scale(0.95);

      }

      @media (max-width:768px) {
        form {
          width: 100%;
        }
      }

      @media (max-width:480px) {
        form {
          width: 100%;
        }
      }
    table {
        width: 80%;
        border: 1px solid rgb(203, 216, 26);
        background: orange;
     }
     th, td {
        width: 10%;
        text-align: left;
        vertical-align: left;
        font-family: Verdana; font-weight: bold; color:#660033
        border: 1px solid rgb(245, 243, 243);
        background: rgb(240, 243, 240);

     }

</style>
</html>
