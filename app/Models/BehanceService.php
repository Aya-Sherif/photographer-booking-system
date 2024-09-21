<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use GuzzleHttp\Client;

class BehanceService
{
    use HasFactory;

    protected $client;

    public function __construct()
    {
        $this->client = new Client(['base_uri' => 'https://api.behance.net/v2/']);
    }

    public function getPublicProjects($username)
    {
        $response = $this->client->request('GET', "users/{$username}/projects");
        return json_decode($response->getBody()->getContents(), true);
    }
}
