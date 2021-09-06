<?php
    include('../partials/header.php');

    if(isset($_GET['search'])) {
        $keyword = mysqli_real_escape_string($db, $_GET['search']);
        $query = "SELECT * FROM posts where keywords LIKE '%$keyword%'";
        $posts = $db->query($query);
    }else {
        echo "<p>No result...</p>";
    }
?>
                <br>
                <blockquote>Search Results for <?php echo @$_GET['search'] ?></blockquote>

                <?php if($posts->num_rows > 0) {
                    while($row = $posts->fetch_assoc()) {
                ?>             

                <div class="blog-post">
                    <h2 class="blog-post-title"><a href="single.php?post=<?php echo $row['id'] ?>"><?php echo $row['title']; ?></a></h2>
                    <p class="blog-post-meta"><?php echo $row['date'] ?><a href="#"><?php echo $row['author'] ?></a></p>

                    <?php $body = $row['body'];
                        echo substr($body , 0 , 400) . "...";
                    ?>
                    
                    <a href="single.php?post=<?php echo $row['id'] ?>" class="btn btn-primary">Read More</a>
                </div><!-- /.blog-post -->
                <?php } } ?>

            </div><!-- /.blog-main -->
            
    <?php include('../partials/sidebar.php');?>
    <?php include('../partials/footer.php');?>

            
 