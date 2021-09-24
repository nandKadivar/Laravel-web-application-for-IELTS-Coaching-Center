<?php 

namespace App\Traits;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Log;

trait ZoomJWT {
    
    public $client;
    public $jwt;
    public $headers;

    public function __construct(){
        $this->client = new Client();
        $this->jwt = $this->generateZoomToken();
        $this->headers = [
            'Authorization' => 'Bearer '.$this->jwt,
            'Content-Type' => 'application/json',
            'Accept' => 'application/json'
        ];
    }

    private function generateZoomToken() {
        $key = env('ZOOM_API_KEY', '');
        $secret = env('ZOOM_API_SECRET', '');

        $payload = [
            'iss' => $key,
            'exp' => strtotime('+1 minute')
        ];

        return \Firebase\JWT\JWT::encode($payload, $secret, 'HS256');
    }

    private function retriveZoomUrl(){
        return env('ZOOM_API_URL');
    }

    public function toZoomTimeFormat(string $datetime){
        try {
            $date = new \DateTime($datetime);

            return $date->format('Y-m-d\TH:i:s');
        }catch(\Exception $e){
            Log::error("ZoomJWT->toZoomTimeFormat: ".$e->getMessage());
            
            return "";
        }
    }

    public function createZoom(array $data=[]){
        $url = $this->retriveZoomUrl();
        $path = 'users/me/meetings';

        $body = [
            'headers' => $this->headers,
            'body' => json_encode([
                'topic' => $data['topic'],
                'type' => 2,
                'start_time' => $this->toZoomTimeFormat('2020-07-31T13:00:00'),
                'duration' => $data['duration'],
                'agenda' => $data['agenda'],
                'timezone' => 'Asia/Kolkata',
                'settings' => [
                    'host_video' => false,
                    'participant_video' => false,
                    'waiting_room' => true,
                ]
            ]),
        ];

        $response = $this->client->post($url.$path,$body);

        return [
            'success' => $response->getStatusCode() === 201,
            'data' => json_encode($response->getBody(),true)
        ];
    }

    // public function createZoom(array $data=[]){
    //     $url = $this->retriveZoomUrl();
    //     $path = 'users/me/meetings';

    //     $body = [
    //         'headers' => $this->headers,
    //         'body' => json_encode([
    //             'topic' => $data['topic'],
    //             'type' => $data['type'],
    //             'start_time' => $this->toZoomTimeFormat($data['start_time']),
    //             'duration' => $data['duration'],
    //             'agenda' => (!empty($data['agenda'])) ? $data['agenda'] : null,
    //             'timezone' => 'Asia/Kolkata',
    //             'settings' => [
    //                 'host_video' => ($data['host_video'] == "1") ? true : false,
    //                 'participant_video' => ($data['participant_video'] == "1") ? true : false,
    //                 'waiting_room' => true,
    //             ]
    //         ]),
    //     ];

    //     $response = $this->client->post($url.$path,$body);

    //     return [
    //         'success' => $response->getStatusCode() === 201,
    //         'data' => json_encode($response->getBody(),true)
    //     ];
    // }

    public function updateZoom($id,$data){
        $url = $this->retriveZoomUrl();
        $path = 'meetings/'.$id;

        $body = [
            'headers' => $this->headers,
            'body' => json_encode([
                'topic' => $data['topic'],
                'type' => $data['type'],
                'start_time' => $this->toZoomTimeFormat($data['start_time']),
                'duration' => $data['duration'],
                'agenda' => (!empty($data['agenda'])) ? $data['agenda'] : null,
                'timezone' => 'Asia/Kolkata',
                'settings' => [
                    'host_video' => ($data['host_video'] == "1") ? true : false,
                    'participant_video' => ($data['participant_video'] == "1") ? true : false,
                    'waiting_room' => true,
                ]
            ])
        ];

        $response =  $this->client->patch($url.$path, $body);

        return [
            'success' => $response->getStatusCode() === 204,
            'data' => json_decode($response->getBody(), true)
        ];
    }

    public function listZoom(){
        $url = $this->retriveZoomUrl();
        $path = 'users/me/meetings';
        $this->jwt = $this->generateZoomToken();
        
        $body = [
            'headers' => $this->headers,
            'body'    => json_encode([]),
        ];

        $response =  $this->client->get($url.$path, $body);

        return [
            'success' => $response->getStatusCode() === 204,
            'data'    => json_decode($response->getBody(), true),
        ];

    }

    public function getZoom($id)
    {
        $url = $this->retrieveZoomUrl();
        $path = 'meetings/'.$id;
        $this->jwt = $this->generateZoomToken();
        
        $body = [
            'headers' => $this->headers,
            'body'    => json_encode([]),
        ];

        $response =  $this->client->get($url.$path, $body);

        return [
            'success' => $response->getStatusCode() === 204,
            'data'    => json_decode($response->getBody(), true),
        ];
    }

    public function deleteZoom($id)
    {
        $url = $this->retrieveZoomUrl();
        $path = 'meetings/'.$id;
        $body = [
            'headers' => $this->headers,
            'body'    => json_encode([]),
        ];

        $response =  $this->client->delete($url.$path, $body);
        
        return [
            'success' => $response->getStatusCode() === 204,
        ];
    }

    // public function zoomGet(string $path, array $query = []){
    //     $url = $this->retriveZoomUrl();
    //     $request = $this->zoomRequest();

    //     return $request->get($url.$path, $query);
    // }

    // public function zoomPost(string $path, array $body = []){
    //     $url = $this->retrieveZoomUrl();
    //     $request = $this->zoomRequest();
        
    //     return $request->post($url.$path, $body);
    // }

    // public function zoomPatch(string $path, array $body = []){
    //     $url = $this->retrieveZoomUrl();
    //     $request = $this->zoomRequest();
        
    //     return $request->patch($url . $path, $body);
    // }

    // public function zoomCreate(array $data=[]){
    //     $path = 'users/me/meetings';
    //     $url = $this->retriveZoomUrl();

    //     $body = [
    //         'headers' => $this->headers,
    //     ];
    // }
}
