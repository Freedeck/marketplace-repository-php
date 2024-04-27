<?php

header('Access-Control-Allow-Origin: *');

header('Access-Control-Allow-Methods: GET, POST');

header("Access-Control-Allow-Headers: X-Requested-With");


define('description', 'My Repository! Very cool.');

define('items', array(

    array(
        'file' => 'downloads/ExamplePlugin.Freedeck', // Where is the file located (relative to this directory)
        'github-repo' => 'freedeck/dev-env', // The github repository where the plugin is located (without https://github.com/)
        'id' => 'fd.plugins.example', // The ID you set in your plugin (This must be correct or easy plugin updates will not work)
        'name' => 'ExamplePlugin', // The name of the plugin
        'author' => 'Freedeck', // The author of the plugin
        'version' => '1.0.0', // The version of the plugin
        'description' => 'This is my example plugin.' // The description of the plugin
    ),

));

// Do not edit below this line, it is formatting the output for Freedeck to parse.

$tr = array();
foreach(items as $item) {
    $str = $item['file'] . ",!" . $item['github-repo'] . ",!"  . $item['name'] . ",!"  . $item['author'] . ",!"  . $item['version'] . ",!"  . $item['description'] . ",!" . $item['id'];
    array_push($tr, $str);
}

echo description."\n".implode("\n", $tr);

?>