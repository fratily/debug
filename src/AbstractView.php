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
abstract class AbstractView{

    public function __get($name){
        $method = "get" . ucfirst($name);

        if(!method_exists($this, $method)){
            return null;
        }

        try{
            return htmlspecialchars($this->$method());
        }catch(\Throwable $e){}
        return null;
    }

    public function __isset($name){
        $method = "get" . ucfirst($name);
        return method_exists($this, $method);
    }
}