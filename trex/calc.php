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
$ktake = $_POST['t'];
if(isset($_POST['d'])){
    $kdouble = $_POST['d'];
}
$qbtake = $_POST['qbt'];
$qetake = $_POST['qet'];
$qrtake = $_POST['qrt'];
$qdtake = $_POST['qdt'];
if (isset($_POST['dimn'])){
    $dimn = $_POST['dimn'];
}
else{
    $dimn = 0;
}
if (isset($_POST['total_cards'])){
    $total_cards = $_POST['total_cards'];
}
else{
    $total_cards = 0;
}

if(isset($_POST['qbd'])){
    $qbdouble = $_POST['qbd'];
}
if(isset($_POST['qed'])){
    $qedouble = $_POST['qed'];
}
if(isset($_POST['qrd'])){
    $qrdouble = $_POST['qrd'];
}
if(isset($_POST['qdd'])){
    $qddouble = $_POST['qdd'];
}
$tscore = 0;
$kscore = 0;
$qbscore = 0;
$qescore = 0;
$qrscore = 0;
$qdscore = 0;
$dimscore = 0;
$totalcardsc = 0;
$sccards = 0;
switch($ktake){
    case 'y':
        switch($kdouble){
            case 'y':
                $kscore = 150;
                break;
            case 'n':
                $kscore = 75;
                break;
        }
        break;
        case 'n':
        $kscore = 0;
        break;
}
switch($qbtake){
    case 'y':
        switch($qbdouble){
            case 'y':
                $qbscore = 50;
                break;
            case 'n':
                $qbscore = 25;
                break;
        }
        break;
    case 'n':
        $qbscore = 0;
        break;
}
switch($qetake){
    case 'y':
        switch($qedouble){
            case 'y':
                $qescore = 50;
                break;
            case 'n':
                $qescore = 25;
                break;
        }
        break;
    case 'n':
        $qescore = 0;
        break;
}
switch($qrtake){
    case 'y':
        switch($qrdouble){
            case 'y':
                $qrscore = 50;
                break;
            case 'n':
                $qrscore = 25;
                break;
        }
        break;
    case 'n':
        $qrscore = 0;
        break;
}
switch($qdtake){
    case 'y':
        switch($qddouble){
            case 'y':
                $qdscore = 50;
                break;
            case 'n':
                $qdscore = 25;
                break;
        }
        break;
    case 'n':
        $qdscore = 0;
        break;
}
$dimscore = intval($dimn) * 10;
$sccards = (intval($total_cards) /4)*15;
$totalcardsc = $kscore + $qbscore + $qescore + $qrscore + $qdscore + $dimscore+$sccards;

?>
<center>
    <div class="card " style="width: 200px;height: 309px;background-image: url('img/dback.png'); background-size: cover; color: black; margin-top: 10%;box-shadow: 0px 0px 20px 20px black;">
        <div class="card-body" style=" height: 100%;">
            <h5 class="card-title" style="text-align: center; font-size: 30px; color: black;">RESULT</h5>
            <p class="card-text" style="text-align: center; font-size: 24px; margin-top: 20%;">Total = <?php echo $totalcardsc; ?></p>
            <a href="plus.php" class="card-link" style="text-align: center;margin-top: 60%; display: block;">
                <button class="btn btn-primary">to the given player</button>
            </a>
            <a href="page1.php" class="card-link" style="text-align: center;margin-top: 5%; display: block;margin-left: 0%;">
                <button class="btn btn-primary" style="width: 100%;">to the next player</button>
            </a>
        </div>
    </div>
  </center>
</body>
</html>
