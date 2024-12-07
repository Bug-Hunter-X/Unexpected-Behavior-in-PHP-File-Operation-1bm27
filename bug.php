```php
$file = fopen("test.txt", "r+");
if ($file) {
    $contents = fread($file, filesize("test.txt"));
    // ... process $contents ...
    fclose($file);
} else {
    // Handle error: file could not be opened
    echo "Error opening file.";
}
```