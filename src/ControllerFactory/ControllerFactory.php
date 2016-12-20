<?php
/**
 * Created by PhpStorm.
 * User: Heiset
 * Date: 28.11.2016
 * Time: 10:13
 */

namespace Class152\Projekt\ControllerFactory;


use Class152\Projekt\Http\Request;
use Class152\Projekt\Interfaces\ControllerInterface;
use Class152\Projekt\Services\SessionService\SesionService;
use Class152\Projekt\Exeptions\NotFoundExeption;

/**
 * Class ControllerFactory
 * @package Class152\Projekt\ControllerFactory
 */
class ControllerFactory
{
    /**
     * @var
     */
    private $namespace;
    /**
     * @var
     */
    private $request;
    /**
     * @var
     */
    private $controllerInstance;
    /**
     * @var
     */
    private $classPath;
    /**
     * @var
     */
    private $classWithNamespace;

    /**
     * ControllerFactory constructor.
     * @param $request
     * @param $namespace
     */
    public function __construct(string $namespace, Request $request)
    {
        $this->request = $request;
        $this->namespace = $namespace;
        $this->generateClassPath();
        $this->checkIfControllerExists();
        $this->generateClassNameWithNamespace();
        $this->loadController();
        $this->loadAction();
        
    }

    /**
     * @return ControllerInterface
     */
    public function getControllerInstance() : ControllerInterface{
        return $this->controllerInstance;
    }

    /**
     * @return mixed
     */
    private function generateClassPath(){
        $this->classPath = __DIR__ . '/../Controller/' . $this->request->getControllerName();
    }

    /**
     * @throws NotFoundExeption
     */
    private function checkIfControllerExists(){
        if(! is_dir($this->classPath)){
            throw new NotFoundExeption("Action " . $this->request->getControllerName());
        }
    }

    /**
     *
     */
    public function generateClassNameWithNamespace(){
        $this->classWithNamespace = '\\' .$this->namespace . '\\Controller\\' . $this->request->getControllerName() . '\\Controller';
    }

    /**
     *
     */
    private function loadController(){
        $this->controllerInstance = new $this->classWithNamespace($this->request,new SesionService());
    }

    /**
     * @throws NotFoundExeption
     */
    private function loadAction(){
        $actionName = $this->request->getActionName();
        $actionName .= 'Action';
        $controllerClassName = get_class($this->controllerInstance);
        $methodList = get_class_methods($controllerClassName);
        
        if(in_array($actionName, $methodList)){
            $this->controllerInstance->$actionName();
            return;
        }
        throw new NotFoundExeption("Action ". $actionName);
    }
}