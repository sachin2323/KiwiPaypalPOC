<?php

namespace App\Subscription;

use PayPalHttp\HttpRequest;

class PlansCreateRequest extends HttpRequest
{
    function __construct()
    {
        parent::__construct("/v1/billing/plans", "POST");
        $this->headers["Content-Type"] = "application/json";
    }

    public function payPalPartnerAttributionId($payPalPartnerAttributionId)
    {
        $this->headers["PayPal-Partner-Attribution-Id"] = $payPalPartnerAttributionId;
    }
    public function prefer($prefer)
    {
        $this->headers["Prefer"] = $prefer;
    }
}
