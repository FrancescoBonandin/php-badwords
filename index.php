<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP Badwords</title>
    </head>

    <body>

        <h1>
            PHP Badwords
        </h1>
        
        <form action="censor.php" method="get">

            <textarea name="paragraph" id="" cols="30" rows="10" placeholder='Write something...'></textarea>

            <input type="text" name="censored" id="" placeholder='censored word ...'>
            
            <button type="submit">
                submit
            </button>

        </form>
        
    </body>

</html>