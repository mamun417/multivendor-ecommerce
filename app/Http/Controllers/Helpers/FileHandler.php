<?php

namespace App\Http\Controllers\Helpers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class FileHandler
{
    public static function upload($image, $path, $size = null, $prefix = null): string
    {
        $prefix = $prefix ?? time();

        $measurement = $size ? $size['width'] . 'x' . $size['height'] . '-' : '';

        $file_name = $prefix . '-' . $measurement . $image->getClientOriginalName();

        $file_name = slug($file_name);

        // check is it image or file
        if (explode('/', $image->getClientMimeType())[0] !== 'image') {
            return self::fileUpload("uploads/$path", $image, $file_name);
        }

        $image_path = "uploads/$path/$file_name";

        $resized_image = Image::make($image)
            ->resize($size['width'] ?: '', $size['height'] ?: '')
            ->stream();

        Storage::put($image_path, $resized_image);

        return $image_path;
    }

    public static function delete($path)
    {
        if (Storage::exists($path)) {
            Storage::delete($path);
        }
    }

    private static function fileUpload($path, $image, $file_name): string
    {
        Storage::putFileAs($path, $image, $file_name);

        return "$path/$file_name";
    }
}
