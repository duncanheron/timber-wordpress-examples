<?php
require_once('helpers/news.php');

$context = getContextAndPost('trasient_news_item');

$context['relateds'] = related_news($context['post']->id);

Timber::render('news-view.html.twig', $context, 600);
