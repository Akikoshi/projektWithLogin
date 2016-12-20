<?php
/**
 * Created by PhpStorm.
 * User: Heiset
 * Date: 28.11.2016
 * Time: 11:51
 */

namespace Class152\Projekt\Interfaces;


/**
 * Interface AbstractIteratorInterface
 * @package Class152\Projekt\Interfaces
 */
interface AbstractIteratorInterface
{
    /**
     * @return mixed
     */
    public function current();

    /**
     * @return mixed
     */
    public function next();

    /**
     * @return mixed
     */
    public function key();

    /**
     * @return bool
     */
    public function valid() : bool;

    /**
     * @return mixed
     */
    public function rewind();

    /**
     * @return int
     */
    public function count() : int;

    /**
     * @return array
     */
    public function getKeys() : array;

    /**
     * @param null $key
     * @return mixed|null
     */
    public function getElement($key = null);
}