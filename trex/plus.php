<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body style="background-image: url('img/back.jpg'); background-size: cover;">
    <center>
     <form action="calcp.php" method="post">
        <table border="2" class="table table-dark table-striped" style="width: 70%; margin-top: 50px; ">
            <tr>
                <td>
                    <label>
                        <img src="img/king.png" width="100" height="150">
                    </label>
                </td>
                <td>
                    <input type="radio" name="t" value="y" >give it
                    <input type="radio" name="t" value="n"  checked>don't give it
                </td>
                
                
            </tr>
            <tr>
                <td>
                    <label>
                        <img src="img/quenblack.png" width="100" height="150">
                    </label>
                </td>
                <td>
                    <input type="radio" name="qbt" value="y">give it
                    <input type="radio" name="qbt" value="n"  checked>don't give it
                </td>
                
            </tr>
            <tr>
                <td>
                    <label>
                        <img src="img/quentree.png" width="100" height="150">
                    </label>
                </td>
                <td>
                    <input type="radio" name="qet" value="y">give it
                    <input type="radio" name="qet" value="n"  checked>don't give it
                </td>
               
            </tr>
            <tr>
                <td>
                    <label>
                        <img src="img/quenred.png" width="100" height="150  ">
                    </label>
                </td>
                <td>
                    <input type="radio" name="qrt" value="y">give it
                    <input type="radio" name="qrt" value="n"  checked>don't give  it
                </td>
                
            </tr>
            <tr>
                <td>
                    <label>
                        <img src="img/quendim.png" width="100" height="150">
                    </label>    
                </td>
                <td>
                    <input type="radio" name="qdt" value="y">give it
                    <input type="radio" name="qdt" value="n"  checked>don't give it
                </td>
            </tr>
            <tr>
                <td colSpan="3"><input type="submit" value="calc" class="btn btn-primary" style="width: 70%;"></td>
            </tr>
        </table>
    </form>
   </center>
</body>
</html>