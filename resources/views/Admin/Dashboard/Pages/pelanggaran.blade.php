@extends('Admin.Dashboard.main')

@section('content')
    {{-- Tabel Atas --}}
    <section>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <link rel="stylesheet" href="{{ asset('Assets/CSS/pluss.css') }}">
        <div class="flex justify-center my-10">
            <span
                class="text-slate-600 font-semibold text-xl py-1 px-48 heading-nv-responsif shadow-md rounded-md bg-white">Pelanggaran</span>
        </div>
        <div class="text-center flex justify-around flex-row pt-4 responsif-nv-pelanggaran">
            <div class="text-white bg-laporan_bg w-56 p-5 flex-col rounded-xl shadow-nv-pelanggaran">
                <div class="flex flex-col">
                    <span class="font-semibold text-xl border-b pb-2 border-white">Ringan</span>
                    <div class="h-14 flex items-center justify-center border-b pb-1 border-white">
                        <span class="pt-1 text-4xl font-extrabold">90</span>
                    </div>
                </div>
                <div class="flex flex-col pt-3 items-center">
                    <span class="font-semibold text-lg">Pelanggar</span>
                    <span class="pt-1 text-4xl font-extrabold">190</span>
                </div>
            </div>
            <div class="text-white bg-laporan_bg2 w-56 p-5 flex-col rounded-xl shadow-md shadow-nv-pelanggaran">
                <div class="flex flex-col">
                    <span class="text-white font-semibold text-xl border-b pb-2 border-white">Sedang</span>
                    <div class="h-14 flex items-center justify-center border-b pb-1 border-white">
                        <span class="pt-1 text-4xl font-extrabold">50</span>
                    </div>
                </div>
                <div class="flex flex-col pt-3 items-center">
                    <span class="font-semibold text-lg">Pelanggar</span>
                    <span class="pt-1 text-4xl font-extrabold">120</span>
                </div>
            </div>
            <div class="text-white bg-laporan_bg3 w-56 p-5 flex-col rounded-xl shadow-md shadow-nv-pelanggaran">
                <div class="flex flex-col">
                    <span class=" font-semibold text-xl border-b pb-2 border-white">Berat</span>
                    <div class="h-14 flex items-center justify-center border-b pb-1 border-white">
                        <span class="pt-1 text-4xl font-extrabold">20</span>
                    </div>
                </div>
                <div class="flex flex-col pt-3 items-center">
                    <span class="font-semibold text-lg">Pelanggar</span>
                    <span class="pt-1 text-4xl font-extrabold">10</span>
                </div>
            </div>
        </div>
    </section>

    {{-- Tabel bawah --}}
    <section>

        <div class="flex justify-center pt-14 ">
            <div class="flex gap-6 items-center border px-5 py-1 rounded-xl
            border-slate-400 bg-white">
                <input type="text" name="" id=""
                    class="input h-6 w-full text-sm border-none text-slate-500 focus:w-80 transition-all ease-in-out s"
                    placeholder="Search">
                <img src="{{ asset('Assets/img/shapes/icons8-search.svg') }}" alt="" class="w-5">
            </div>
        </div>

        <div class="ps-16 pb-10 pt-5 ">
            <div class="dropdown dropdown-top ">
                <div tabindex="0" role="button" class="btn m-1 bg-white text-slate-600">Kategori</div>
                <ul tabindex="0" class="dropdown-content z-[1] menu p-2 shadow bg-base-100 rounded-box w-52">
                    <li><a>Ringan</a></li>
                    <li><a>Sedang</a></li>
                    <li><a>Berat</a></li>
                </ul>
            </div>
        </div>


        <div class="flex justify-center items-center w-auto px-14">

            <div
                class="rounded-2xl border p-5 md:p-10 shadow-slate-600 shadow-lg bg-white w-full md:w-4/5 lg:w-3/4 xl:w-2/3">
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead>
                            <tr class="text-gray-600 bg-gray-100">
                                <th class="px-3 py-2 text-left">NO</th>
                                <th class="px-3 py-2 text-left">Pelanggaran</th>
                                <th class="px-3 py-2 text-left">Skor</th>
                                <th class="px-3 py-2 text-left">Kategori</th>
                                <th class="px-3 py-2 text-left">EDIT</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-600 bg-white divide-y divide-gray-200">
                            <tr class="hover:bg-gray-100">
                                <td class="px-3 py-2">01</td>
                                <td class="px-3 py-2">Terlambat</td>
                                <td class="px-3 py-2">20</td>
                                <td class="px-3 py-2">Ringan</td>
                                <td class="px-3 py-2">
                                    <div class="flex justify-evenly">
                                        <button>
                                            <img src="{{ asset('Assets/img/edit.png') }}" alt="" class="w-6">
                                        </button>
                                        <button>
                                            <img src="{{ asset('Assets/img/remove.png') }}" alt="" class="w-6">
                                        </button>

                                    </div>
                                </td>
                            </tr>
                            <tr class="hover:bg-gray-100">
                                <td class="px-3 py-2">01</td>
                                <td class="px-3 py-2">Terlambat</td>
                                <td class="px-3 py-2">20</td>
                                <td class="px-3 py-2">Ringan</td>
                                <td class="px-3 py-2">-</td>
                            </tr>
                            <tr class="hover:bg-gray-100">
                                <td class="px-3 py-2">01</td>
                                <td class="px-3 py-2">Terlambat</td>
                                <td class="px-3 py-2">20</td>
                                <td class="px-3 py-2">Ringan</td>
                                <td class="px-3 py-2">-</td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection
