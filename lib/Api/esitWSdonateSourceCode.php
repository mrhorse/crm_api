<?php

namespace Torchbox\Thankq\Api;

class esitWSdonateSourceCode extends baseDataType
{

    /**
     * @var string $sourceCode
     */
    protected $sourceCode = null;

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @var ArrayOfEsitWSdonateSourceCodeSuggestedDonation $suggestions
     */
    protected $suggestions = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getSourceCode()
    {
      return $this->sourceCode;
    }

    /**
     * @param string $sourceCode
     * @return \Torchbox\Thankq\Api\esitWSdonateSourceCode
     */
    public function setSourceCode($sourceCode)
    {
      $this->sourceCode = $sourceCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->description;
    }

    /**
     * @param string $description
     * @return \Torchbox\Thankq\Api\esitWSdonateSourceCode
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

    /**
     * @return ArrayOfEsitWSdonateSourceCodeSuggestedDonation
     */
    public function getSuggestions()
    {
      return $this->suggestions;
    }

    /**
     * @param ArrayOfEsitWSdonateSourceCodeSuggestedDonation $suggestions
     * @return \Torchbox\Thankq\Api\esitWSdonateSourceCode
     */
    public function setSuggestions($suggestions)
    {
      $this->suggestions = $suggestions;
      return $this;
    }

}
