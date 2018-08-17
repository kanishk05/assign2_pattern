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
       function swastika($row, $col) 
       {
       for ($i = 0; $i < $row; $i++) 
       {
           for ($j = 0; $j < $col; $j++) 
           {
           // checking if i < row/2
           if ($i < floor($row / 2))
           {
                
               // checking if j<col/2
               if ($j < floor($col / 2)) 
               {
                    
               // print '*' if j=0
               if ($j == 0)
                   echo "*";
                    
               // else print space
               else
                   echo " " . " ";
               }
                
               // check if j=col/2 
               else if ($j == floor($col / 2))
               echo " *";
               else
               {
               if ($i == 0)
                   echo " *";
               }
           }
           else if ($i == floor($row / 2))
               echo "* ";
           else
           {
                
               if ($j == floor($col / 2 )|| 
                   $j == $col - 1)
               echo "* ";
               else if ($i == $row - 1) 
               {
               if ($j <= floor($col / 2) ||
                   $j == $col - 1)
                   echo "* ";
               else
                   echo " " . " ";
               } 
               else
               echo " " . " ";
           }
           }
           echo "\n";
       }
       }
       $row = 7;
       $col = 7;      
       // function calling
       swastika($row, $col);
    ?>
</body>
</html>