<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Rt;
use Livewire\WithPagination;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class DataRt extends Component
{
    use LivewireAlert, WithPagination;
    protected $paginationTheme = 'tailwind';
    protected $listeners = [
        'confirmed',
        'cancelled'
    ];

    public $openForm, $search, $rows = 5, $openFormEdit;
    public $no_rt, $rt_id;

    public function render()
    {
        $data = null;

        if ($this->search) {
            $data['data']['data_rt'] = Rt::where('nama', "LIKE", '%' . $this->search . '%')->orderBy('created_at', 'DESC')->paginate($this->rows);
        }else{
            $data['data']['data_rt'] = Rt::orderBy('created_at', 'DESC')->paginate($this->rows);
        }

        return view('livewire.admin.data-rt', $data)->extends('layouts.app')->section('content');
    }

    public function save()
    {
        $this->validate([
            'no_rt' => 'required|numeric|unique:rts,nama'
        ]);

        Rt::create([
            'nama' => $this->no_rt
        ]);

        $this->alert('success', 'Succesfully create data', [
            'position' => 'top-end',
            'timer' => 4000,
            'toast' => true,
        ]);

        $this->reset();

    }

    public function edit($id)
    {
        $data = Rt::where('id', $id)->first();
        $this->no_rt = $data->nama;

        $this->openForm = true;
        $this->rt_id = $id;
    }

    public function update($id)
    {
        $data = Rt::where('id', $id)->first();
        $data->nama = $this->no_rt;


        $this->alert('success', 'Succesfully update data', [
            'position' => 'top-end',
            'timer' => 4000,
            'toast' => true,
        ]);

        $data->update();
        $this->reset();

    }

    public function delete($id)
    {
        $this->confirm('Are you sure delete this data?', [
            'toast' => false,
            'position' => 'center',
            'showConfirmButton' => true,
            'cancelButtonText' => 'No',
            'onConfirmed' => 'confirmed',
            'onCancelled' => 'cancelled'
        ]);

        $this->rt_id = $id;
    }

    public function confirmed()
    {

        Rt::findOrFail($this->rt_id)->delete();

        $this->alert(
            'success',
            'Rt deleted'
        );
    }
}
