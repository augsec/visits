<?php
require("conn/connection.php");


// Abrir conexão com o banco de dados SQLite
$db = new PDO("sqlite:" . $db_file);

// Contar o número de registros na tabela "visitors"

$count = $pdo->query("SELECT count(*) FROM visitors")->fetchColumn();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visitors</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<style>
    .centered {
        margin: 0 auto !important;
        float: none !important;
        display: flex;
        justify-content: center;
        align-items: center;
    }
</style>

<body>

    <div class="container">

        <div class="row">


            <div class="col-lg-4 centered">



                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Visitors Counter</h5>
                        <hr>
                        <p class="card-text">Visitors:
                            <span class="badge bg-secondary">
                                <?php echo $count; ?>
                            </span>
                        </p>

                        <button class="btn btn-danger" onclick="location.href='del_visits.php';" type="submit"
                            data-bs-toggle="tooltip" data-bs-placement="bottom" title="Reset all visits counting"><i
                                class="fa fa-trash" aria-hidden="true"></i> Reset All
                        </button>
                        <button class="btn btn-primary" onclick="location.href='insert_visits.php';" type="submit"
                            data-bs-toggle="tooltip" data-bs-placement="bottom"
                            title="Register a new visit in the database"><i class="fa fa-plus-square"
                                aria-hidden="true"></i> Register Visit</button>

                    </div>
                </div>







            </div>




        </div>

    </div>










    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

</body>

</html>