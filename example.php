<?php $singleProductTabs = new Single_Product_Tabs(); ?>

<div class="product-tabs">
    <ul class="navigation" role="tablist">
        <?php foreach($singleProductTabs->productTabs as $name => $value ) :  if($value['tab_content']) :?>
        <li role="tab" aria-controls="tab-<?php echo $name; ?>">
            <a href="#tab-<?php echo $name; ?>"><?php echo $value['tab_name']; ?></a>
        </li>
        <?php  
        endif;  
        endforeach; ?>
    </ul>

    <div class="tabs">
        <?php foreach($singleProductTabs->productTabs as $name => $value ) :  if($value['tab_content']) : ?>
        <h2 class="accordion-tab" role="tab" aria-controls="tab-<?php echo $name; ?>">
            <a href="#tab-<?php echo $name; ?>">
                <div class="inner"><?php echo $value['tab_name']; ?></div>
            </a>
        </h2>

        <div id="tab-<?php echo $name; ?>" class="tab-content" role="tabpanel" aria-labelledby="<?php echo $name; ?>">
            <div class="inner"><?php echo $value['tab_content']; ?></div>
        </div>

        <?php endif;  
        endforeach; ?>
    </div>
</div>