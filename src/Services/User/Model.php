<?php
/**
 * Created by PhpStorm.
 * User: Heiset
 * Date: 02.12.2016
 * Time: 08:56
 */

namespace Class152\Projekt\Services\User;


class Model
{
    private $isLoggedIn = false;

    public function __construct()
    {
        if( isset( $_SESSION['user'] ) )
        {
            $this->isLoggedIn = true;
        }
    }

    public function getLogin( $user, $password )
    {

            if ($user == 'admin' && $password == 'admin') {
                return [
                    'id'=>1,
                    'name'=>'John Doo',
                ];
            } else {
                throw new LoginFailedException();
            }

    }

    /**
     * @return bool
     */
    public function isLoggedIn() : bool
    {
        return $this->isLoggedIn;
    }

    /**
     *
     */
    public function logout()
    {
        unset( $_SESSION['user'] );
        $this->isLoggedIn = false;
        header('location: /');
        die();
    }

}