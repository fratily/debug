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
class FileView{

    public static function getLines(string $file, int $start = 1, int $end = null){
        $start      = max($start, 1);
        $end        = null === $end ? null : max($end, $start);
        $result     = [];
        $handle     = fopen($file, "r");
        $current    = 1;

        while(!feof($handle)){
            $line   = fgets($handle);

            if(null === $start || $start > $current){
                continue;
            }

            if(null === $end || $end < $current){
                continue;
            }

            $result[$current++]   = $line;
        }

        return array_map(
            function($line){
                if(1 === @preg_match("/\A(\s*)(.*?)\z/", $line, $m)){
                    return [
                        "indent"    => $m[1],
                        "text"      => $m[2],
                    ];
                }

                return [
                        "indent"    => "",
                        "text"      => "[fratily/debug] can't get line.",
                ];
            },
            $result
        );
    }
}