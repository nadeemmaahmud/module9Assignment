<?php $title = "My Personal Blog - Home"?>
<?php include('./headerfooter/header.php'); ?>
<?php
    $title = urldecode($_GET['title']);
    $image = urldecode($_GET['image']);
    $excerpt = urldecode($_GET['excerpt']);

    echo '<main>';
        echo '<section class="featured-post">';
            echo '<div class="post-image">';
                echo '<img src="'. $image . '" alt="' . $title . '">';
            echo '</div>';
            echo '<div class="post-excerpt">';
                echo '<h3>'. $title .'</h3>';
                echo '<p>'.$excerpt.'</p>';
            echo '</div>';
        echo '</section>';
    echo '</main>';
    echo '
        <div class="social-media">
        <b>Share on </b>
        <a href="#" class="fa fa-facebook"></a>
        <a href="#" class="fa fa-twitter"></a>
        <a href="#" class="fa fa-linkedin"></a>
        <a href="#" class="fa fa-instagram"></a>
        </div>'
?>
<?php include('./headerfooter/footer.php'); ?>