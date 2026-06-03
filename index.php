<?php
/**
 * Landing page: show the introduction (index.html).
 * Landing page for PHP hosts; static copy is index.html (Open app → app.html).
 */
header('Content-Type: text/html; charset=utf-8');
readfile(__DIR__ . '/index.html');
