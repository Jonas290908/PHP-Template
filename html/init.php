<?php

require_once __DIR__.'/../lib/config.php';

$tmp_data = array();
$js_files = array();
$css_files = array();

function require_js($js) {
    global $js_files, $base_url;
    array_push($js_files, $base_url.'/js/'.$js);
}

function require_css($css) {
    global $css_files, $base_url;
    array_push($css_files, $base_url.'/css/'.$css);
}

function require_static($static)
{
    global $base_url;
    return $base_url.'/static/'.$static;
}


function tmp_set($key, $value) {
    $tmp_data[$key] = $value;
}

function tmp_get($key) {
    global $tmp_data;
    if(array_key_exists($key, $tmp_data))
        return $tmp_data[$key];
    else
        return null;
}

function render_template($tmp) {
    global $tmp_data, $js_files, $css_files;
    $template = $tmp;
    include_once 'layout.php';
}