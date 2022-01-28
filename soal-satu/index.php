<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Perulangan While dan Do-While</title>
    </head>
    <body style="font-family: Arial">
       <h1>Perulangan while</h1>
       <ul>
           <li>
               <h2>Segitiga Sama Kaki</h2>
               <div style="width: fit-content; text-align: center;">
                    <?php
                    $i = 0;
                    while ($i <= 10) {
                        echo"<br>";
                        $j = 0;
                        while ($j <= $i) {
                            echo"* ";
                            $j++;
                        }
                        $i++;
                    }
                    ?>
               </div>
           </li>
           <li>
               <h2>Segitiga Sama Kaki Terbalik</h2>
               <div style="width: fit-content; text-align: center">
                    <?php
                    $i = 0;
                    while ($i <= 10) {
                        echo"<br>";
                        $j = 10;
                        while ($j >= $i) {
                            echo"* ";
                            $j--;
                        }
                        $i++;
                    }
                    ?>
               </div>
            </li>
           <li>
               <h2>Segitiga Siku - siku</h2>
               <div style="width: fit-content;">
                    <?php
                    $i = 0;
                    while ($i <= 10) {
                        echo"<br>";
                        $j = 0;
                        while ($j <= $i) {
                            echo"* ";
                            $j++;
                        }
                        $i++;
                    }
                    ?>
               </div>
           </li>
       </ul>
       <hr>
       <h1>Perulangan Do While</h1>
       <ul>
           <li>
               <h2>Segitiga Sama Kaki</h2>
               <div style="width: fit-content; text-align: center;">
                   <?php
                   $i = 0;
                   do{
                       $j = 0;
                       do{
                           echo"* ";
                           $j++;
                        }while($j <= $i);
                        $i++;
                        echo"<br>";
                   }while($i <= 10);
                   ?>
               </div>
           </li>
           <li>
               <h2>Segitiga Sama Kaki Terbalik</h2>
               <div style="width: fit-content; text-align: center;">
                   <?php
                   $i = 0;
                   do{
                       $j = 10;
                       do{
                           echo"* ";
                           $j--;
                        }while($j >= $i);
                        $i++;
                        echo"<br>";
                   }while($i <= 10);
                   ?>
               </div>
           </li>
           <li>
               <h2>Segitiga Siku - siku</h2>
               <div style="width: fit-content;">
                   <?php
                   $i = 0;
                   do{
                       $j = 0;
                       do{
                           echo"* ";
                           $j++;
                        }while($j <= $i);
                        $i++;
                        echo"<br>";
                   }while($i <= 10);
                   ?>
               </div>
           </li>
       </ul>
    </body>
</html>