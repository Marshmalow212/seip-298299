<?php


use Crud\ProductController;

$Product = new ProductController();

$show_id = $_GET['id'];
$result = $Product->show($show_id);
?>

<!--markup for wrapper-->
<section id="wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div>
                    <div class="large-5 column">
                        <div class="xzoom-container"> <img class="xzoom" id="xzoom-default" src="<?=$webRoot.$result['picture']?>" xoriginal="<?=$webRoot.$result['picture']?>" />
                            <div class="xzoom-thumbs">
                                <a href="https://i.imgur.com/uC0mRJc.jpg">
                                    <img class="xzoom-gallery" width="80" src="<?=$webRoot.$result['picture']?>" xpreview="<?=$webRoot.$result['picture']?>"></a>
                                <a href="https://i.imgur.com/oNaczTl.jpg"> <img class="xzoom-gallery" width="80" src="https://i.imgur.com/r03r46u.jpg"> </a>
                                <a href="https://i.imgur.com/853Jrff.jpg"><img class="xzoom-gallery" width="80" src="https://i.imgur.com/BpfNBDk.jpg"></a>
                                <a href="https://i.imgur.com/Q7xvBFf.jpg"><img class="xzoom-gallery" width="80" src="https://i.imgur.com/3SuUpUH.jpg"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">

            </div>


        </div>
    </div>

</section>
