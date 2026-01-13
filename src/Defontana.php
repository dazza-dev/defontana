<?php

namespace DazzaDev\Defontana;

use DazzaDev\Defontana\Traits\HttpClient;

class Defontana
{
    use HttpClient;

    public function __construct(string $authToken)
    {
        $this->setAuthToken($authToken);
        $this->setHeaders([
            'Authorization' => 'Bearer '.$this->authToken,
            'Content-Type' => 'application/json',
        ]);
    }

    /**
     * Get Company
     */
    public function getCompany()
    {
        $response = $this->getClient()->get('company', [
            'headers' => $this->getHeaders(),
        ]);

        return $response;
    }

    /**
     * Get Sellers
     */
    public function getSellers(
        int $pageNumber = 1,
        int $itemsPerPage = 10,
        ?string $code = null
    ) {
        return $this->getClient()->get('sale/GetSellers', [
            'query' => [
                'pageNumber' => $pageNumber,
                'itemsPerPage' => $itemsPerPage,
                'code' => $code,
            ],
            'headers' => $this->getHeaders(),
        ]);
    }

    /**
     * Consult document stamping (TED)
     */
    public function getTed(
        int $folio = 0,
        ?string $documentType = null
    ) {
        return $this->getClient()->get('sale/GetTed', [
            'query' => [
                'folio' => $folio,
                'documentType' => $documentType,
            ],
            'headers' => $this->getHeaders(),
        ]);
    }

    /**
     * Get Clients
     */
    public function getClients(
        int $status = 0,
        int $pageNumber = 1,
        int $itemsPerPage = 10,
        ?string $legalCode = null,
        ?string $description = null
    ) {
        return $this->getClient()->get('sale/GetClients', [
            'query' => [
                'status' => $status,
                'pageNumber' => $pageNumber,
                'itemsPerPage' => $itemsPerPage,
                'legalCode' => $legalCode,
                'description' => $description,
            ],
            'headers' => $this->getHeaders(),
        ]);
    }

    /**
     * Save Sale
     */
    public function saveSale(array $data)
    {
        return $this->getClient()->post('sale/SaveSale', [
            'headers' => $this->getHeaders(),
            'json' => $data,
        ]);
    }

    /**
     * Generar nota crédito
     */
    public function saveCreditNote(array $data)
    {
        return $this->getClient()->post('sale/SaveCreditNote', [
            'headers' => $this->getHeaders(),
            'json' => $data,
        ]);
    }

    /**
     * Generar una nota de crédito para corregir monto o texto
     */
    public function saveTypeCreditNote(array $data)
    {
        return $this->getClient()->post('sale/SaveTypeCreditNote', [
            'headers' => $this->getHeaders(),
            'json' => $data,
        ]);
    }
}
