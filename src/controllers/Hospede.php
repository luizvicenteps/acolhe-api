<?php
namespace Controllers;

use Models;
use Respect\Validation\Validator as v;

class Hospede extends Base
{
    /**
     * Pega todos hospedes
     *
     * @return void
     */
    public function get()
    {
        // $hospedes = Models\Hospede::get();
        $hospedes = true;
        
        if ($hospedes) {
            //echo self::encode($hospedes);
            echo 'controller hospede GET';
        }
    }
}
