<?php
// Includes
add_action(
    'wp_enqueue_scripts', function () {
        wp_enqueue_style('easy-tabs', get_template_directory_uri() . '/css/easy-tabs.css');
        wp_enqueue_script('jquery.easy-tabs', get_template_directory_uri() . '/js/easy-tabs.js', array(), '1.0.0');
    }
);

// Class
class Single_Product_Tabs
{
    public $productTabs = array();

    public function __construct()
    {    
        // Let's define our tabs
        // Key: ACF Key
        $this->productTabs = array(
            'productInformation' => 
                array(
                    'tab_name' => __('Product Information', 'fagerberg'),
                    'tab_content' => $this->displayTabContents('productInformation')
                ),
            'productDocuments' =>    
                array(
                    'tab_name' => __('Product Information', 'fagerberg'),
                    'tab_content' => $this->displayTabContents('productDocuments')
                ),
            'productAddons'  =>
                array(
                    'tab_name' => __('Product Information', 'fagerberg'),
                    'tab_content' => $this->displayTabContents('productAddons')
                ),
            'product3d' =>
                array(
                    'tab_name' => __('Product Information', 'fagerberg'),
                    'tab_content' => $this->displayTabContents('product3d')
                ),
            'productVideos' =>
                array(
                    'tab_name' => __('Product Information', 'fagerberg'),
                    'tab_content' => $this->displayTabContents('productVideos')
                ),
        );
    }
    
    public function displayTabContents($acf_key)
    {
        $acf_data = get_field($acf_key);
        return $acf_key;
    }
}
?>