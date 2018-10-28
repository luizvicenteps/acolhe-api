<?php
namespace Controllers;

use Models;
use Respect\Validation\Validator as v;

class User extends Base
{

    /**
     * Pega váriaveis $_POST necessárias para inclusão/atualização do usuário
     *
     * @return void
     */
    public function getVars()
    {
        $vars = [
            'name' => $this->httpPost('name'),
            'lastname' => $this->httpPost('lastname'),
            'cpf' => $this->httpPost('cpf'),
            'email' => $this->httpPost('email'),
            // 'telefone' => $this->httpPost('phone'),
            // 'nascimento' => $this->httpPost('nascimento'),
            // 'endereco' => $this->httpPost('endereco'),
            // 'clube' => $this->httpPost('clube'),
            // 'plano' => $this->httpPost('plano'),
            // 'titular' => $this->httpPost('titular')
        ];
        
        return $vars;
    }
    /**
     * Pega todos usuarios
     *
     * @return void
     */
    public function get()
    {
        $users = Models\User::get();

        if ($users) {
            echo self::encode($users);
        }
    }


        /**
     * Inclui usuário
     * $request e $response usam interface psr7
     *
     * @param Slim\Http\Request $request
     * @param Slim\Http\Response $response
     * @return Slim\Http\Response
     */
    public function set($request, $response)
    {
        $vars = $this->getVars();
        

                $user = new Models\User;

                $user->name = $vars['name'];
                $user->lastName = $vars['lastname'];
                $user->cpf = $vars['cpf'];
                $user->email = $vars['email'];
                // $user->nascimento = $vars['nascimento'];
                // $user->telefone = $vars['telefone'];
                // $user->endereco = $vars['endereco'];
                
                
                $user->save();

                $path = $request->getUri()->getPath() . '/' . $user->id;

                echo $this->resource($path); // retorna a localização do resource conforme spec para REST

                return $response->withStatus(201); // retorna status 201 quando resource é criado conforme spec para REST
            
        
    }

}
