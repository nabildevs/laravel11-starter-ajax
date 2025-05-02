<?php

namespace App\Helper;

use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class Helper
{
    public static function res_json(string $message, $data, int $code)
    {
        return response()->json([
            'message' => $message,
            'data'    => $data
        ], $code);
    }

    public static function upload_file($file, $dir)
    {
        if (!$file instanceof \Illuminate\Http\UploadedFile) {
            throw new \InvalidArgumentException('File must be an instance of UploadFile.');
        }

        $original_name = $file->getClientOriginalName();

        if (preg_match('/\.php$/i', $original_name) || preg_match('/[<>:"\/|?*\x00-\x1F]/', $original_name)) {
            throw new \Exception('File name or extension contains unsupported characters.');
        }

        $safe_name = time() . '_' . Str::uuid() . '.' . $file->getClientOriginalExtension();
        $path = $file->storeAs($dir, $safe_name);

        return $path;
    }

    public static function delete_file($file)
    {
        $url  = Storage::url('/');
        $file = str_replace($url, '', $file);

        if (Storage::exists($file)) {
            Storage::delete($file);
        }
    }

    public static function url_file($path)
    {
        return $path && Storage::exists($path) ? Storage::url($path) : null;
    }

    public static function format_currency($string)
    {
        return 'Rp ' . number_format(floatval($string), 0, ',', '.');
    }

    public static function format_date($string, $with_hour = true)
    {
        $format = 'd M Y';

        if ($with_hour) {
            $format = 'd M Y H:i';
        }

        return Carbon::parse($string)->format($format);
    }
}
