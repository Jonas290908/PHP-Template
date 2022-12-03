<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    $title = tmp_get('title');
    if ($title == null)
        $title = 'Welcome on';
    echo '<title>' . $title . ' My PHP Site</title>';

    foreach ($js_files as $js_file) {
        echo '<script defer src="' . $js_file . '" ></script>';
    }
    foreach ($css_files as $css_file) {
        echo '<link rel="stylesheet" href="' . $css_file . '" />';
    }
    ?>
</head>

<body>
    <header>
        
    </header>

    <div class="root">
        <?php 
            include $template;
        ?>
    </div>

    <footer class="py-3 my-4">
       
    </footer>
</body>

</html>