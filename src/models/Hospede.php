<?php
namespace Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Hospede extends Eloquent
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
    protected $table = 'tbl_hospede';
    
    /**
     * Define o padrão da coluna "created_at" para "usu_created_at"
     *
     * @var string
     */
    const CREATED_AT = 'clb_created_at';

    /**
     * Define o padrão da coluna "updated_at" para "usu_updated_at"
     *
     * @var string
     */
    const UPDATED_AT = 'clb_updated_at';

    /**
     * Pega todos usuários do clube
     *
     * @return object
     */
    public function relationUsuarios()
    {
        return $this->hasMany(Usuario::class, 'usu_clube');
    }
}
