<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">  
</head>

<body style="background-image: url('img/back.jpg'); background-size: cover;">
    <?php
    $kgive = $_POST['t'];
    $qbgive = $_POST['qbt'];
    $qegive = $_POST['qet'];
    $qrtgive = $_POST['qrt'];
    $qdtgive = $_POST['qdt'];
    $totplus = 0;
    switch ($kgive) {
        case 'y':
            $totplus += 75;
            break;
        case 'n':
            $totplus += 0;
            break;
    }
    switch ($qbgive) {
        case 'y':
            $totplus += 25;
            break;
        case 'n':
            $totplus += 0;
            break;
    }


    switch ($qegive) {
        case 'y':
            $totplus += 25;
            break;
        case 'n':
            $totplus += 0;
            break;
    }
    switch ($qrtgive) {
        case 'y':
            $totplus += 25;
            break;
        case 'n':
            $totplus += 0;
            break;
    }
    switch ($qdtgive) {
        case 'y':
            $totplus += 25;
            break;
        case 'n':
            $totplus += 0;
            break;
    }
  ?>
  <center>
    <div class="card " style="width: 200px;height: 309px;background-image: url('img/dback.png'); background-size: cover; color: black; margin-top: 10%;box-shadow: 0px 0px 20px 20px black;">
        <div class="card-body" style=" height: 100%;">
            <h5 class="card-title" style="text-align: center; font-size: 30px; color: black;">RESULT</h5>
            <p class="card-text" style="text-align: center; font-size: 24px; margin-top: 20%;">Total = <?php echo $totplus; ?></p>
            <a href="page1.php" class="card-link" style="text-align: center;margin-top: 60%; display: block;">
                <button class="btn btn-primary">to the next player</button>
            </a>
        </div>
    </div>
  </center>
</body>

</html>