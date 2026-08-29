<?php
// config.php - Global Configuration & Environment Settings

define('SITE_NAME', 'KK LifeWise');
define('SITE_TAGLINE', 'ఆలోచన మార్చు • జీవితం మార్చు');
define('SITE_SUBTITLE', 'Telugu Personal Growth, Motivation, Money, Career, Stories & Books');
define('SITE_DESCRIPTION', 'వ్యక్తిగత వికాసం, ఆర్థిక వివేకం, కెరీర్ గైడెన్స్, ప్రేరణాత్మక కథలు మరియు ప్రపంచ ప్రసిద్ధ పుస్తకాల తెలుగు సారాంశాల అధికారిక వేదిక.');

define('YOUTUBE_CHANNEL_URL', 'https://www.youtube.com/@KKMotivationTelugu');
define('INSTAGRAM_PROFILE_URL', 'https://www.instagram.com/kkmotivationhub/');
define('CONTACT_EMAIL', 'contact@kklifewise.com');
define('CONTACT_PHONE', '+91 98765 43210');

// Base URL calculation
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || (isset($_SERVER['SERVER_PORT']) && $_SERVER['SERVER_PORT'] == 443)) ? "https://" : "http://";
$host = $_SERVER['HTTP_HOST'] ?? 'localhost:3000';
define('SITE_URL', $protocol . $host);

// Autoload Data Sources
require_once __DIR__ . '/data/articles.php';
require_once __DIR__ . '/data/books.php';
require_once __DIR__ . '/data/videos.php';
require_once __DIR__ . '/data/stories.php';
require_once __DIR__ . '/data/quotes.php';
require_once __DIR__ . '/data/assessments.php';
require_once __DIR__ . '/data/pdfs.php';
