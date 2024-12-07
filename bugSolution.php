```php
$filename = "test.txt";
if (file_exists($filename) && is_writable($filename)) {
    $file = fopen($filename, "r+");
    if ($file) {
        $contents = fread($file, filesize($filename));
        // ... process $contents ...
        fclose($file);
    } else {
        // Handle error: file could not be opened (even though it exists)
        echo "Error opening file.";
    }
} else {
    // Handle error: file does not exist or is not writable
    echo "Error: File does not exist or is not writable.";
}
```