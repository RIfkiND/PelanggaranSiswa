@extends('Admin.Dashboard.main')
@section('content')
    <link rel="stylesheet" href="{{ asset('Assets/CSS/pluss.css') }}">
    <div class="px-6 py-4 sm:px-10 md:flex md:justify-between md:items-center text-slate-700 md:gap-2 flexings">
        <div class="flex flexings md:gap-4 md:ps-10">
            <div class="mb-2 md:mb-0">
                <div class="bg-white py-1 px-4 rounded-md">
                    <span>Filter By Jurusan</span>
                    <select name="" id="SJurusan" class="px-5 bg-transparent border-none appearance-none"
                        onchange="HpusIcon()">
                        <option value="-" selected>-</option>
                       @forelse ($jurusans as  $j)
                       <option value="{{ $j->id }}">{{ $j->name }}</option>
                       @empty
                       <option value="empty" disabled>empty</option>
                       @endforelse
                    </select>
                </div>
            </div>
            <div>
                <div class="bg-white px-4 py-1 rounded-md">
                    <span>Filter By Kelas</span>
                    <select name="" id="SKelas" class="px-5 bg-transparent border-none pe-8 appearance-none"
                        onchange="HpusIcon()">
                        <option value="-" selected>-</option>
                        @forelse ($kelass as  $sa)
                        <option value="{{ $sa->id }}">{{ $sa->kelas }}</option>

                        @empty
                        <option value="empty">Empty</option>
                        @endforelse

                        <!-- More options -->
                    </select>
                </div>
            </div>
        </div>
        <div class="mt-4 md:mt-0">
            {{-- <div class="flex flex-col md:flex-row md:gap-4">
                <div class="mb-2 md:mb-0">
                    <div class="bg-white w-full md:w-80 py-1 flex items-center justify-center rounded-md">
                        <span>Birth Date From</span>
                        <input type="date" name="" id=""
                            class="border-transparent focus:outline-none bg-transparent">
                    </div>
                </div>
                <div>
                    <div class="bg-white w-full md:w-80 py-1 flex items-center justify-center rounded-md">
                        <span>Birth Date To</span>
                        <input type="date" name="" id="" class="border-transparent focus:outline-none">
                    </div>
                </div>
            </div> --}}

            <div class="flex flex-col gap-2">
                <div class="bg-white w-80 flex items-center justify-center rounded-md">
                    <table>
                        <tr>
                            <td><span>History Date From</span></td>
                            <td><input type="date" name="" id=""
                                    class="border-transparent focus:outline-none bg-transparent"></td>
                        </tr>
                    </table>
                </div>
                <div class="bg-white w-80 flex items-center justify-center rounded-md">
                    <table>
                        <tr>
                            <td class="w-28"><span>History Date To</span></td>
                            <td><input type="date" name="" id=""
                                    class="border-transparent focus:outline-none bg-transparent"></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>


    <div class="flex justify-center items-center w-auto px-14 ">
        <div class="rounded-2xl border p-5 md:p-10 shadow-slate-600 shadow-lg bg-white w-full md:w-4/5 lg:w-3/4 xl:w-2/3">
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead>
                        <tr class="text-gray-600 bg-gray-100">
                            <th class="px-3 py-2 text-left">NIS</th>
                            <th class="px-3 py-2 text-left">Nama</th>
                            <th class="px-3 py-2 text-left">Kelas</th>
                            <th class="px-3 py-2 text-left">Jurusan</th>
                            <th class="px-3 py-2 text-left">Pelanggaran</th>
                            <th class="px-3 py-2 text-left">Total</th>
                            <th class="px-3 py-2 text-left">Tanggal</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-600 bg-white divide-y divide-gray-200">
                        @forelse ($siswas as $siswa)
                        @foreach($siswa->kejadian as $kejadian)
                            <tr class="hover:bg-gray-100">
                                <td class="px-3 py-2">{{ $siswa->nis }}</td>
                                <td class="px-3 py-2">{{ $siswa->name }}</td>
                                <td class="px-3 py-2">{{ optional($siswa->kelas)->kelas }}</td>
                                <td class="px-3 py-2">{{ optional($siswa->kelas)->name }}</td>
                                <td class="px-3 py-2">{{ optional($kejadian->pelanggaran)->name }}</td>
                                <td class="px-3 py-2">{{ optional($siswa->kejadian)->count() }}</td>
                                <td class="px-3 py-2">{{ $kejadian->created_at }}</td>
                            </tr>
                        @endforeach
                    @empty
                        <tr class="hover:bg-gray-100">
                            <td class="px-3 py-2">-</td>
                            <td class="px-3 py-2">-</td>
                            <td class="px-3 py-2">-</td>
                            <td class="px-3 py-2">-</td>
                            <td class="px-3 py-2">-</td>
                            <td class="px-3 py-2">-</td>
                            <td class="px-3 py-2">-</td>
                        </tr>
                    @endforelse
                    
                    </tbody>
                    {{ $siswas->links() }}
                </table>
            </div>
        </div>
    </div>

    <div class="flex justify-end pe-12  pt-20 ">
        <div class="dropdown dropdown-top dropdown-end text-slate-600">
            <div tabindex="0" role="button" class="btn m-1 bg-white gap-5">
                <span>Export</span>
                <img src=" {{ asset('Assets/img/icons/export.png') }} " alt="" class="w-5">
            </div>
            <ul tabindex="0" class="dropdown-content z-[1] menu p-2 shadow bg-base-100 rounded-box w-52">
                <li><a>
                        <div class="flex gap-2 cursor-pointer text-x items-center">
                            <img src="{{ asset('Assets/img/shapes/pdf-svgrepo-com.svg') }}" alt="" width="25"
                                id="pdf" />
                            <label for="excel" class="">PDF</label>
                        </div>
                    </a></li>
                <li><a>
                        <div class="flex gap-2 cursor-pointer text-x items-center">
                            <img src="{{ asset('Assets/img/shapes/excel.svg') }}" alt="" width="25"
                                id="pdf" />
                            <label for="excel" class="">Excel</label>
                        </div>
                    </a></li>
            </ul>
        </div>
    </div>

    <script>
        function HpusIcon() {
            const iconK = document.getElementById('SKelas');
            const iconJ = document.getElementById('SJurusan');

            iconJ.classList.add('bg-none');
            iconK.classList.add('bg-none')
        }
    </script>
@endsection
