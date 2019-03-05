<?php

namespace FilippoToso\Travelport\Rail;

class GuestReviews
{

    /**
     * @var Comments[] $Comments
     */
    protected $Comments = null;

    /**
     * @param Comments[] $Comments
     */
    public function __construct(array $Comments = null)
    {
      $this->Comments = $Comments;
    }

    /**
     * @return Comments[]
     */
    public function getComments()
    {
      return $this->Comments;
    }

    /**
     * @param Comments[] $Comments
     * @return \FilippoToso\Travelport\Rail\GuestReviews
     */
    public function setComments(array $Comments)
    {
      $this->Comments = $Comments;
      return $this;
    }

}
