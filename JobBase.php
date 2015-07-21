<?php

namespace totaldev\yii2\gearman;

abstract class JobBase extends \yii\base\Component implements JobInterface {
    use JobTrait;
}