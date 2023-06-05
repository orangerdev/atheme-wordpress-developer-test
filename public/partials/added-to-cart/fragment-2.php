<?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($product->get_id()), 'single-post-thumbnail'); ?>

<div class="content" style='background-image:url("<?php echo $image[0]; ?>")'>
  <h3>Added To Cart</h3>
  <button type="button" class="close">x</button>
  <div class="product">
    <div class="info">
      <h4><?php echo $product->get_name(64); ?></h4>
      <p><?php echo $product->get_price_html(); ?></p>
    </div>
  </div>
  <a href="<?php echo wc_get_cart_url(); ?>" class="button wc-forward">View Cart</a>
</div>