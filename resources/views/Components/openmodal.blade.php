<button wire:click="openModal({{ $model->id }})">Edit</button>
@if($isOpen)
    <!-- Modal HTML structure with form inputs -->
    <form wire:submit.prevent="update">
        <!-- Form inputs -->
        <input type="text" wire:model="model.name">
        <!-- Submit button -->
        <button type="submit">Save</button>
    </form>
@endif
