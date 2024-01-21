@if (session()->has('success'))
<div  role="alert" class="alert alert-success mt-5" id="success-message">
    <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
    <span> {{ session('success') }}</span>
</div>
<script>
    setTimeout(function() {
        var successMessage = document.getElementById('success-message');
        successMessage.style.display = 'none';

        @php session() -> forget('success') @endphp
    }, 2000);
</script>
@endif
