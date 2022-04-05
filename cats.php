<?php include('inc/header.php'); ?>
<div class="d-flex align-items-center p-3 my-3 text-white bg-purple rounded shadow-sm">
        <div class="lh-1">
          <h1 class="h6 mb-0 text-white lh-1">Category Manager</h1>
        </div>
      </div>

    <div class="my-3 p-3 bg-body rounded shadow-sm">
    <button type="button" class="btn btn-primary btn-lg mb-2 float-right" data-toggle="modal" data-target="#exampleModal">Create New Category</button>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Category</th>
          <th scope="col">Date Create</th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Otto</td>
          <td>10/10/2022 10:20</td>
          <td>
            <button class="btn btn-secondary" data-toggle="modal" data-target="#exampleModal2"><i class="fa fa-edit"></i></button>
            <button class="btn btn-secondary"><i class="fa fa-trash"></i></button>
          </td>
        </tr>
        <tr>
          <td>Thornton</td>
          <td>@fat</td>
          <td>
            <button class="btn btn-secondary"><i class="fa fa-edit"></i></button>
            <button class="btn btn-secondary"><i class="fa fa-trash"></i></button>
          </td>
        </tr>
        <tr>
          <td>the Bird</td>
          <td>@twitter</td>
          <td>
            <button class="btn btn-secondary"><i class="fa fa-edit"></i></button>
            <button class="btn btn-secondary"><i class="fa fa-trash"></i></button>
          </td>
        </tr>
      </tbody>
    </table>
    <nav aria-label="Page navigation example">
      <ul class="pagination justify-content-center">
        <li class="page-item disabled">
          <a class="page-link" href="#" tabindex="-1">Previous</a>
        </li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">4</a></li>
        <li class="page-item"><a class="page-link" href="#">5</a></li>
        <li class="page-item">
          <a class="page-link" href="#">Next</a>
        </li>
      </ul>
    </nav>
    </div>
	
	
	<!-- Modal Create -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create New Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
			<input type="text" class="form-control" placeholder='Category name'>
		</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

	<!-- Modal Edit -->
  <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel2">Edit Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
			<input type="text" class="form-control" placeholder='Category name' value="Cat1">
		</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<?php include('inc/footer.php'); ?>   