<?php

namespace Torchbox\Thankq\Api;

class esitWScontact extends baseDataType
{

    /**
     * @var string $title
     */
    protected $title = null;

    /**
     * @var string $otherInitial
     */
    protected $otherInitial = null;

    /**
     * @var string $firstname
     */
    protected $firstname = null;

    /**
     * @var string $keyname
     */
    protected $keyname = null;

    /**
     * @var string $postNominal
     */
    protected $postNominal = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getTitle()
    {
      return $this->title;
    }

    /**
     * @param string $title
     * @return \Torchbox\Thankq\Api\esitWScontact
     */
    public function setTitle($title)
    {
      $this->title = $title;
      return $this;
    }

    /**
     * @return string
     */
    public function getOtherInitial()
    {
      return $this->otherInitial;
    }

    /**
     * @param string $otherInitial
     * @return \Torchbox\Thankq\Api\esitWScontact
     */
    public function setOtherInitial($otherInitial)
    {
      $this->otherInitial = $otherInitial;
      return $this;
    }

    /**
     * @return string
     */
    public function getFirstname()
    {
      return $this->firstname;
    }

    /**
     * @param string $firstname
     * @return \Torchbox\Thankq\Api\esitWScontact
     */
    public function setFirstname($firstname)
    {
      $this->firstname = $firstname;
      return $this;
    }

    /**
     * @return string
     */
    public function getKeyname()
    {
      return $this->keyname;
    }

    /**
     * @param string $keyname
     * @return \Torchbox\Thankq\Api\esitWScontact
     */
    public function setKeyname($keyname)
    {
      $this->keyname = $keyname;
      return $this;
    }

    /**
     * @return string
     */
    public function getPostNominal()
    {
      return $this->postNominal;
    }

    /**
     * @param string $postNominal
     * @return \Torchbox\Thankq\Api\esitWScontact
     */
    public function setPostNominal($postNominal)
    {
      $this->postNominal = $postNominal;
      return $this;
    }

}
