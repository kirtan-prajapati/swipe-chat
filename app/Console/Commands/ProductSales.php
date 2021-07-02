<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ProductSales extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'prodcut:sales_yesterday';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'By this you can send yesterday\'s products sales to admin';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->info("Task completed successfully!");
        return 0;
    }
}
