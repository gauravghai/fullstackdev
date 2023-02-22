<?php
include './inc/header.php';


$query = "SELECT * FROM articles where id = ".$_GET['id'];
$result = mysqli_query($link, $query);

$suggestedQuery = "SELECT * FROM articles order by RAND() limit 3";
$suggestedResult = mysqli_query($link, $suggestedQuery);
?>
    <section>
        <div class="container pt-5">
        <?php
            while($row = mysqli_fetch_array($result)) {
                echo '
                <div class="text-center">
                    <div class="col-8 mx-auto">
                        <h1>'.$row['heading'].'</h1>
                    </div>

                    <div class="my-5">
                        <img src="'.$row['thumbnail'].'" alt="" width="50%">
                    </div>
                    <p>'.$row['description'].'</p>
                </div>';
            }
            ?>
            
        </div>

        <h2 class="text-center pt-5 ">Suggested Articles</h2>
        <div class="d-flex flex-wrap justify-content-center">
            <?php
            while($row = mysqli_fetch_array($suggestedResult)) {
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
    </section>
<?php
include './inc/footer.php';
?>