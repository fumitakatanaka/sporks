<?php

class td_module_mx8 extends td_module {

    function __construct($post) {
        //run the parrent constructor
        parent::__construct($post);
    }

    function render() {
        ob_start();
        ?>

        <div class="<?php echo $this->get_module_classes();?>">
            <div class="meta-info-container">
                <?php echo $this->get_image('td_696x385');?>

                <div class="td-module-meta-info">
                    <?php 
//echo $this->get_title();
// 置換対象文字列
$targetText = $this->get_title();

// "A" という文字列を "×" に置換する
$replaceText = str_replace('">', '" target=_blank >', $targetText);
echo $replaceText;

?>
                    <?php if (td_util::get_option('tds_category_module_mx8') == 'yes') { echo $this->get_category(); }?>
                    <span class="td-author-date">
                        <?php echo $this->get_author();?>
                        <?php echo $this->get_date();?>
                        <?php echo $this->get_comments();?>
                    </span>
                </div>
            </div>

        </div>

        <?php return ob_get_clean();
    }
}
