<form action="{{route('update',$estudiante->id)}}" method="POST">
@method('PUT')
    @csrf

    <h2>BASE DE DATOS PRUEBA_LARAVEL</h2>
<input type="text" placeholder="&#128273; Nombre" value="{{$estudiante->nombre}}" name="nombre" required>
<input type="text" placeholder="&#128273; Apellidos" value="{{$estudiante->apellidos}}" name="apellidos" required>
<input type="text" placeholder="&#128273; Edad" value="{{$estudiante->edad}}" name="edad" required>
<input type="text" placeholder="&#128273; Email" value="{{$estudiante->email}}" name="email" required>
{{-- <input type="text" placeholder="&#128273; Id_Estudiante" name="id_estudiante" required>
<input type="text" placeholder="&#128273; Semestre" name="semestre" required>
<input type="text" placeholder="&#128273; Grupo" name="grupo" required>
<input type="text" placeholder="&#128273; Turno" name="turno" required> --}}
<input type="submit" value="Registrar" /*name="btnregistrar"*/>

<br>
<style>  {
    margin: 0;
    padding: 0;
    font-family: sans-serif;
    box-sizing: border-box;
  }

  :focus {
    outline: none;
  }

  body {
    background: #0a0a0a;
    display: flex;
    min-height: 100vh;
  }

  form {
    margin: auto;
    width: 50%;
    max-width: 500px;
    background: #F3F3F3;
    padding: 20px;
    border: 1px solid rgba(0, 0, 0, 0.2);
  }

  h2 {
    text-align: center;
    margin-bottom: 10px;
    color: rgba(0, 0, 0, 0.5);
    font-family: Arial Black;
  }

  input {
    display: block;
    padding: 10px;
    width: 100%;
    margin: 30px 0;
    font-size: 20px;
  }

  input[type="submit"] {
    background: linear-gradient(#FFDA63, #FFB940);
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
  }</style>

    <form>


