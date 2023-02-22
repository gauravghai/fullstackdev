<?php
include './inc/header.php';

$data = get_all_articles();
?>
<section>
    <div class="container">
        <div class="d-flex flex-wrap pt-5">
            <?php
            while($row = mysqli_fetch_array($data)) {
                echo '
                <div class="col-md-3 col-12 m-2">
                    <div class="card h-100">
                    <a href="'.$base_url.'article.php?id='.$row['id'].'"> <img class="card-img-top" src="'.$row['thumbnail'].'" alt="Card image cap"></a>
                       
                        <div class="card-body">
                            <h5 class="card-title">'.$row['heading'].'</h5>
                            <p class="card-text">'.substr($row['description'], 0, 100).'...</p>
                            <a href="'.$base_url.'article.php?id='.$row['id'].'" class="btn btn-primary">Go To Article</a>
                        </div>
                    </div>
                </div>';
            }
            ?>
        </div>
    </div>
</section>
<?php
include './inc/footer.php';
?>