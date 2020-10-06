<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMC</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/js/all.min.js" integrity="sha512-YSdqvJoZr83hj76AIVdOcvLWYMWzy6sJyIMic2aQz5kh2bPTd9dzY3NtdeEAzPp/PhgZqr4aJObB3ym/vsItMg==" crossorigin="anonymous"></script>
</head>
<body>
        <header>
            <br>
            <nav class="navbar navbar-light bg-light">
                <a class="navbar-brand" href="tallerindex.php">
                <h1><i class="fas fa-balance-scale"></i> IMC (Indice De Masa Corporal)</h1>
                </a>

                
            </nav>
        </header>
        <main>
            <form class="mt-4" action="punto2.php" method="POST">
                <div class = "container">
                    <div class="row justify-content-center">
                        <div class="col-4">
                            <input type="number" class="form-control" placeholder="Ingrese Peso (KG)" name="peso">
                        </div>
                        <div class="col-4">
                            <input type="text" class="form-control" placeholder="Ingrese Altura (Metro)" name="altura">
                        </div>
                    </div>
                </div>  
                <div class="row justify-content-center">
                    <div class="form-group">
                        <br>
                        
                    </div>    
                </div>
                <div class="row justify-content-center">
                    <button type="submit" class="btn btn-success mt-3" name="botoncalcular">Calcular</button>
                </div>
            </form>
            
            <?php if(isset($_POST["botoncalcular"])): ?>
                    <h4 class="text-success text-center">
                    <?php 
                           $peso=$_POST['peso'];
                           $altura=$_POST['altura'];    
                           $alturatotal = $altura*$altura;
                           $IMC= $peso / $alturatotal;
                           
                           $IMCredondeada = round($IMC, 2);
                           echo("tu indice de masa corporal es de: ");

                           $IMC = $peso / $alturatotal;
                           if ($IMC < 18.5)
                           {
                               echo(" Peso Insuficiente: " .$IMCredondeada);
                           }
                           elseif ($IMC >= 18.5 && $IMC<25)
                           {
                               echo(" Peso Normal: " .$IMCredondeada);
                           }
                           elseif ($IMC >= 25 && $IMC<27)
                           {
                               echo(" Sobrepeso Grado 1: " .$IMCredondeada);
                           }
                           elseif ($IMC >= 27 && $IMC<30)
                           {
                               echo(" Sobrepeso Grado II (Preobesidad): " .$IMCredondeada);
                           }
                           elseif ($IMC >= 30 && $IMC<35)
                           {
                               echo(" Obesidad de tipo I: " .$IMCredondeada);
                           }
                           elseif ($IMC >= 35 && $IMC<40)
                           {
                               echo(" Obesidad de tipo II: " .$IMCredondeada);
                           }
                           elseif ($IMC >= 40 && $IMC<50)
                           {
                               echo(" Obesidad de tipo III (mórbidad): " .$IMCredondeada);
                           }
                           elseif ($IMC >= 50 )
                           {
                               echo(" obesidad de tió IV (Extrema): " .$IMCredondeada);
                           }
                          
                    ?>
                    </h4>
                    <?php endif ?>
        </main>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>


