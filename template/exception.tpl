?>
<!DOCTYPE html>
<html>
    <head>
        <title><?=$title?></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php $_exception = $exception; ?>
        <?php while($_exception instanceof Throwable): ?>
            
            <?php $_exception = $_exception->getPrevious(); ?>
        <?php endwhile; ??>
    </body>
</html>