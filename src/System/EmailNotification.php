<?php

namespace FilippoToso\Travelport\System;

class EmailNotification
{

    /**
     * @var typeRef[] $EmailRef
     */
    protected $EmailRef = null;

    /**
     * @var anonymous477 $Recipients
     */
    protected $Recipients = null;

    /**
     * @param anonymous477 $Recipients
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
     * @return \FilippoToso\Travelport\System\EmailNotification
     */
    public function setEmailRef(array $EmailRef = null)
    {
      $this->EmailRef = $EmailRef;
      return $this;
    }

    /**
     * @return anonymous477
     */
    public function getRecipients()
    {
      return $this->Recipients;
    }

    /**
     * @param anonymous477 $Recipients
     * @return \FilippoToso\Travelport\System\EmailNotification
     */
    public function setRecipients($Recipients)
    {
      $this->Recipients = $Recipients;
      return $this;
    }

}
