<?php

namespace Torchbox\Thankq\Services;

use Torchbox\Thankq\Services\ThankqClient;

use Torchbox\Thankq\Api;

/**
 * Class WebUser
 * @package Torchbox\Thankq\Services\Contact
 */
class WebUser {
  /** @var \Torchbox\Thankq\Services\ThankqClient  */
  protected $client;

  /**
   * @inheritdoc
   */
  public function __construct(ThankqClient $client) {
    $this->client = $client;
  }

  /**
   * @param $email
   * @param $password
   * @return bool
   */
  public function login($email, $password) {
    $request = new Api\doLogin($email, $password);
    $response = $this->client->doLogin($request);
    $result = $response->getDoLoginResult()->getLoginGood();
    return $result;
  }

  /**
   * @param $email
   * @return bool
   */
  public function userExists($email) {
    $request = new Api\doUsernameCheck($email);
    $response = $this->client->doUsernameCheck($request);
    $result = $response->getDoUsernameCheckResult()->getEmailTaken();
    return $result;
  }

  /**
   * @param $serial
   * @param $email
   * @param $password
   * @return \Torchbox\Thankq\Api\esitWSdoContactInsertResult
   */
  public function insertUser($serial, $email, $password) {
    // Web users will not exist unless we make them from our end. We can guarantee
    // therefore that any web user will be accessibile using our dummy pw.
    $arg = new Api\esitWSdoContactLoginInsertArgument();
    $arg->setSerialnumber($serial);
    $arg->setUsername($email);
    $arg->setPassword($password);

    $request = new Api\doContactLoginInsert($arg);
    $response = $this->client->doContactLoginInsert($request);
    /** @var Api\esitWSdoContactInsertResult $result */
    $result = $response->getDoContactLoginInsertResult()->getOK();
    return $result;
  }

}