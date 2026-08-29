<?php
// router.php - Clean URL Router for PHP built-in web server
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$file = __DIR__ . $uri;

// If static file exists, return false to let built-in server handle it
if ($uri !== '/' && file_exists($file) && !is_dir($file)) {
    return false;
}

// Clean Story Episode URLs: /stories/story-slug/episode-01/
if (preg_match('#^/stories/([^/]+)/([^/]+)/?$#', $uri, $matches)) {
    $_GET['slug'] = $matches[1];
    $_GET['episode'] = $matches[2];
    require __DIR__ . '/story-detail.php';
    return;
}

// Clean Single Story URLs: /stories/story-slug/
if (preg_match('#^/stories/([^/]+)/?$#', $uri, $matches)) {
    $_GET['slug'] = $matches[1];
    require __DIR__ . '/story-detail.php';
    return;
}

// Clean Single Book URLs: /books/book-slug/
if (preg_match('#^/books/([^/]+)/?$#', $uri, $matches)) {
    $_GET['slug'] = $matches[1];
    require __DIR__ . '/book-detail.php';
    return;
}

// Clean Single Video URLs: /videos/video-slug/
if (preg_match('#^/videos/([^/]+)/?$#', $uri, $matches)) {
    $_GET['slug'] = $matches[1];
    require __DIR__ . '/video-detail.php';
    return;
}

// Clean Single PDF URLs: /pdfs/pdf-slug/
if (preg_match('#^/pdfs/([^/]+)/?$#', $uri, $matches)) {
    $_GET['slug'] = $matches[1];
    require __DIR__ . '/pdf-detail.php';
    return;
}

// Clean Category Article URLs: /motivation/article-slug/, /money/article-slug/, /career/article-slug/
if (preg_match('#^/(motivation|money|career)/([^/]+)/?$#', $uri, $matches)) {
    $_GET['category'] = $matches[1];
    $_GET['slug'] = $matches[2];
    require __DIR__ . '/article.php';
    return;
}

// Clean URL routing table
$routes = [
    '/' => 'index.php',
    '/motivation' => 'motivation.php',
    '/motivation/' => 'motivation.php',
    '/money' => 'money.php',
    '/money/' => 'money.php',
    '/career' => 'career.php',
    '/career/' => 'career.php',
    '/stories' => 'stories.php',
    '/stories/' => 'stories.php',
    '/books' => 'books.php',
    '/books/' => 'books.php',
    '/videos' => 'videos.php',
    '/videos/' => 'videos.php',
    '/pdfs' => 'pdfs.php',
    '/pdfs/' => 'pdfs.php',
    '/about' => 'about.php',
    '/about/' => 'about.php',
    '/contact' => 'contact.php',
    '/contact/' => 'contact.php',
    '/assessment' => 'assessment.php',
    '/assessment/' => 'assessment.php',
    '/article' => 'article.php',
    '/article/' => 'article.php',
    '/book-detail' => 'book-detail.php',
    '/book-detail/' => 'book-detail.php',
    '/story-detail' => 'story-detail.php',
    '/story-detail/' => 'story-detail.php',
    '/video-detail' => 'video-detail.php',
    '/video-detail/' => 'video-detail.php',
    '/pdf-detail' => 'pdf-detail.php',
    '/pdf-detail/' => 'pdf-detail.php',
    '/search' => 'search.php',
    '/search/' => 'search.php',
];

if (isset($routes[$uri])) {
    require __DIR__ . '/' . $routes[$uri];
    return;
}

// Direct php file execution
$phpFile = __DIR__ . '/' . trim($uri, '/') . '.php';
if (file_exists($phpFile)) {
    require $phpFile;
    return;
}

// Fallback to index.php
require __DIR__ . '/index.php';

