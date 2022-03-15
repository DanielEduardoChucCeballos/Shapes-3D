<!-- Modal -->
<div wire:ignore.self class="modal fade" id="createDataModal" data-backdrop="static" tabindex="-1" role="dialog"
    aria-labelledby="createDataModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createDataModalLabel">Create New Filament Color</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true close-btn">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        {{-- <input wire:model="color_id" type="text" class="form-control" id="color_id"
                        placeholder="Color Id"> --}}
                        <label for="color_id"></label>
                        <select wire:model="color_id" class="form-control">
                            <option value="#">-- Selecciona un id</option>

                            @foreach ($colors as $color)
                                <option value="{{ $color->id }}">{{ $color->name }}</option>
                            @endforeach
                        </select>
                        @error('color_id')
                            <span class="error text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="filament_id"></label>
                        {{-- <input wire:model="filament_id" type="text" class="form-control" id="filament_id"
                            placeholder="Filament Id"> --}}
                        <select wire:model="filament_id" class="form-control">
                            <option value="#">-- Selecciona un id</option>

                            @foreach ($filaments as $filament)
                                <option value="{{ $filament->id }}">{{ $filament->name }}</option>
                            @endforeach
                        </select>
                        @error('filament_id')
                            <span class="error text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary close-btn" data-dismiss="modal">Close</button>
                <button type="button" wire:click.prevent="store()" class="btn btn-primary close-modal">Save</button>
            </div>
        </div>
    </div>
</div>
