<?php

namespace FilippoToso\Travelport\Air;

class EmailNotification
{

    /**
     * @var typeRef[] $EmailRef
     */
    protected $EmailRef = null;

    /**
     * @var anonymous492 $Recipients
     */
    protected $Recipients = null;

    /**
     * @param anonymous492 $Recipients
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
     * @return \FilippoToso\Travelport\Air\EmailNotification
     */
    public function setEmailRef(array $EmailRef = null)
    {
      $this->EmailRef = $EmailRef;
      return $this;
    }

    /**
     * @return anonymous492
     */
    public function getRecipients()
    {
      return $this->Recipients;
    }

    /**
     * @param anonymous492 $Recipients
     * @return \FilippoToso\Travelport\Air\EmailNotification
     */
    public function setRecipients($Recipients)
    {
      $this->Recipients = $Recipients;
      return $this;
    }

}
