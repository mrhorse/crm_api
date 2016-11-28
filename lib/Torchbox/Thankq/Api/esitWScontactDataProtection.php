<?php

namespace Torchbox\Thankq\Api;

class esitWScontactDataProtection extends baseDataType
{

    /**
     * @var boolean $doNotContact
     */
    protected $doNotContact = null;

    /**
     * @var boolean $doNotMail
     */
    protected $doNotMail = null;

    /**
     * @var boolean $doNotPhone
     */
    protected $doNotPhone = null;

    /**
     * @var boolean $doNotEmail
     */
    protected $doNotEmail = null;

    /**
     * @var boolean $doNotSMS
     */
    protected $doNotSMS = null;

    /**
     * @var boolean $mailThirdParty
     */
    protected $mailThirdParty = null;

    /**
     * @var boolean $emailThirdParty
     */
    protected $emailThirdParty = null;

    /**
     * @var boolean $phoneThirdParty
     */
    protected $phoneThirdParty = null;

    /**
     * @var boolean $dmEmailOptIn
     */
    protected $dmEmailOptIn = null;

    /**
     * @var boolean $dmMailOptIn
     */
    protected $dmMailOptIn = null;

    /**
     * @param boolean $doNotContact
     * @param boolean $doNotMail
     * @param boolean $doNotPhone
     * @param boolean $doNotEmail
     * @param boolean $doNotSMS
     * @param boolean $mailThirdParty
     * @param boolean $emailThirdParty
     * @param boolean $phoneThirdParty
     * @param boolean $dmEmailOptIn
     * @param boolean $dmMailOptIn
     */
    public function __construct($doNotContact, $doNotMail, $doNotPhone, $doNotEmail, $doNotSMS, $mailThirdParty, $emailThirdParty, $phoneThirdParty, $dmEmailOptIn, $dmMailOptIn)
    {
      $this->doNotContact = $doNotContact;
      $this->doNotMail = $doNotMail;
      $this->doNotPhone = $doNotPhone;
      $this->doNotEmail = $doNotEmail;
      $this->doNotSMS = $doNotSMS;
      $this->mailThirdParty = $mailThirdParty;
      $this->emailThirdParty = $emailThirdParty;
      $this->phoneThirdParty = $phoneThirdParty;
      $this->dmEmailOptIn = $dmEmailOptIn;
      $this->dmMailOptIn = $dmMailOptIn;
    }

    /**
     * @return boolean
     */
    public function getDoNotContact()
    {
      return $this->doNotContact;
    }

    /**
     * @param boolean $doNotContact
     * @return \Torchbox\Thankq\Api\esitWScontactDataProtection
     */
    public function setDoNotContact($doNotContact)
    {
      $this->doNotContact = $doNotContact;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDoNotMail()
    {
      return $this->doNotMail;
    }

    /**
     * @param boolean $doNotMail
     * @return \Torchbox\Thankq\Api\esitWScontactDataProtection
     */
    public function setDoNotMail($doNotMail)
    {
      $this->doNotMail = $doNotMail;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDoNotPhone()
    {
      return $this->doNotPhone;
    }

    /**
     * @param boolean $doNotPhone
     * @return \Torchbox\Thankq\Api\esitWScontactDataProtection
     */
    public function setDoNotPhone($doNotPhone)
    {
      $this->doNotPhone = $doNotPhone;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDoNotEmail()
    {
      return $this->doNotEmail;
    }

    /**
     * @param boolean $doNotEmail
     * @return \Torchbox\Thankq\Api\esitWScontactDataProtection
     */
    public function setDoNotEmail($doNotEmail)
    {
      $this->doNotEmail = $doNotEmail;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDoNotSMS()
    {
      return $this->doNotSMS;
    }

    /**
     * @param boolean $doNotSMS
     * @return \Torchbox\Thankq\Api\esitWScontactDataProtection
     */
    public function setDoNotSMS($doNotSMS)
    {
      $this->doNotSMS = $doNotSMS;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getMailThirdParty()
    {
      return $this->mailThirdParty;
    }

    /**
     * @param boolean $mailThirdParty
     * @return \Torchbox\Thankq\Api\esitWScontactDataProtection
     */
    public function setMailThirdParty($mailThirdParty)
    {
      $this->mailThirdParty = $mailThirdParty;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getEmailThirdParty()
    {
      return $this->emailThirdParty;
    }

    /**
     * @param boolean $emailThirdParty
     * @return \Torchbox\Thankq\Api\esitWScontactDataProtection
     */
    public function setEmailThirdParty($emailThirdParty)
    {
      $this->emailThirdParty = $emailThirdParty;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPhoneThirdParty()
    {
      return $this->phoneThirdParty;
    }

    /**
     * @param boolean $phoneThirdParty
     * @return \Torchbox\Thankq\Api\esitWScontactDataProtection
     */
    public function setPhoneThirdParty($phoneThirdParty)
    {
      $this->phoneThirdParty = $phoneThirdParty;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDmEmailOptIn()
    {
      return $this->dmEmailOptIn;
    }

    /**
     * @param boolean $dmEmailOptIn
     * @return \Torchbox\Thankq\Api\esitWScontactDataProtection
     */
    public function setDmEmailOptIn($dmEmailOptIn)
    {
      $this->dmEmailOptIn = $dmEmailOptIn;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDmMailOptIn()
    {
      return $this->dmMailOptIn;
    }

    /**
     * @param boolean $dmMailOptIn
     * @return \Torchbox\Thankq\Api\esitWScontactDataProtection
     */
    public function setDmMailOptIn($dmMailOptIn)
    {
      $this->dmMailOptIn = $dmMailOptIn;
      return $this;
    }

}
