<?php

namespace FilippoToso\Travelport\Util;

class EmailNotification
{

    /**
     * @var typeRef[] $EmailRef
     */
    protected $EmailRef = null;

    /**
     * @var anonymous489 $Recipients
     */
    protected $Recipients = null;

    /**
     * @param anonymous489 $Recipients
     */
    public function __construct($Recipients = null)
    {
      $this->Recipients = $Recipients;
    }

    /**
     * @return typeRef[]
     */
    public function getEmailRef()
    {
      return $this->EmailRef;
    }

    /**
     * @param typeRef[] $EmailRef
     * @return \FilippoToso\Travelport\Util\EmailNotification
     */
    public function setEmailRef(array $EmailRef = null)
    {
      $this->EmailRef = $EmailRef;
      return $this;
    }

    /**
     * @return anonymous489
     */
    public function getRecipients()
    {
      return $this->Recipients;
    }

    /**
     * @param anonymous489 $Recipients
     * @return \FilippoToso\Travelport\Util\EmailNotification
     */
    public function setRecipients($Recipients)
    {
      $this->Recipients = $Recipients;
      return $this;
    }

}
