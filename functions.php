<?php
// functions.php - Core helper functions for KK LifeWise

// Load data files safely
require_once __DIR__ . '/data/quotes.php';
require_once __DIR__ . '/data/articles.php';
require_once __DIR__ . '/data/videos.php';
require_once __DIR__ . '/data/books.php';
require_once __DIR__ . '/data/stories.php';
require_once __DIR__ . '/data/pdfs.php';
require_once __DIR__ . '/data/assessments.php';

// Base URL helper
function base_url($path = '') {
    // Return relative or root-relative path for clean portability on XAMPP/Laragon/cPanel
    $path = ltrim($path, '/');
    return '/' . $path;
}

// Active page helper
function is_active($page, $active_page) {
    return ($page === $active_page) ? 'active text-primary font-bold' : 'text-on-surface-variant hover:text-primary';
}

// Get all articles or filtered by category
function get_articles($category = null) {
    global $articles;
    if (!$category || $category === 'all') {
        return $articles;
    }
    return array_filter($articles, function($item) use ($category) {
        return strtolower($item['category']) === strtolower($category);
    });
}

// Get single article by slug
function get_article_by_slug($slug) {
    global $articles;
    foreach ($articles as $art) {
        if ($art['slug'] === $slug) {
            return $art;
        }
    }
    return null;
}

// Get all videos or filtered
function get_videos($category = null) {
    global $videos;
    if (!$category || $category === 'all') {
        return $videos;
    }
    return array_filter($videos, function($item) use ($category) {
        return strtolower($item['category']) === strtolower($category);
    });
}

// Get video by slug
function get_video_by_slug($slug) {
    global $videos;
    foreach ($videos as $vid) {
        if ($vid['slug'] === $slug) {
            return $vid;
        }
    }
    return null;
}

// Get all books or filtered
function get_books($category = null) {
    global $books;
    if (!$category || $category === 'all') {
        return $books;
    }
    return array_filter($books, function($item) use ($category) {
        return strtolower($item['category']) === strtolower($category);
    });
}

// Get book by slug
function get_book_by_slug($slug) {
    global $books;
    foreach ($books as $bk) {
        if ($bk['slug'] === $slug) {
            return $bk;
        }
    }
    return null;
}

// Get all stories
function get_stories() {
    global $stories;
    return $stories;
}

// Get story by slug
function get_story_by_slug($slug) {
    global $stories;
    foreach ($stories as $st) {
        if ($st['slug'] === $slug) {
            return $st;
        }
    }
    return null;
}

// Get all PDFs
function get_pdfs() {
    global $pdfs;
    return $pdfs;
}

// Get PDF by slug
function get_pdf_by_slug($slug) {
    global $pdfs;
    foreach ($pdfs as $p) {
        if ($p['slug'] === $slug) {
            return $p;
        }
    }
    return null;
}

// Global search across all content types
function search_all_content($query) {
    global $articles, $videos, $books, $stories, $pdfs;
    $query = mb_strtolower(trim($query));
    $results = [];

    if (empty($query)) {
        return $results;
    }

    // Search articles
    foreach ($articles as $art) {
        if (mb_stripos($art['title'], $query) !== false || mb_stripos($art['excerpt'], $query) !== false || mb_stripos($art['category'], $query) !== false) {
            $results[] = [
                'type' => 'Article',
                'type_label' => 'వ్యాసం (Article)',
                'title' => $art['title'],
                'excerpt' => $art['excerpt'],
                'url' => base_url('article.php?slug=' . $art['slug']),
                'category' => $art['category_name'],
                'badge_color' => 'bg-amber-500/20 text-amber-300'
            ];
        }
    }

    // Search videos
    foreach ($videos as $vid) {
        if (mb_stripos($vid['title'], $query) !== false || mb_stripos($vid['summary'], $query) !== false) {
            $results[] = [
                'type' => 'Video',
                'type_label' => 'వీడియో (Video)',
                'title' => $vid['title'],
                'excerpt' => $vid['summary'],
                'url' => base_url('video-detail.php?slug=' . $vid['slug']),
                'category' => $vid['category_name'],
                'badge_color' => 'bg-red-500/20 text-red-300'
            ];
        }
    }

    // Search books
    foreach ($books as $bk) {
        if (mb_stripos($bk['title'], $query) !== false || mb_stripos($bk['summary'], $query) !== false || mb_stripos($bk['author'], $query) !== false) {
            $results[] = [
                'type' => 'Book',
                'type_label' => 'పుస్తకం (Book)',
                'title' => $bk['title'],
                'excerpt' => $bk['summary'],
                'url' => base_url('book-detail.php?slug=' . $bk['slug']),
                'category' => $bk['category_name'],
                'badge_color' => 'bg-blue-500/20 text-blue-300'
            ];
        }
    }

    // Search stories
    foreach ($stories as $st) {
        if (mb_stripos($st['title'], $query) !== false || mb_stripos($st['moral'], $query) !== false) {
            $results[] = [
                'type' => 'Story',
                'type_label' => 'కథ (Story)',
                'title' => $st['title'],
                'excerpt' => $st['moral'],
                'url' => base_url('story-detail.php?slug=' . $st['slug']),
                'category' => 'స్ఫూర్తి కథలు',
                'badge_color' => 'bg-emerald-500/20 text-emerald-300'
            ];
        }
    }

    // Search PDFs
    foreach ($pdfs as $pdf) {
        if (mb_stripos($pdf['title'], $query) !== false || mb_stripos($pdf['description'], $query) !== false) {
            $results[] = [
                'type' => 'PDF',
                'type_label' => 'ఉచిత PDF (Free PDF)',
                'title' => $pdf['title'],
                'excerpt' => $pdf['description'],
                'url' => base_url('pdf-detail.php?slug=' . $pdf['slug']),
                'category' => $pdf['category_name'],
                'badge_color' => 'bg-purple-500/20 text-purple-300'
            ];
        }
    }

    return $results;
}
