<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class Citizen extends Component
{
    public function render()
    {
        return view('livewire.admin.citizen')->extends('layouts.app')->section('content');
    }
}
