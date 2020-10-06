<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/js/all.min.js" integrity="sha512-YSdqvJoZr83hj76AIVdOcvLWYMWzy6sJyIMic2aQz5kh2bPTd9dzY3NtdeEAzPp/PhgZqr4aJObB3ym/vsItMg==" crossorigin="anonymous"></script>
</head>
<body>
        <header>
            <br>
            <nav class="navbar navbar-light bg-light">
                <a class="navbar-brand" href="tallerindex.php">
                <h1><i class="fas fa-calculator"></i> Calcular</h1>
                </a>
            </nav>
        </header>
        <main>
            <form class="mt-4" action="Punto1.php" method="POST">
                <div class = "container">
                    <div class="row justify-content-center">
                        <div class="col-4">
                            <input type="number" class="form-control" placeholder="Numero1" name="numero1">
                        </div>
                        <div class="col-4">
                            <input type="number" class="form-control" placeholder="Numero2" name="numero2">
                        </div>
                    </div>
                </div>  
                <div class="row justify-content-center">
                    <div class="form-group">
                        <br>
                        <label for="seleccione operador">Seleccione Operador</label>
                            <select class="form-control" name="seleccioneoperador">
                                <option>Suma</option>
                                <option>Resta</option>
                                <option>Multiplicacion</option>
                                <option>Division</option>
                            </select>
                    </div>    
                </div>
                <div class="row justify-content-center">
                    <button type="submit" class="btn btn-success mt-3" name="botoncalcular">Calcular</button>
                </div>
            </form>
            <?php
              if(isset($_POST["botonCalcular"])); ?>
                    <h4 class="text-success text-center">
                <?php 
                $total = $_POST["seleccioneoperador"];
                switch($total)
                {
                    case "Suma";
                    echo $_POST["numero1"] + $_POST["numero2"];
                    break;

                    case "Resta";
                    echo $_POST["numero1"] - $_POST["numero2"];
                    break;

                    case "Multiplicacion";
                    echo $_POST["numero1"] * $_POST["numero2"];
                    break;

                    case "Division";
                    echo $_POST["numero1"] / $_POST["numero2"];
                    break;
                }
                ?>
                </h4>
            <?php ?> 
        </main>
        <footer>
        </footer>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>