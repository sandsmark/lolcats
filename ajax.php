<?

$dir = opendir("/srv/http/lolcats/imgs");

if ($dir) {
    $files = array();
    while ($file = readdir($dir)) {
        if (!is_dir($file)) {
            $files[] = $file;
        }
    }
    closedir($dir);

    $file = $files[rand(0, count($files))];

    print "$file";
} else {
    die("Unable to open image folder");
}
?>
