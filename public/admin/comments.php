<?php

include("../admin/header.php");
include("../admin/sidebar.php");

?>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Comments</h1>
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
      <div class="table-responsive">
          <form method="POST">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
                <th scope="col">Select</th>
                <th scope="col">Author</th>
                <th scope="col">Website</th>
                <th scope="col">Post</th>
                <th scope="col">Comment</th>
                <th scope="col">Status</th>
                <th scope="col">Reply</th>
            </tr>
          </thead>
          <tbody>
            <tr>
                <td><input type="checkbox" name="checkbox[]"></td>
                <td>Genius</td>
                <td>test.com</td>
                <td>Sample PHP Post</td>
                <td>Nice one!</td>
                <td><button class="btn btn-success">Approved</button></td>
                <td><a href="#" class="btn btn-info">Reply</a><textarea class="form-control" cols="15" rows="2"></textarea></td>
            </tr>
            <tr>
                <td><input type="checkbox" name="checkbox[]"></td>
                <td>Genius</td>
                <td>test.com</td>
                <td>Sample PHP Post</td>
                <td>Nice one!</td>
                <td><button class="btn btn-warning">Pending</button></td>
                <td><a href="#" class="btn btn-info">Reply</a><textarea class="form-control" cols="15" rows="2"></textarea></td>
            </tr>
            <tr>
                <td><input type="checkbox" name="checkbox[]"></td>
                <td>Genius</td>
                <td>test.com</td>
                <td>Sample PHP Post</td>
                <td>Nice one!</td>
                <td><button class="btn btn-danger">Rejected</button></td>
                <td><a href="#" class="btn btn-info">Reply</a><textarea class="form-control" cols="15" rows="2"></textarea></td>
            </tr>
          </tbody>
        </table>
        <select name="action">
            <option>Delete</option>
            <option>Approve</option>
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
