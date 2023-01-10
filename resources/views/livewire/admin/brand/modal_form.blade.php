<div>
    <div wire:ignore.self class="modal fade" id="addBrandModal" tabindex="-1" aria-labelledby="addBrandModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addBrandModalLabel">Add Brands</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form wire:submit.prevent="storeBrand">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="name">Brand Name</label>
                            <input wire:model="name" type="text" id="" class="form-control">
                            @error('name')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="name">Brand Slug</label>
                            <input wire:model="slug" type="text" id="" class="form-control">
                            @error('slug')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="name">Status</label>
                            <input wire:model="status" type="checkbox"><br>
                            @error('status')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                            Checked=Hidden,Un-Checked=Visible
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@push('script')
    <script>
        window.addEventListener('close-modal'), event => {
            $('#addBrandModal').modal('hide');
        }
    </script>
@endpush
