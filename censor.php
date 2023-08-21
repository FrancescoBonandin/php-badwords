<?php 

$paragraph = $_GET['paragraph'];

$censoredWord = $_GET['censored']
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Censored</title>
    </head>

    <body>
        
        <h1>
            Censor result
        </h1>

        <div>
            <p>
                
                <h2>
                    text:
                </h2>

                <?php 
                    echo $paragraph;
                ?>

            </p>

            <p>
                
                <h2>
                    Length:
                </h2>

                <?php
                    echo strlen($paragraph);
                ?>

            </p>

        </div>


        <div>
  
            <p>

                <h2>
                    Censored text:
                </h2>
             

                <?php 
                    echo str_replace($censoredWord, '***', $paragraph);
                ?>

            </p>

            <p>
                
                <h2>
                    Length:
                </h2>

                <?php
                    echo strlen( trim(str_replace($censoredWord, '***', $paragraph)));
                ?>

            </p>

        </div>

        <div>

            <p>
                
                <h2>
                    Censored word:
                </h2>
    
                <?php
                    echo $censoredWord;
                ?>
            </p>
    
            <p>
                
                <h2>
                    Length:
                </h2>
                   
    
                <?php
                    echo strlen( trim($censoredWord))
                ?>
            </p>

        </div>

        
    </body>

</html>

<style>

    body > *{
        text-align:center;
    }

</style>