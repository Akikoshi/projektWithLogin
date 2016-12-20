<?php
/**
 * Created by PhpStorm.
 * User: Heiset
 * Date: 28.11.2016
 * Time: 09:21
 */

namespace Class152\Projekt;


use Class152\Projekt\ControllerFactory\ControllerFactory;
use Class152\Projekt\Exeptions\NotFoundExeption;
use Class152\Projekt\Exeptions\RedirectExeption;
use Class152\Projekt\Http\Request;
use Class152\Projekt\Library\TwigRendering;
use Class152\Projekt\Services\User\LoginFailedException;
use Class152\Projekt\Services\User\Model;

/**
 * Class Init
 * @package Class152\Projekt
 */
class Init
{
    /**
     * Init constructor.
     */
    public function __construct()
    {
        try
        {
            $request = new Request($_SERVER['REQUEST_URI']);


            $this->model = new Model();
            
            if( ! $this->model->isLoggedIn() )
            {
                if( ! empty( $_REQUEST['name'] ) && ! empty( $_REQUEST['password'] ) )
                {
                    // prüfe
                    try {
                        $userData = $this->model->getLogin( $_REQUEST['name'], $_REQUEST['password'] );
                        $_SESSION['user'] = $userData;
                    }
                    catch( LoginFailedException $e )
                    {
                        // wenn falsch zeige LoginForm evt. mit Fehlermeldung
                        $this->showLoginForm('Login fehlgeschlagen');
                        die();
                    }
                } else {
                    $this->showLoginForm();
                    die();
                }

            }
            elseif ( isset( $_GET['logout'] ) )
            {
                $this->model->logout();
                $this->showLoginForm('Tschuess');
                die();
            }
            
            new ControllerFactory( __NAMESPACE__, $request );
        }
        catch ( RedirectExeption $exception )
        {
            header( "Location: " . $exception->getUri() );
            exit;
        }
        catch ( NotFoundExeption $exception )
        {
            echo "Not Found <br />";
        }
        catch ( \mysqli_sql_exception $exception )
        {
            echo "MySQL:  " . $exception->getMessage();
            var_dump( $exception->getTraceAsString() );
        }
    }

    private function showLoginForm( $error = '' )
    {
        new TwigRendering(
            'User/index.twig',
            ['error'=>$error]
        );
    }

}