<?php
function ft_d_h($str){
    return htmlspecialchars($str);
}

function ft_d_getFileLines($file, $line){
    if(!is_string($file) || !is_file($file) || !is_readable($file) || !is_int($line) || 1 > $line){
        return [];
    }

    $result     = [];
    $handle     = fopen($file, "r");
    $current    = 1;

    while(!feof($handle)){
        $text   = fgets($handle);
        if($line - 4 < $current && $current < $line + 4){
            $result[$current]   = rtrim($text);
        }

        $current++;
    }

    return $result;
}

function ft_d_getTitle($class, bool $escape = true){
    if(!is_object($class)){
        return ":Unresolved:";
    }

    $namespace  = "Fratily\\Debug\\Error\\";
    $result     = $namespace === substr(get_class($class), 0, strlen($namespace))
        ? $namespace === substr(get_class($class), strlen($namespace))
        : get_class($class)
    ;

    return $escape ? ft_d_h($result) : $result;
}

if(!isset($exception) && !($exception instanceof Throwable)){
    return;
}

$exceptions = [];
$_exception = $exception;

do{
    $exceptions[]   = $_exception;
}while(null !== ($_exception = $exception->getPrevious()));
?>
<!DOCTYPE html>
<html>
    <head>
        <title><?=ft_d_getTitle($exception)?></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <header>
            <strong><?=ft_d_getTitle($exception)?></strong>
            <span>: </span>
            <span><?=ft_d_h($exception->getMessage())?></span>
        </header>
        <main>
            <?php $i = 1?>
            <?php foreach($exceptions as $e):?>
                <?php $lines = ft_d_getFileLines($e->getFile(), $e->getLine())?>
                <?php $start = min(array_keys($lines)) ?>
                <section>
                    <span><?=$i?>/<?=count($exceptions)?></span>
                    <h2><?=ft_d_getTitle($e)?></h2>
                    <p><?=nl2br(ft_d_h($e->getMessage()))?></p>
                    <ol start="<?=$start?>">
                        <?php foreach($lines as $line): ?>
                            <li><pre><?=$line?></pre>></li>
                        <?php endforeach; ?>
                    </ol>
                </section>
            <?php endforeach; ?>
        </main>
    </body>
</html>