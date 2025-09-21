<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Services\FirebaseService;

class CheckMoistureCommand extends Command
{
    protected $signature = 'moisture:check';
    protected $description = 'Check moisture from Firebase and create notification if needed';

    public function handle()
    {
        $service = new FirebaseService();
        $service->checkMoisture();

        $this->info('Moisture checked successfully.');
    }
}
