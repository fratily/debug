<?php
/**
 * FratilyPHP Debug
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.
 * Redistributions of files must retain the above copyright notice.
 *
 * @author      Kento Oka <kento-oka@kentoka.com>
 * @copyright   (c) Kento Oka
 * @license     MIT
 * @since       1.0.0
 */
namespace Fratily\Debug;

/**
 *
 */
class Debug{

    private static $enable  = false;

    public static function enable(
        int $reportLevel = E_ALL
    ){
        if(true === self::$enable){
            return;
        }

        set_error_handler([static::class, "handleError"]);
        set_exception_handler([static::class, "handleException"]);
        register_shutdown_function([static::class, "shutdownCallback"]);

        self::$enable   = true;
    }

    public static function handleError(
        int $severity,
        string $message,
        string $file,
        int $line
    ){
        if(0 === error_reporting() & $severity){
            return;
        }

        throw new \ErrorException($message, 0, $severity, $file, $line);
    }

    public static function handleException(\Throwable $e){
        try{
            echo static::render("exception.php", $e);
        }catch(\Throwable $e){
            echo "error occurred in fratily/debug(",
                $e->getMessage(),
                ") in ",
                $e->getFile(),
                " ",
                $e->getLine()
            ;
        }

        die();
    }

    public static function shutdownCallback(){

    }

    public static function render(string $tpl, \Throwable $exception){
        $tpl  = __DIR__ . "/../template/" . $tpl;

        if(!is_file($tpl) && !is_readable($tpl)){
            return "";
        }

        $exceptions = [];
        $_exception = $exception;

        do{
            $exceptions[]   = $exception;
        }while(null !== ($exception = $exception->getPrevious()));

        $exception  = $_exception;
        $h          = function(...$args){
            call_user_func_array("htmlspecialchars", $args);
        };

        unset($_exception);

        ob_start();
        eval(file_get_contents($tpl));

        $result = ob_get_contents();

        ob_end_clean();

        return $result;
    }
}