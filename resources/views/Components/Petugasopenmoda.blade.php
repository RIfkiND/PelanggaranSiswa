@if($isOpen)
    <!-- Modal HTML structure with form inputs -->
    <form wire:submit.prevent="update">
        <!-- Form inputs -->
        <input type="text" wire:model="model.name">
        <!-- Submit button -->
        <button type="submit" @if($isDisabled) disabled @endif>Save</button>
    </form>
@endif
