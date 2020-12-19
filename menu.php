
<div id="line-fluid">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <ul class="nav">
         <?php  
         $sql="SELECT * FROM single_page";
         $result=$conn->query($sql);
         $home=1;
         if ($result->num_rows > 0) {
          while ($row = $result->fetch_array()) {
            ?>
            <li class="nav-item">
              <a class="nav-link" href="<?php  if($home<=1){
                echo 'index.php';
              }else{
                 echo 'single_page.php?page_id='.$row['SinglePageId'];
              }
              ?>"><?php echo $row['SinglePageName'] ?></a>
            </li>
            <?php $home++; }
          }else{
            echo "";
          }

          ?>
          <!-- <li class="nav-item">
            <a class="nav-link active mt-1" href="#"><i class="fa fa-bars"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Mackbook</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Accessory</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Service</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li> -->
        </ul>
      </div>
    </div>
  </div>
</div>