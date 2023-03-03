<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// STR
use Illuminate\Support\Str;
// richiamo MODEL TYPE
use App\Models\Type;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'content', 'slug', 'type_id'];

    public static function generateSlug($title){
        return Str::slug($title, '-');
    }

    public function type(){
        return $this->belongsTo(Type::class);
    }
}
