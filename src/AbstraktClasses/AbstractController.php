<?php
/**
 * Created by PhpStorm.
 * User: Heiset
 * Date: 28.11.2016
 * Time: 11:37
 */

namespace Class152\Projekt\AbstraktClasses;


use Class152\Projekt\Http\Request;
use Class152\Projekt\Interfaces\ControllerInterface;
use Class152\Projekt\Library\TwigRendering;
use Class152\Projekt\Services\SessionService\SesionService;

/**
 * Class AbstractController
 * @package Class152\Projekt\AbstraktClasses
 */
class AbstractController implements ControllerInterface{
    /**
     * @var Request
     */
    protected $request;
    /**
     * @var SesionService
     */
    protected $sessionService;

    /**
     * AbstractController constructor.
     * @param $request
     * @param $sessionService
     */
    public function __construct(Request $request, SesionService $sessionService)
    {
        $this->request = $request;
        $this->sessionService = $sessionService;
    }

    /**
     *
     */
    public function indexAction()
    {
        new TwigRendering(
            'index.twig',[
                'controllerName'=>'Start',
                'actionName'=>'index',
            ]
        );
    }
}