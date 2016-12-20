<?php
/**
 * Created by PhpStorm.
 * User: Heiset
 * Date: 28.11.2016
 * Time: 10:36
 */

namespace Class152\Projekt\Interfaces;


use Class152\Projekt\Http\Request;
use Class152\Projekt\Services\SessionService\SesionService;

/**
 * Interface ControllerInterface
 * @package Class152\Projekt\Interfaces
 */
interface ControllerInterface
{
    /**
     * ControllerInterface constructor.
     * @param Request $request
     * @param SesionService $sesionService
     */
    public function __construct(Request $request, SesionService $sesionService);

    /**
     * @return mixed
     */
    public function indexAction();
}