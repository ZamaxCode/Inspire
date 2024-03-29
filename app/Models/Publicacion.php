<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publicacion extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'titulo', 
        'descripcion',
        'explicacion', 
        'pais',
        'imagen'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comentarios()
    {
        return $this->hasMany(Comentario::class);
    }

    public function categorias()
    {
        return $this->belongsToMany(Categoria::class);
    }

    public function setTituloAttribute($titulo)
    {
        return $this->attributes['titulo'] = strtoupper($titulo);
    }
    
}
