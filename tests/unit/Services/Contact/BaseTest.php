<?php

namespace Test\Services\Contact;

use Torchbox\Thankq\Services\Contact\Base;
use Akamon\MockeryCallableMock\MockeryCallableMock;




class BaseTest extends \PHPUnit_Framework_TestCase {

  public function mockCallback() {
    // Mock callback for call_user_func
    $obj = new MockeryCallableMock();
    return $obj->shouldBeCalled();

  }

  public function testValidateFieldData() {




  }
}
