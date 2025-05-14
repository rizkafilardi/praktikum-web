<x-default-layout title="Edit Major" section_title="Edit Jurusan">
    <form action="{{ route('majors.update', $major->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="name" class="block font-medium">Nama Jurusan</label>
            <input type="text" name="name" id="name" value="{{ old('name', $major->name) }}" 
                   class="w-full px-4 py-2 border rounded mt-1">
        </div>
        <div class="self-end flex gap-2">
                    <a href="{{ route('students.index') }}"
                        class="bg-slate-50 border border-slate-500 text-slate-500 px-3 py-2 cursor-pointer">
                        <span>Cancel</span>
                    </a>
                    <button type="submit"
                        class="bg-blue-500 border border-blue-500 text-white px-3 py-2 flex items-center gap-3 cursor-pointer">
                        <i class="ph ph-floppy-disk block text-sm"></i>
                        <span>Update</span>
                    </button>
                </div>
    </form>
</x-default-layout>
