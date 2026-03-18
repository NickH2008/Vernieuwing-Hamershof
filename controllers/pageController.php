<?php
class PageController {
    public function __construct($router) {
        foreach (get_class_methods($this) as $method) {

            if (str_starts_with($method, 'page')) {
                $name = strtolower(substr($method, 4));

                if ($name === 'home') {
                    $router->get('/', [$this, $method]);
                    $router->get('/home', [$this, $method]);
                } else {
                    $router->get('/' . $name, [$this, $method]);
                }
            }
        }
    }

    public function pageHome() {
        require __DIR__ . '/../public/home.php';
    }

//    public function pageAbout() {
//        require __DIR__ . '/../public/about.php';
//    }

    public function pageContact() {
        require __DIR__ . '/../public/contact.php';
    }
}