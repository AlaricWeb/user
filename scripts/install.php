<?php

// Define source and destination directories
$sourceDir = __DIR__ . '/../src/';
$destinationDir = __DIR__ . '/../app/';

// Define directories to copy
$directories = ['Controller', 'Model'];

foreach ($directories as $dir) {
    $sourcePath = $sourceDir . $dir;
    $destinationPath = $destinationDir . $dir;

    if (!file_exists($destinationPath)) {
        mkdir($destinationPath, 0755, true);
    }
    $files = glob($sourcePath . '/*');
    foreach ($files as $file) {
        copy($file, $destinationPath . '/' . basename($file));
    }
}
echo "Files have been copied to the app directory.\n";
