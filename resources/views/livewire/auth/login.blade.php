<div>


    @section('title')
        Sign In Page
    @endsection

    <div class="px-4 py-4 mx-auto mt-20 bg-white rounded-lg shadow-lg w-80 lg:w-1/3">
        <h1 class="mb-10 text-3xl">Citizen Management - Login Page</h1>
        <div class="form-control">
            <input wire:model='email' type="text" class="w-full input input-bordered @error('email')
                input-error
            @enderror" placeholder="Input your email">
            @error('email')
                <span class="text-red-700">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-control">
            <input wire:model='password' type="password" class="w-full mt-4 input input-bordered @error('password')
                input-error
            @enderror" placeholder="Input your password">
            @error('password')
                <span class="text-red-700">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-control">
            <button wire:loading.remove wire:click='signin' class="mt-4 btn btn-block">Sign In</button>
            <button wire:loading wire:target='signin' class="mt-4 btn btn-block" disabled>Loading ...</button>
        </div>
    </div>

    @if ($isLogin)
        <script>
            setTimeout(function () {
                window.location.href = "{{ route('admin.home') }}";
            }, 3000);
        </script>
    @endif

    @if (Auth::check())
        <script>
            setTimeout(function () {
                window.location.href = "{{ route('admin.home') }}";
            }, 100);
        </script>
    @endif

</div>
