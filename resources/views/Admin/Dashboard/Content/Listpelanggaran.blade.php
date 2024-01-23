@extends('Admin.AdminLayout')

@section('content')
    <!-- table-->
    <table class="min-w-full">
        <thead>
            <tr>
                <th
                    class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                    No</th>
                <th
                    class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                    Name</th>
                <th
                    class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                    Penjelasan</th>
                <th
                    class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                    Category</th>
                <th
                    class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                    Score</th>
                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50"></th>
            </tr>
        </thead>

        <tbody class="bg-white">
            <tr>
                @php $i = 1;@endphp
                @forelse ($pelanggarans as $pelanggaran)
                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                        <div class="flex items-center">
                            <div>
                                <div class="text-sm font-medium leading-5 text-gray-900">{{ $i++ }}</div>
                            </div>
                        </div>
                    </td>

                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                        <div class="flex items-center">
                            <div>
                                <div class="text-sm font-medium leading-5 text-gray-900">
                                    <strong>{{ $pelanggaran->name }}</strong></div>
                            </div>
                        </div>
                    </td>

                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                        <div class="text-sm leading-5 text-gray-900">{{ $pelanggaran->penjelasan }}</div>
                    </td>

                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                        <span
                            class="inline-flex px-2 text-xs font-semibold leading-5
                           @if ($pelanggaran->category->name === 'ringan') text-green-800 bg-green-100
                           @elseif($pelanggaran->category->name === 'sedang') text-yellow-800 bg-yellow-100
                           @elseif($pelanggaran->category->name === 'berat') text-red-800 bg-red-100 @endif
                           rounded-full">
                            {{ $pelanggaran->category->name }}
                        </span>
                    </td>


                    <td class="px-6 py-4 text-sm leading-5 text-gray-500 whitespace-no-wrap border-b border-gray-200">
                        {{ $pelanggaran->pelanggaran_score }}</td>

                    <td
                        class="px-6 py-4 text-sm font-medium leading-5 text-right whitespace-no-wrap border-b border-gray-200">
                        <div class="dropdown dropdown-end">
                            <i class='bx bx-dots-vertical-rounded ' style="cursor:pointer; " tabindex="0" role="button"></i>
                            <ul tabindex="0" class="dropdown-content z-[1] menu p-2 shadow bg-base-100 rounded-box w-52">
                                <li><a class="text-blue-400 font-bold" onclick="openEditModal({{ $pelanggaran->id }}, '{{ $pelanggaran->name }}', {{ $pelanggaran->pelanggaran_score }}, {{ $pelanggaran->category_id }}, '{{ $pelanggaran->penjelasan }}')">Edit</a></li>
                                <!-- Edit form-->
                                @include('Admin.components.Api.edit')
                                <!--- Edit Form Eend-->
                                <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                    action="{{ route('delete.pelanggaran', $pelanggaran->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <li><button type="submit" class="btn-sm btn-danger text-red-500">HAPUS</button></li>
                                </form>
                            </ul>
                        </div>
                    </td>
            </tr>
            @empty
                <div class="alert alert-danger   font-sans font-bold text-red-600 text-center items-center mb-6">
                    <p>Data Belum Tersedia</p>
                </div>
                <!-- Table End-->
                @endforelse
                {{ $pelanggarans->links() }}
            </tbody>
        </table>
        <a class="btn btn-primary bg-green-800 font-bold mt-20" href="{{ route('add.form') }}">Add Pelanggaran  </a>
    @endsection

