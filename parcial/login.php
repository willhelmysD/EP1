<?php
    /*session_start();
    if(isset($_SESSION['usuario'])){
        var_dump($_SESSION['usuario']);
    }else{
        header('location:login.php');
        exit;
    }*/
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Parcial</title>
        <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
        <style>
            .footer-fijo {
                position: fixed;
                bottom: 0;           /* lo coloca al final */
                left: 0;
                width: 100%;         /* ocupa todo el ancho */
                background-color: #99ce64ba;;
                color: white;
                text-align: center;
                padding: 10px 0;
            }
        </style>
    </head>
    <body>    
        <div class="wrapper">
            <div class="main p-3">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <div class="card" style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2)"> 
                                <div class="card-body">
                                    <div class="m-3 text-center">
                                        <img src="img/tamal.png" alt="" style="width: 30%;">
                                    </div>
                                    <h2 class="text-center">Bienvenido</h2>
                                    <h5 class="text-center">LOGIN</h5>
                                    <form method="post" action="proceso/validar_login.php">
                                        <div class="mb-3">
                                            <label for="nick">Nick</label>
                                            <input name="nick" id="nick" class="form-control">
                                        </div>
                                        <div class="mb-3">
                                            <label for="cel">Cel</label>
                                            <input name="cel" id="cel" class="form-control">
                                        </div>  
                                        <div class="mb-3 text-end">
                                            <button class="btn btn-primary">Enviar</button>
                                        </div>                                  
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>  
                <footer class="footer-fijo">
                    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.05);">
                        © 2025 Copyright:
                        <a class="text-body" href="https://mdbootstrap.com/">Electiva 1</a>
                    </div>
                </footer>         
            </div>   
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
            crossorigin="anonymous"></script>
        <script src="js/script.js"></script>
    </body>
</html>