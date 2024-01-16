@extends('Admin.AdminLayout')

@section('content')
    <!-- component -->

    <!-- COMPONENT CODE -->
    <div class="container mx-auto my-4 px-4 lg:px-20">

        <div class="w-full mt-10">
            <div class="flex">
                <h1 class="font-bold uppercase text-5xl">Tambah </h1>
            </div>
            <form action="{{ route('store.pelaggaran') }}" enctype="multipart/form-data" method="POST">
                @method('POST')
                @csrf
                <div class="grid grid-cols-1 gap-5 md:grid-cols-2 mt-5">
                    <input
                        class="w-full bg-gray-50 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"
                        type="text" placeholder="Name*" name="name" id="name"/>
                    <input
                        class="w-full bg-gray-50 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"
                        type="number" placeholder="Score*" name="pelanggaran_score" id="pelanggaran_score" />
                    <select id="category_id" name="category_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                        <option disabled selected> Categories :</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>

                </div>
                <div class="my-4">
                    <textarea placeholder="alasan*" id="alasan" name="alasan"
                        class="w-full h-32 bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"></textarea>
                </div>
                <div class="my-2 w-1/2 lg:w-1/4">
                    <button type="submit"
                        class=" mt-10 uppercase text-sm font-bold tracking-wid bg-green-700 text-gray-100 p-3 rounded-lg w-full
                      focus:outline-none focus:shadow-outline">
                        Add
                     </button>
                </div>
            </form>
        @endsection
