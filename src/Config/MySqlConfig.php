<?php
/**
 * Created by PhpStorm.
 * User: Heiset
 * Date: 28.11.2016
 * Time: 13:50
 */

namespace Class152\Projekt\Config;


/**
 * Class MySqlConfig
 * @package Class152\Projekt\Config
 */
class MySqlConfig
{
    /**
     * @return string
     */
    public static function getUser(){
        return 'root';
    }

    /**
     * @return string
     */
    public static function getHost(){
        return '127.0.0.1';
    }

    /**
     * @return string
     */
    public static function getPassword(){
        return 'vagrant';
    }

    /**
     * @return int
     */
    public static function getPort(){
        return 3306;
    }

    /**
     * @return string
     */
    public static function getDatabaseName(){
        return 'vagrant';
    }
}