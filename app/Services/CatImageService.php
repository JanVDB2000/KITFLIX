<?php

namespace App\Services;

use Illuminate\Http\Client\ConnectionException;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Http;

class CatImageService
{
    /**
     * De basis-URL van de Cat API.
     * @var string
     */
    protected string $apiUrl;

    /**
     * Constructor stelt de API-URL in.
     */
    public function __construct()
    {
        $this->apiUrl = 'https://api.thecatapi.com/v1/images/';
    }

    /**
     * Maakt verbinding met de Cat API en haalt gegevens op.
     *
     * @param string $url De volledige API-URL.
     * @param array $additionalParams Optionele extra query parameters.
     * @return array De API-respons als een array.
     * @throws ConnectionException Wanneer de verbinding mislukt.
     */
    private function ApiConnect(string $url, array $additionalParams = []): array
    {
        $query = array_merge([
            'format' => 'json',
        ], $additionalParams);

        // De headers in (API-key kan hier worden toegevoegd indien nodig)
        $headers = [
            'Content-Type' => 'application/json',
        ];

        // Een GET-request uit naar de API
        $response = Http::withHeaders($headers)->get($url, $query);

        // Controleer of het verzoek succesvol was en retourneer de JSON-gegevens
        if ($response->successful()) {
            return $response->json();
        }

        return [];
    }

    /**
     * Haalt een verzameling afbeeldingen op van de Cat API.
     *
     * @param int $limit Het maximale aantal afbeeldingen om op te halen (standaard 10).
     * @return Collection Een collectie met kattenafbeeldingen.
     * @throws ConnectionException Wanneer de verbinding mislukt.
     */
    public function getImages(int $limit = 10): Collection
    {
        return collect($this->ApiConnect($this->apiUrl . 'search', ['limit' => $limit]))
            ->map(fn($cat) => (object) $cat);
    }

    /**
     * Haalt één enkele kattenafbeelding op van de Cat API.
     *
     * @return object Een object dat een kattenafbeelding bevat.
     * @throws ConnectionException Wanneer de verbinding mislukt.
     */
    public function getImage(): object
    {
        return collect($this->ApiConnect($this->apiUrl . 'search'))
            ->map(fn($cat) => (object) $cat)
            ->first();
    }
}

