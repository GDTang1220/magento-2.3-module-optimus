<?php

namespace IT2023HK\Optimus\Block\Html;

class Social extends \Magento\Framework\View\Element\Template
{
    protected $_scope = \Magento\Store\Model\ScopeInterface::SCOPE_STORE;

    public function canRender()
    {
        return !empty($this->_scopeConfig->getValue('socialmediageneral/general/enablefollowlinks', $this->_scope));
    }

    public function getChannels()
    {
        return array('facebook' => 'Facebook', 'twitter' => 'Twitter', 'instagram' => 'Instagram', 'linkedin' => 'Linkedin', 'youtube' => 'Youtube', 'pinterest' => 'Pinterest', 'googleplus' => 'Google+', 'vimeo' => 'vimeo');
    }

    public function canRenderChannel($channel)
    {
        return !empty($this->_scopeConfig->getValue('socialmediachannels/'.$channel.'channel/enable'.$channel.'followlink', $this->_scope)) && !empty($this->_scopeConfig->getValue('socialmediachannels/'.$channel.'channel/'.$channel.'followlink', $this->_scope));
    }

    public function getChannelLink($channel)
    {
        return $this->_scopeConfig->getValue('socialmediachannels/'.$channel.'channel/'.$channel.'followlink', $this->_scope);
    }

    public function getChannelAlt($channel, $label)
    {
        return (!empty($this->_scopeConfig->getValue('socialmediachannels/'.$channel.'channel/'.$channel.'followlinkalt', $this->_scope))) ? $this->_scopeConfig->getValue('socialmediachannels/'.$channel.'channel/'.$channel.'followlinkalt', $this->_scope) : __('Follow us on %1', $label);
    }

    public function getChannelCssClass($channel)
    {
        return (!empty($this->_scopeConfig->getValue('socialmediachannels/'.$channel.'channel/'.$channel.'icon', $this->_scope))) ? 'social-custom' : 'social-'.$channel;
    }

    public function channelHasIcon($channel) {
        return !empty($this->_scopeConfig->getValue('socialmediachannels/'.$channel.'channel/'.$channel.'icon', $this->_scope));
    }

    public function getChannelIcon($channel) {
        return $this->getUrl('pub/media/socialmedia').$this->_scopeConfig->getValue('socialmediachannels/'.$channel.'channel/'.$channel.'icon', $this->_scope);
    }

    public function getConfig()
    {
        return $this->_scopeConfig;
    }
}
