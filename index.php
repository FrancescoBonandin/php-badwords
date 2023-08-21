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

            <div>

                <textarea name="paragraph" id="" cols="30" rows="10" placeholder='Write something...'></textarea>

            </div>

            <div>
                
                <input type="text" name="censored" id="" placeholder='censored word ...'>
            
            </div>

            <div>

                <button type="submit">
                    submit
                </button>

            </div>

        </form>

    </body>

</html>

<style>
    body > *{
        text-align:center;
    }
</style>