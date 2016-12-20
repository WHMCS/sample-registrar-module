# WHMCS Sample Registrar Module #

## Summary ##

Registrar Modules allow you to create modules that allow for the
registration and management of domain names in WHMCS.

The sample files here demonstrates how a registrar module for WHMCS should
be structured and exercises all supported functionality.

For more information, please refer to the documentation at:

http://docs.whmcs.com/Registrar_Module_Developer_Docs

## Getting Started

Clone the sample registrar module locally:

```bash
git clone git@github.com:WHMCS/sample-registrar-module.git
```

Rename the module directory and file to your desired module name:

```bash
mv modules/registrars/registrarmodule/registrarmodule.php modules/registrars/registrarmodule/newmodule.php
mv modules/registrars/registrarmodule/ modules/registrars/newmodule/
```

Open the newmodule.php file and replace all occurencies of `registrarmodule_` with the new name, in this instance `newmodule_`.

Login to the WHMCS Admin Area and navigate to Setup > Products > Domain Registrars to activate.

## Recommended Module Content ##

The recommended structure of a registrar module is as follows.

```
 registrarmodule/
  |- lib/
  |- templates/
  |- tests/
  |  hooks.php
  |  logo.png
  |  registrarmodule.php
```

## Minimum Requirements ##

For the latest WHMCS minimum system requirements, please refer to
http://docs.whmcs.com/System_Requirements

We recommend your module follows the same minimum requirements wherever
possible.

## Tests ##

We strongly encourage you to write unit tests for your work. Within this SDK we
provide a sample unit test based upon the widely used PHPUnit.

## Useful Resources
* [Developer Resources](http://www.whmcs.com/developers/)
* [Hook Documentation](http://docs.whmcs.com/Hooks)
* [API Documentation](http://docs.whmcs.com/API)

[WHMCS Limited](http://www.whmcs.com)
