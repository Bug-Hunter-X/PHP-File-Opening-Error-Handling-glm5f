```php
$file = fopen('nonexistent.txt', 'r');
if ($file === false) {
    // Handle the error
    $error = error_get_last();
    echo 'Error opening file: ' . $error['message'] . '\n';
} else {
    // Process the file
    $contents = fread($file, filesize('nonexistent.txt'));
    fclose($file);
    echo $contents;
}
```