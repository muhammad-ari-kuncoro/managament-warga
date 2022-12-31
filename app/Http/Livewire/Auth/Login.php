<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;
use App\Models\User;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Illuminate\Support\Facades\Auth;

class Login extends Component
{

    use LivewireAlert;

    public $isLogin;
    public $email, $password;

    public function render()
    {
        // Auth::logout();
        return view('livewire.auth.login')->extends('layouts.app')->section('content');
    }


    public function signin()
    {
        $this->validate([
            "email" => "required|email",
            "password" => "required"
        ]);

        try {

            if (Auth::attempt(['email' => $this->email, 'password' => $this->password])) {
                $this->alert('success', 'Succesfully login', [
                    'position' => 'top-end',
                    'timer' => 3000,
                    'toast' => true,
                ]);

                $this->isLogin = true;
            }else{
                $this->alert('error', 'Ooops, invalid your credentials', [
                    'position' => 'top-end',
                    'timer' => 3000,
                    'toast' => true,
                ]);
            }

        } catch (\Exception $e) {
            $this->alert('error', 'Something Wrong, please try again later!', [
                'position' => 'top-end',
                'timer' => 3000,
                'toast' => true,
            ]);
            dd($e->getMessage());
        }
    }
}
