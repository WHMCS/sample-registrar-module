<?php
/**
 * WHMCS Sample Registrar Module Test
 *
 * Sample PHPUnit test that asserts the fundamental requirements of a WHMCS
 * registrar module.
 *
 * This is by no means intended to be a complete test, and does not exercise any
 * of the actual functionality of the functions within the module. We strongly
 * recommend you implement further tests as appropriate for your module use
 * case.
 *
 * @copyright Copyright (c) WHMCS Limited 2017
 * @license http://www.whmcs.com/license/ WHMCS Eula
 */

class  WHMCSSampleRegistrarModuleTest extends PHPUnit_Framework_TestCase
{

    public static function providerCoreFunctionNames()
    {
        return array(
            array('RegisterDomain'),
            array('TransferDomain'),
            array('RenewDomain'),
            array('GetNameservers'),
            array('SaveNameservers'),
            array('GetContactDetails'),
            array('SaveContactDetails'),
        );
    }

    /**
     * Test Core Module Functions Exist
     *
     * This test confirms that the functions we recommend for all registrar
     * modules are defined for the sample module
     *
     * @param $moduleName
     *
     * @dataProvider providerCoreFunctionNames
     */
    public function testCoreModuleFunctionsExist($moduleName)
    {
        $this->assertTrue(function_exists('registrarmodule_' . $moduleName));
    }
}
