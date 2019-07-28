<?php

namespace Webkul\Payment\Payment;

/**
 * Money Transfer payment method class
 *
 * @author    Jitendra Singh <jitendra@webkul.com>
 * @copyright 2018 Carlos Pinto (https://www.fiatex.io)
 */
class MoneyTransfer extends Payment
{
    /**
     * Payment method code
     *
     * @var string
     */
    protected $code  = 'moneytransfer';

    public function getRedirectUrl()
    {
        
    }
}