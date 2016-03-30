<?php

namespace em\embed;

use Yii;
use yii\bootstrap\Widget;

/**
 * Class Embed
 *
 * @package common\widgets
 */
class Embed extends Widget
{

    /**
     * @var string
     */
    public $url = '';

    /**
     * @var array
     */
    public $embedOptions = [];

    /**
     * @var AdapterInterface
     */
    public $info;

    /**
     * Initializes the widget.
     */
    public function init()
    {
        parent::init();

        $this->initOptions();
    }

    /**
     * Renders the widget.
     */
    public function run()
    {
        $this->info = \Embed\Embed::create($this->url, $this->embedOptions);
        echo $this->info->code;
    }

    /**
     * start default variables
     */
    protected function initOptions()
    {
    }
}
