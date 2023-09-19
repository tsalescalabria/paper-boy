<?php

namespace App\Console\Commands;

use Illuminate\Support\Str;
use Illuminate\Console\Command;

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
        return $hash;
        // create redis
        // save hash on redis with 30 min expiration time
        // save in the database for auth use
        // return the hash
    }
}
