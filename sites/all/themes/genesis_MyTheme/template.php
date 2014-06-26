<?php

// $Id: template.php,v 1.10 2011/01/14 02:57:57 jmburnz Exp $

/**
 * Preprocess and Process Functions SEE: http://drupal.org/node/254940#variables-processor
 * 1. Rename each function to match your subthemes name,
 *    e.g. if you name your theme "themeName" then the function
 *    name will be "themeName_preprocess_hook". Tip - you can
 *    search/replace on "genesis_MyTheme".
 * 2. Uncomment the required function to use.
 */
/**
 * Override or insert variables into all templates.
 */
/* -- Delete this line if you want to use these functions
  function genesis_MyTheme_preprocess(&$vars, $hook) {
  }
  function genesis_MyTheme_process(&$vars, $hook) {
  }
  // */

/**
 * Override or insert variables into the html templates.
 */
/* -- Delete this line if you want to use these functions
  function genesis_MyTheme_preprocess_html(&$vars) {
  // Uncomment the folowing line to add a conditional stylesheet for IE 7 or less.
  // drupal_add_css(path_to_theme() . '/css/ie/ie-lte-7.css', array('weight' => CSS_THEME, 'browsers' => array('IE' => 'lte IE 7', '!IE' => FALSE), 'preprocess' => FALSE));
  }
  function genesis_MyTheme_process_html(&$vars) {
  }
  // */

/**
 * Override or insert variables into the page templates.
 */
/* -- Delete this line if you want to use these functions
  function genesis_MyTheme_preprocess_page(&$vars) {
  }
  function genesis_MyTheme_process_page(&$vars) {
  }
  // */

/**
 * Override or insert variables into the node templates.
 */
/* -- Delete this line if you want to use these functions
  function genesis_MyTheme_preprocess_node(&$vars) {
  }
  function genesis_MyTheme_process_node(&$vars) {
  }
  // */

/**
 * Override or insert variables into the comment templates.
 */
/* -- Delete this line if you want to use these functions
  function genesis_MyTheme_preprocess_comment(&$vars) {
  }
  function genesis_MyTheme_process_comment(&$vars) {
  }
  // */

/**
 * Override or insert variables into the block templates.
 */
/* -- Delete this line if you want to use these functions
  function genesis_MyTheme_preprocess_block(&$vars) {
  }
  function genesis_MyTheme_process_block(&$vars) {
  }
  // */

function YOURTHEMENAME_menu_link(array $variables) {
    $element = $variables['element'];
    $sub_menu = '';
    if ($element['#below']) {
        $sub_menu = drupal_render($element['#below']);
    }
    if (strpos(url($element['#href']), 'nolink')) {
        $output = '<a href="#" class="nolink">' . $element['#title'] . '</a>';
    } else {
        $output = l($element['#title'], $element['#href'], $element['#localized_options']);
    }
    return '<li' . drupal_attributes($element['#attributes']) . '>' . $output . $sub_menu . "</li>\n";
}