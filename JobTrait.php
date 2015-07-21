<?php

namespace totaldev\yii2\gearman;

trait JobTrait {

    protected $name;
    public    $count = 1;

    /**
     * @return string
     */
    public function getName() {
        return $this->name;
    }

    /**
     * @var $name string
     */
    public function setName($name) {
        $this->name = $name;
    }

    public function init() {
        return true;
    }

    /**
     * @param \GearmanJob $job
     * @return \totaldev\yii2\gearman\JobWorkload
     */
    protected function getWorkload(\GearmanJob $job) {
        $workload = null;
        if ($data = $job->workload()) {
            $workload = unserialize($data);
        }
        return $workload;
    }
}