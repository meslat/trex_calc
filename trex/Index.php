<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
</head>

<body style="background-image: url('img/back.jpg'); background-size: cover;">
    

   <center>
     <form action="calc.php" method="post">
        <table border="2" class="table table-dark table-striped" style="width: 70%; margin-top: 50px; ">
            <tr>
                <td>
                    <label>
                        <img src="img/king.png" width="100" height="150">
                    </label>
                </td>
                <td>
                    <input type="radio" name="t" value="y" >take it
                    <input type="radio" name="t" value="n"  checked>don't take it
                </td>
                
                <td>
                    <input type="radio" name="d" value="y">yes
                    <input type="radio" name="d" value="n"  checked>no
                </td>
                <td>
                    مدبل؟؟؟؟
                </td>
            </tr>
            <tr>
                <td>
                    <label>
                        <img src="img/quenblack.png" width="100" height="150">
                    </label>
                </td>
                <td>
                    <input type="radio" name="qbt" value="y">take it
                    <input type="radio" name="qbt" value="n"  checked>don't take it
                </td>
                <td>
                    <input type="radio" name="qbd" value="y">yes
                    <input type="radio" name="qbd" value="n"  checked>no
                </td>
                <td>
                    مدبل؟؟؟؟
                </td>
            </tr>
            <tr>
                <td>
                    <label>
                        <img src="img/quentree.png" width="100" height="150">
                    </label>
                </td>
                <td>
                    <input type="radio" name="qet" value="y">take it
                    <input type="radio" name="qet" value="n"  checked>don't take it
                </td>
                <td>
                    <input type="radio" name="qed" value="y">yes
                    <input type="radio" name="qed" value="n"  checked>no
                </td>
                <td>
                    مدبل؟؟؟؟
                </td>
            </tr>
            <tr>
                <td>
                    <label>
                        <img src="img/quenred.png" width="100" height="150">
                    </label>
                </td>
                <td>
                    <input type="radio" name="qrt" value="y">take it
                    <input type="radio" name="qrt" value="n"  checked>don't take it
                </td>
                <td>
                    <input type="radio" name="qrd" value="y">yes
                    <input type="radio" name="qrd" value="n"  checked>no
                </td>
                <td>
                    مدبل؟؟؟؟
                </td>
            </tr>
            <tr>
                <td>
                    <label>
                        <img src="img/quendim.png" width="100" height="150">
                    </label>    
                </td>
                <td>
                    <input type="radio" name="qdt" value="y">take it
                    <input type="radio" name="qdt" value="n"  checked>don't take it
                </td>
                <td>
                    <input type="radio" name="qdd" value="y">yes
                    <input type="radio" name="qdd" value="n"  checked>no
                </td>
                <td>
                    مدبل؟؟؟؟
                </td>
            </tr>
            <tr>
                <td colspan="1">
                    <label>
                        <img src="img/dim.png" width="100" height="150">
                    </label>
                </td>
                <td colspan="3">
                     <select name="dimn" style="width: 100%;background-color: #757575;color: white;" class="form-select">
                        <option value="false" selected>Select a number of dimes</option>
                    <?php
                    for($I=0;$I<=13;$I++){
                        echo "<option value='$I'>$I</option>";
                    }
                    ?>
                     </select>
                </td>
            </tr>
            <tr>
                <td colspan="1"  >total number of cards u take</td>
                <td colspan="3"><input type="number" name="total_cards" style="width: 100%; background-color: #757575;color: white;" class="form-control" max="52"></td>
            </tr>
            <tr>
                <td colspan="4"><input type="submit" value="calc" style="width: 40%;" class="btn btn-primary"></td>
            </tr>
        </table>
    </form>
   </center>
  

</body>

</html>