<?php

namespace App\Http\Controllers;

use App\Helper\Helper;

class FileController extends Controller
{
    public function destroy($path_base64)
    {
        $path = base64_decode($path_base64);
        $delete = Helper::delete_file($path);
        return Helper::res_json('File deleted successfully', $delete, 200);
    }
}
