<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Pattern</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <?php
        function square_pattern()
        {
            for($i=1 ; $i<=4 ; $i++)
            {
                for($j=1; $j<=4; $j++)
                {
                    if($i==1 || $i==4 || $j==1 || $j==4)
                    {
                        echo "*";
                    }
                    else
                    {
                        echo " ";
                    }
                }
                echo "<br>";
            }
        }
        square_pattern();
    ?>
</body>
</html>