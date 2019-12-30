<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="_css/estilo.css"/>
        <meta charset="UTF-8"/>
        <title>Multiplication Table</title>
    </head>
    <body>
        <div>
            <?php
            $n=isset($_GET["num"])?$_GET["num"]:1;
            for ($c=1;$c<=10;$c++){
                $r=$n*$c;
                echo "$n X $c = $r <br/>";
            }
            ?>
            <br/><a href="javascript:history.go(-1)">Back</a>
        </div>
    </body>
</html>