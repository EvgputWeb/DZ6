<?php
// include composer autoload
require 'vendor/autoload.php';

// import the Intervention Image Manager Class
use Intervention\Image\ImageManagerStatic as Image;

// configure with favored image driver (gd by default)
Image::configure(array('driver' => 'gd'));

// Поворачиваем
$img = Image::make('nature.jpg');
$img->rotate(-45);
$img->save('nature_rotated.jpg');

// Наносим ватермарк
$img = Image::make('nature.jpg');
$watermark = Image::make('watermark.png');
$watermark->resize(round(0.75 * $img->width()), null, function ($constraint) {
    $constraint->aspectRatio();
});
$img->insert($watermark, 'center');
$img->save('nature_watermarked.jpg');

// Изменяем размер
$img = Image::make('nature.jpg');
$img->resize(200, null, function ($constraint) {
    $constraint->aspectRatio();
});
$img->save('nature_resized.jpg');
