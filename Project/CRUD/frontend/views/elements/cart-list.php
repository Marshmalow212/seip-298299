<section>
    <div class="container">
        <div class="row justify-content-center ">
                <h1 class="text-center mb-4 mt-2"> Your Cart</h1>
                <ul>
                    <li class="inline-list-item nav-link">      </li>
                </ul>

                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Picture</th>
                        <th scope="col">SL</th>
                        <th scope="col">User ID</th>
                        <th scope="col">Product ID</th>
                        <th scope="col">Product Title</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Unit Price</th>
                        <th scope="col">Total Price</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $sl=0;
                    if(count($resultSet)>0):
                        foreach ($resultSet as $result): ?>
                            <tr>
                                <td ><img class="img-fluid " width="100" src="<?= $webRoot.$result['picture'] ?>" alt="<?= $result['picture'] ?>"></td>
                                <td ><?= ++$sl;?></td>
                                <td ><?= $result['user_id'] ?></td>
                                <td ><?= $result['product_id'] ?></td>
                                <td ><?= $result['product_title'] ?></td>
                                <td ><?= $result['qty'] ?></td>
                                <td ><?= $result['unit_price'] ?></td>
                                <td ><?= $result['total_price'] ?></td>
                                <td > <div class="btn-group">
                                        
                                        <a href="<?=$projectRoot;?>CRUD/admin/Carts/cartitemdelete.php?id=<?php echo $result['id']?>" class="btn btn-danger d-flex" onclick="return confirm('Are you sure?')"><i class="far fa-trash-alt"></i> </a>

                                    </div>
                                </td>
                            </tr>
                        <?php
                        endforeach;
                        $_SESSION['cart_item']=$sl;
                    else:
                        ?>
                        <tr>
                            <td class="text-center" colspan="9">Cart is empty</td>
                        </tr>
                    <?php
                    endif;
                    ?>

                    </tbody>
                </table>



        </div>

    </div>

</section>
