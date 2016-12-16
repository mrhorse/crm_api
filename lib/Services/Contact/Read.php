<?php

namespace Torchbox\Thankq\Services\Contact;

use Torchbox\Thankq\Services\ThankqClient;
use Torchbox\Thankq\Services\Validation;
use Torchbox\Thankq\Exception;
use Torchbox\Thankq\Api;

/**
 * Class Read
 * @package Torchbox\Thankq\Services\Contact
 */
class Read extends Base {

  public function __construct(ThankqClient $client, Validation $validation) {
    parent::__construct($client, $validation);
  }


  /**
   * @param (string) $serial - Contact serial number
   * @return Api\esitWSdoContactGetResult
   */
  public function getContact($serial) {

    $this->validation->check_is_string($serial);

    $request = new Api\doContactGet($serial);
    $response = $this->client->doContactGet($request);
    /** @var Api\esitWSdoContactGetResult $result */
    $result = $response->getDoContactGetResult();
    return $result;

  }



  public function searchContact($num_results, $data) {


  }

}