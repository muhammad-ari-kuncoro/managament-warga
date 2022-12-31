<div>

    @section('title')
        Events
    @endsection

    <div class="drawer-content" x-data="{ drawer: false }">

        @livewire('admin.components.navbar')
        @livewire('admin.components.sidebar')


       <div class="px-5 mt-5" :class="{ 'lg:ml-80 lg:p-5 md:ml-80 md:p-5': drawer }">
            <div class="flex flex-wrap justify-between">
                <div>
                    <h1 class="text-4xl font-bold">Data Acara</h1>
                    <h3 class="mt-3 text-xl font-thin">Page ini untuk me-management data acara</h3>
                </div>
                <div class="text-sm breadcrumbs">
                    <ul>
                      <li>
                        <a>Home</a>
                      </li>
                      <li>Event</li>
                    </ul>
                  </div>
            </div>

           <div class="mt-10 mb-5">
                Hallo Events!
           </div>

       </div>

    </div>
</div>
