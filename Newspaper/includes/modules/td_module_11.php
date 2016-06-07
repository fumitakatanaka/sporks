<?php


class td_module_11 extends td_module {

    function __construct($post) {
        //run the parrent constructor
        parent::__construct($post);
    }

    function render() {
        ob_start();
        ?>

        <div class="<?php echo $this->get_module_classes();?>">
            <?php 
//echo $this->get_image('td_324x235');

//echo $this->get_title();?
// 置換対象文字列
$targetText = $this->get_image('td_324x235'); 

// "A" という文字列を "×" に置換する
$replaceText = str_replace('">', '" target=_blank >', $targetText);
echo $replaceText;

?>

            <div class="item-details">
                <?php 

//echo $this->get_title();?
// 置換対象文字列
$targetText = $this->get_title();

// "A" という文字列を "×" に置換する
$replaceText = str_replace('">', '" target=_blank >', $targetText);
echo $replaceText;


?>

                <div class="td-module-meta-info">
                    <?php if (td_util::get_option('tds_category_module_11') == 'yes') { echo $this->get_category(); }?>
                    <?php echo $this->get_author();?>
                    <?php echo $this->get_date();?>
                    <?php echo $this->get_comments();?>
                </div>

                <div class="td-excerpt">
                    <?php echo $this->get_excerpt();?>
                </div>

                <div class="td-read-more">
                    <a href="<?php echo $this->href;?>" target=_blank><?php 

//echo __td('Read more', TD_THEME_NAME);
if (strpos($this->href,'tennis365') !== false){echo "tennis365";}
elseif(strpos($this->href,'qoly') !== false){echo "qoly";}
elseif(strpos($this->href,'nfljapan') !== false){echo "nfljapan";}
elseif(strpos($this->href,'rssad') !== false){echo "サンスポ";}
elseif(strpos($this->href,'sportsevent') !== false){echo "スポーツイベント";}
elseif(strpos($this->href,'cs-park') !== false){echo "CSPark";}
elseif(strpos($this->href,'hockey') !== false){echo "日本ホッケー協会";}
elseif(strpos($this->href,'cyclist') !== false){echo "cyclist";}
elseif(strpos($this->href,'cyclingtime') !== false){echo "cyclingtime";}
elseif(strpos($this->href,'wrestling') !== false){echo "日本レスリング協会";}
elseif(strpos($this->href,'bulkhead') !== false){echo "BULKHEAD";}
elseif(strpos($this->href,'stinger') !== false){echo "STINGER";}
elseif(strpos($this->href,'spot.town') !== false){echo "SPOT+";}
elseif(strpos($this->href,'livedoor') !== false){echo "livedoor";}
elseif(strpos($this->href,'jsports') !== false){echo "Jsports";}
else{
echo "SPORKs!";
//echo __td('Read more', TD_THEME_NAME);
}
 
?></a>
                </div>
            </div>

        </div>

        <?php return ob_get_clean();
    }
}
