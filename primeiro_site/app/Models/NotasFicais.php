<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NotasFicais extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'venda_id',
        'valor',
        'imposto',
    ];

    protected $table = "NotasFicais";

    public function venda(){
        return $this->hasOne(Vendas::class,
        //'venda_id',
        'id'
    );
    }
}
