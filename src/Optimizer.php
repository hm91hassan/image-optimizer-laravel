<?php

namespace Luova\ImageOptimizer;

class Optimizer
{

    public function optimize($image_path, $save_path = null, $quality = 80)
    {
        $main = $this->info($image_path);
        if (!$save_path) {
            $save_path = $image_path;
        }
        //dd($main);

        switch ($main) {
            case "image/gif":
                return $this->gifOptimize($image_path, $save_path);
                break;
            case "image/jpeg":
                return $this->jpgOptimize($image_path, $save_path, $quality);
                break;
            case "image/png":
                return $this->pngOptimize($image_path, $save_path, $quality);
                break;
            case "image/bmp":
                return  $this->bmpOptimize($image_path, $save_path, $quality);
                break;
        }
        return false;
    }

    public function info($file)
    {
        $info = @getimagesize($file);
        if (isset($info['mime'])) {

            return $info['mime'];
        }
        return false;
    }
    public function jpgOptimize($image_path, $save_path, $quality)
    {
        $img = @imagecreatefromjpeg($image_path);

        if ($img) {
            @imagejpeg($img, $save_path, $quality);
            return true;
        }
        return false;
    }

    public function pngOptimize($image_path, $save_path, $quality)
    {
        $img = @imagecreatefrompng($image_path);

        if ($img) {
            @imagepng($img, $save_path);
            return true;
        }
        return false;
    }
    private function gifOptimize($image_path, $save_path)
    {
        $img = @imagecreatefromgif($image_path);
        //dd($img);

        if ($img) {
            @imagegif($img, $save_path);
            return true;
        }
        return false;
    }
    private function bmpOptimize($image_path, $save_path)
    {
        $img = @imagecreatefrombmp($image_path);
        //dd($img);

        if ($img) {
            @imagebmp($img, $save_path, true);
            return true;
        }
        return false;
    }
}