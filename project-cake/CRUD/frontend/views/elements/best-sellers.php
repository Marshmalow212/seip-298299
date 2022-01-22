<?php
use Crud\ProductController;

$Product = new ProductController();


$resultSet = $Product->activeProducts();
//var_dump($resultSet);
?>

<!--Best seller begin-->
<section id="best-seller" class="mt-2">
    <div class="container">
        <div class="d-flex justify-content-between best-seller mb-2 ">
            <h2>Cup<span>Cakes</span></h2>
            
        </div>
            <div class="row row-cols-1 row-cols-md-4 g-4 text-center best-seller-items d-flex justify-content-between">
            <?php
            foreach ($resultSet as $result):
            ?>
                <div class="col">
                    <div class="card">
                        <a title="<?=$result['title']?>" href="product-detail.php?id=<?=$result['id']?>">
                        <img src="<?=$webRoot.$result['picture']?>" class="card-img-top" alt="<?=$result['picture']?>"></a>
                        <div class="card-body">
                            <h5 class="card-title"><a href="#"><?=$result['title']?></a></h5>
                            <p class="card-text">
                                <i class="fas fa-star fa-xs"></i>
                                <i class="fas fa-star fa-xs"></i>
                                <i class="fas fa-star fa-xs"></i>
                                <i class="fas fa-star fa-xs"></i>
                                <i class="fas fa-star fa-xs"></i>
                                <i class="fas fa-star fa-xs"></i>
                            </p>
                            <p class="dollar">&dollar;<?=number_format((float)$result['mrp'],2,'.','')?></p>
                            <div><button type="button" class="btn btn-light add-to-cart">ADD TO CART</button></div>
                        </div>

                    </div>

                </div>
                <?php
                endforeach;
                ?>
            </div>

    </div>


</section>
<!-- best-seller end -->