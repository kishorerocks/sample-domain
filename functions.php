<?php
// functions.php - Helper Functions & Core Utilities for KK LifeWise

require_once __DIR__ . '/config.php';

/**
 * Get item by ID from array
 */
function find_item_by_id($array, $id) {
    foreach ($array as $item) {
        if (isset($item['id']) && $item['id'] == $id) {
            return $item;
        }
    }
    return null;
}

/**
 * Get item by slug from array
 */
function find_item_by_slug($array, $slug) {
    foreach ($array as $item) {
        if (isset($item['slug']) && $item['slug'] === $slug) {
            return $item;
        }
    }
    return null;
}

function get_article_by_id($id) {
    global $articles;
    return find_item_by_id($articles, $id);
}

function get_article_by_slug($slug) {
    global $articles;
    return find_item_by_slug($articles, $slug);
}

function get_book_by_id($id) {
    global $books;
    return find_item_by_id($books, $id);
}

function get_book_by_slug($slug) {
    global $books;
    return find_item_by_slug($books, $slug);
}

function get_video_by_id($id) {
    global $videos;
    return find_item_by_id($videos, $id);
}

function get_story_by_id($id) {
    global $stories;
    return find_item_by_id($stories, $id);
}

function get_story_by_slug($slug) {
    global $stories;
    return find_item_by_slug($stories, $slug);
}

function get_pdf_by_id($id) {
    global $pdfs;
    return find_item_by_id($pdfs, $id);
}

function get_daily_quote() {
    global $quotes;
    if (empty($quotes)) {
        return [
            'id' => 1,
            'quote' => 'ఆలోచన మార్చుకుంటే మీ భావోద్వేగాలు మారతాయి. భావోద్వేగాలు మారితే మీ చేతలు మారతాయి. చేతలు మారితే మీ జీవితమే మారుతుంది.',
            'author' => 'KK Motivation',
            'category' => 'జీవన సూత్రం',
            'theme_color' => 'gold'
        ];
    }
    $dayOfYear = (int)date('z');
    $index = $dayOfYear % count($quotes);
    return $quotes[$index];
}

function get_related_articles($category, $exclude_id = 0, $limit = 3) {
    global $articles;
    $related = [];
    foreach ($articles as $art) {
        if ($art['id'] != $exclude_id && (empty($category) || $art['category'] === $category)) {
            $related[] = $art;
            if (count($related) >= $limit) break;
        }
    }
    return $related;
}

function search_all_content($query) {
    global $articles, $books, $videos, $stories, $pdfs;
    $query = mb_strtolower(trim($query));
    $results = [
        'articles' => [],
        'books' => [],
        'videos' => [],
        'stories' => [],
        'pdfs' => []
    ];

    if (empty($query)) return $results;

    foreach ($articles as $item) {
        if (mb_stripos($item['title'], $query) !== false || mb_stripos($item['excerpt'], $query) !== false || mb_stripos($item['category_name'], $query) !== false) {
            $results['articles'][] = $item;
        }
    }

    foreach ($books as $item) {
        if (mb_stripos($item['title'], $query) !== false || mb_stripos($item['author'], $query) !== false || mb_stripos($item['tagline'] ?? '', $query) !== false) {
            $results['books'][] = $item;
        }
    }

    foreach ($videos as $item) {
        if (mb_stripos($item['title'], $query) !== false || mb_stripos($item['category'] ?? '', $query) !== false) {
            $results['videos'][] = $item;
        }
    }

    foreach ($stories as $item) {
        if (mb_stripos($item['title'], $query) !== false || mb_stripos($item['summary'] ?? '', $query) !== false) {
            $results['stories'][] = $item;
        }
    }

    return $results;
}
