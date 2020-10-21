<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class dev extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'dev:init';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
   
            $this->call('migrate:rollback'); 
            $this->call('migrate');       
            $this->call('migrate:fresh');
            $this->call('db:seed');
        
    }
}
