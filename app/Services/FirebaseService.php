<?php

namespace App\Services;

use App\Models\Notification;

class FirebaseService
{
    protected $url = "https://smart-pot-soil-default-rtdb.asia-southeast1.firebasedatabase.app/.json";

    public function fetchData()
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        curl_close($ch);

        return json_decode($response, true);
    }

    public function checkMoisture()
    {
        $data = $this->fetchData();
        if (!is_array($data)) return;

        $moisture     = $data['sensor']['moisture'] ?? null;
        $moisture_min = $data['plant_information']['moisture_min'] ?? null;

        if ($moisture !== null && $moisture_min !== null && $moisture < $moisture_min) {
            Notification::create([
                'title'   => 'Low Moisture Alert',
                'message' => "Moisture is too low ({$moisture}%), below threshold ({$moisture_min}%).",
                'image'   => asset('dashboard_assets/assets/images/dashboard/plants/plant1.jpg'),
                'link'    => '/plants/detail/1',
            ]);
        }
    }
}
