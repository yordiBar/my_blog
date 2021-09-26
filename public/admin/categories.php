<?php

include("../admin/header.php");
include("../admin/sidebar.php");

?>




    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Categories</h1>
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

      <a href="new_category.php" class="btn btn-info btn-lg">Add New</a>

      <div class="table-responsive">
          <form method="POST">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
                <th scope="col">Select</th>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Edit</th>
            </tr>
          </thead>
          <tbody>
            <tr>
                <td><input type="checkbox" name="checkbox[]"></td>
                <td>1</td>
                <td>C#</td>
                <td><a href="#" class="btn btn-warning">Edit</a></td>
            </tr>
            <tr>
                <td><input type="checkbox" name="checkbox[]"></td>
                <td>2</td>
                <td>PHP</td>
                <td><a href="#" class="btn btn-warning">Edit</a></td>
            </tr>
            <tr>
                <td><input type="checkbox" name="checkbox[]"></td>
                <td>3</td>
                <td>CSS</td>
                <td><a href="#" class="btn btn-warning">Edit</a></td>
            </tr>
          </tbody>
        </table>
        <select name="action">
            <option>Delete</option>
            <option>Clone</option>
        </select>
        <button type="submit" name="apply" class="btn btn-success">Apply</button>
        </form>
        </div>
    </main>
  </div>
</div>


    <script src="../js/bootstrap.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
  </body>
</html>
