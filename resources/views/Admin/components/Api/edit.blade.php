<!-- [BAGian modal Edit]-->
<dialog id="form_edit" class="modal">
    <div class="modal-box">
        <h3 class="font-bold text-lg">Hello!</h3>
        <p class="py-4">Press ESC key or click the button below to close</p>
        <div class="modal-action">
            <form method="POST" enctype="multipart/form-data" action="{{ route('edit.pelanggaran', $pelanggaran->id) }}">
                @method('PUT')
                @csrf
                <button class="btn btn-primary" type="submit">Edit</button>
                <a class="btn btn-secondary" href="{{ route('list.pelanggaran') }}"> Back</a>
            </form>
        </div>
    </div>
</dialog>
<!-- [BAGian modal Edit]-->
<script>
    function openEditModal() {
        var editModal = document.getElementById('form_edit');
        editModal.showModal();
    }

    function closeEditModal() {
        var editModal = document.getElementById('form_edit');
        editModal.close();
    }
</script>
