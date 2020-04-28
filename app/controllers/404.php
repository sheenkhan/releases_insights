<?php

require_once MODELS . '404.php';

http_response_code(404);

echo $twig->render(
    'regular.html.twig',
    [
        'page_title'   => $page_title,
        'css_files'    => $css_files,
        'css_page_id'  => $controller,
        'page_content' => $content,
    ]
);
