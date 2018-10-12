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
class ExceptionView{

    const ERR_NS    = "Fratily\\Debug\\Error";

    public static function getTitle(\Throwable $e){
        $class  = get_class($e);
        return self::ERR_NS === substr($class, 0, strlen(self::ERR_NS))
            ? substr($class, strlen(self::ERR_NS))
            : $class
        ;
    }
}