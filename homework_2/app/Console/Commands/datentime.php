<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use Illuminate\Console\Command;

class datentime extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:print-date';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Executes Carbon commands.';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        echo 'a.'.Carbon::now()."\n";
        echo 'b.'.Carbon::now()->addMonth()."\n";
    }
}
