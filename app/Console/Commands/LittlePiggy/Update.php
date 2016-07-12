<?php

namespace App\Console\Commands\LittlePiggy;

use Illuminate\Console\Command;
use App\LittlePiggy\FetchCompleteMarketData;

class Update extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'littlepiggy:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Run the littlepiggy updater; retreive market data';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->comment(PHP_EOL . "fetching complete market data... ");
        new FetchCompleteMarketData();
        $this->comment("...done" . PHP_EOL);
    }
}
