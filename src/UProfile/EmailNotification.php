<?php

namespace FilippoToso\Travelport\UProfile;

class EmailNotification
{

    /**
     * @var typeRef[] $EmailRef
     */
    protected $EmailRef = null;

    /**
     * @var anonymous480 $Recipients
     */
    protected $Recipients = null;

    /**
     * @param anonymous480 $Recipients
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
     * @return \FilippoToso\Travelport\UProfile\EmailNotification
     */
    public function setEmailRef(array $EmailRef = null)
    {
      $this->EmailRef = $EmailRef;
      return $this;
    }

    /**
     * @return anonymous480
     */
    public function getRecipients()
    {
      return $this->Recipients;
    }

    /**
     * @param anonymous480 $Recipients
     * @return \FilippoToso\Travelport\UProfile\EmailNotification
     */
    public function setRecipients($Recipients)
    {
      $this->Recipients = $Recipients;
      return $this;
    }

}
