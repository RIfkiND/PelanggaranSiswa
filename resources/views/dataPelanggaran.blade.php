@extends('snj-dasboard.main')
@section('content')
    <div class="px-6 py-4 sm:px-10 md:flex md:justify-between md:items-center text-slate-700 md:gap-2">
        <div class="flex flex-col md:flex-row md:gap-4">
            <div class="mb-2 md:mb-0">
                <div class="bg-white py-1 px-4 rounded-full">
                    <span>Filter By Jurusan</span>
                    <select name="" id="SJurusan" class="px-5 bg-transparent border-none appearance-none">
                        <option value="-" selected>-</option>
                        <option value="Akl 1">Akl 1</option>
                        <option value="Akl 2">Akl 2</option>
                        <!-- More options -->
                    </select>
                </div>
            </div>
            <div>
                <div class="bg-white px-4 py-1 rounded-full">
                    <span>Filter By Kelas</span>
                    <select name="" id="SKelas" class="px-5 bg-transparent border-none pe-8 appearance-none">
                        <option value="-" selected>-</option>
                        <option value="X">X</option>
                        <option value="XI">XI</option>
                        <!-- More options -->
                    </select>
                </div>
            </div>
        </div>
        <div class="mt-4 md:mt-0">
            {{-- <div class="flex flex-col md:flex-row md:gap-4">
                <div class="mb-2 md:mb-0">
                    <div class="bg-white w-full md:w-80 py-1 flex items-center justify-center rounded-full">
                        <span>Birth Date From</span>
                        <input type="date" name="" id=""
                            class="border-transparent focus:outline-none bg-transparent">
                    </div>
                </div>
                <div>
                    <div class="bg-white w-full md:w-80 py-1 flex items-center justify-center rounded-full">
                        <span>Birth Date To</span>
                        <input type="date" name="" id="" class="border-transparent focus:outline-none">
                    </div>
                </div>
            </div> --}}

            <div class="flex flex-col gap-2">
                <div class="bg-white w-80 flex items-center justify-center rounded-full">
                    <table>
                        <tr>
                            <td><span>Birth Date From</span></td>
                            <td><input type="date" name="" id=""
                                    class="border-transparent focus:outline-none bg-transparent"></td>
                        </tr>
                    </table>
                </div>
                <div class="bg-white w-80 flex items-center justify-center rounded-full">
                    <table>
                        <tr>
                            <td class="w-28"><span>Birth Date To</span></td>
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
                        <tr class="hover:bg-gray-100">
                            <td class="px-3 py-2">07252743847</td>
                            <td class="px-3 py-2">Ade Nova Wiguna</td>
                            <td class="px-3 py-2">XI</td>
                            <td class="px-3 py-2">PPLG</td>
                            <td class="px-3 py-2">Terlambat</td>
                            <td class="px-3 py-2">99</td>
                            <td class="px-3 py-2">22/2/24</td>
                        </tr>
                        <tr class="hover:bg-gray-100">
                            <td class="px-3 py-2">07252743847</td>
                            <td class="px-3 py-2">Ade Nova Wiguna</td>
                            <td class="px-3 py-2">XI</td>
                            <td class="px-3 py-2">PPLG</td>
                            <td class="px-3 py-2"></td>
                            <td class="px-3 py-2"></td>
                            <td class="px-3 py-2"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="text-gray-600 mt-4 flex justify-end pe-9 pb-96">
        <div class="p-2 bg-white flex flex-col justify-center items-center rounded-2xl shadow-lg shadow-slate-500 md:w-64">
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
