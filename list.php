<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="script.jc"></script>
</head>
<body>
    List all the students<br>
    <table border="1">
    <?php
    $db=mysqli_connect('localhost','root','','student');
    $sql="SELECT * FROM students";
    $result= mysqli_query($db, $sql);

   // var_dump($result);
    while($row = mysqli_fetch_array($result)){
        echo "<tr>";
        $i=0;
        foreach($row as $col){
            if($i%2==0){
                echo"<td>".$col;
            }
            $i++;

        }
        echo "</td>";
        //echo "<td>".$row[0]."<td> ".$row[1]."<td> ".$row[2]."<td> ".$row[3];
    }
    ?>
    </table>
</body>
</html>