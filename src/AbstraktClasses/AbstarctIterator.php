<?php
/**
 * Created by PhpStorm.
 * User: Heiset
 * Date: 28.11.2016
 * Time: 11:48
 */

namespace Class152\Projekt\AbstraktClasses;


/**
 * Class AbstarctItterator
 * @package Class152\Projekt\AbstraktClasses
 */
class AbstarctItterator implements \Iterator, \Countable, AbstractIteratorInterface{
    /**
     * @var array
     */
    protected $iteratorArray = [ ];

    /**
     * AbstarctItterator constructor.
     * @param array $iteratorArray
     */
    public function __construct(array $iteratorArray)
    {
        $this->iteratorArray = $iteratorArray;
    }

    /**
     * @return mixed
     */
    public function current(){
        return current($this->iteratorArray);
    }

    /**
     *
     */
    public function next(){
        $this->next($this->iteratorArray);
    }

    /**
     * @return mixed
     */
    public function key(){
        return key($this->iteratorArray);
    }

    /**
     * @return bool
     */
    public function valid() : bool {
        if(false === current($this->iteratorArray)){
            return false;
        }
        return true;
    }

    /**
     *
     */
    public function rewind()
    {
        reset($this->iteratorArray);
    }

    /**
     * @return int
     */
    public function count() : int
    {
        return count($this->iteratorArray);
    }

    /**
     * @return array
     */
    public function getKeys() : array {
        return array_keys($this->iteratorArray);
    }

    /**
     * @param null $key
     * @return mixed|null
     */
    public function getElement($key = null){
        if(!isset($this->iteratorArray[$key])){
            return null;
        }
        return $this->iteratorArray[$key];
    }
}