<?php

    include('../includes/config.php');
    include('../includes/db.php');

    if(isset($_GET['post'])) {
        $post = mysqli_escape_string($db,$_GET['post']);

        $po = $db->query("SELECT * FROM posts WHERE id='$post'");

        $p = $po->fetch_assoc();

        $page_title = $p['title'];
    }

    include('../partials/header.php');

    if(isset($_GET['post'])) {
        $id = mysqli_real_escape_string($db, $_GET['post']);
        $query = "SELECT * FROM posts where id = '$id'";
    }
    $posts = $db->query($query);

    if(isset($_POST['post_comment'])){
        $name = mysqli_real_escape_string($db, $_POST['name']);
        $comment = mysqli_real_escape_string($db, $_POST['comment']);

        if(isset($_POST['website'])){
            $website = mysqli_real_escape_string($db, $_POST['website']);
        }else {
            $website = "";
        }

        $query = "INSERT INTO comments (name,comment,post_id,website) VALUES ('$name','$comment','$id','$website')";
        
        $db->query($query);
        header("Location:single.php?post=$id");
        exit();
    }

    $query = "SELECT * FROM comments WHERE post_id='$id' AND status='1'";
    $comments = $db->query($query);

?>
                <br>
                <?php if($posts->num_rows > 0) {
                    while($row = $posts->fetch_assoc()) {
                ?>             

                <div class="blog-post">
                    <h2 class="blog-post-title"><?php echo $row['title']; ?></h2>
                    <p class="blog-post-meta"><?php echo $row['date'] ?><a href="#"><?php echo $row['author'] ?></a></p>

                    <?php echo $row['body'];?>
                    
                </div><!-- /.blog-post -->
                <?php } } ?>

                <blockquote><?php echo $comments->num_rows; ?> Comments</blockquote>
                <div class="comment-area">
                    <form method="post">
                        <div class="form-group">
                            <label for="inputEmail4" class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <label for="inputEmail4" class="form-label">Website</label>
                            <input type="text" name="website" class="form-control" placeholder="Website(Optional)">
                        </div>
                        <div class="form-group">
                            <label for="inputPassword4" class="form-label">Comment</label>
                            <textarea name="comment" cols="60" rows="10" class="form-control"></textarea>
                        </div>
                        <div class="col-12">
                            <button type="submit" name="post_comment" class="btn btn-primary">Post Comment</button>
                        </div>
                    </form>
                    <br>
                    <br>
                    <br>

                    <?php while($comment = $comments->fetch_assoc()) {
                        if($comment['is_admin'] != 1){
                    ?>
                    <div class="comment">
                        <div class="comment-head">
                            <a href="#"><?php echo $comment['name']; ?></a>
                            <img src="/images/placeholder.jpg" alt="" />                            
                        </div>
                        <?php echo $comment['comment']; ?>
                    </div>
                    <?php }else { ?>
                    <div class="comment">
                        <div class="comment-head">
                            <a href="#"><?php echo $comment['name']; ?></a><button class="btn btn-info btn-xs">Admin</button>
                            <img src="/images/placeholder.jpg" alt="" />                            
                        </div>
                        <?php echo $comment['comment']; ?>
                    </div>
                    <?php } } ?>
                    </div>
                </div><!-- /.blog-main -->
            
    <?php include('../partials/sidebar.php');?>
    <?php include('../partials/footer.php');?>