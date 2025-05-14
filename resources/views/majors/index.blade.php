<x-default-layout title="Majors" section_title="Daftar Jurusan">
<div class="flex">
        <a href="{{ route('majors.create') }}"
        class="bg-green-50 text-green-500 border border-green-500 px-3 py-2 flex items-center gap-2">
            <i class="ph ph-plus block text-green-500"></i>
            <div>Add majors</div>
        </a>
    </div>

    <table class="table-auto w-full mt-4">
        <thead>
            <tr>
                <th class="border px-4 py-2">ID</th>
                <th class="border px-4 py-2">Nama Jurusan</th>
                <th class="border px-4 py-2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($majors as $major)
                <tr>
                    <td class="border px-4 py-2">{{ $major->id }}</td>
                    <td class="border px-4 py-2">{{ $major->name }}</td>
                    <td class="border px-4 py-2">
                    <a href="{{ route('majors.show', $major->id) }}"
                        class="bg-blue-50 border border-blue-500 p-2 inline-block">
                            <i class="ph ph-eye block text-blue-500"></i>
                        </a>
                        <a href="{{ route('majors.edit', $major->id) }}"
                        class="bg-yellow-50 border border-yellow-500 p-2 inline-block">
                            <i class="ph ph-note-pencil block text-yellow-500"></i>
                        </a>
                        <button class="bg-red-50 border border-red-500 p-2">
                            <i class="ph ph-trash-simple block text-red-500"></i>
                        </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-default-layout>
