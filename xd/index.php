<?php session_start(); ?>
<html>
	<head>
		<title>Formulario de Registro</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
</head>
	<body>
    <div class="container">
        <div class="row d-flex justify-content-around mt-5">
            <div class="card col-md-6 col-md-offset-6">
                <article class="card-body">
                    <h4 class="card-title mb-4 mt-1 text-center">Iniciar Sesion</h4>
                        <form role="form" name="login" action="db/login.php" method="post">
                        <div class="form-group">
                            <label for="usuario">Usuario</label>
                            <input type="text" class="form-control" id="usuario" name="usuario" placeholder="N° de cedula">
                        </div>
                        <div class="form-group">
                            <label for="password">Contrase&ntilde;a</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Contrase&ntilde;a">
                        </div>

                        <button type="submit" class="btn btn-default">Acceder</button>
                        </form>
                        <div id="msg_error" class="alert alert-danger" role="alert" style="display: none"></div>
                </article>
            </div>
        </div>
    </div>          
</div>
</div>
</div>
		<script src="js/main.js"></script>
	</body>
</html>