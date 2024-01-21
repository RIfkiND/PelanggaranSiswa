@extends('Admin.AdminLayout')
@section('content')
<hr class="w-full h-1 my-8 bg-gray-600 border-0 rounded dark:bg-gray-700">
<h2 class="font-bold text-2xl">History</h2>
<hr class="w-full h-1 my-8 bg-gray-600 border-0 rounded dark:bg-gray-700">
@forelse ($historys as $history )
    <ol class="relative border-s dark:border-black bg-white">
        <li class="mb-10  ms-4">
            <div class="absolute w-3 h-3 bg-black rounded-full mt-1.5 -start-1.5 border border-white dark:border-gray-900 dark:bg-gray-700"></div>
            <time class="mb-1 font-bold leading-none text-black   dark:text-black">{{ $history->created_at }}</time>
            <h3 class="text-lg font-semibold text-gray-900 dark:text-white"> {{ $history->pelanggaran->name }}</h3>
            <p class="mb-4 text-base font-normal text-gray-500 dark:text-gray-400">{{ $history->alasan }}</p>
            <a href="#" class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:outline-none focus:ring-gray-200 focus:text-blue-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-gray-700">Learn more <svg class="w-3 h-3 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
      </svg></a>
    </ol>
    @empty
    <li> No history</li>

 @endforelse
<div>
    {{ $historys->links() }}
</div>

@endsection
