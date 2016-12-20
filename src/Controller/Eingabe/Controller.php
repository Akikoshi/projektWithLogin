<?php
/**
 * Created by PhpStorm.
 * User: Heiset
 * Date: 28.11.2016
 * Time: 14:11
 */

namespace Class152\Projekt\Controller\Eingabe;


use Class152\Projekt\AbstraktClasses\AbstractController;
use Class152\Projekt\Library\TwigRendering;
use Class152\Projekt\Services\Eingabe\EingabeService;

/**
 * Class Controller
 * @package Class152\Projekt\Controller\Eingabe
 */
class Controller extends AbstractController
{
    

    /**
     *
     */
    public function indexAction()
    {
        $eingabe = new EingabeService();
        $eingabe->test();
        new TwigRendering(
            'Eingabe/index.twig',
            [
                'controllerName'=>'Eingabe',
                'action'=>'index'
            ]
        );
    }
}