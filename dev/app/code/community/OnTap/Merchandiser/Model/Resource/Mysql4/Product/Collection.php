<?php
/**
 * Magento
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com so we can send you a copy immediately.
 *
 * @category    OnTap
 * @package     OnTap_Merchandiser
 * @copyright   Copyright (c) 2014 On Tap Networks Ltd. (http://www.ontapgroup.com)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class OnTap_Merchandiser_Model_Resource_Mysql4_Product_Collection
    extends Mage_Catalog_Model_Resource_Eav_Mysql4_Product_Collection
{
    /**
     * filterNotFindInSet
     * 
     * @param mixed $attribute
     * @param mixed $condition (default: null)
     * @param string $joinType (default: 'inner')
     * @return string
     */
    public function filterNotFindInSet($attribute, $condition = null, $joinType = 'inner')
    {
        $conditionSql = $this->_getAttributeConditionSql($attribute, $condition, $joinType);
        return "NOT " . $conditionSql;
    }
}
