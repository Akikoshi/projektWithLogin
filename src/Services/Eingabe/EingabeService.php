<?php
/**
 * Created by PhpStorm.
 * User: Heiset
 * Date: 29.11.2016
 * Time: 13:55
 */

namespace Class152\Projekt\Services\Eingabe;


use Class152\Projekt\Database\MySql;

class EingabeService
{
    /**
     * @var string
     */
    private $str = "";

    /**
     * @var string
     */
    private $num = "";

    /**
     * @var string
     */
    private $plz = "";

    private $db;

    public function __construct()
    {
        $db = new MySql();
        $this->db = $db->getInstance();
    }

    public function einragen(){
        $sql = "insert into eingabe (Strasse, Hausnummer, Postleitzahl) values ('" . $this->db->real_escape_string($this->str) . "','" . $this->db->real_escape_string($this->num) . "','" . $this->db->real_escape_string($this->plz) . "');";
        $this->db->query( $sql );
    }

    public function test()
    {
        if(isset($_POST['str']) && isset($_POST['num']) && isset($_POST['plz'])){
            $this->str = $_POST['str'];
            $this->num = $_POST['num'];
            $this->plz = $_POST['plz'];
            $this->einragen();
        }
    }
    
}