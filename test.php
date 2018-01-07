<?php

$html = array_reduce(range(1, 100), function ($html, $number) {
    if (!($number % 3) && !($number % 5)) {
        $result = 'angga mulya sasmita';
    } else if (!($number % 3)) {
        $result = 'angga';
    } else if (!($number % 5)) {
        $result = 'mulya';
    } else {
        $result = $number;
    }
    return $html."<li>$result</li>";
}, '');


echo <<< EOF_HTML
  <!doctype html>
  <html>
    <head>
      <meta charset="utf-8">
      <title>test</title>
      <style>
        ul {
          list-style-type: none;
        }      
      </style>
    </head>
    <body>
        <ul>$html</ul>
    </body>
  </html>
EOF_HTML;

?>