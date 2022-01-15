<?php

/**
 * Description tab
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/tabs/description.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 2.0.0
 */

defined('ABSPATH') || exit;

global $post;

$heading = apply_filters('woocommerce_product_description_heading', __('Description', 'woocommerce'));

?>

<?php if ($heading) : ?>
    <h2><?php echo esc_html($heading); ?></h2>
<?php endif; ?>
<div class="flex">
    <div class="w-2/3"><?php the_content(); ?></div>
    <div class="w-1/3">
        <?php
            $image = get_field('feature_image');
            $size = 'thumbnail'; // (thumbnail, medium, large, full or custom size)
            if ($image) {
                echo wp_get_attachment_image($image, $size);
            }
            // the_field("feature_image");
        ?>
        <?php $feature_image = get_field('feature_image'); ?>
        <?php if ($feature_image) : ?>
            <a href="<?php echo esc_url($feature_image['url']); ?>"><img src="<?php echo esc_url($feature_image['url']); ?>" alt="<?php echo esc_attr($feature_image['alt']); ?>" /></a>
        <?php endif; ?>
    </div>
</div>


<!-- <?php var_dump(get_field('user_manual')); ?>
<?php $file = get_field('user_manual');
if ($file) : ?>
    <a href="<?php echo $file['url']; ?>"><?php echo $file['filename']; ?></a>
<?php endif; ?>
<?php the_content(); ?> -->