<?php

namespace IT2023HK\Optimus\Block\Html;

class ConfigTemplate extends \Magento\Framework\View\Element\Template
{

    public function getConfig()
    {
        return $this->_scopeConfig;
    }
}
