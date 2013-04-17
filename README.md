WordPress Nav Descriptions
==========================

Custom walker to place descriptions into menu items.

## Usage
    wp_nav_menu(array(
        'theme_location' => 'my-menu',
        'walker' => new Badcow\DescriptionWalker,
    ));

## How to add descriptions
One of the properties of a WP menu item is _description_ (if you can't see it, check your screen options), this is
where you can add a menu description.
