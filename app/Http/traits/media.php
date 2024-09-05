<?php

namespace App\Http\Traits;

trait Media
{
    public function upload_image($image, $folder)
    {
        $photoName = uniqid() . '.' . $image->extension();
        $image->move(public_path('img/' . $folder), $photoName);
        return $photoName;
    }

    public function delete_image($image_path)
    {
        if (file_exists($image_path)) {
            unlink($image_path);
            return true;
        }
        return false;
    }

    public function upload_file($file, $folder)
    {
        $fileName = uniqid() . '.' . $file->extension();
        $file->move(public_path('files/' . $folder), $fileName);
        return $fileName;
    }
}
