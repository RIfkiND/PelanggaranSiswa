
<dialog id="form_edit" class="modal">
    <div class="modal-box">
      <h3 class="font-bold text-lg">Hello!</h3>
      <p class="py-4">Press ESC key or click the button below to close</p>
      <div class="modal-action">
        <form method="POST" enctype="multipart/form-data" action="{{ route('edit.pelanggaran',$pelanggaran->id) }}">
            @csrf
          <button class="btn btn-primary" type="submit"> Edit</button>
          <button class="btn" >Close</button>
        </form>
      </div>
    </div>
</dialog>

