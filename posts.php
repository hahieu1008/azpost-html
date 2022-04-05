<?php include('inc/header.php'); ?>
<div class="d-flex align-items-center p-3 my-3 text-white bg-purple rounded shadow-sm">
        <div class="lh-1">
          <h1 class="h6 mb-0 text-white lh-1">Post Manager</h1>
        </div>
      </div>

    <div class="my-3 p-3 bg-body rounded shadow-sm">
    <a class="float-right" href="index.php"><button type="button" class="btn btn-primary btn-lg mb-2">Create New Post</button></a>
    <table class="table">
      <thead>
        <tr>
          <th scope="col" style='min-width: 150px;'>Title</th>
          <th scope="col">Category</th>
          <th scope="col">Date Create</th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td >Mark</td>
          <td>Otto</td>
          <td>10/10/2022 10:20</td>
          <td>
            <a href='post.php?page=AAA'><button class="btn btn-secondary"><i class="fa fa-solid fa-eye"></i></button></a>
            <a href='edit-post.php?id=123'><button class="btn btn-secondary"><i class="fa fa-edit"></i></button></a>
            <button class="btn btn-secondary"><i class="fa fa-trash"></i></button>
          </td>
        </tr>
        <tr>
          <td>Jacob</td>
          <td>Thornton</td>
          <td>@fat</td>
          <td>
          <a href='post.php?page=AAA'><button class="btn btn-secondary"><i class="fa fa-solid fa-eye"></i></button></a>
          <a href='edit-post.php?id=123'><button class="btn btn-secondary"><i class="fa fa-edit"></i></button></a>
            <button class="btn btn-secondary"><i class="fa fa-trash"></i></button>
          </td>
        </tr>
        <tr>
          <td>Larry</td>
          <td>the Bird</td>
          <td>@twitter</td>
          <td>
          <a href='post.php?page=AAA'><button class="btn btn-secondary"><i class="fa fa-solid fa-eye"></i></button></a>
          <a href='edit-post.php?id=123'><button class="btn btn-secondary"><i class="fa fa-edit"></i></button></a>
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
<?php include('inc/footer.php'); ?>   