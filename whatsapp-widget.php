<?php
/**
 * Plugin Name: WhatsApp Widget
 * Description: A plugin to add a WhatsApp widget with popup functionality.
 * Version: 1.0
 * Author: Payal
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

// Enqueue JavaScript and CSS files
function wws_enqueue_scripts() {
    wp_enqueue_style('whatsapp-widget-css', plugins_url('whatsapp-widget.css', __FILE__));
    wp_enqueue_script('whatsapp-widget-js', plugins_url('whatsapp-widget.js', __FILE__), array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'wws_enqueue_scripts');

// Add the HTML for the widget
function wws_add_widget_html() {
    ?>
    <div id="wws-layout-2" class="wws-popup-container wws-popup-container--position">
        <div class="wws-gradient wws-gradient--position" style="display: block;"></div>

        <!-- Popup -->
        <div class="wws-popup" data-wws-popup-status="1" style="display: none;">
            <!-- Popup header -->
            <div class="wws-popup__header">
                <!-- Popup close button -->
                <div class="wws-popup__close-btn wws--text-color wws--bg-color wws-shadow">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 352 512">
                        <path fill="currentColor" d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z"></path>
                    </svg>
                </div>
                <div class="wws-clearfix"></div>
                <!-- .Popup close button -->
            </div>
            <!-- .Popup header -->

            <!-- Popup body -->
            <div class="wws-popup__body">
                <!-- Popup support -->
                <div class="wws-popup__support-wrapper">
                    <div class="wws-popup__support wws-shadow">
                        <div class="wws-popup__support-about wws--text-color wws--bg-color">
                            <div class="wws-popup__support-img-wrapper">
                                <img class="wws-popup__support-img" src="<?php echo plugins_url( 'images/logo-retina1.png', __FILE__ ); ?>" alt="WeCreativez WhatsApp Support" width="50" height="50">
                            </div>
                            Suntem aici pentru a-ţi oferi asistenţă. Întreabă-ne orice!
                        </div>
                        <div class="wws-popup__support-welcome">
                            <img draggable="false" role="img" class="emoji" alt="👋" src="https://s.w.org/images/core/emoji/15.0.3/svg/1f44b.svg"> Bună! Cu ce te putem ajuta?
                        </div>
                    </div>
                </div>
                <!-- Popup support -->

                <!-- Popup input -->
                <div class="wws-popup__input-wrapper wws-shadow">
                    <input type="text" class="wws-popup__input" placeholder="Scrie mesajul tău..." autocomplete="off">
                    <svg class="wws-popup__send-btn" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 40 40" style="enable-background:new 0 0 40 40;" xml:space="preserve">
                        <style type="text/css">
                            .wws-lau00001 { fill: #22c15e80; }
                            .wws-lau00002 { fill: #22c15e; }
                        </style>
                        <path id="path0_fill" class="wws-lau00001" d="M38.9,19.8H7.5L2,39L38.9,19.8z"></path>
                        <path id="path0_fill_1_" class="wws-lau00002" d="M38.9,19.8H7.5L2,0.7L38.9,19.8z"></path>
                    </svg>
                </div>
                <div class="wws-clearfix"></div>
                <!-- .Popup input -->
            </div>
            <!-- .Popup body -->
        </div>
        <!-- .Popup -->

        <!-- .Popup footer -->
        <div class="wws-popup__footer">
            <!-- Popup open button -->
            <div class="wws-popup__open-btn wws--text-color wws--bg-color wws-shadow">
            <img class="whatsapp-image-icon" src="<?php echo plugins_url( 'images/whatsapp.png', __FILE__ ); ?>" alt="WhatsApp Chat"><span>Bună! Cu ce te putem ajuta?</span>
            </div>
        </div>
        <!-- .Popup footer -->
    </div>
    <?php
}
add_action('wp_footer', 'wws_add_widget_html');
