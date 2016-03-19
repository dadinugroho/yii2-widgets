<?php

namespace mdm\widgets;

use yii\helpers\Html;

/**
 * Description of SerialColumn
 *
 * @author Misbahul D Munir <misbahuldmunir@gmail.com>
 * @since 1.0
 */
class SerialColumn extends Column
{
    /**
     * @inheritdoc
     */
    public $header = '#';

    /**
     * @inheritdoc
     */
    public function init()
    {
        Html::addCssClass($this->contentOptions, 'serial');
        if ($this->value === null) {
            $this->value = function($model, $key, $index) {
                return is_int($index) ? ($index + 1) : $index;
            };
        }
    }
}
