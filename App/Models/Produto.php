<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $empresa_id
 * @property string $nome
 * @property float $valor_compra
 * @property float $valor_venda
 * @property string $marca
 * @property string $modelo
 * @property string $unidade_medida
 * @property string $descricao
 * @property string $thumbnail
 * 
 * @property-read Estoque $estoque
 */

class Produto extends Model
{
    protected $table = 'produtos';

    protected $primaryKey = 'id';

    public $timestamps = true;

    
    public function getCreatedAtFormatado($horas = false){

        if($horas == false){
            return date('d/m/Y', strtotime($this->created_at));
        }
        return date('d/m/Y H:i:s', strtotime($this->created_at));
    }

   
    public function estoque(){
        return $this->belongsTo(Estoque::class, 'id', 'produto_id');
    }
}