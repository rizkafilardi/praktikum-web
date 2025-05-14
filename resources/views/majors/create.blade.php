<x-default-layout title="Tambah Jurusan" section_title="Tambah Jurusan">
    <h1 class="text-2xl font-bold mb-4">Tambah Jurusan</h1>

    <form action="{{ route('majors.store') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label class="block font-medium">Nama Jurusan:</label>
            <input type="text" name="name" class="border p-2 w-full rounded" required>
        </div>
        <button type="submit" class="bg-green-500 text-black px-4 py-2 border cursor-pointer rounded">Simpan</button>
    </form>
</x-default-layout>
