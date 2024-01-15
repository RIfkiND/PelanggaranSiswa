
<style>
     .active-link {
            background-color: #7185f4;
            color: #fff;
        }
</style>
<!--TOP NAV START-->
<div class="flex items-center justify-center mt-8">
    <div class="flex items-center">
        <img class="w-12 h-14" viewBox="0 0 512 512" fill="none"  src="{{ asset('Assets/Image/Logo Smk.png') }}">
        <span class="mx-2 text-2xl font-semibold text-white">Dashboard</span>
    </div>
</div>
<!--TOP Nav END-->

<nav class="mt-10">
    <a class=" nav-link flex items-center px-6 py-2 mt-4  text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100" href="{{ route('admin.table') }}">
        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"></path>
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"></path>
        </svg>

        <span class="mx-3">Dashboard</span>
    </a>

    <a class=" nav-link flex items-center px-6 py-2 mt-4 text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100" href={{ route('list.pelanggaran') }}>
        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 14v6m-3-3h6M6 10h2a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2zm10 0h2a2 2 0 002-2V6a2 2 0 00-2-2h-2a2 2 0 00-2 2v2a2 2 0 002 2zM6 20h2a2 2 0 002-2v-2a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2z">
            </path>
        </svg>

        <span class="mx-3">List Pelangggaran</span>
    </a>

    <a class=" nav-link flex items-center px-6 py-2 mt-4 text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100" href="#">
        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10">
            </path>
        </svg>

        <span class="mx-3">Tables</span>
    </a>


    <a class="nav-link flex items-center px-6 py-2 mt-4 text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100" href="#">
        <svg  class ="w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 101 101" fill="none" stroke="currentColor" >
            <path  stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M50.4 54.5c10.1 0 18.2-8.2 18.2-18.2S60.5 18 50.4 18s-18.2 8.2-18.2 18.2 8.1 18.3 18.2 18.3zm0-31.7c7.4 0 13.4 6 13.4 13.4s-6 13.4-13.4 13.4S37 43.7 37 36.3s6-13.5 13.4-13.5zM18.8 83h63.4c1.3 0 2.4-1.1 2.4-2.4 0-12.6-10.3-22.9-22.9-22.9H39.3c-12.6 0-22.9 10.3-22.9 22.9 0 1.3 1.1 2.4 2.4 2.4zm20.5-20.5h22.4c9.2 0 16.7 6.8 17.9 15.7H21.4c1.2-8.9 8.7-15.7 17.9-15.7" >
            </path>
        </svg>
        <span class="mx-3">Siswa</span>
    </a>

    <a class="nav-link flex items-center px-6 py-2 mt-4 text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100" href="#">
        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
            </path>
        </svg>

        <span class="mx-3">History</span>
    </a>
</nav>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const links = document.querySelectorAll('.nav-link');

        links.forEach(link => {
            link.addEventListener('click', () => {
                // Remove the 'active-link' class from all links
                links.forEach(otherLink => otherLink.classList.remove('active-link'));
                // Add the 'active-link' class to the clicked link
                link.classList.add('active-link');
            });

            // Check if the link's href matches the current URL
            const currentUrl = window.location.href;
            if (link.getAttribute('href') === currentUrl) {
                link.classList.add('active-link');
            }
        });
    });
</script>

