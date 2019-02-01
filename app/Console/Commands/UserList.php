<?php

namespace App\Console\Commands;

use App\User;
use Illuminate\Console\Command;

class UserList extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'users:list {--country=} {--age=} {--id=}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'List of users. Option examples: --country=1, --age=18, --id=1';

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
        foreach (User::filter($this->option('country'), $this->option('age'), $this->option('id'))->cursor() as $user) {
            printf("#%d %s %s \n", $user->id, $user->name, $user->last_name);
        }

        return true;
    }
}
