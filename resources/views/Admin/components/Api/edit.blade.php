<!-- [BAGian modal Edit]-->
<dialog id="form_edit" class="modal">
    <div class="modal-box">
        <form id="editForm" method="POST" enctype="multipart/form-data" action="">
            @method('PUT')
            @csrf
            <h3 class="font-bold text-lg">{{ __('EditForm') }}</h3>
            <hr class="w-full h-1 my-8 bg-gray-600 border-0 rounded dark:bg-gray-700">

            <!-- Update input names and IDs -->
            <input type="text" name="name" id="edit_name" placeholder="Type here" class="input input-bordered w-full max-w-xs" />

            <!-- Assuming 'pelanggaran_score' is the correct attribute name -->
            <input type="number" name="pelanggaran_score" id="edit_pelanggaran_score" placeholder="Score" class="input input-bordered w-full max-w-xs mt-5" />

            <select name="category_id" id="edit_category_id" class="select select-bordered w-full max-w-xs mt-5">
                <option disabled selected>Categories:</option>
                @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>

            <textarea name="penjelasan" id="edit_penjelasan" class="textarea textarea-bordered mt-10" placeholder="Penjelasan"></textarea>

            <p class="py-4">Press ESC key or click the button below to close</p>

            <div class="modal-action">
                <button class="btn btn-primary" type="submit">Edit</button>
                <a class="btn btn-secondary" href="{{ route('list.pelanggaran') }}" onclick="closeEditModal()">Back</a>
            </div>
        </form>
    </div>
</dialog>
<!-- [BAGian modal Edit]-->
<script>
    function openEditModal(id, name, pelanggaran_score, category_id, penjelasan) {
        var editModal = document.getElementById('form_edit');
        var editForm = document.getElementById('editForm');
        var editName = document.getElementById('edit_name');
        var editPelanggaranScore = document.getElementById('edit_pelanggaran_score');
        var editCategoryId = document.getElementById('edit_category_id');
        var editPenjelasan = document.getElementById('edit_penjelasan');

        // tak tau apa dapet dari github orang 🌝
        editForm.action = "{{ route('edit.pelanggaran', '') }}/" + id;

        // sama 🌝
        editName.value = name;
        editPelanggaranScore.value = pelanggaran_score;
        editCategoryId.value = category_id;
        editPenjelasan.value = penjelasan;

        editModal.showModal();
    }

    function closeEditModal() {
        var editModal = document.getElementById('form_edit');
        editModal.close();
    }

</script>
