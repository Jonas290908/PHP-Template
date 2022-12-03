<?php

include_once __DIR__.'/html/init.php';

require_js("bootstrap.js");

require_css("bootstrap.css");
require_css("app.css");

render_template(__DIR__.'/html/pages/home.php');