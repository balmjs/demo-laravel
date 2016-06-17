<?php
namespace App\Helpers;

class Util
{
    /**
     * Get the path to a versioned Balm file.
     *
     * @param  string  $filename
     * @return string
     */
    public static function assets($filename, $buildDirectory = 'assets')
    {
        $manifestPath = public_path($buildDirectory.'/rev-manifest.json');

        if (file_exists($manifestPath)) {
            $manifest = json_decode(file_get_contents($manifestPath), TRUE);
        } else {
            $manifest = [];
        }

        if (array_key_exists($filename, $manifest)) {
            return $buildDirectory.'/'.$manifest[$filename];
        }

        return $filename;
    }
}
