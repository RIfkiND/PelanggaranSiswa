@extends('Admin.AdminLayout')

@section('content')

<!--Search-->
<div class="  flex items-center justify-center">
    <form method="GET" action="{{ route('search') }}" class="max-w-[480px] w-full ">
        @csrf
        <div class="relative self-center item center ">
            <input type="text" name="search_term" class="w-full border h-12 shadow p-4 rounded-full" placeholder="search">
            <button type="submit">
                <svg class=" text-gray-500 h-5 w-5 absolute top-3.5 right-3 fill-current" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve">
                    <path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z">
                    </path>
                </svg>
            </button>
        </div>
    </form>
</div>
<!--Search End-->
<!-- Card-->
<div class="flex flex-wrap -mx-2 sm:-mx-2 md:-mx-4 mt-2">
    @forelse($siswas as $s)
    <div class="card w-full sm:w-1/2 md:w-1/2 lg:w-1/3 xl:w-1/4 bg-base-100 shadow-xl m-2 mt-2">
        <figure><img src="https://daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg" alt="Shoes" /></figure>
        <div class="card-body">
          <h2 class="card-title font-bold text-2xl">{{ $s->name }}</h2>
          <hr class="h-1  bg-gray-600 border-0 rounded dark:bg-gray-700">
          <p> Jurusan: {{ $s->jurusan->name }}</p>
          <p> Kelas: {{ $s->kelas->name }}</p>
          <p> Total Pelanggaran: {{ $s->kejadians->count() }}</p>
          <div class="card-actions justify-end">
            <button class="btn btn-primary">Show</button>
          </div>
        </div>
    </div>
    @empty
    <div role="alert" class="alert shadow-lg">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="stroke-info shrink-0 w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
        <div>
          <h3 class="font-bold">No Siswa Fund</h3>
        </div>
    </div>
    @endforelse
</div>

 <!-- Card End-->

 <div class="mt-10">
    {{ $siswas->links('pagination::tailwind') }}
</div>




    @endsection
