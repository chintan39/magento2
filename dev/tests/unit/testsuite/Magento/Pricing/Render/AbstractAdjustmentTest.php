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
 * @package     Magento_Pricing
 * @subpackage  unit_tests
 * @copyright   Copyright (c) 2014 X.commerce, Inc. (http://www.magentocommerce.com)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
namespace Magento\Pricing\Render;

/**
 * Test class for \Magento\Pricing\Render\AbstractAdjustment
 */
class AbstractAdjustmentTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Amount
     */
    protected $model;

    /**
     * @var \Magento\Pricing\PriceCurrencyInterface|\PHPUnit_Framework_MockObject_MockObject
     */
    protected $priceCurrency;

    public function setUp()
    {
        $this->priceCurrency = $this->getMock('Magento\Pricing\PriceCurrencyInterface');

        $objectManager = new \Magento\TestFramework\Helper\ObjectManager($this);
        $constructorArgs = $objectManager->getConstructArguments('Magento\Pricing\Render\AbstractAdjustment', array(
            'priceCurrency' => $this->priceCurrency
        ));
        $this->model = $this->getMockBuilder('Magento\Pricing\Render\AbstractAdjustment')
            ->setConstructorArgs($constructorArgs)
            ->getMockForAbstractClass();
    }

    public function testConvertAndFormatCurrency()
    {
        $amount = '100';
        $includeContainer = true;
        $precision = \Magento\Pricing\PriceCurrencyInterface::DEFAULT_PRECISION;

        $result = '100.0 grn';

        $this->priceCurrency->expects($this->once())
            ->method('convertAndFormat')
            ->with($amount, $includeContainer, $precision)
            ->will($this->returnValue($result));

        $this->assertEquals($result, $this->model->convertAndFormatCurrency($amount, $includeContainer, $precision));
    }
}
