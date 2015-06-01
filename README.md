# timber-wordpress-examples
Just some snippets from my latest Wordpress project

A basic news listing and news view page using ACF behind the scenes, but this is more about the use of Timber and Twig - Bringing Wordpress templating up to date.

Timber - http://upstatement.com/timber/
Twig - http://twig.sensiolabs.org/

### No more Wordpress 'the loop' !
```php
<?php
if (!class_exists('Timber')){
    echo 'Timber not activated. Make sure you activate the plugin in <a href="/wp-admin/plugins.php#timber">/wp-admin/plugins.php</a>';
    return;
}
require_once('helpers/homepage-frontend.php');

$context = Timber::get_context();
$context['homepage'] = Timber::get_posts('post_type=homepage');
$context['stories'] = homepage_stories();
$context['bodyId'] = 'home';
$context['bodyClass'] = 'fullscreen';
$context['nav_section'] = 'all';

Timber::render(
    'index.html.twig',
    $context,
    600
);
```