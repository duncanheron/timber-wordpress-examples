<?php
require_once('helpers/news.php');

$paged = set_paged($paged);

$context = getContextAndPost('trasient_news_page');

$context['header_media_image'] = get_header_media($context['post']);

$featured_news = get_featured_news($paged);
$news = get_news($paged, count($featured_news));

$context['feeds'] = merge_featured_with_standard($paged, $news, $featured_news);
$context['breaking_news'] = breaking_news();
$context['pagination'] = Timber::get_pagination();

Timber::render('news-landing.html.twig', $context, 600);
