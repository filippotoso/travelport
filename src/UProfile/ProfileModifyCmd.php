<?php

namespace FilippoToso\Travelport\UProfile;

class ProfileModifyCmd
{

    /**
     * @var ProfileStatusUpdate $ProfileStatusUpdate
     */
    protected $ProfileStatusUpdate = null;

    /**
     * @var ProfileLinkAdd $ProfileLinkAdd
     */
    protected $ProfileLinkAdd = null;

    /**
     * @var ProfileLinkDelete $ProfileLinkDelete
     */
    protected $ProfileLinkDelete = null;

    /**
     * @var ProfileParentAdd $ProfileParentAdd
     */
    protected $ProfileParentAdd = null;

    /**
     * @var ProfileParentDelete $ProfileParentDelete
     */
    protected $ProfileParentDelete = null;

    /**
     * @var ProfileDataAdd $ProfileDataAdd
     */
    protected $ProfileDataAdd = null;

    /**
     * @var ProfileDataUpdate $ProfileDataUpdate
     */
    protected $ProfileDataUpdate = null;

    /**
     * @var ProfileDataDelete $ProfileDataDelete
     */
    protected $ProfileDataDelete = null;

    /**
     * @var TagAdd $TagAdd
     */
    protected $TagAdd = null;

    /**
     * @var TagDelete $TagDelete
     */
    protected $TagDelete = null;

    /**
     * @param ProfileStatusUpdate $ProfileStatusUpdate
     * @param ProfileLinkAdd $ProfileLinkAdd
     * @param ProfileLinkDelete $ProfileLinkDelete
     * @param ProfileParentAdd $ProfileParentAdd
     * @param ProfileParentDelete $ProfileParentDelete
     * @param ProfileDataAdd $ProfileDataAdd
     * @param ProfileDataUpdate $ProfileDataUpdate
     * @param ProfileDataDelete $ProfileDataDelete
     * @param TagAdd $TagAdd
     * @param TagDelete $TagDelete
     */
    public function __construct($ProfileStatusUpdate = null, $ProfileLinkAdd = null, $ProfileLinkDelete = null, $ProfileParentAdd = null, $ProfileParentDelete = null, $ProfileDataAdd = null, $ProfileDataUpdate = null, $ProfileDataDelete = null, $TagAdd = null, $TagDelete = null)
    {
      $this->ProfileStatusUpdate = $ProfileStatusUpdate;
      $this->ProfileLinkAdd = $ProfileLinkAdd;
      $this->ProfileLinkDelete = $ProfileLinkDelete;
      $this->ProfileParentAdd = $ProfileParentAdd;
      $this->ProfileParentDelete = $ProfileParentDelete;
      $this->ProfileDataAdd = $ProfileDataAdd;
      $this->ProfileDataUpdate = $ProfileDataUpdate;
      $this->ProfileDataDelete = $ProfileDataDelete;
      $this->TagAdd = $TagAdd;
      $this->TagDelete = $TagDelete;
    }

    /**
     * @return ProfileStatusUpdate
     */
    public function getProfileStatusUpdate()
    {
      return $this->ProfileStatusUpdate;
    }

    /**
     * @param ProfileStatusUpdate $ProfileStatusUpdate
     * @return \FilippoToso\Travelport\UProfile\ProfileModifyCmd
     */
    public function setProfileStatusUpdate($ProfileStatusUpdate)
    {
      $this->ProfileStatusUpdate = $ProfileStatusUpdate;
      return $this;
    }

    /**
     * @return ProfileLinkAdd
     */
    public function getProfileLinkAdd()
    {
      return $this->ProfileLinkAdd;
    }

    /**
     * @param ProfileLinkAdd $ProfileLinkAdd
     * @return \FilippoToso\Travelport\UProfile\ProfileModifyCmd
     */
    public function setProfileLinkAdd($ProfileLinkAdd)
    {
      $this->ProfileLinkAdd = $ProfileLinkAdd;
      return $this;
    }

    /**
     * @return ProfileLinkDelete
     */
    public function getProfileLinkDelete()
    {
      return $this->ProfileLinkDelete;
    }

    /**
     * @param ProfileLinkDelete $ProfileLinkDelete
     * @return \FilippoToso\Travelport\UProfile\ProfileModifyCmd
     */
    public function setProfileLinkDelete($ProfileLinkDelete)
    {
      $this->ProfileLinkDelete = $ProfileLinkDelete;
      return $this;
    }

    /**
     * @return ProfileParentAdd
     */
    public function getProfileParentAdd()
    {
      return $this->ProfileParentAdd;
    }

    /**
     * @param ProfileParentAdd $ProfileParentAdd
     * @return \FilippoToso\Travelport\UProfile\ProfileModifyCmd
     */
    public function setProfileParentAdd($ProfileParentAdd)
    {
      $this->ProfileParentAdd = $ProfileParentAdd;
      return $this;
    }

    /**
     * @return ProfileParentDelete
     */
    public function getProfileParentDelete()
    {
      return $this->ProfileParentDelete;
    }

    /**
     * @param ProfileParentDelete $ProfileParentDelete
     * @return \FilippoToso\Travelport\UProfile\ProfileModifyCmd
     */
    public function setProfileParentDelete($ProfileParentDelete)
    {
      $this->ProfileParentDelete = $ProfileParentDelete;
      return $this;
    }

    /**
     * @return ProfileDataAdd
     */
    public function getProfileDataAdd()
    {
      return $this->ProfileDataAdd;
    }

    /**
     * @param ProfileDataAdd $ProfileDataAdd
     * @return \FilippoToso\Travelport\UProfile\ProfileModifyCmd
     */
    public function setProfileDataAdd($ProfileDataAdd)
    {
      $this->ProfileDataAdd = $ProfileDataAdd;
      return $this;
    }

    /**
     * @return ProfileDataUpdate
     */
    public function getProfileDataUpdate()
    {
      return $this->ProfileDataUpdate;
    }

    /**
     * @param ProfileDataUpdate $ProfileDataUpdate
     * @return \FilippoToso\Travelport\UProfile\ProfileModifyCmd
     */
    public function setProfileDataUpdate($ProfileDataUpdate)
    {
      $this->ProfileDataUpdate = $ProfileDataUpdate;
      return $this;
    }

    /**
     * @return ProfileDataDelete
     */
    public function getProfileDataDelete()
    {
      return $this->ProfileDataDelete;
    }

    /**
     * @param ProfileDataDelete $ProfileDataDelete
     * @return \FilippoToso\Travelport\UProfile\ProfileModifyCmd
     */
    public function setProfileDataDelete($ProfileDataDelete)
    {
      $this->ProfileDataDelete = $ProfileDataDelete;
      return $this;
    }

    /**
     * @return TagAdd
     */
    public function getTagAdd()
    {
      return $this->TagAdd;
    }

    /**
     * @param TagAdd $TagAdd
     * @return \FilippoToso\Travelport\UProfile\ProfileModifyCmd
     */
    public function setTagAdd($TagAdd)
    {
      $this->TagAdd = $TagAdd;
      return $this;
    }

    /**
     * @return TagDelete
     */
    public function getTagDelete()
    {
      return $this->TagDelete;
    }

    /**
     * @param TagDelete $TagDelete
     * @return \FilippoToso\Travelport\UProfile\ProfileModifyCmd
     */
    public function setTagDelete($TagDelete)
    {
      $this->TagDelete = $TagDelete;
      return $this;
    }

}
