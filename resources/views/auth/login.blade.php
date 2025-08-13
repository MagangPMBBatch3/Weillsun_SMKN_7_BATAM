<x-layouts.auth title="Login">
    <form action="/login" method="POST" class="bg-white p-6 rounded shadow-md w-96">
        @csrf
        <h1 class=" text-2xl font-bold mb-4 text-center">Login</h1>

        @if ($errors->any())
            <div class="bg-red-100 text-red-700 rounded mb-4">
                {{ $errors->first() }}
            </div>
        @endif

        <div class="mb-4">
            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
            <input type="email" name="email" id="email" required class="mt-1 p-2 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500">
        </div>

        <div class="mb-4">
            <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
            <input type="password" name="password" id="password" required class="mt-1 p-2 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500">
        </div>

        <button type="submit" class="bg-blue-500 text-white w-full p-2 rounded">Login</button>
    </form>
</x-layouts.auth>