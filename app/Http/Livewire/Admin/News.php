<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class News extends Component
{
    public function render()
    {
        return view('livewire.admin.news')->extends('layouts.app')->section('content');
    }
}
