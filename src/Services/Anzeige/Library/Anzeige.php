<?php
/**
 * Created by PhpStorm.
 * User: Heiset
 * Date: 29.11.2016
 * Time: 09:06
 */

namespace Class152\Projekt\Services\Anzeige\Library;


use Class152\Projekt\AbstraktClasses\AbstarctItterator;
use Class152\Projekt\Services\Anzeige\Exeptions\AnzeigeEmptyException;

class AnzeigeItem extends AbstarctItterator
{
    public function __construct(array $array = null)
    {
        if( is_null( $array ) )
        {
            return;
        }

        foreach (array_keys( $array ) as $keys)
        {
            if(
                ! is_object( $array[$keys] )
                || ! is_a( $array[$keys], 'AnzeigeItem' )
            )
            {
                throw new AnzeigeEmptyException(
                    'constructor of Anzeige can only use AnzeigeItem objects'
                );
            }
        }

        $this->iteratorArray = $array;
    }

    public function addItem( AnzeigeItem $anzeigeItem )
    {
        $this->iteratorArray[] = $anzeigeItem;
    }

    public function current()  
    {
        return parent::current();
    }
    
    public function getElement($key = null) 
    {
        return parent::getElement($key);
    }
    
}