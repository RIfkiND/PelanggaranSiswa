@extends('Admin.Dashboard.main')

@section('content')
    {{-- Tabel Atas --}}
    <section>
        <div class="text-center flex justify-around flex-row pt-4">
            <div class="text-slate-800 bg-white w-56 p-5 flex-col rounded-xl">
                <div class="flex flex-col">
                    <span class="text-slate-700 font-semibold text-lg border-b pb-1 border-slate-400">Ringan</span>
                    <div class="h-14 flex items-center justify-center">
                        <span class="pt-1 text-4xl font-extrabold">90</span>
                    </div>
                </div>
                <div class="flex flex-col">
                    <span>Pelanggar</span>
                    <span>190</span>
                </div>
            </div>
            <div class="text-slate-700 bg-white w-56 p-5 flex-col">
                <div class="flex flex-col">
                    <span class="text-slate-700 font-semibold">Sedang</span>
                    <span>Pelanggaraan</span>
                    <span>90</span>
                </div>
                <div class="flex flex-col">
                    <span>Pelanggar</span>
                    <span>190</span>
                </div>
            </div>
            <div class="text-slate-700 bg-white w-56 p-5 flex-col">
                <div class="flex flex-col">
                    <span class="text-slate-700 font-semibold">Berat</span>
                    <span>Pelanggaraan</span>
                    <span>90</span>
                </div>
                <div class="flex flex-col">
                    <span>Pelanggar</span>
                    <span>190</span>
                </div>
            </div>
        </div>
    </section>

    {{-- Tabel bawah --}}
    <section></section>
@endsection
