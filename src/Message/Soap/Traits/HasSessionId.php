<?php

namespace ByTIC\Omnipay\Mobilpay\Message\Soap\Traits;

/**
 * Trait HasSessionId
 * @package ByTIC\Omnipay\Mobilpay\Message\Soap\Traits
 */
trait HasSessionId
{

    /**
     * @return mixed
     */
    public function getSessionId()
    {
        return $this->getParameter('sessionId');
    }

    /**
     * @param string $value
     * @return \Omnipay\Common\Message\AbstractRequest
     */
    public function setSessionId($value)
    {
        return $this->setParameter('sessionId', $value);
    }
}
