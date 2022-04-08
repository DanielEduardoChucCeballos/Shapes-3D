<!-- Modal -->
<div wire:ignore.self class="modal fade" id="createDataModal" data-backdrop="static" tabindex="-1" role="dialog"
    aria-labelledby="createDataModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createDataModalLabel">Crear nuevo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true close-btn">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="height"></label>
                        <input wire:model="height" type="text" class="form-control" id="height" placeholder="Peso">
                        @error('height')
                            <span class="error text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="length"></label>
                        <input wire:model="length" type="text" class="form-control" id="length" placeholder="Longitud">
                        @error('length')
                            <span class="error text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="width"></label>
                        <input wire:model="width" type="text" class="form-control" id="width" placeholder="Ancho">
                        @error('width')
                            <span class="error text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="price"></label>
                        <input wire:model="price" type="text" class="form-control" id="price" placeholder="Precio">
                        @error('price')
                            <span class="error text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="filament_color_id"></label>
                        {{-- <input wire:model="filament_color_id" type="text" class="form-control" id="filament_color_id" placeholder="Filament Color Id"> --}}
                        <select wire:model="filament_color_id" class="form-control">
                            <option value="#">-- Selecciona un color de filamento id</option>

                            @foreach ($filament_color as $filament_color)
                                <option value="{{ $filament_color->id }}">{{ $filament_color->filament->name }}</option>
                            @endforeach
                        </select>
                        @error('filament_color_id')
                            <span class="error text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="filling_id"></label>
                        {{-- <input wire:model="filling_id" type="text" class="form-control" id="filling_id" placeholder="Filling Id"> --}}
                        <select wire:model="filling_id" class="form-control">
                            <option value="#">-- Selecciona un relleno id</option>

                            @foreach ($filling as $filling)
                                <option value="{{ $filling->id }}">{{ $filling->name }}</option>
                            @endforeach
                        </select>
                        @error('filling_id')
                            <span class="error text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="finish_id"></label>
                        {{-- <input wire:model="finish_id" type="text" class="form-control" id="finish_id" placeholder="Finish Id"> --}}
                        <select wire:model="finish_id" class="form-control">
                            <option value="#">-- Selecciona un acabado id</option>

                            @foreach ($finish as $finish)
                                <option value="{{ $finish->id }}">{{ $finish->name }}</option>
                            @endforeach
                        </select>
                        @error('finish_id')
                            <span class="error text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <!--button type="button" class="btn btn-secondary close-btn" data-dismiss="modal">Close</button-->
                <button type="button" wire:click.prevent="store()" class="btn btn-primary close-modal"><i class="fas fa-save"></i></button>
            </div>
        </div>
    </div>
</div>
