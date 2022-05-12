<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

    public $fillable = [
        "user_id", "name", "description", 'categoria_id', 'subcategoria_id', 'location_id', 'group_type_id', 'social_id',
        'status', 'slug', 'views', 'show_views', 'can_access_any_location', 'url', 'imagen', 'banner', 'fecha_corte',
        "username", "cant_suscriptores", "cant_fotos", "cant_videos", "cant_posts", "precio_membresia", "show_more_social_medias",
        "usuarios_comunicación", "cant_ganancias", "tiempo_creacion"
    ];

    protected $casts = [
        'fecha_corte' => 'datetime'
    ];

    public function social()
    {
        return $this->belongsTo(Social::class);
    }

    public function type()
    {
        return $this->belongsTo(GroupType::class, 'group_type_id');
    }

    public function categoria()
    {
        return $this->belongsTo(Category::class);
    }

    public function subcategoria()
    {
        return $this->belongsTo(Subcategory::class);
    }

    public function location()
    {
        return $this->belongsTo(Location::class);
    }
}
