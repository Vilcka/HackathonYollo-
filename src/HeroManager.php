<?php
/**
 * Created by PhpStorm.
 * User: legolas
 * Date: 06/04/18
 * Time: 02:27
 */

namespace App;

require '../vendor/autoload.php';

use GuzzleHttp;


class HeroManager
{
    const API = 'https://akabab.github.io/superhero-api/api/id/';
    private $client;

    public function __construct()
    {
        $this->client = new GuzzleHttp\Client([
                'base_uri' => self::API,
            ]
        );
    }

    public function selectById($id)
    {
        $response = $this->client->request('GET', $id . '.json');
        $body = $response->getBody();
        $contents = $body->getContents();
        $obj = json_decode($contents);
        return $obj;
    }
}