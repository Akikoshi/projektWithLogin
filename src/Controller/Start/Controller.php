<?php
/**
 * Created by PhpStorm.
 * User: Heiset
 * Date: 28.11.2016
 * Time: 11:36
 */

namespace Class152\Projekt\Controller\Start;


use Class152\Projekt\AbstraktClasses\AbstractController;
use Class152\Projekt\Library\TwigRendering;

class Controller extends AbstractController
{
    public function indexAction()
    {
        new TwigRendering(
            'Start/index.twig',
            [
                'controllerName'=>'Start',
                'action'=>'index'
            ]
        );
    }
}