<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class DeleteOldMessages extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:deleteoldmessages';

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
     * @return mixed
     */
    public function handle()
    {
        //
        $messages=Message::where('created_at','>',Carbon::now()->subMinutes(10))->delete();
        echo "Deleted Messages\n";
    }
}