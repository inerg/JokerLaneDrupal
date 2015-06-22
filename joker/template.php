<?php

function joker_menu_tree($variables) {
    return '<div id="nav" class="pure-menu pure-menu-horizontal pure-menu-scrollable"><ul class="pure-menu-list">' . $variables ['tree'] . '</ul></div>';
}

/*function joker_menu_link(array $variables) {
//add class for li
    $variables['element']['#attributes']['class'] = 'pure-menu-item';
//add class for a
    $variables['element']['#localized_options']['attributes']['class'][] = 'navigate pure-menu-link';
//dvm($variables['element']);
    return theme_menu_link($variables);
}*/



function joker_menu_link(array $variables) {
    //navigate pure-menu-link
    $element = $variables ['element'];
    $sub_menu = '';
    $separator = '';
    if(!strcmp($element['#attributes']['class'][0],"last")) {
    }
    else    {
        $separator = "<li class=\"pure-menu-separator\"></li>\n";
    }
    $element['#attributes']['class'] = 'pure-menu-item';
    if ($element ['#below']) {
        $sub_menu = drupal_render($element ['#below']);
    }
    $element['#localized_options']['attributes']['class'][] = 'navigate';
    $element['#localized_options']['attributes']['class'][] = 'pure-menu-link';
    $output = l($element ['#title'], $element ['#href'], $element ['#localized_options']);
    $output = str_replace("active", "", $output);
    $temp = '<li' . drupal_attributes($element ['#attributes']) . '>' . $output . $sub_menu . "</li>\n" . $separator;
    return $temp;
}

function social_media_block_info()  {
    $blocks = array();
    $blocks['social_block'] = array('info' => t('Social Media'),);
}