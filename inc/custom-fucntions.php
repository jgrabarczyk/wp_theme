<?php

if (function_exists('pll_current_language')) {
  define('ACF_OPTION_SLUG', pll_current_language('slug'));

	if (function_exists('acf_add_options_page')) {
    $lang_array = pll_languages_list();
    foreach ($lang_array as $lang) {
      acf_add_options_sub_page([
        'page_title' => "Opcje dla języka " . $lang,
        'menu_title' => __("Opcje dla języka " . $lang, 'projectic'),
        'menu_slug' => "acf-options-${lang}",
        'post_id' => $lang,
        'parent_slug' => $parent['menu_slug'],
      ]);
    }
	}
	
} else {
	define('ACF_OPTION_SLUG', 'options');
	
  if (function_exists('acf_add_options_page')) {
    acf_add_options_page();
  }
}
