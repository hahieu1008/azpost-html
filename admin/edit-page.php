<?php include('inc/m-header.php'); ?>
<style>

</style>
      <div class="d-flex align-items-center p-3 my-3 text-white bg-purple rounded shadow-sm">
        <div class="lh-1">
          <h1 class="h6 mb-0 text-white lh-1">Edit Page</h1>
        </div>
      </div>

    <div class="my-3 p-3 bg-body rounded shadow-sm">
      <form>

        <div class="form-group">
          <label></label>
          <input type="text" class="form-control" placeholder="Title" value="Page1">
        </div>
        <div class="form-group editor editor2">
            <label></label>
            <textarea name="editor1">Content</textarea>
        </div>

        
        
        <h6>
          <button class="btn btn-lg btn-primary btn-save-post mr-3" type="submit">Save</button>
        </h6>
      </form>
    </div>
<?php include('inc/m-footer.php'); ?>   