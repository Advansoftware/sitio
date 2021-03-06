<?php
/**
 * Link Button field template
 *
 * @var string $type
 * @var array $args
 * @var array $data
 * @var array $meta_data
 * @var array $lang
 * @var boolean $is_single single page
 *
 * @package Themify PTB
 */
?>

<?php
if (!empty($meta_data)) {
	$meta_data = $meta_data[$args['key']];
	if (!isset($meta_data[1]) || !trim($meta_data[1])) {
		return;
	}
	$class = $style = array();
	$none = true;
	if (isset($data['custom_color']) && $data['custom_color']) {
		$style[] = 'background-color:' . $data['custom_color'] . ' !important;';
	} elseif (isset($data['color'])) {
		$class[] = $data['color'];
	}
	if (isset($data['icon']) && $data['icon']) {
		$class[] = 'fa';
		$class[] = $data['icon'];
	}
	if (isset($data['link_link']) && $data['link_link'] == 'lightbox') {
		$class[] = 'ptb_lightbox';
	}
	if (isset($data['size']) && $data['size']) {
		$class[] = $data['size'];
	}
	if (isset($data['styles']) && !empty($data['styles'])) {
		if (!is_array($data['styles'])) {
			$data['styles'] = array($data['styles']);
		}
		$none = array_search('none', $data['styles']) === FALSE;
		$class[] = $none ? implode(' ', $data['styles']) : 'none';
	}
	if (isset($data['text_color']) && $data['text_color']) {
		$style[] = 'color:' . $data['text_color'] . ' !important;';
	}
	if (!$meta_data[0] && isset($data['default_link'])) {
		$meta_data[0] = PTB_Utils::get_label($data['default_link']);
	}
	?>
	<div class="ptb_link">
		<a  <?php if ($none && !empty($style)): ?>style="<?php esc_attr_e(implode(' ', $style)) ?>"<?php endif; ?> 
												  class="ptb_link_button <?php if ($none && !empty($class)): ?>shortcode <?php esc_attr_e(implode(' ', $class)) ?><?php endif; ?>" 
												  <?php if (isset($data['link_link']) && $data['link_link'] === 'new_window'): ?>target="_blank"<?php endif; ?>
												  href="<?php echo $meta_data[1] ?>"><?php echo $meta_data[0] ?>
		</a>
	</div>
	<?php
}