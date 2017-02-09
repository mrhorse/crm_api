<?php

namespace Test\Services\Contact;

use Torchbox\Thankq\Services\Contact\Base;
use Akamon\MockeryCallableMock\MockeryCallableMock;

class injectableBase extends Base {

  public function __construct($client, $validation) {
    parent::__construct($client, $validation);
  }

}

class BaseTest extends \PHPUnit_Framework_TestCase {

  protected $validation;
  protected $client;
  protected $base;

  protected $field_map = array(
    'a_field' => array(
      'class' => 'esitWScontact',
      'method' => 'setTitle',
    )
  );

  public function setUp() {
    parent::setUp();
    $this->client = $this->getMockBuilder('Torchbox\\Thankq\\Services\\ThankqClient')->disableOriginalConstructor()->getMock();
    $this->validation = $this->getMockBuilder('Torchbox\\Thankq\\Services\\Validation')->disableOriginalConstructor()->getMock();
  }

  public function mockCallback() {
    // Mock callback for call_user_func
    $obj = new MockeryCallableMock();
    return $obj->shouldBeCalled();
  }

  public function testValidateFieldData() {
    $base = $this->getMock('Test\\Services\\Contact\\Base');

    /*
    $contact_base = $this->getMockBuilder('Torchbox\\Thankq\\Services\\Contact\\Base')
      ->disableOriginalConstructor()
      ->getMockForAbstractClass();
    */

    //$base->expects($this->any())->method('validateFieldData')->willReturn('Hello');


  }
}
