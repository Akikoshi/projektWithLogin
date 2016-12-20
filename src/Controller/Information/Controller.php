<?php
/**
 * Created by PhpStorm.
 * User: Heiset
 * Date: 28.11.2016
 * Time: 14:11
 */

namespace Class152\Projekt\Controller\Information;


use Class152\Projekt\AbstraktClasses\AbstractController;
use Class152\Projekt\Library\TwigRendering;

class Controller extends AbstractController
{
    public function indexAction()
    {
        new TwigRendering(
            'Information/index.twig',
            [
                'controllerName'=>'Information',
                'action'=>'index'
            ]
        );
    }
}