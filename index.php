<?php

//require the autoload file
require_once('vendor/autoload.php');

//create an instance of the base class
$f3 = Base::instance();



//define a default route
$f3->route('GET /',function() {
    echo '<h1>Hello, world!</h1>';
}
);

//run fat free
$f3->run();
?>

<h1>hello</h1>
<h2>How are you?</h2>

<p>This is a paragraph of text</p>