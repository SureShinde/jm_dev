<?php

/**
 * ShipSync Community
 *
 * @category   IllApps
 * @package    IllApps_Shipsync
 * @author     David Kirby (d@kernelhack.com)
 * @copyright  Copyright (c) 2012 EcoMATICS, Inc.
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */


/**
 * IllApps_Shipsync_Block_Adminhtml_Shipsync_Option
 */
class IllApps_Shipsync_Block_Adminhtml_Shipsync_Option extends Mage_Adminhtml_Block_Widget
{


    /**
     * __construct
     */
    public function __construct()
    {
        parent::__construct();
        
        $shippingPackage = Mage::getModel('shipsync/shipping_package');
        
        $this->setDefaultPackages($shippingPackage->getDefaultPackages(array('fedex')));
    }
    
}
