<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Punto3</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/js/all.min.js" integrity="sha512-YSdqvJoZr83hj76AIVdOcvLWYMWzy6sJyIMic2aQz5kh2bPTd9dzY3NtdeEAzPp/PhgZqr4aJObB3ym/vsItMg==" crossorigin="anonymous"></script>

</head>
<body>
    <form action="punto3.php">
    </form>
    <header>
            <br>
            <nav class="navbar navbar-light bg-light">
                <a class="navbar-brand" href="tallerindex.php">
                <h1><i class="fas fa-money-check-alt"></i> Descuento</h1>
                </a>
            </nav>
    </header>
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-4">

                    <form class="mt-4" action="punto3.php" method="POST">
                        <div class="row">
                            <div class="col">
                            <input type="number" class="form-control" placeholder="Cantidad" name="cantidad">
                            </div>
                            <div class="col">
                            <input type="text" class="form-control" placeholder="Costo ($)" name="costo">
                            </div>
                        </div>
                        <div class="row justify-content-center">
                        <button type="submit" class="btn btn-success mt-3" name="botonCalcular">CALCULAR DESCUENTO</button>
                    </form>

                    <?php  if(isset($_POST["botonCalcular"])): ?>
                        <h4 class="text-success text-center">
                            <?php 
                                $cantidad=$_POST['cantidad'];
                                $costo=$_POST['costo'];
                            
                                if ($cantidad < 3) { 
                                    $valortotal= $costo;
                                    echo " El total sin descuento es: ".$valortotal;
                                } elseif ($cantidad = 3) { 
                                    $descuento= $costo *0.10;
                                    $valortotal= $costo - $descuento;
                                    echo " El total con el 10% de descuento es: ".$valortotal;
                                } elseif ($cantidad >3 && $cantidad<=8) {
                                    $descuento= $costo *0.20;
                                    $valortotal= $costo - $descuento;
                                    echo " El total con el 20% de descuento es: ".$valortotal;
                                } elseif ($cantidad > 8) {
                                    $descuento= $costo *0.50;
                                    $valortotal= $costo - $descuento;
                                    echo " El total con el 50% de descuento es: ".$valortotal;
                                }  
                            ?>
                        </h4>
                    <?php endif ?>                 
                </div>
            </div>
        </div>
</body>
</html>