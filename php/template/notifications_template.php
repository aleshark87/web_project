<div class="row">
  <div class="col-lg-2"></div>
    <div class="col-12 col-lg-8 mt-5">
    <h2 class="p-3">Notifications</h2>
      <?php
        if(empty($templateParams["notificheAll"])){
          echo "<h3>There are no notifications</h3>";
        }
      ?>
      <ul class="list-group">
      <?php
        if(isset($templateParams["notificheAll"])){
          foreach($templateParams["notificheAll"]  as $notifica): 
            echo "<li class=\"list-group-item\">".$notifica["Notifica"]."</li>";
          endforeach; 
        }
        ?>
      </ul>
      <?php
        if(!empty($templateParams["notificheAll"])){
          echo "<a class=\"btn btn-dark float-end m-3 text-decoration-none text-white\" href=\"clear_notifications.php\">Clear</a>";
        } 
        ?>
    </div>
  <div class="col-lg-2"></div>
</div>