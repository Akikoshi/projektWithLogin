<?php
/**
 * Created by PhpStorm.
 * User: Heiset
 * Date: 28.11.2016
 * Time: 09:32
 */

namespace Class152\Projekt\Http;


class Request
{
    /** @var string */
    private $requestUri;

    /** @var string */
    private $controllerName;

    /** @var string */
    private $actionName;

    /** @var string */
    private $firstAdditionalVar = '';

    /** @var string */
    private $secondAdditionalVar = '';

    /**
     * Request constructor.
     *
     * @param $requestUri
     */
    public function __construct( $requestUri )
    {
        $this->requestUri = $requestUri;
        $this->cutUri();
    }

    /**
     * @return string
     */
    public function getControllerName(): string
    {
        return $this->controllerName;
    }

    /**
     * @return string
     */
    public function getActionName(): string
    {
        return $this->actionName;
    }

    /**
     * @return string
     */
    public function getRequestUri(): string
    {
        return $this->requestUri;
    }

    /**
     * @return string
     */
    public function getFirstAdditionalVar(): string
    {
        return $this->firstAdditionalVar;
    }

    /**
     * @return string
     */
    public function getSecondAdditionalVar(): string
    {
        return $this->secondAdditionalVar;
    }

    private function cutUri()
    {
        $controller = 'Start';
        $action = 'index';

        $pattern = '/^\/([^\/|?]+)(\/([^\/|?]+)){0,1}/i';
        preg_match( $pattern, $this->requestUri, $matches );

        if( ! empty( $matches[1] ) ) $controller = $matches[1];
        if( ! empty( $matches[3] ) ) $action = $matches[3];

        $this->controllerName = $this->convertUpperCaseFirst( $controller );
        $this->actionName = strtolower( $action );
    }

    /**
     * @param string $string
     * @return string
     */
    private function convertUpperCaseFirst( $string )
    {
        $string = strtolower( $string );
        $string = ucfirst( $string );
        return $string;
    }
}