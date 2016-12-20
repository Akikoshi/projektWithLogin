<?php
/**
 * Created by PhpStorm.
 * User: Heiset
 * Date: 28.11.2016
 * Time: 14:11
 */

namespace Class152\Projekt\Controller\Anzeige;


use Class152\Projekt\AbstraktClasses\AbstractController;
use Class152\Projekt\Library\TwigRendering;
use Class152\Projekt\Services\Anzeige\AnzeigeService;

class Controller extends AbstractController
{
    /**
     *
     */
    public function indexAction()
    {
        $anzeigeService = new AnzeigeService();
        $anzeige = $anzeigeService->getAnzeigeList();
        new TwigRendering(
            'Anzeige/index.twig',
            [
                'controllerName'=>'Anzeige',
                'action'=>'index',
                'anzeige'=>$anzeige
            ]
        );
    }
}