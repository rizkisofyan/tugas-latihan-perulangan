<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Latihan Perulangan</title>
    </head>
    <body style="font-family: Arial;">
        <h1>Latihan Perulangan</h1>
        <form action="" method="POST">
            <label for="bilangan">Input Bilangan : </label>
            <input type="number" name="bilangan" id="bilangan">
            <button type="submit" name="submit">Submit</button>
        </form>

        <div style="margin-top: 15px;">
            <?php if(isset($_POST['submit'])) :  ?>
                <?php for($i = 1; $i <= $_POST['bilangan']; $i++) : ?>
                    <?php for($j = $_POST['bilangan']; $j >= $i; $j--) : ?>
                        <?= "$j "?>
                    <?php endfor?>
                    <br>
                <?php endfor?>
            <?php endif ?>
        </div>
    </body>
</html>