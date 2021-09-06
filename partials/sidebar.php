<?php



?>

<div class="col-sm-3 col-sm-offset-1 blog-sidebar">
    <div class="sidebar-module">
    <h4>Search</h4>
    <hr>
        <form method="get" action="results.php" class="form-inline">
            <div class="form-group">
                <input type="text" name="search" class="form-control" id="exampleInputName2" placeholder="Search...">
            </div>
        </form>
    </div>
                <div class="sidebar-module sidebar-module-inset">
                    <h4>About</h4>
                    <p><?php echo $about_text ?></p>
                </div>
                <div class="sidebar-module">
                    <h4>Categories</h4>
                    <hr>
                    <?php $q = "SELECT * FROM categories";
                        $categories = $db->query($q);
                    ?>
                    <ul class="list-unstyled">
                        <?php while($c = $categories->fetch_assoc()){ ?>
                        <li><a href="index.php?category=<?php echo $c['id']; ?>"><?php echo $c['text']; ?></a></li>
                        <?php } ?>
                    </ul>
                </div>
                <div class="sidebar-module">
                    <h4>Elsewhere</h4>
                    <hr>
                    <ol class="list-unstyled">
                        <li><a href="#">GitHub</a></li>
                        <li><a href="#">Twitter</a></li>
                        <li><a href="#">Facebook</a></li>
                    </ol>
                </div>
</div><!-- /.blog-sidebar -->