<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/bootstrap.css">
    <script src="./assets/js/bootstrap.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <label class="form-label">Correo</label>
                <input type="text" name="txtCorreo" id="txtCorreo">
            </div>
            <div class="col-12">
                <label class="form-label">Password</label>
                <input type="password" name="txtPassword" id="txtPassword">
            </div>
            <div class="col-12">
                <a onclick="login()"  type="button" class="btn btn-primary" value="Registar">iniciar</a>
            </div>    
        </div>
    </div>
</body>
</html>
<script src="./assets/js/login.js"></script>