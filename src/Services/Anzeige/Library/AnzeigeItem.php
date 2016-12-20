<?php
/**
 * Created by PhpStorm.
 * User: Heiset
 * Date: 29.11.2016
 * Time: 10:56
 */

namespace Class152\Projekt\Services\Anzeige\Library;


class AnzeigeItem
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
     * AnzeigeItem constructor.
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
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param string $strasse
     */
    public function setStrasse($strasse)
    {
        $this->strasse = $strasse;
    }

    /**
     * @param string $hausnummer
     */
    public function setHausnummer($hausnummer)
    {
        $this->hausnummer = $hausnummer;
    }

    /**
     * @param string $postleitzahl
     */
    public function setPostleitzahl($postleitzahl)
    {
        $this->postleitzahl = $postleitzahl;
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