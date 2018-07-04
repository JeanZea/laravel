<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Lista de Participantes</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <table class="table table-hover">
                        <tr>
                            <th>ID</th>
                            <th>Nombres</th>
                            <th>Correo</th>
                            <th>Telefono</th>
                            <th>Direccion</th>
                        </tr>

                        @foreach($participante as $participantes)

                        <tr>
                            <th>{{$participantes->id}}</th>
                            <th>{{$participantes->name}}</th>
                            <th>{{$participantes->email}}</th>
                            <th>{{$participantes->phone}}</th>
                            <th>{{$participantes->address}}</th>
                        </tr>
                        @endforeach()
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>
