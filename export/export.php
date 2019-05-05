<?php
if ( !defined('__DIR__') ) define('__DIR__', dirname(__FILE__));

$url = 'http://crossmedia.banamex.corporativo/';
$folder = './';
$files = getDirectoryList(__DIR__);

foreach ( $files as $file )
{
    if ( is_file($file) && $file != 'export.php' && strpos($file,'.php') )
    {
        $fileUrl = $url . $file;
        $filename = str_replace('.php', '.html', $file);
        $string = file_get_contents($fileUrl);
        $string = repair($string);
        $fp = fopen($folder . $filename, 'w+');
        fwrite($fp, $string);
        fclose($fp);
        chmod($folder . $filename, 0666);
		echo $folder . $filename.'<br/>';
    }
}

echo 'Finished.';

function repair($string)
{
    $string = str_replace('.php', '.html', $string);
    return $string;
}

function getDirectoryList($directory)
{

    // create an array to hold directory list
    $results = array();

    // create a handler for the directory
    $handler = opendir($directory);

    // open directory and walk through the filenames
    while ( $file = readdir($handler) )
    {

        // if file isn't this directory or its parent, add it to the results
        if ( $file != "." && $file != ".." )
        {
            $results[] = $file;
        }
    }

    // tidy up: close the handler
    closedir($handler);

    // done!
    return $results;
}

?>
