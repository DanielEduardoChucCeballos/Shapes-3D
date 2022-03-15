<!-- Modal -->
<div wire:ignore.self class="modal fade" id="updateModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
       <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateModalLabel">Update Detail</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span wire:click.prevent="cancel()" aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
					<input type="hidden" wire:model="selected_id">
            <div class="form-group">
                <label for="height"></label>
                <input wire:model="height" type="text" class="form-control" id="height" placeholder="Height">@error('height') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="length"></label>
                <input wire:model="length" type="text" class="form-control" id="length" placeholder="Length">@error('length') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="width"></label>
                <input wire:model="width" type="text" class="form-control" id="width" placeholder="Width">@error('width') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="price"></label>
                <input wire:model="price" type="text" class="form-control" id="price" placeholder="Price">@error('price') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="filament_color_id"></label>
                <input wire:model="filament_color_id" type="text" class="form-control" id="filament_color_id" placeholder="Filament Color Id">@error('filament_color_id') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="filling_id"></label>
                <input wire:model="filling_id" type="text" class="form-control" id="filling_id" placeholder="Filling Id">@error('filling_id') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="finish_id"></label>
                <input wire:model="finish_id" type="text" class="form-control" id="finish_id" placeholder="Finish Id">@error('finish_id') <span class="error text-danger">{{ $message }}</span> @enderror
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
