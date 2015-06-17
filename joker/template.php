<?php

function joker_menu_tree($variables) {
    return '<ul class="pure-menu-list">' . $variables ['tree'] . '</ul>';
}

function joker_menu_link(array $variables) {
    $element = $variables ['element'];
    $sub_menu = '';

    if ($element ['#below']) {
        $sub_menu = drupal_render($element ['#below']);
    }
    $output = l($element ['#title'], $element ['#href'], $element ['#localized_options']);
    return '<li' . drupal_attributes($element ['#attributes']['class'][] = 'pure-menu-item') . '>' . $output . $sub_menu . "</li>\n";
}