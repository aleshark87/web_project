<div class="row">
  <div class="col-2"></div>
    <div class="col-8 mt-5">
    <h2 class="px-3">WhishList</h2>
      <table class="table table-striped table-hover mt-4">
        <thead class="bg-dark text-white">
          <tr>
            <th scope="col">Photo</th>
            <th scope="col">Name</th>
            <th scope="col">Price</th>
            <th scope="col">Add to cart</th>
          </tr>
        </thead>
          <?php foreach($items as $articolo): ?>
            <tr>
              <td><?php echo $articolo["Foto"]; ?></td>
              <td><?php echo $articolo["Nome"]; ?></td>
              <td>x<?php echo $articolo["Quantità"]; ?></td>
              <td><?php echo $articolo["Prezzo"]; ?>$</td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  <div class="col-2"></div>
</div>