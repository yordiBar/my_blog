<?php

include("../admin/header.php");
include("../admin/sidebar.php");

?>




    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
          </div>
          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar"></span>
            This week
          </button>
        </div>
      </div>

      <h2>Recent Posts</h2>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">Date Posted</th>
              <th scope="col">Title</th>
              <th scope="col">Author</th>
              <th scope="col">Actions</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1,001</td>
              <td>random</td>
              <td>data</td>
              <td><a href="#" class="btn btn-warning">Edit</a> <a href="#" class="btn btn-danger">Delete</a></td>
            </tr>
            <tr>
              <td>1,002</td>
              <td>placeholder</td>
              <td>irrelevant</td>
              <td><a href="#" class="btn btn-warning">Edit</a> <a href="#" class="btn btn-danger">Delete</a></td>
            </tr>
            <tr>
              <td>1,003</td>
              <td>data</td>
              <td>rich</td>
              <td><a href="#" class="btn btn-warning">Edit</a> <a href="#" class="btn btn-danger">Delete</a></td>
            </tr>
            <tr>
              <td>1,003</td>
              <td>information</td>
              <td>placeholder</td>
              <td><a href="#" class="btn btn-warning">Edit</a> <a href="#" class="btn btn-danger">Delete</a></td>
            </tr>
          </tbody>
        </table>

        <h2>Recent Comments</h2>
        <div class="table-responsive">
            <table class="table table-striped table-sm">
            <thead>
                <tr>
                <th scope="col">Name</th>
                <th scope="col">Comment</th>

                <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td>1,001</td>
                <td>random</td>

                <td><a href="#" class="btn btn-success">Approve</a> <a href="#" class="btn btn-danger">Delete</a></td>
                </tr>
                <tr>
                <td>1,002</td>
                <td>placeholder</td>

                <td><a href="#" class="btn btn-success">Approve</a> <a href="#" class="btn btn-danger">Delete</a></td>
                </tr>
                <tr>
                <td>1,003</td>
                <td>data</td>

                <td><a href="#" class="btn btn-success">Approve</a> <a href="#" class="btn btn-danger">Delete</a></td>
                </tr>
                <tr>
                <td>1,003</td>
                <td>information</td>

                <td><a href="#" class="btn btn-success">Approve</a> <a href="#" class="btn btn-danger">Delete</a></td>
                </tr>
            </tbody>
            </table>
        </div>

        <h2>Recent Categories</h2>
        <div class="table-responsive">
            <table class="table table-striped table-sm">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>

                <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td>1,001</td>
                <td>random</td><td><a href="#" class="btn btn-warning">Edit</a> <a href="#" class="btn btn-danger">Delete</a></td>
                </tr>
                <tr>
                <td>1,002</td>
                <td>placeholder</td><td><a href="#" class="btn btn-warning">Edit</a> <a href="#" class="btn btn-danger">Delete</a></td>
                </tr>
                <tr>
                <td>1,003</td>
                <td>data</td><td><a href="#" class="btn btn-warning">Edit</a> <a href="#" class="btn btn-danger">Delete</a></td>
                </tr>
                <tr>
                <td>1,003</td>
                <td>information</td><td><a href="#" class="btn btn-warning">Edit</a> <a href="#" class="btn btn-danger">Delete</a></td>
                </tr>
            </tbody>
            </table>
        </div>
    </main>
  </div>
</div>


    <script src="../js/bootstrap.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
  </body>
</html>
