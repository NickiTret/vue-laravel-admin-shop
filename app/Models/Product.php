<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use illuminate\Http\Request;
use App\Models\Tag;
use App\Models\Color;

class Product extends Model
{
    use HasFactory;

    protected $table = "products";
    protected $guarded = false;

    public static function uploadImage(Request $request, $preview_image = null)
    {
        if ($request->hasFile('preview_image')) {

            if ($preview_image)
            {
                Storage::delete($preview_image);
            }
            $folder = date('Y-m-d');

            return $request->file('preview_image')->store("images/{$folder}, 'public'");
        }

        return null;
    }

    public function getImage()
    {
        if(!$this->preview_image) 
        {
            return asset("assets/admin/image/no_photo.png");
        }

        return asset($this->preview_image);
    }

    // public function category() {
    //     return $this->belongsTo(Category::class, 'category_id', 'id');
    // }
}
