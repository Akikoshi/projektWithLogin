<?php
/**
 * Created by PhpStorm.
 * User: Heiset
 * Date: 29.11.2016
 * Time: 09:18
 */

namespace Class152\Projekt\Services\Anzeige\Reposetory;

use Class152\Projekt\Database\MySql;
use Class152\Projekt\Services\Anzeige\Reposetory\Entitys\AnzeigeEntity;
use Class152\Projekt\Services\Anzeige\Reposetory\Interfaces\AnzeigeInterface;

class AnzeigeRepository implements AnzeigeInterface
{
private $db;
    
    public function __construct()
    {
        $db = new MySql();
        $this->db = $db->getInstance();
    }
    
    public function getAnzeige() : array{
        $sql = "select * from eingabe order by Id;";

        $result = $this->db->query( $sql );
        $allItems = $result->fetch_all(MYSQLI_ASSOC);
        foreach( array_keys( $allItems ) as $key )
        {
            $allItems[$key] = $this->askForSingleItem( $allItems[$key] );
        }

        return $allItems;
    }
    
    public function askForSingleItem($line) : AnzeigeEntity{
        return new AnzeigeEntity(
            $line['Id'],
            $line['Strasse'],
            $line['Hausnummer'],
            $line['Postleitzahl']
        );
    }
}