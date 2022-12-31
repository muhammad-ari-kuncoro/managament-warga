<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class DataRt extends Component
{
    public function render()
    {
        return view('livewire.admin.data-rt')->extends('layouts.app')->section('content');
    }
}
