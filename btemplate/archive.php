<?php get_header(); ?>
<section>
	<h1><?php
		if (is_day()) : printf('Архив за день: %s', get_the_date());
		elseif (is_month()) : printf('Архив за месяц: %s', get_the_date('F Y'));
		elseif (is_year()) : printf('Архив за год: %s', get_the_date('Y'));
		else : 'Архив';
	endif; ?></h1>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<?php get_template_part('loop'); ?>
	<?php endwhile;
	else: echo '<h2>Нет записей.</h2>'; endif; ?>	 
	<?php pagination(); ?>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>