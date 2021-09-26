<?php

include("../admin/header.php");
include("../admin/sidebar.php");

?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
   <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Add New Post</h1>
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
         <div form-group>
            <label>
                Post Title :
            </label>
            <input class="form-control" type="text" name="title" />
         </div>
         <br>
         <div form-group>
            <label>
                Post Author :
            </label>
            <input class="form-control" type="text" name="author" />
         </div>
         <br>
         <div form-group>
            <label>
                Post Category :
            </label>
            <select class="form-control" name="category">
                <option>PHP</option>
                <option>C#</option>
                <option>CSS</option>
            </select>
         </div>
         <br>
         <div form-group>
            <label>
                Post Body :
            </label>
            <textarea name="body" class="form-control"></textarea>
         </div>
         <br>
         <div form-group>
            <label>
                Post Keywords :
            </label>
            <input class="form-control" type="text" name="keywords" />
         </div>
         <br>
         <button type="submit" name="add_post" class="btn btn-success">Add Post</button>
      </form>
   </div>
</main>
  </div>
</div>


    <script src="../js/bootstrap.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
  </body>
</html>
