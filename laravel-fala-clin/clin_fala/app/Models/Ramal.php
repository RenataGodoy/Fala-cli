<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ramal extends Model
{
    use HasFactory;

    // Especificar o nome da tabela correta, se necessário
    protected $table = 'ramais'; 

    // Campos que podem ser preenchidos em massa
    protected $fillable = ['ramal', 'pessoa_id']; // Certifique-se de incluir 'pessoa_id'

    // Relação: Um ramal pode ter uma pessoa
    public function pessoa()
    {
        return $this->belongsTo(Pessoa::class, 'id'); // 'pessoa_id' é a chave estrangeira
    }
}
