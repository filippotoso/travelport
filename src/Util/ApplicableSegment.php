<?php

namespace FilippoToso\Travelport\Util;

class ApplicableSegment
{

    /**
     * @var ResponseMessage $ResponseMessage
     */
    protected $ResponseMessage = null;

    /**
     * @var typeRef $OptionalServiceRef
     */
    protected $OptionalServiceRef = null;

    /**
     * @var typeRef $Key
     */
    protected $Key = null;

    /**
     * @param ResponseMessage $ResponseMessage
     * @param typeRef $OptionalServiceRef
     * @param typeRef $Key
     */
    public function __construct($ResponseMessage = null, $OptionalServiceRef = null, $Key = null)
    {
      $this->ResponseMessage = $ResponseMessage;
      $this->OptionalServiceRef = $OptionalServiceRef;
      $this->Key = $Key;
    }

    /**
     * @return ResponseMessage
     */
    public function getResponseMessage()
    {
      return $this->ResponseMessage;
    }

    /**
     * @param ResponseMessage $ResponseMessage
     * @return \FilippoToso\Travelport\Util\ApplicableSegment
     */
    public function setResponseMessage($ResponseMessage)
    {
      $this->ResponseMessage = $ResponseMessage;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getOptionalServiceRef()
    {
      return $this->OptionalServiceRef;
    }

    /**
     * @param typeRef $OptionalServiceRef
     * @return \FilippoToso\Travelport\Util\ApplicableSegment
     */
    public function setOptionalServiceRef($OptionalServiceRef)
    {
      $this->OptionalServiceRef = $OptionalServiceRef;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param typeRef $Key
     * @return \FilippoToso\Travelport\Util\ApplicableSegment
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

}
