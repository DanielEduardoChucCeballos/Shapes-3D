<!-- Modal -->
<div wire:ignore.self class="modal fade" id="createDataModal" data-backdrop="static" tabindex="-1" role="dialog"
    aria-labelledby="createDataModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createDataModalLabel">Create New Prospect</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true close-btn">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="detail_id"></label>
                        {{-- <input wire:model="detail_id" type="text" class="form-control" id="detail_id" placeholder="Detail Id"> --}}
                        <select wire:model="detail_id" class="form-control">
                            <option value="#">-- Selecciona un id</option>

                            @foreach ($detail as $detail)
                                <option value="{{ $detail->id }}">{{ $detail->id }}</option>
                            @endforeach
                        </select>
                        @error('detail_id')
                            <span class="error text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="personal_information_id"></label>
                        {{-- <input wire:model="personal_information_id" type="text" class="form-control" id="personal_information_id" placeholder="Personal Information Id"> --}}
                        <select wire:model="personal_information_id" class="form-control">
                            <option value="#">-- Selecciona un id</option>

                            @foreach ($personal_information as $personal_information)
                                <option value="{{ $personal_information->id }}">{{ $personal_information->id }}
                                </option>
                            @endforeach
                        </select>
                        @error('personal_information_id')
                            <span class="error text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="description_model_id"></label>
                        {{-- <input wire:model="description_model_id" type="text" class="form-control" id="description_model_id" placeholder="Description Model Id"> --}}
                        <select wire:model="description_model_id" class="form-control">
                            <option value="#">-- Selecciona un id</option>
                            @foreach ($description_model as $description_model)
                                <option value="{{ $description_model->id }}">{{ $description_model->id }}</option>
                            @endforeach
                        </select>
                        @error('description_model_id')
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
