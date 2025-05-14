<x-default-layout title="Detail Jurusan" section_title="Detail Jurusan">


    <table class="table-auto w-full mt-4">
        <tbody>
            <tr>
                <th class="border px-4 py-2">ID</th>
                <td class="border px-4 py-2">{{ $major->id }}</td>
            </tr>
            <tr>
                <th class="border px-4 py-2">Nama Jurusan</th>
                <td class="border px-4 py-2">{{ $major->name }}</td>
            </tr>
        </tbody>
    </table>
    <div class="flex gap-2">
                <a href="{{ route('majors.index') }}" class="border border-slate-500 text-slate-500 px-3 py-2 cursor-pointer">
                    <span>kembali ke daftar jurusan</span>
                </a>

                <a href="{{ route('majors.edit', 1) }}" 
                class="bg-blue-600 border border-b-blue-600 text-yellow-500 px-3 py-2 flex items-center gap-2 cursor-pointer">
                    <i class="ph ph-pencil block text-black-500"></i>
                    <span>Edit</span>
                </a>
            </div>
</x-default-layout>
