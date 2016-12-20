<?php
/**
 * Created by PhpStorm.
 * User: Heiset
 * Date: 28.11.2016
 * Time: 13:32
 */

namespace Class152\Projekt\Config;


/**
 * Class TemplateConfig
 * @package Class152\Projekt\Config
 */
final class TemplateConfig
{
    /**
     * @return string
     */
    public static function getPath(){
        return __DIR__ . "/../../Templates/Default";
    }
}