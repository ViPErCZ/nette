<?php

/**
 * Test: Nette\Security\Permission Ensures that removing the default deny rule results in assertion method being removed.
 *
 * @author     David Grudl
 * @category   Nette
 * @package    Nette\Security
 * @subpackage UnitTests
 */

use Nette\Security\Permission;



require __DIR__ . '/../initialize.php';

require __DIR__ . '/MockAssertion.inc';



$acl = new Permission;
$acl->deny(NULL, NULL, NULL, new MockAssertion(FALSE));
Assert::true( $acl->isAllowed() );
$acl->removeDeny();
Assert::false( $acl->isAllowed() );
