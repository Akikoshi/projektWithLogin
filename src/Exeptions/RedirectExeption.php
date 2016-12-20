<?php
/**
 * Created by PhpStorm.
 * User: Heiset
 * Date: 28.11.2016
 * Time: 10:08
 */

namespace Class152\Projekt\Exeptions;


/**
 * Class RedirectExeption
 * @package Class152\Projekt\Exeptions
 */
class RedirectExeption extends ProjektExeption
{
    /**
     * @var string
     */
    protected $uri = '/';

    /**
     * @var string
     */
    protected $statusCode = '302';

    /**
     * @param string $uri
     */
    public function getStatusCode(string $uri = '/')
    {
        $this->uri = $uri;
    }

    /**
     * @param int $statusCode
     */
    public function setStatusCode(int $statusCode = 302)
    {
        $this->statusCode = $statusCode;
    }

    /**
     * @return string
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * @param string $uri
     */
    public function setUri($uri)
    {
        $this->uri = $uri;
    }
    
}