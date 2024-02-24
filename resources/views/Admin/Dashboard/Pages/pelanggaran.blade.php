@extends('Admin.Dashboard.main')

@section('content')
    {{-- Tabel Atas --}}
    <section>
        <link rel="stylesheet" href="{{ asset('Assets/CSS/pluss.css') }}">
        <div class="flex justify-center my-10">
            <span class="text-slate-600 font-semibold text-xl py-1 px-48 shadow-md rounded-md bg-white">Pelanggaran</span>
        </div>
        <div class="text-center flex justify-around flex-row pt-4 pb-96">
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
    <section></section>
@endsection
