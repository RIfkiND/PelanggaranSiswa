@extends('Admin.AdminLayout')

@section('content')
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
            @foreach ( $pelanggarans as $pelanggaran )
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
                        <div class="text-sm font-medium leading-5 text-gray-900"><strong>{{ $pelanggaran->name }}</strong></div>
                    </div>
                </div>
            </td>

            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                <div class="text-sm leading-5 text-gray-900">{{ $pelanggaran->penjelasan }}</div>
            </td>

            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                <span
                    class="inline-flex px-2 text-xs font-semibold leading-5
                           @if($pelanggaran->category->name === 'ringan') text-green-800 bg-green-100
                           @elseif($pelanggaran->category->name === 'sedang') text-yellow-800 bg-yellow-100
                           @elseif($pelanggaran->category->name === 'berat') text-red-800 bg-red-100
                           @endif
                           rounded-full">
                    {{ $pelanggaran->category->name }}
                </span>
            </td>


            <td
                class="px-6 py-4 text-sm leading-5 text-gray-500 whitespace-no-wrap border-b border-gray-200">
                {{ $pelanggaran->pelanggaran_score }}</td>

            <td
                class="px-6 py-4 text-sm font-medium leading-5 text-right whitespace-no-wrap border-b border-gray-200">
            <div class="dropdown dropdown-end">
                <svg tabindex="0"  role="button"  xmlns="http://www.w3.org/2000/svg" height="30" width="20" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z"/></svg>
                <ul tabindex="0" class="dropdown-content z-[1] menu p-2 shadow bg-base-100 rounded-box w-52">
                    <li><a class="text-blue-400 font-bold" onclick="form_edit.showModal()" data-target="">Edit</a></li>
                    <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('delete.pelanggaran',$pelanggaran->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                     <li><button type="submit" class="btn-sm btn-danger text-red-500">HAPUS</button></li>
                    </form>
                  </ul>
            </div>
            </td>
        </tr>
        @endforeach
        {{ $pelanggarans->links() }}
    </tbody>
</table>
<a class="btn btn-primary bg-green-800 font-bold mt-20" href="{{ route('add.form') }}">Add Pelanggaran ➕ </a>

@endsection

@include('Admin.components.Api.edit')
