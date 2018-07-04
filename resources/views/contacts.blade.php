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
					<form class="form-horizontal" action="/register" method="POST">
					@csrf 
					  <div class="form-group">
					    <label for="" class="col-sm-2 control-label">Name</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" name="name" placeholder="Name">
					    </div>
					  </div>
					  <div class="form-group">
					    <label for="" class="col-sm-2 control-label">Email</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" name="email" placeholder="Email">
					    </div>
					  </div>
					  <div class="form-group">
					    <label for="" class="col-sm-2 control-label">Phone</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" name="phone" placeholder="Phone">
					    </div>
					  </div>
					  <div class="form-group">
					    <label for="" class="col-sm-2 control-label">Address</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" name="address" placeholder="Address">
					    </div>
					  </div>
					  <div class="form-group">
					    <div class="col-sm-offset-2 col-sm-10">
					      <button type="submit" class="btn btn-success">Regitrar</button>
					    </div>
					  </div>
					</form>
                </div>
            </div>
        </div>
    </body>
</html>
