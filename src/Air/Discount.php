<?php

namespace FilippoToso\Travelport\Air;

class Discount
{

    /**
     * @var DiscountCard $DiscountCard
     */
    protected $DiscountCard = null;

    /**
     * @var typeRef $Key
     */
    protected $Key = null;

    /**
     * @param DiscountCard $DiscountCard
     * @param typeRef $Key
     */
    public function __construct($DiscountCard = null, $Key = null)
    {
      $this->DiscountCard = $DiscountCard;
      $this->Key = $Key;
    }

    /**
     * @return DiscountCard
     */
    public function getDiscountCard()
    {
      return $this->DiscountCard;
    }

    /**
     * @param DiscountCard $DiscountCard
     * @return \FilippoToso\Travelport\Air\Discount
     */
    public function setDiscountCard($DiscountCard)
    {
      $this->DiscountCard = $DiscountCard;
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
     * @return \FilippoToso\Travelport\Air\Discount
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

}
