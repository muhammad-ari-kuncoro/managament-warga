<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class Event extends Component
{
    public function render()
    {
        return view('livewire.admin.event')->extends('layouts.app')->section('content');
    }
}
