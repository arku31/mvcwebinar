<?php

Class View
{
    protected $loader;
    protected $twig;

    public function __construct()
    {
        $this->loader = new Twig_Loader_Filesystem('views');
        $this->twig = new Twig_Environment($this->loader, [
            'cache' => false,
        ]);
    }
    public function render($filename, $data = array())
    {

        echo $this->twig->render($filename.'.html', $data);
//        require_once "views/".$filename.".php";
    }
}
