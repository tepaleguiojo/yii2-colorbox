<?php

namespace tepaleguiojo\widgets;

use yii\base\Widget;

/**
 * Description of Colorbox
 *
 * @author Terence Eric Aleguiojo <tealeguiojo@tip.edu.ph>
 */
class Colorbox extends Widget
{

    /**
     * @var string Selector
     */
    public $selector;

    /**
     * @var array HTML Options 
     */
    public $htmlOptions = [];

    /**
     * @var array Plugin Options
     */
    public $pluginOptions = [];

    /**
     * 
     */
    public function init()
    {
        parent::init();

        if (!isset($this->htmlOptions['id'])) {
            $this->htmlOptions['id'] = $this->getId();
        }
        $id = $this->htmlOptions['id'];

        $view = $this->getView();

        $options = \yii\helpers\Json::encode($this->pluginOptions);
        $js = <<<JS
            jQuery("{$this->selector}").colorbox({$options});
JS;
        $view->registerJs(trim($js));
    }

}
