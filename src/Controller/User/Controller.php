<?php
/**
 * Created by PhpStorm.
 * User: Heiset
 * Date: 02.12.2016
 * Time: 08:15
 */

namespace Class152\Projekt\Controller\User;


use Class152\Projekt\Library\TwigRendering;
use Class152\Projekt\Services\User\Model;

/**
 * Class Controller
 * @package Class152\Projekt\Controller\User
 */
class Controller
{

    /**
     * @var Model
     */
    public $model;

    /**
     * Controller constructor.
     */
    public function __construct()
    {
    }
    
    /**
     *
     */
    public function invoke(){
        $result = $this->model->getLogin();
        if($result == 'login'){
            // TODO: Weiterleitung Start
        }else{
            $_SESSION['name'] = $_POST['name'];
            $_SESSION['password'] = $_POST['password'];
        }
    }

    /**
     *
     */
    public function indexAction()
    {
        new TwigRendering(
            'User/index.twig',
            [
                'controllerName'=>'User',
                'action'=>'index'
            ]
        );
    }

}