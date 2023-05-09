<?php 

namespace App\Services;

use GuzzleHttp\Client;

class GymApiService {
    private $client;
    public function __construct() {
        $this->client = new Client([
            'base_uri' => "http://localhost:3000"
        ]);
    }

    public function registerPersonal() {

    }

    public function registerAluno() {

    }

    public function getAluno() {

    }

    public function getPersonal() {
        
    }

    public function getArticulations() {

    }

    public function getMovements() {

    }

    public function getMuscleGroups() {
        try {
            $groups = $this->client->request('GET', '/muscle/group?portions=true');
            return ( 
                json_decode($groups->getBody()->getContents())->groups 
            );
        } catch (\Exception $e) {
            throw $e;
        }
    }

    public function getMusclePortions() {

    }


}