<?php

class td_module_10 extends td_module {

    function __construct($post) {
        //run the parrent constructor
        parent::__construct($post);
    }

    function render() {
        ob_start();
        ?>

        <div class="<?php echo $this->get_module_classes();?>">
            <?php echo $this->get_image('td_218x150');?>

            <div class="item-details">
            <?php 
//echo $this->get_title();
// 置換対象文字列
$targetText = $this->get_title();

// "A" という文字列を "×" に置換する
$replaceText = str_replace('">', '" target=_blank >', $targetText);
echo $replaceText;
?>

                <div class="td-module-meta-info">
                    <?php if (td_util::get_option('tds_category_module_10') == 'yes') { echo $this->get_category(); }?>
                        <?php echo $this->get_author();?>
                        <?php echo $this->get_date();?>
                        <?php echo $this->get_comments();?>
                </div>

                <div class="td-excerpt">
                    <?php echo $this->get_excerpt();?>
                </div>
            </div>

        </div>

        <?php return ob_get_clean();
    }

}
