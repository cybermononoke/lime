<?php
namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Auth;
use App\Models\User; // Assuming you're using the User model

class CheckLoggedInUser extends Command
{
    protected $signature = 'check:loggedin';
    protected $description = 'Check if a specific user is authenticated in the CLI';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $userId = 1;  // replace
        $user = User::find($userId);

        if ($user) {
            Auth::login($user);
            if (Auth::check()) {
                $this->info('User is authenticated: ' . Auth::user()->name);
            } else {
                $this->error('No authenticated user found.');
            }
        } else {
            $this->error('User not found.');
        }
    }
}
