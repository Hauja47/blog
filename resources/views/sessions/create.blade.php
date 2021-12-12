<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10">

            <x-panel>
                <h1 class="text-center font-bold text-xl">Login</h1>

                <form action="/login" method="POST" class="mt-10">

                    @csrf

                    {{-- <div class="mb-6">
                        <label for="username" class="block mb-2 uppercase font-bold text-xs text-grey-700">Username</label>
                        <input type="text" class="border border-grey-400 p-2 w-full" name="username" id="usename"
                            value={{ old('username') }} required>

                        @error('username')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div> --}}

                    <x-form.input name='email' type='email' autocomplete='username'/>
                    <x-form.input name='password' type='password' autocomplete='new-password'/>

                    <x-form.button>Login</x-form.button>

                    {{-- @if ($errors->any())
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li class="text-red-500 text-xs">{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif --}}
                </form>
            </x-panel>

        </main>
    </section>
</x-layout>
