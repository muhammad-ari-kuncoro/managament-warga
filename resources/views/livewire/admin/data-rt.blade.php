<div>

    @section('title')
        Data RT
    @endsection

    <div class="drawer-content" x-data="{ drawer: false }">

        @livewire('admin.components.navbar')
        @include('livewire.admin.components.sidebar')

        <div class="px-5 mt-5" :class="{ 'lg:ml-80 lg:p-5 md:ml-80 md:p-5': drawer }">
            <div class="flex flex-wrap justify-between">
                <div>
                    <h1 class="text-4xl font-bold">Data RT</h1>
                    <h3 class="mt-3 text-xl font-thin">Page ini untuk me-management data rt</h3>
                </div>
                <div class="text-sm breadcrumbs">
                    <ul>
                        <li>
                            <a>Home</a>
                        </li>
                        <li>Data RT</li>
                    </ul>
                </div>
            </div>

            <div class="mt-10 mb-5">
                <div class="flex flex-wrap justify-between">
                    <div>
                        <div class="flex">
                            <input wire:model='search' type="text" class="mb-4 input input-bordered"
                                placeholder="Searching..">
                            <div wire:loading wire:target='search'
                                class="w-12 h-12 ml-5 border-t-2 border-b-2 border-gray-900 rounded-full animate-spin">
                            </div>
                        </div>

                        <select wire:model='rows' class="mb-2 select select-bordered">
                            <option value="5">5</option>
                            <option value="10">10</option>
                            <option value="15">15</option>
                            <option value="20">20</option>
                            <option value="25">25</option>
                        </select>
                    </div>
                    <div>
                        @if ($openForm)
                            <button wire:click='$set("openForm", false)' class="btn btn-primary">Back</button>
                        @else
                            <button wire:click='$set("openForm", true)' class="btn btn-primary">Create Rt</button>
                        @endif
                    </div>
                </div>
                <div class="container h-auto shadow-xl">
                    <div class="mt-3 overflow-x-auto">
                        @if ($openForm)
                            <div class="p-7">
                                <div class="form-control">
                                    <label class="label">
                                        <span class="label-text">No RT <span class="text-error">*</span></span>
                                    </label>
                                    <input wire:model='no_rt' type="text" class="input input-bordered @error('no_rt')
                                        input-error
                                    @enderror" placeholder="Masukkan no rt" />
                                    @error('no_rt')
                                        <span class="text-error">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mt-3 mb-2">
                                    @if ($rt_id)
                                        <button wire:click='update({{$rt_id}})' wire:loading.remove class="btn btn-primary">Update</button>
                                        <button wire:loading wire:target='update' class="btn btn-primary" disabled>Updating...</button>
                                    @else
                                        <button wire:click='save' wire:loading.remove class="btn btn-primary">Save</button>
                                        <button wire:loading wire:target='save' class="btn btn-primary" disabled>Saving...</button>
                                    @endif

                                </div>
                            </div>
                        @else
                            <table class="table w-full rounded-lg table-zebra">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>No RT</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data['data_rt'] as $key => $item)
                                        <tr>
                                            <td>{{ $data['data_rt']->firstItem() + $key }}</td>
                                            <td>{{ $item->nama }}</td>
                                            <td class="flex gap-3">
                                                <svg wire:click='delete({{ $item->id }})' role="button" class="text-error" style="width:24px;height:24px" viewBox="0 0 24 24">
                                                    <path fill="currentColor" d="M19,4H15.5L14.5,3H9.5L8.5,4H5V6H19M6,19A2,2 0 0,0 8,21H16A2,2 0 0,0 18,19V7H6V19Z" />
                                                </svg>
                                                <svg wire:click='edit({{ $item->id }})' role="button" class="text-primary" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                                    <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
                                                </svg>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                    </div>
                </div>
                <div class="justify-center mt-5">
                    {{ $data['data_rt']->links() }}
                </div>
                @endif
            </div>


        </div>

    </div>
</div>
