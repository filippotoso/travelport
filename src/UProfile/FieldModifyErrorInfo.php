<?php

namespace FilippoToso\Travelport\UProfile;

class FieldModifyErrorInfo extends typeErrorInfo
{

    /**
     * @var ProfileTemplateSummary $ProfileTemplateSummary
     */
    protected $ProfileTemplateSummary = null;

    /**
     * @var int $TemplateCount
     */
    protected $TemplateCount = null;

    /**
     * @param string $Code
     * @param string $Service
     * @param string $Type
     * @param string $Description
     * @param string $TransactionId
     * @param Auxdata $Auxdata
     * @param ProfileTemplateSummary $ProfileTemplateSummary
     * @param int $TemplateCount
     */
    public function __construct($Code, $Service, $Type, $Description, $TransactionId, $Auxdata, $ProfileTemplateSummary, $TemplateCount)
    {
      parent::__construct($Code, $Service, $Type, $Description, $TransactionId, $Auxdata);
      $this->ProfileTemplateSummary = $ProfileTemplateSummary;
      $this->TemplateCount = $TemplateCount;
    }

    /**
     * @return ProfileTemplateSummary
     */
    public function getProfileTemplateSummary()
    {
      return $this->ProfileTemplateSummary;
    }

    /**
     * @param ProfileTemplateSummary $ProfileTemplateSummary
     * @return \FilippoToso\Travelport\UProfile\FieldModifyErrorInfo
     */
    public function setProfileTemplateSummary($ProfileTemplateSummary)
    {
      $this->ProfileTemplateSummary = $ProfileTemplateSummary;
      return $this;
    }

    /**
     * @return int
     */
    public function getTemplateCount()
    {
      return $this->TemplateCount;
    }

    /**
     * @param int $TemplateCount
     * @return \FilippoToso\Travelport\UProfile\FieldModifyErrorInfo
     */
    public function setTemplateCount($TemplateCount)
    {
      $this->TemplateCount = $TemplateCount;
      return $this;
    }

}
