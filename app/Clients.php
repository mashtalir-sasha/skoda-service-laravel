<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
    public function getImagesAttribute($value)
    {
        return empty($value) ? NULL : explode(',', $value);
    }

    public function setImagesAttribute($photos)
    {
        if (isset($this->attributes['images'])) {
            $this->attributes['images'] = explode(',', $this->attributes['images']);
            foreach ($this->attributes['images'] as $photo) {
                if (!in_array($photo, $photos)) {
                    $file = public_path() . DIRECTORY_SEPARATOR . $photo;
                    if (file_exists($file)) {
                        @unlink($file);
                    }
                }
            }
        }
        if (empty($photos)) {
            $this->attributes['images'] = NULL;
        } else {
            $this->attributes['images'] = implode(',', $photos);
            foreach ($photos as $photo) {
                $file = public_path() . DIRECTORY_SEPARATOR . $photo;
                $img = \Image::make($file)->resize(270, null, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                });
                $img->save($file, 100);
            }
        }

    }
}
