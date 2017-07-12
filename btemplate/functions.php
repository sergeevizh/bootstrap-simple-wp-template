<?php

register_nav_menus(array( // Регистрация меню
	'top' => 'Верхнее',
	'bottom' => 'Внизу'
));

add_theme_support('post-thumbnails'); // Включение миниатюр
set_post_thumbnail_size(250, 150); // Размер миниатюр 250x150
add_image_size('big-thumb', 400, 400, true); // Ещё один размер миниатюры

register_sidebar(array(
	'name' => 'Колонка слева',
	'id' => "left-sidebar",
	'description' => 'Обычная колонка в сайдбаре',
	'before_widget' => '<div id="%1$s" class="widget %2$s">',
	'after_widget' => "</div>\n",
	'before_title' => '<span class="widgettitle">',
	'after_title' => "</span>\n",
));

function pagination() {
	global $wp_query;
	$big = 999999999;
	echo paginate_links(array(
		'base' => str_replace($big,'%#%',esc_url(get_pagenum_link($big))),
		'format' => '?paged=%#%',
		'current' => max(1, get_query_var('paged')),
		'type' => 'list',
		'prev_text'    => 'Назад',
    	'next_text'    => 'Вперед',
		'total' => $wp_query->max_num_pages,
		'show_all'     => false,
		'end_size'     => 15,
		'mid_size'     => 15,
		'add_args'     => false,
		'add_fragment' => '',
		'before_page_number' => '',
			'after_page_number' => ''
	));
}
?>
