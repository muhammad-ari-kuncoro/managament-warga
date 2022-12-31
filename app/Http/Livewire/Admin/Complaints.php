<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class Complaints extends Component
{
    public function render()
    {
        return view('livewire.admin.complaints')->extends('layouts.app')->section('content');
    }
}
