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
final class Debug{

    const HANDLER_ERROR     = [self::class, "handleError"];
    const HANDLER_EXCEPTION = [self::class, "handleException"];
    const HANDLER_SHUTDOWN  = [self::class, "handleShutdown"];

    /**
     * @var string
     */
    private static $handler = Handler\SimpleHandler::class;

    /**
     * ハンドラを設定する
     *
     * @param   string  $class
     *  登録するハンドラクラス
     *
     * @return  void
     *
     * @throws  \InvalidArgumentException
     */
    public static function setHandler(string $class){
        if(!class_exists($class)){
            throw new \InvalidArgumentException;
        }

        if(!is_subclass_of($class, Handler\HandlerInterface::class)){
            throw new \InvalidArgumentException;
        }

        self::$handler  = $class;
    }

    /**
     * エラーハンドリングを有効化する
     *
     * 有効化した場合、このクラスからエラーハンドリングを無効化することは
     * できません。個別でrestore関数を呼んでください。
     *
     * @return  void
     */
    public static function enable(){
        set_error_handler(self::HANDLER_ERROR);
        set_exception_handler(self::HANDLER_EXCEPTION);
        register_shutdown_function(self::HANDLER_SHUTDOWN);
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
            return call_user_func_array("htmlspecialchars", $args);
        };

        unset($_exception);

        ob_start();
        eval(file_get_contents($tpl));

        $result = ob_get_contents();

        ob_end_clean();

        return $result;
    }
}