<?php

namespace TransferWise\Service;

class CurrencyService extends Service
{
    /**
     * Get list of currency pairs
     *
     * @return Response
     */
    public function retrieve()
    {
        return $this->client->request(
            "GET",
            "v1/currency-pairs"
        );
    }
}