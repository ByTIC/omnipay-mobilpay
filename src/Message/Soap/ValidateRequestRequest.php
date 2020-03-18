<?php

namespace ByTIC\Omnipay\Mobilpay\Message\Soap;

use ByTIC\Omnipay\Mobilpay\Message\Soap\Traits\HasSessionId;

/**
 * Class ValidateRequestRequest
 * @package ByTIC\Omnipay\Mobilpay\Message\Soap
 */
class ValidateRequestRequest extends AbstractSoapRequest
{
    use HasSessionId;

    /**
     * @inheritDoc
     */
    protected function runTransaction($soapClient, $data)
    {
        return $this->runSoapTransaction($soapClient, 'validateRequest', $data);
    }

    /**
     * @inheritDoc
     * @throws \Omnipay\Common\Exception\InvalidRequestException
     */
    public function getData()
    {
        $this->validate('sessionId', 'request');

        return [
            'sessionId' => $this->getSessionId(),
            'request' => $this->getRequest(),
        ];
    }

    /**
     * @return mixed
     */
    public function getRequest()
    {
        return $this->getParameter('request');
    }

    /**
     * @param string $value
     * @return \Omnipay\Common\Message\AbstractRequest
     */
    public function setRequest($value)
    {
        return $this->setParameter('request', $value);
    }
}
