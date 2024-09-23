<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadFile extends Controller
{
    //
    function uploadFile($file, $folder = 'uploads/images')
{
    $extension = $file->getClientOriginalExtension();
    $filename = time() . "." . $extension;
    $file->move($folder, $filename);
    return $folder . '/' . $filename;
}
}
