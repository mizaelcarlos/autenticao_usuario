<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Loja extends Authenticatable
{
    use Notifiable;

    protected $table = 'loja';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
	protected $fillable = [
        'CD_LOJA', 'ENDERECO', 'NUMERO',
    ];
	
    public function getAuthPassword ()
    {

        return $this->endereco;
    }
}
