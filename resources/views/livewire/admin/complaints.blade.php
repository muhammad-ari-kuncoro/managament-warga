<div>

    @section('title')
        Complaints
    @endsection

    <div class="drawer-content" x-data="{ drawer: false }">

        @livewire('admin.components.navbar')
        @include('livewire.admin.components.sidebar')


       <div class="px-5 mt-5" :class="{ 'lg:ml-80 lg:p-5 md:ml-80 md:p-5': drawer }">
            <div class="flex flex-wrap justify-between">
                <div>
                    <h1 class="text-4xl font-bold">Data Pengaduan</h1>
                    <h3 class="mt-3 text-xl font-thin">Page ini untuk me-management data pengaduan</h3>
                </div>
                <div class="text-sm breadcrumbs">
                    <ul>
                      <li>
                        <a>Home</a>
                      </li>
                      <li>Complaints</li>
                    </ul>
                  </div>
            </div>

           <div class="mt-10 mb-5">
                Hallo Complaints!
           </div>

       </div>

    </div>
</div>
