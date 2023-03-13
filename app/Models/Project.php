<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use illuminate\Http\Request;

class Project extends Model
{
    use HasFactory;

    protected $table = "projects";
    protected $guarded = false;

    public static function uploadImage(Request $request, $image_src = null)
    {
        if ($request->hasFile('image_src')) {

            if ($image_src)
            {
                Storage::delete($image_src);
            }
            $folder = date('Y-m-d');

            return $request->file('image_src')->store("images/{$folder}", 'public');
        }

        return null;
    }

    public function getImage()
    {
        if(!$this->image_src)
        {
            return asset("assets/admin/image/no_photo.png");
        }

        return asset($this->image_src);
    }


    public function getImageUrlAttribute() {

        return $this->getImage();

    }
}
