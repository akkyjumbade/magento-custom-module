<?php

namespace Vendor\Module\Block\Adminhtml;

use Magento\Backend\Block\Template;

class Main extends Template
{
    public function getCustomText()
    {
        return "Hello, this is your custom admin page!";
    }
}
