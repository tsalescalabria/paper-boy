<?php

namespace App\Console\Commands;

use Illuminate\Support\Str;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Redis;

class GenerateHash extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:hash';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate a hash to authenticate requests.';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $hash = Str::random(150);
        Cache::put('hash', $hash, now()->addMinutes(30));

        $this->info(Cache::get('hash'));

        // tentei fazer com o redis mas ele n retorna a hash na rota, apenas null
        // Redis::set('hash', $hash, 'EX', 1800); // 1800 seconds (30 minutes)
        // dump(Redis::get('hash'));
        // die();
    }
}
