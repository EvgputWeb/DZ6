<?php

require_once 'ImageTransformer.php';

$img = new ImageTransformer('nature.jpg');

// Поворот
$img->rotate(45,'nature_rotated.jpg');

// Нанесение водяного знака
$img->setWatermark('watermark.png', 0.75 ,'center','nature_watermarked.jpg');

// Изменение размера
$img->resizeProportional(200,'nature_resized.jpg');
