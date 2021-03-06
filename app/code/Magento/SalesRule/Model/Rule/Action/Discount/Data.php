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
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Magento to newer
 * versions in the future. If you wish to customize Magento for your
 * needs please refer to http://www.magentocommerce.com for more information.
 *
 * @category    Magento
 * @package     Magento_SalesRule
 * @copyright   Copyright (c) 2014 X.commerce, Inc. (http://www.magentocommerce.com)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
namespace Magento\SalesRule\Model\Rule\Action\Discount;

class Data
{
    /**
     * @var float
     */
    protected $amount;

    /**
     * @var float
     */
    protected $baseAmount;

    /**
     * @var float
     */
    protected $originalAmount;

    /**
     * @var float
     */
    protected $baseOriginalAmount;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->setAmount(0);
        $this->setBaseAmount(0);
        $this->setOriginalAmount(0);
        $this->setBaseOriginalAmount(0);
    }

    /**
     * @param float $amount
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param float $baseAmount
     * @return $this
     */
    public function setBaseAmount($baseAmount)
    {
        $this->baseAmount = $baseAmount;
        return $this;
    }

    /**
     * @return float
     */
    public function getBaseAmount()
    {
        return $this->baseAmount;
    }

    /**
     * @param float $originalAmount
     * @return $this
     */
    public function setOriginalAmount($originalAmount)
    {
        $this->originalAmount = $originalAmount;
        return $this;
    }

    /**
     * Get discount for original price
     *
     * @return float
     */
    public function getOriginalAmount()
    {
        return $this->originalAmount;
    }

    /**
     * @param float $baseOriginalAmount
     * @return $this
     */
    public function setBaseOriginalAmount($baseOriginalAmount)
    {
        $this->baseOriginalAmount = $baseOriginalAmount;
        return $this;
    }

    /**
     * Get discount for original price
     *
     * @return float
     */
    public function getBaseOriginalAmount()
    {
        return $this->baseOriginalAmount;
    }
}
