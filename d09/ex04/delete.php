<?php
foreach ($_GET as $key => $value) {
    $file = file_get_contents('list.csv');
    $arr = explode("\n", $file);
    foreach ($arr as $item) {
        $tmp = explode(";", $item);
        if ($tmp[1] == $value) {
            $line = $tmp[1] . ";" . $tmp[1] . PHP_EOL;
            file_put_contents('list.csv', str_replace($line, '', $file));
        }
    }
}
?>