<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class printHello extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:print-hello';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Prints Hello world';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        echo "Hello world";
    }
}
