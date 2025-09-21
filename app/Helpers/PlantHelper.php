<?php

namespace App\Helpers;

use Kreait\Firebase\Factory;
use App\Models\Notification;

class PlantHelper
{
    public static function checkMoisture()
    {
        $factory = (new Factory)
            ->withServiceAccount(storage_path('app/firebase_credentials.json'));

        $database = $factory->createDatabase();

        // Ambil data dari Firebase
        $data = $database->getReference('/')->getValue();

        $moisture = $data['sensor']['moisture'] ?? null;
        $moisture_min = $data['plant_information']['moisture_min'] ?? null;

        if ($moisture !== null && $moisture_min !== null && $moisture < $moisture_min) {
            Notification::create([
                'title'   => 'Plant Alert',
                'message' => "Moisture is too low ($moisture%), needs watering!",
                'image'   => 'dashboard_assets/assets/images/dashboard/plants/plant1.jpg',
                'link'    => '/plants/detail/1',
            ]);
        }
    }
}
