<form action="" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="name" class="form-label">Category Name</label>
        <input type="text" name="name" id="name" value="" class="form-control" placeholder="Category name"
            required>
            @error('name')
                <span class="text-danger">{{ $message }}</span>
            @enderror
    </div>
   >
    
    <div class="form-group float-right">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-success">Update</button>
    </div>
</form>