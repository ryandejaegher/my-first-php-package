<?php

namespace WpHelloWorld;

class HelloWorld {
    // Add a name arg to the render and echo it
    public function render($name) {
        echo '<h1>Hello ' . $name . '</h1>';
    }
}