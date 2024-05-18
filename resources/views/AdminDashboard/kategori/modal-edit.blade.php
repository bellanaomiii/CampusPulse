<!-- Button trigger modal -->
<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editCategory{{ $kategori->id }}">
    Edit
</button>


<!-- Modal -->
<div class="modal fade" id="editkategori{{ $kategori->id }}" tabindex="-1" aria-labelledby="editkategoriLabel{{ $kategori->id }}" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="editkategoriLabel{{ $kategori->id }}">Edit kategori</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-start">
                <form action="{{ route('admin.categories.update', $kategori) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <div class="mb-3">
                            <label for="kategori" class="form-label">kategori Name</label>
                            <input type="text" name="kategori" value="{{ $kategori->kategori }}" class="form-control" id="kategori">
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
            </form>
        </div>
    </div>
</div>
