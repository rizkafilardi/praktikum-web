<x-default-layout title="Profile" section_title="Profile">
    <div
        class="flex flex-col md:w-2/3 lg:w-1/2 gap-4 px-6 py-4 bg-white border border-t-4 border-zinc-300 shadow 
        col-span-3 md:col-span-2">
        <div class="mb-4">
            <label class="block text-gray-700">Name</label>
            <input type="text" value="{{ $user->name }}" class="w-full border px-3 py-2 rounded bg-gray-100" readonly>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700">Email</label>
            <input type="text" value="{{ $user->email }}" class="w-full border px-3 py-2 rounded bg-gray-100" readonly>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700">Role</label>
            <input type="text" value="{{ $user->role }}" class="w-full border px-3 py-2 rounded bg-gray-100" readonly>
        </div>
        <form method="POST" action="{{ route('auth.logout') }}">
            @csrf
            @method('DELETE')
            <button type="submit" class="text-red-500 border border-red-500 px-4 py-2 rounded hover:bg-red-100">
                Logout
            </button>
        </form>
        </div>
    </div>
</x-default-layout>