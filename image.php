<?php

require 'FaceDetector.php';

use svay\FaceDetector;

$faceDetect = new FaceDetector('detection.dat');

$faceDetect->faceDetect($_FILES['image']['tmp_name']);
$faceDetect->toJpeg();
/**
 * @return 
 * Uncomment to crop face;
 */
// $faceDetect->cropFaceToJpeg();