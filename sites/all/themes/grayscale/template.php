<?php

/**
 * Override or insert variables into the html template. 
 */
function grayscale_process_html(&$vars) {
// Add classes for the font styles 
    $classes = explode(' ', $vars['classes']);
    $classes[] = theme_get_setting('font_family');
    $classes[] = theme_get_setting('font_size');
    $vars['classes'] = trim(implode(' ', $classes));
}

/* function grayscale_breadcrumb($variables) {
  $breadcrumb = $variables['breadcrumb'];

  if (!empty($breadcrumb)) {
  // Provide a navigational heading to give context for breadcrumb links to
  // screen-reader users. Make the heading invisible with .element-invisible.
  $output = '<h2 class="element-invisible">' . t('You are here') . '</h2>';

  $output .= '<div class="breadcrumb">' . implode(' * ', $breadcrumb) . '</div>';
  return $output;
  }
  } */

/**
 * Implements $themeenginename_preprocess_$hook(). 
 * Variables we set here will be available to the breadcrumb template file. 
 */
function grayscale_preprocess_breadcrumb(&$variables) {
    $variables['breadcrumb_delimiter'] = '#';
}
