<?php


/*class Renderer 
{
    public static function render (string $pathfile, array $variables = []) 
    {
        extract($variables);

        ob_start();
        require('templates/' . $pathfile . '.html.php');
        $pageContent = ob_get_clean();

        require('templates/layout.html.php');
    }
}*/