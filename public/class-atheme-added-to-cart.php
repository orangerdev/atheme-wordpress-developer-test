<?php

namespace AthemeTest\Front;

/**
 * The public-facing functionality of the plugin for added-to-cart event.
 *
 * @link       https://ridwan-arifandi.com
 * @since      1.0.0
 *
 * @package    Atheme_Test
 * @subpackage Atheme_Test/public
 */
class AddedToCart
{
  /**
   * The ID of this plugin.
   *
   * @since    1.0.0
   * @access   private
   * @var      string    $plugin_name    The ID of this plugin.
   */
  private $plugin_name;

  /**
   * The version of this plugin.
   *
   * @since    1.0.0
   * @access   private
   * @var      string    $version    The current version of this plugin.
   */
  private $version;

  /**
   * Initialize the class and set its properties.
   *
   * @since    1.0.0
   * @param      string    $plugin_name       The name of the plugin.
   * @param      string    $version    The version of this plugin.
   */
  public function __construct($plugin_name, $version)
  {

    $this->plugin_name = $plugin_name;
    $this->version = $version;
  }

  /**
   * Display layout of added-to-cart.
   * @author    Ridwan Arifandi
   * @uses      wp_footer, priority 10
   * @since     1.0.0
   * @return    void
   */
  public function set_layout()
  {
    require_once ATHEME_TEST_PLUGIN_PATH . 'public/partials/added-to-cart/layout.php';
  }

  /**
   * Add product-added fragment.
   * @author    Ridwan Arifandi
   * @uses      woocommerce_add_to_cart_fragments, priority 10
   * @since     1.0.0
   * @param     array $fragments
   * @return    array
   */
  public function set_fragment(array $fragments)
  {

    ob_start();

    $post = wp_parse_args($_POST, array(
      'product_id' => 0,
      'quantity' => 1,
    ));

    $product = wc_get_product($post['product_id']);

    require_once ATHEME_TEST_PLUGIN_PATH . 'public/partials/added-to-cart/fragment-2.php';

    $fragments['#atheme-test-added-to-cart .content'] = ob_get_clean();

    return $fragments;
  }
}
