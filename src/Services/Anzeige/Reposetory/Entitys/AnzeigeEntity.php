<?php
/**
 * Created by PhpStorm.
 * User: Heiset
 * Date: 29.11.2016
 * Time: 09:08
 */

namespace Class152\Projekt\Services\Anzeige\Reposetory\Entitys;


/**
 * Class AnzeigeEntity
 * @package Class152\Projekt\Services\Anzeige\Reposetory\Entitys
 */
class AnzeigeEntity
{
    /**
     * @var int
     */
    private $id;
    /**
     * @var string
     */
    private $strasse;
    /**
     * @var string
     */
    private $hausnummer;
    /**
     * @var string
     */
    private $postleitzahl;
    /**
     * AnzeigeEntity constructor.
     * @param int $id
     * @param string $strasse
     * @param string $hausnummer
     * @param string $postleitzahl
     */
    public function __construct($id, $strasse, $hausnummer, $postleitzahl)
    {
        $this->id = $id;
        $this->strasse = $strasse;
        $this->hausnummer = $hausnummer;
        $this->postleitzahl = $postleitzahl;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getStrasse()
    {
        return $this->strasse;
    }

    /**
     * @return string
     */
    public function getHausnummer()
    {
        return $this->hausnummer;
    }

    /**
     * @return string
     */
    public function getPostleitzahl()
    {
        return $this->postleitzahl;
    }

}