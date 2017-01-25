<?php

namespace Test\Services;

use Torchbox\Thankq\Services\Validation;
use Torchbox\Thankq\Exception\ValidationException;

class ValidationTest extends \PHPUnit_Framework_TestCase {

  /** @var \Torchbox\Thankq\Services\Lookup $lookup  */
  protected $lookup;

  public function setUp() {
    parent::setUp();
    $this->lookup = $this->getMockBuilder('\Torchbox\Thankq\Services\Lookup')->disableOriginalConstructor()->getMock();
  }

  public function testTrueIsTrue() {
    $foo = true;
    $this->assertTrue($foo);
  }

/*
 * Method is protected.
  public function testThrowValidationError() {
    $validation = new Validation($this->lookup);
    $this->expectException(\Torchbox\Thankq\Exception\ValidationException::class);
    $validation->throwValidationException('test', 'Error test');
  }
*/

  public function testCheckIsInteger() {
    $validation = new Validation($this->lookup);

    $result = $validation->checkIsInteger('field', 1);
    $this->assertTrue($result);

    $this->expectException(ValidationException::class);
    $result = $validation->checkIsInteger('field', 'string');
  }


  public function testCheckIsString() {
    $validation = new Validation($this->lookup);

    $result = $validation->checkIsString('field', 'string');

    $this->expectException(ValidationException::class);
    $result = $validation->checkIsString('field', 1);

    $this->expectException(ValidationException::class);
    $result = $validation->checkIsString('field', new \stdClass());
  }


  public function testCheckIsEmailLoose() {
    $validation = new Validation($this->lookup);

    $result = $validation->checkIsEmailLoose('field_email', 'string@example.co.uk');
    $this->assertTrue($result);

    $this->expectException(ValidationException::class);
    $result = $validation->checkIsEmailLoose('field_email', 'string@example');

    $this->expectException(ValidationException::class);
    $result = $validation->checkIsEmailLoose('field_email', 'string');
  }


  public function testCheckIsDatetimeObject() {
    $validation = new Validation($this->lookup);

    $result = $validation->checkIsDatetimeObject('field_dob', new \DateTime());
    $this->assertTrue($result);

    $this->expectException(ValidationException::class);
    $result = $validation->checkIsDatetimeObject('field_dob', '2007-08-01');
  }


  public function testCheckIsAllowedNamePrefix() {
    $validation = new Validation($this->lookup);

    // Mock the method results from title lookup
    $this->lookup->expects($this->any())
      ->method('getNamePrefixes')
      ->will($this->returnValue(array('Mr', 'Mrs', 'Miss')));

    $result = $validation->checkIsAllowedNamePrefix('field_title', 'Mr');
    $this->assertTrue($result);

    $this->expectException(ValidationException::class);
    $result = $validation->checkIsAllowedNamePrefix('field_title', 'Baron');
  }
}
