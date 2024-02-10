@extends('snj-dasboard.main')
@section('content')
    <div class="">
        <div class="flex justify-between px-10 items-baseline text-slate-700 py-6">
            <div class="flex gap-2">
                <div class="bg-white py-1 px-4 rounded-full">
                    <span>Filter By Jurusan</span>
                    <select name="" id="SJurusan" class="px-5 bg-transparent border-none appearance-none"
                        onchange="HpusIcon()">
                        <option value="-" selected>-</option>
                        <option value="Akl 1">Akl 1</option>
                        <option value="Akl 2">Akl 2</option>
                        <option value="Akl 3">Akl 3</option>
                        <option value="Akl 4">Akl 4</option>
                        <option value="MPLB 1">MPLB 1</option>
                        <option value="MPLB 2">MPLB 2</option>
                        <option value="MPLB 3">MPLB 3</option>
                        <option value="MPLB 4">MPLB 4</option>
                        <option value="PM 1">PM 1</option>
                        <option value="PM 2">PM 2</option>
                        <option value="PM 3">PM 3</option>
                        <option value="HTL 1">HTL 1</option>
                        <option value="HTL 2">HTL 2</option>
                        <option value="DKV">DKV</option>
                        <option value="PPLG">PPLG</option>
                    </select>
                </div>
                <div class="bg-white px-4 py-1 rounded-full">
                    <span>FIlter By Kelas</span>
                    <select name="" id="SKelas" class="px-5 bg-transparent border-none pe-8 appearance-none"
                        onchange="HpusIcon()">
                        <option value="-" selected>-</option>
                        <option value="X">X</option>
                        <option value="XI">XI</option>
                        <option value="XII">XII</option>
                    </select>
                </div>
            </div>
            <div class="flex flex-col gap-2">
                <div class="bg-white w-80 py-1 flex items-center justify-center rounded-full">
                    <span>Birth Date From</span>
                    <input type="date" name="" id="" class="border-transparent focus:outline-none">
                </div>
                <div class="bg-white w-80 py-1 flex items-center justify-center rounded-full">
                    <span>Birth Date To</span>
                    <input type="date" name="" id="" class="border-transparent focus:outline-none">
                </div>
            </div>
        </div>

        <div class="flex justify-center items-center">
            <div class="rounded-2xl border p-10 shadow-slate-600 shadow-lg bg-white">
                <table cellpadding="10" class="">
                    <tr class="text-gray-600 shadow-md">
                        <td class="td-head px-3">NIS</td>
                        <td class="td-head px-3">Nama</td>
                        <td class="td-head px-3">Kelas</td>
                        <td class="td-head px-3">Jurusan</td>
                        <td class="td-head px-3">
                            <div class="flex gap-2">
                                <button>Pelanggaran</button>
                                {{-- <i class="bi bi-exclamation-triangle-fill"></i> --}}
                            </div>
                        </td>
                        <td class="td-head px-3">Total</td>
                        <td class="td-head px-3">Tanggal</td>
                    </tr>
                    <tr class="text-gray-600 hover:bg-gray-100">
                        <td class="px-3">07252743847</td>
                        <td class="px-3">Ade Nova Wiguna</td>
                        <td class="px-3">XI</td>
                        <td class="px-3">PPLG</td>
                        <td class="px-3">Terlambat</td>
                        <td class="px-3">99</td>
                        <td class="px-3">22/2/24</td>
                    </tr>
                    <tr class="text-gray-600">
                        <td class="">07252743847</td>
                        <td class="">Ade Nova Wiguna</td>
                        <td class="">XI</td>
                        <td class="">PPLG</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="text-gray-600 mt-4 flex justify-end pe-9 pb-96">
            <div class="p-2 bg-white flex flex-col justify-center items-center rounded-2xl shadow-lg shadow-slate-500 w-64">
                <span class="font-semibold pb-2">Export To</span>
                <div class="flex gap-5">
                    <div class="flex gap-2 btn-print cursor-pointer text-x items-center">
                        <img src="{{ asset('Assets/img/shapes/pdf-svgrepo-com.svg') }}" alt="" width="25"
                            id="pdf" />
                        <label for="excel" class="">PDF</label>
                    </div>
                </div>
            </div>
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
