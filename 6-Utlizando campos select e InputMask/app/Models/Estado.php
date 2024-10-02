<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    use HasFactory;

    //Indicar o nome da tabela
    protected $table = "estados";

    // Indicar quais campos podem ser cadastrados
    protected $fillable=['nome_estado','sigla'];

    //criar relacionamento entre um e muitos
    public function cidade(){
        return $this->hasMany(Cidade::class);
    }
}
