<?php

$con = mysqli_connect("localhost","root","","passmgr");

?>

<head>
    <link rel="stylesheet" type="text/css" media="screen" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>
<div class="login-container">

    <table class="login-table">
    
        <tr>
            <th>URL</th>
            <th>Password</th>
        </tr>

        <?php

            $sql = "select * from temp";
            $pst = mysqli_stmt_init($con);
            if(!mysqli_stmt_prepare($pst,$sql)) {
                echo 'Error';
            }
            else {
                mysqli_stmt_execute($pst);
                $res = mysqli_stmt_get_result($pst);
                $n = 1;
                while($row = mysqli_fetch_assoc($res)) {
                    echo '<tr>';
                    echo '<td>www.url'.$n.'.com</td><td><input class="passfield" type="password" id="pass'.$n.'" value="'.$row['pass'].'"><button class="passkey" onclick="if (pass'.$n.'.type == \'text\') pass'.$n.'.type = \'password\'; else pass'.$n++.'.type = \'text\';"><i class="fas fa-key"></i></button></td>';
                    echo '</tr>';
                }
            }

        ?>

    </table>

    

</div>

