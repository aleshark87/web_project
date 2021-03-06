<main>
  <?php foreach($templateParams["articoli"] as $articolo): ?>
  <div class="col-12">
    <div class="row m-2 m-md-5 bg-light-gray" style="border-radius:25px">
      <div class="col-12 col-md-5 col-lg-4 col-xl-3 col-xxl-2 text-center">
        <img src="<?php echo UPLOAD_DIR."img/".$articolo["Tipo"]."/".$articolo["Foto"]."/front.png"; ?>"
          class="img-fluid p-3 w-50" style="border-radius: 30px; max-width:225px; min-width: 175px;"
          alt="<?php echo $articolo["Nome"];?>">
      </div>
      <div class="col-12 col-md-7 col-lg-5 pt-3">
        <h2>
          <a href="article_page.php?add=false&id=<?php echo $articolo["ID"]?>"
            class="fs-4 fs-md-3 fs-lg-2 fs-xl-1 px-2 text-decoration-none text-dark">
            <?php echo $articolo["Nome"]; ?>
          </a>
        </h2>
        <div class="my-3 my-lg-4">
          <div class="d-flex flex-column">
            <?php 
            $features = explode("-", $articolo["Caratteristiche"]);
            foreach($features as $feature):
            if($feature !== ""){ ?>
              <div class="d-flex">
                <img src="../resources/icons/tick.png" height="35" width="25" class="me-2" alt="tick verify">
                <span class="fs-5 fs-xl-3"><?php echo $feature; ?></span>
              </div>
            <?php } endforeach; ?>
            <div class="d-flex mt-4"> <span class="available text_list"><?php echo $articolo["Quantità"] ?></span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-12 col-lg-3 col-xl-4 col-xxl-5 text-center px-4 py-3 pt-0">
        <div class="mt-lg-5">
          <span class="fs-4 fs-xl-3"> Price </span>
        </div>
        <span class="fs-3 fs-xl-2"><?php echo $articolo["Prezzo"]." $"; ?></span>
      </div>
      <div class="col-md-1"></div>
    </div>
  </div>
  <?php endforeach; ?>
</main>