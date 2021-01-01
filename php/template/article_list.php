<main>
<?php foreach($templateParams["articoli"] as $articolo): ?>
        <div class = "col-12">
                <div class ="row m-5" style = "border-radius: 30px; background-color: #e8e8e8">
                    <div class = "col-12 col-md-5 col-lg-4 col-xl-3 col-xxl-2 text-center">       
                        <img src="<?php echo UPLOAD_DIR."img/".$templateParams["categoria"]."/".$articolo["Foto"]."/front.png"; ?>" class = "img-fluid p-3 w-50" style = "border-radius: 30px" alt="porcodio">
                    </div>
                    <div class = "col-12 col-md-7 col-lg-5 pt-3">
                        <a  class = "text-decoration-none text-dark h3" 
                            href="article_page.php?id=<?php echo $articolo["ID"]."&type=".$templateParams["categoria"]; ?>" class="fs-4 fs-md-3 fs-lg-2 fs-xl-1 px-2">
                            <?php echo $articolo["Nome"]; ?>
                        </a>
                        <div class="my-3 my-lg-4">
                            <div class = "d-flex flex-column">
                                <div class = "d-flex">
                                    <img src="../resources/icons/tick.png" height="35px" width="25px" class="me-2" alt="tick verify">
                                    <span class = "fs-5 fs-xl-3"><?php echo explode("-", $articolo["Caratteristiche"])[0]; ?></span>
                                </div>
                                <div class = "d-flex">
                                    <img src="../resources/icons/tick.png" height="35px" width="25px" class = "me-2" alt="tick verify">
                                    <span class = "text_list"><?php echo explode("-", $articolo["Caratteristiche"])[1]; ?></span>
                                </div>
                                <div class = "d-flex">
                                    <img src="../resources/icons/tick.png" height="35px" width="25px" class = "me-2" alt="tick verify">
                                    <span class = "text_list"><?php echo explode("-", $articolo["Caratteristiche"])[2]; ?></span>
                                </div>
                                <div class = "d-flex my-4">
                                    <span id="available" class = "text_list"><?php echo $articolo["Quantità"] ?></span>
                                </div>
                            </div>  
                        </div>  
                    </div>
                    <div class = "col-md-12 col-lg-3 col-xl-4 col-xxl-5 text-center px-4 py-3">
                        <div class="mt-md-3 mt-lg-5">
                            <span class="fs-4 fs-xl-3"> Price </span>
                        </div>
                        <span class="fs-3 fs-xl-2"><?php echo $articolo["Prezzo"]."$"; ?></span>
                    </div>
                    <div class = "col-md-1"></div>
                </div>
            </div>
<?php endforeach; ?>
</main>
