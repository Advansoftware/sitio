<?php
/**
 * Excerpt field template
 *
 * @var string $type
 * @var array $args
 * @var array $data
 * @var array $meta_data
 * @var array $lang
 * @var boolean $is_single single page
 * @var string $index index in themplate
 *
 * @package Themify PTB
 */
?>

<?php
PTB_Public::$render_content = true;
$excerpt = $meta_data['post_excerpt'];
?>
<div itemprop="articleBody">
	<?php echo $excerpt && $data['excerpt_count'] > 0 ? wp_trim_words($excerpt, $data['excerpt_count']) : get_the_excerpt(); ?>
</div>
<?php
PTB_Public::$render_content = false;
