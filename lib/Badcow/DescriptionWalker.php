<?php

namespace Badcow;

/**
 * Class DescriptionWalker
 *
 * Renders description in menu link
 *
 * @package Infinite
 */
class DescriptionWalker extends \Walker_Nav_Menu
{
    /**
     * {@inheritdoc}
     */
    function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0)
    {
        parent::start_el($output, $item, $depth, $args, $id);
        $output .= empty($item->description) ? '' : sprintf('<span>%s</span>', esc_attr($item->description));
    }
}
