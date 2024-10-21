<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    use HasFactory;

    // Especificar o nome da tabela correta, se necessário
    protected $table = 'pessoas'; 

    // Campos que podem ser preenchidos em massa
    protected $fillable = ['nome', 'local', 'setor', 'ramal_id']; // Certifique-se de incluir 'ramal_id'

    // Relação: Uma pessoa pode ter um ramal
    public function ramal()
    {
        return $this->hasOne(Ramal::class, 'id'); // 'pessoa_id' é a chave estrangeira na tabela 'ramais'
    }
}
