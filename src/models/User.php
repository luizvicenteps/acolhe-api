<?php
namespace Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

class User extends Eloquent
{
    /**
     * Define a chave primária da tabela
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * Define o nome da tabela
     *
     * @var string
     */
    protected $table = 'tbl_users';
    
    /**
     * Define o padrão da coluna "created_at" para "usu_created_at"
     *
     * @var string
     */
    const CREATED_AT = 'dateRegister';

    /**
     * Define o padrão da coluna "updated_at" para "usu_updated_at"
     *
     * @var string
     */
    const UPDATED_AT = 'dateLastUpdate';

}
