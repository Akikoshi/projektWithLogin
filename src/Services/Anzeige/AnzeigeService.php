<?php
/**
 * Created by PhpStorm.
 * User: Heiset
 * Date: 29.11.2016
 * Time: 09:10
 */

namespace Class152\Projekt\Services\Anzeige;

use Class152\Projekt\Services\Anzeige\Library\AnzeigeFactory;

class AnzeigeService
{
    public function getAnzeigeList()
    {
        $anzeige = new AnzeigeFactory();
        
        return $anzeige->getAnzeige();
    }
}