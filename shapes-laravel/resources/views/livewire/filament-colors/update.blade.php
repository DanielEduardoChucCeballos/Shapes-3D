<!-- Modal -->
<div wire:ignore.self class="modal fade" id="updateModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
       <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateModalLabel">Editar Caracteristicas de color</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span wire:click.prevent="cancel()" aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
					<input type="hidden" wire:model="selected_id">
                    <div class="form-group">
                        <label for="color_id"></label>
                        <select wire:model="color_id" class="form-control">
                            <option>---</option>
                            @foreach($colors as $color)
                            <option value="{{ $color->id }}">{{ $color->name }}</option>
                            @endforeach
                        </select>
                        <input wire:model="color_id" type="text" class="form-control" id="color_id" placeholder="Color Id">@error('color_id') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="filament_id"></label>
                        <select wire:model="color_id" class="form-control">
                            <option>---</option>
                            @foreach($filaments as $filament)
                            <option value="{{ $filament->id }}">{{ $filament->name }}</option>
                            @endforeach
                        </select>
                        <label for="filament_id"></label>
                        <input wire:model="filament_id" type="text" class="form-control" id="filament_id" placeholder="Filament Id">@error('filament_id') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" wire:click.prevent="cancel()" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" wire:click.prevent="update()" class="btn btn-primary" data-dismiss="modal">Save</button>
            </div>
       </div>
    </div>
</div>
