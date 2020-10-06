<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/js/all.min.js" integrity="sha512-YSdqvJoZr83hj76AIVdOcvLWYMWzy6sJyIMic2aQz5kh2bPTd9dzY3NtdeEAzPp/PhgZqr4aJObB3ym/vsItMg==" crossorigin="anonymous"></script>
</head>
<body>
        <header>
            <br>
            <nav class="navbar navbar-light bg-light">
                <a class="navbar-brand" href="tallerindex.php">
                <h1><i class="fas fa-hand-holding-usd"></i> Salario</h1>
                </a>

                
            </nav>
        </header>
        <main>
            <form class="mt-4" action="punto4.php" method="POST">
                <div class = "container">
                    <div class="row justify-content-center">
                        <div class="col-4">
                            <input type="number" class="form-control" placeholder="Ingrese horas trabajas" name="horas">
                        </div>
                    </div>
                </div>  
                <div class="row justify-content-center"> 
                </div>
                <div class="row justify-content-center">
                    <button type="submit" class="btn btn-success mt-3" name="botoncalcular">Calcular</button>
                </div>
            </form>
           
            <?php if(isset($_POST["botoncalcular"])): ?>
                <h4 class="text-danger text-center">
                        <?php 
                            
                            $horastrabajadas=$_POST["horas"];
                            $horanormal=20000;
                            $horaextra=25000;
                            $horasencilla=40;
                           
                            if ($horastrabajadas<=40)
                            {
                                $horae=$horastrabajadas-$horasencilla;
                                $hora=$horastrabajadas-$horae;
                                $totalht=$hora*$horaextra;
                                $totalhe=$horae*$horaextra;

                                $salarios=$horanormal*$horastrabajadas;

                                echo(" el salario del trabajador es: ") .$salarios;
                            }
                            elseif($horastrabajadas>40)
                            {
                                $totalht=$horastrabajadas*$hora;
                                $salarios=$totalht;
                                echo(" el salario del trabajador es: ") .$salarios;
                            }
                        ?>
                
                </h4>
            <?php endif?>

        </main>
        <footer>
        </footer>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>


