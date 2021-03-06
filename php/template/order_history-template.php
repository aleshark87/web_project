<main>
<div class="row py-4">
    <div class="col-md-1"></div>
    <div class="col-12 col-md-4 col-lg-3">
        <div class="list-group px-5 px-md-0">
        <a href="./login.php?info=account" class="list-group-item list-group-item-action bg-dark text-white">Account</a>
        <a href="./login.php?info=account" class="list-group-item list-group-item-action">Info</a>
        <a href="./login.php?info=ordini" class="list-group-item list-group-item-action bg-light-gray fw-bold">History</a>
        </div>
    </div>
    <div class="col-12 col-md-6 col-lg-7 p-5 py-md-1">
        <span class = "h2">Order History</span>
        <div class="container px-2 px-md-0 py-3">
        <?php
        $i = 0;
        foreach($templateParams["ordini"] as $ordine): ?>
            <ul class="list-group mb-3">
                <li class="list-group-item bg-dark text-white">Order n. <?php echo ($i+1); ?></li>
                <li class="list-group-item">
                Date: <?php $date = new DateTime($ordine["Data"]);
                echo $date->format('Y-m-d'); ?>
                </li>
                <li class="list-group-item fw-bold">Products:</li>
                <li class="list-group-item">
                        <?php
                        $k = 0;
                        foreach($itemsDetail[$i] as $item): ?>
                        <ul class="list-group mb-2 px-2">
                            <li class="list-group-item fw-bold bg-light-gray"><?php echo $item[0]["Nome"]; ?></li>
                            <li class="list-group-item">Quantity: <?php echo($itemsInCart[$i][$k]["Quantità"]); ?></li>
                            <li class="list-group-item"><?php echo $item[0]["Prezzo"]." $"; ?></li>
                        </ul>
                        <?php
                        $k++;
                    endforeach; ?>
                </li>
                <li class="list-group-item fw-bold bg-light-gray">Total:<?php echo $ordine["Totale"]; ?>$</li>
            </ul>
        <?php 
        $i++;
        endforeach; 
        if($i == 0){
            echo "Non hai ancora eseguito ordini !";
        }
        ?>
        </div>
    </div>
    <div class="col-md-1"></div>
</div>
</main>