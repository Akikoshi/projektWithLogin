<?php
/**
 * Created by PhpStorm.
 * User: Heiset
 * Date: 29.11.2016
 * Time: 09:05
 */

namespace Class152\Projekt\Services\Anzeige\Library;

use Class152\Projekt\Services\Anzeige\Reposetory\AnzeigeRepository;

class AnzeigeFactory
{
    private $anzeige;

    public function __construct()
    {
        $repo = new AnzeigeRepository();
        $anzeigeItem = $repo->getAnzeige();

        foreach (array_keys($anzeigeItem) as $key)
        {
            $anzeigeItem[$key] = new AnzeigeItem(
                $anzeigeItem[$key]->getId(),
                $anzeigeItem[$key]->getStrasse(),
                $anzeigeItem[$key]->getHausnummer(),
                $anzeigeItem[$key]->getPostleitzahl()
            );
        }
        $this->anzeige = $anzeigeItem;
    }
    public function getAnzeige()
    {
        return $this->anzeige;
    }
}