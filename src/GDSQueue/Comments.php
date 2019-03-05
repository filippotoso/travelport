<?php

namespace FilippoToso\Travelport\GDSQueue;

class Comments
{

    /**
     * @var string $_
     */
    protected $_ = null;

    /**
     * @var typeRef $CommentId
     */
    protected $CommentId = null;

    /**
     * @var typeDate $Date
     */
    protected $Date = null;

    /**
     * @var typeLanguage $CommenterLanguage
     */
    protected $CommenterLanguage = null;

    /**
     * @var string $Source
     */
    protected $Source = null;

    /**
     * @var string $CommentSourceName
     */
    protected $CommentSourceName = null;

    /**
     * @var string $Commenter
     */
    protected $Commenter = null;

    /**
     * @param string $_
     * @param typeRef $CommentId
     * @param typeDate $Date
     * @param typeLanguage $CommenterLanguage
     * @param string $Source
     * @param string $CommentSourceName
     * @param string $Commenter
     */
    public function __construct($_ = null, $CommentId = null, $Date = null, $CommenterLanguage = null, $Source = null, $CommentSourceName = null, $Commenter = null)
    {
      $this->_ = $_;
      $this->CommentId = $CommentId;
      $this->Date = $Date;
      $this->CommenterLanguage = $CommenterLanguage;
      $this->Source = $Source;
      $this->CommentSourceName = $CommentSourceName;
      $this->Commenter = $Commenter;
    }

    /**
     * @return string
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param string $_
     * @return \FilippoToso\Travelport\GDSQueue\Comments
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getCommentId()
    {
      return $this->CommentId;
    }

    /**
     * @param typeRef $CommentId
     * @return \FilippoToso\Travelport\GDSQueue\Comments
     */
    public function setCommentId($CommentId)
    {
      $this->CommentId = $CommentId;
      return $this;
    }

    /**
     * @return typeDate
     */
    public function getDate()
    {
      return $this->Date;
    }

    /**
     * @param typeDate $Date
     * @return \FilippoToso\Travelport\GDSQueue\Comments
     */
    public function setDate($Date)
    {
      $this->Date = $Date;
      return $this;
    }

    /**
     * @return typeLanguage
     */
    public function getCommenterLanguage()
    {
      return $this->CommenterLanguage;
    }

    /**
     * @param typeLanguage $CommenterLanguage
     * @return \FilippoToso\Travelport\GDSQueue\Comments
     */
    public function setCommenterLanguage($CommenterLanguage)
    {
      $this->CommenterLanguage = $CommenterLanguage;
      return $this;
    }

    /**
     * @return string
     */
    public function getSource()
    {
      return $this->Source;
    }

    /**
     * @param string $Source
     * @return \FilippoToso\Travelport\GDSQueue\Comments
     */
    public function setSource($Source)
    {
      $this->Source = $Source;
      return $this;
    }

    /**
     * @return string
     */
    public function getCommentSourceName()
    {
      return $this->CommentSourceName;
    }

    /**
     * @param string $CommentSourceName
     * @return \FilippoToso\Travelport\GDSQueue\Comments
     */
    public function setCommentSourceName($CommentSourceName)
    {
      $this->CommentSourceName = $CommentSourceName;
      return $this;
    }

    /**
     * @return string
     */
    public function getCommenter()
    {
      return $this->Commenter;
    }

    /**
     * @param string $Commenter
     * @return \FilippoToso\Travelport\GDSQueue\Comments
     */
    public function setCommenter($Commenter)
    {
      $this->Commenter = $Commenter;
      return $this;
    }

}
