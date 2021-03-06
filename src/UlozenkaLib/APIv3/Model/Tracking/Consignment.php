<?php

namespace UlozenkaLib\APIv3\Model\Tracking;

use UlozenkaLib\APIv3\Model\Link;

/**
 * Class Consignment
 * @package UlozenkaLib\APIv3\Model
 */
class Consignment
{

    /** @var Link[] */
    protected $links;

    /** @var int */
    protected $id;

    /** @var string */
    protected $partnerConsignmentId;

    /** @var float */
    protected $cashOnDelivery;

    /** @var  string */
    protected $currency;

    /** @var  integer */
    protected $parcelCount;

    /** @var  number */
    protected $cardPaymentAllowed;

    /**
     * Consignment constructor.
     *
     * @param \UlozenkaLib\APIv3\Model\Link[] $links
     * @param int $id
     * @param string $partnerConsignmentId
     * @param float $cashOnDelivery
     * @param string $currency
     * @param int $parcelCount
     * @param number $cardPaymentAllowed
     */
    public function __construct(array $links, $id, $partnerConsignmentId = NULL, $cashOnDelivery = NULL, $currency = NULL, $parcelCount = NULL, $cardPaymentAllowed = NULL)
    {
        $this->links = $links;
        $this->id = $id;
        $this->partnerConsignmentId = $partnerConsignmentId;
        $this->cashOnDelivery = $cashOnDelivery;
        $this->currency = $currency;
        $this->parcelCount = $parcelCount;
        $this->cardPaymentAllowed = $cardPaymentAllowed;
    }

    /**
     * @return \UlozenkaLib\APIv3\Model\Link[]
     */
    public function getLinks()
    {
        return $this->links;
    }

    /**
     * @param \UlozenkaLib\APIv3\Model\Link[] $links
     *
     * @return Consignment
     */
    public function setLinks($links)
    {
        $this->links = $links;
        return $this;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     *
     * @return Consignment
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getPartnerConsignmentId()
    {
        return $this->partnerConsignmentId;
    }

    /**
     * @param string $partnerConsignmentId
     *
     * @return Consignment
     */
    public function setPartnerConsignmentId($partnerConsignmentId)
    {
        $this->partnerConsignmentId = $partnerConsignmentId;
        return $this;
    }

    /**
     * @return float
     */
    public function getCashOnDelivery()
    {
        return $this->cashOnDelivery;
    }

    /**
     * @param float $cashOnDelivery
     *
     * @return Consignment
     */
    public function setCashOnDelivery($cashOnDelivery)
    {
        $this->cashOnDelivery = $cashOnDelivery;
        return $this;
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @param string $currency
     *
     * @return Consignment
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
        return $this;
    }

    /**
     * @return int
     */
    public function getParcelCount()
    {
        return $this->parcelCount;
    }

    /**
     * @param int $parcelCount
     *
     * @return Consignment
     */
    public function setParcelCount($parcelCount)
    {
        $this->parcelCount = $parcelCount;
        return $this;
    }

    /**
     * @return number
     */
    public function getCardPaymentAllowed()
    {
        return $this->cardPaymentAllowed;
    }

    /**
     * @param number $cardPaymentAllowed
     *
     * @return Consignment
     */
    public function setCardPaymentAllowed($cardPaymentAllowed)
    {
        $this->cardPaymentAllowed = $cardPaymentAllowed;
        return $this;
    }
}
