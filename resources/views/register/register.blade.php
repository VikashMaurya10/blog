<x-layout.layout>
    <div class="flex items-center justify-center min-h-[80vh]">
        <div
            class="bg-slate-100 shadow-sm border py-8 rounded-sm border-gray-200 flex items-center flex-col justify-center w-[400px]">
            <h1 class="block font-raleway font-semibold text-2xl">Register!</h1>
            <form action="/register" method="post" class="w-[80%] mt-8">
                @csrf
                <div>
                    <label for="name" class="block capitalize text-sm sm:text-base">name</label>
                    <input type="text" name="name" id="name" required value="{{ old('name') }}"
                        class="w-full text-sm sm:text-base border border-gray-200 shadow-sm outline-none px-2 py-1 rounded-sm">
                    @error('name')
                        <p class="text-red-400 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mt-4">
                    <label for="username" class="block capitalize text-sm sm:text-base">username</label>
                    <input type="text" name="username" id="username" required value="{{ old('username') }}"
                        class="w-full text-sm sm:text-base border border-gray-200 shadow-sm outline-none px-2 py-1 rounded-sm">
                    @error('username')
                        <p class="text-red-400 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mt-4">
                    <label for="email" class="block capitalize text-sm sm:text-base">email</label>
                    <input type="email" name="email" id="email" required value="{{ old('email') }}"
                        class="w-full text-sm sm:text-base border border-gray-200 shadow-sm outline-none px-2 py-1 rounded-sm">
                    @error('email')
                        <p class="text-red-400 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mt-4">
                    <label for="password" class="block capitalize text-sm sm:text-base">password</label>
                    <input type="password" name="password" id="password" required value="{{ old('password') }}"
                        class="w-full text-sm sm:text-base border border-gray-200 shadow-sm outline-none px-2 py-1 rounded-sm">
                    @error('password')
                        <p class="text-red-400 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <button class="mt-6 bg-gray-200 px-8 py-2 rounded font-roboto block mx-auto">Sign up</button>
                </div>
            </form>
        </div>
    </div>
</x-layout.layout>
