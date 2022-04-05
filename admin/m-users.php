<?php include('inc/m-header.php'); ?>
<div class="d-flex align-items-center p-3 my-3 text-white bg-purple rounded shadow-sm">
        <div class="lh-1">
          <h1 class="h6 mb-0 text-white lh-1">Users Manager</h1>
        </div>
      </div>

    <div class="my-3 p-3 bg-body rounded shadow-sm">
    <div class="row">
      <div class="col">
        <div class="mb-3">
          <input type="text" class="form-control" placeholder='Name'>
        </div>
      </div>
      <div class="col">
        <div class="mb-3">
          <input type="text" class="form-control" placeholder='Email'>
        </div>
      </div>
      <div class="col">
        <div class="mb-3">
            <button type="button" class="btn btn-primary mb-2">Search</button>
          </div>
      </div>
    </div>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Name</th>
          <th scope="col">Email</th>
          <th scope="col">Date Create</th>
          <th scope="col">Status</th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td >Mark</td>
          <td>Otto</td>
          <td>@mdo</td>
          <td>123</td>
          <td>
            <button class="btn btn-secondary"><i class="fa fa-trash"></i></button>
          </td>
        </tr>
        <tr>
          <td>Jacob</td>
          <td>Thornton</td>
          <td>@fat</td>
          <td>123</td>
          <td>
            <button class="btn btn-secondary"><i class="fa fa-trash"></i></button>
          </td>
        </tr>
        <tr>
          <td>Larry</td>
          <td>the Bird</td>
          <td>@twitter</td>
          <td>123</td>
          <td>
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
<?php include('inc/m-footer.php'); ?>   