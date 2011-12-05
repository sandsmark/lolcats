<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Random kitteh of the now</title>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<style type="text/css">
img {
    display:block;
    margin-left: auto;
    margin-right: auto;
    border: 15px black solid;
    border-radius: 15px;
    -moz-border-radius: 15px;
}
body {
    background-image: url('bg.png');
}
h1 {
    text-align: center;
    color:white;
    text-shadow: white 0px 0px 10px;
}
#footer {
    color: gray;
    font-size:0.5em;
}
a {
    color: gray;
}
</style>
</head>
<body>
<h1>Random lolcat</h1>
<p>
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

    print "<a href='http://lolcats.iskrembilen.com/old.php'><img src='imgs/" . $file . "' alt='lolcat' /></a>";
    print "<a href='imgs/" . $file . "'>Link to image</a>";
} else {
    die("Unable to open image folder");
}
?>
</p>
<p id="footer"> &copy; 2010 lolwat</p>
</body>
</html>
