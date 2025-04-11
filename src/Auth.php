<?php

namespace DazzaDev\Defontana;

use DazzaDev\Defontana\Exceptions\DefontanaException;
use DazzaDev\Defontana\Traits\HttpClient;

class Auth
{
    use HttpClient;

    private string $clientId;

    private string $companyId;

    private string $userId;

    private string $password;

    /**
     * Set Credentials.
     */
    public function setCredentials($credentials = []): void
    {
        $this->clientId = $credentials['client'] ?? null;
        $this->companyId = $credentials['company'] ?? null;
        $this->userId = $credentials['user'] ?? null;
        $this->password = $credentials['password'] ?? null;
    }

    /**
     * Authenticate.
     */
    public function authenticate()
    {
        $this->validate();

        $response = $this->getClient()->get('auth', [
            'query' => [
                'client' => $this->clientId,
                'company' => $this->companyId,
                'user' => $this->userId,
                'password' => $this->password,
            ],
        ]);

        if (isset($response['access_token'])) {
            return $response;
        } else {
            throw new DefontanaException('Authentication token not found.');
        }
    }

    /**
     * Validate the required fields.
     */
    public function validate()
    {
        if (empty($this->clientId)) {
            throw new DefontanaException('Client field is required.');
        }

        if (empty($this->companyId)) {
            throw new DefontanaException('Company field is required.');
        }

        if (empty($this->userId)) {
            throw new DefontanaException('User field is required.');
        }

        if (empty($this->password)) {
            throw new DefontanaException('Password field is required.');
        }
    }
}
