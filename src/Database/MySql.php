<?php
/**
 * Created by PhpStorm.
 * User: Heiset
 * Date: 28.11.2016
 * Time: 14:17
 */

namespace Class152\Projekt\Database;


use Class152\Projekt\Config\MySqlConfig;
use Class152\Projekt\Database\Exeption\MySqlConectionException;

/**
 * Class MySql
 * @package Class152\Projekt\Database
 */
class MySql
{
    /**
     * @var \MySqli
     */
    private static $db;

    /**
     * MySql constructor.
     */
    public function __construct(){
        if(! is_null(self::$db)) return;
        
        self::$db = new \MySqli(
            MySqlConfig::getHost(),
            MySqlConfig::getUser(),
            MySqlConfig::getPassword(),
            MySqlConfig::getDatabaseName(),
            MySqlConfig::getPort()
        );
        self::$db->set_charset('utf8');
        
        if(self::$db->connect_error){
            throw new MySqlConectionException(
                self::$db->connect_errno." : ".self::$db->connect_error
            );
        }
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    }

    /**
     * @return \MySQLi
     */
    public function getInstance() : \mysqli{
        return self::$db;
    }
}

//http://www.pinzke.de/tutorial/objektorientiert/programmieren/php/mvc-part-i.html