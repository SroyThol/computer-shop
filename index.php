<!-- body -->
<?php 
include ('header.php');
include ('menu.php');
?>
<div class="container mt-3">
 <div class="col-md-12">
  <div class="row">
   <div class="col-md-4">
    <ul class="list-group">
      <li class="list-group-item active">Category</li>
      <?php  
      $sql="SELECT * FROM Category";
      $result=$conn->query($sql);
      if ($result->num_rows > 0) {
        while ($row = $result->fetch_array()) {
          $CatId=$row['CatId'];  //$CatId=$row['CatId']; use for store at value
          ?>
         <!-- <a href="#">
           <li class="list-group-item"><?php  echo $row['CatName'] ?></li>
         </a> -->
         <div class="btn-group dropright">
          <button type="button" class="btn btn-secondary text-left" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <?php echo $row['CatName'] ?><span class="float-right"><i class="fa fa-caret-right"></i></span>
          </button>
          <div class="dropdown-menu">
           <a class="dropdown-item" href="category.php?cat_id=<?php echo $CatId ?>">ALL <?php echo $row['CatName'] ?></a>
           <?php  
           $sql_brand="SELECT DISTINCt(p.BrandId),b.BrandName FROM  product p  JOIN brand b ON b.BrandId=p.BrandId WHERE p.CatId='$CatId'";
           $result_brand=$conn->query($sql_brand);
           if ($result_brand->num_rows > 0) {
            while ($row_brand = $result_brand->fetch_array()) {

             ?>
             <a class="dropdown-item" href="category.php?cat_id=<?php echo $CatId
             ?>&brand_id=<?php echo $row_brand['BrandId'] ?>"><?php echo $row_brand['BrandName'] ?></a>          
             <?php
           }
         }else{
          // echo "0 result";
        }
        ?>
      </div>
    </div>
    <?php
  }
}else{
  echo "0 result";
}
?>
</ul>
</div>
<div class="col-md-8">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
   <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
   <?php 
   $sql="SELECT * FROM banner LIMIT 1";
   $result=$conn->query($sql);
   $active=1;
   if ($result->num_rows > 0) {
    while ($row = $result->fetch_array()) {
      ?>
      <div class="çarousel-item <?php if($active <= 1){
        echo "active"; }?>">
        <a href='<?php echo $row['BannerUrl']?>' target='_blank'>
          <img class="d-block w-100" src="assets/images/banner/<?php echo $row['BannerPhoto']?>" height="300px">
        </div></a>
        <?php
        $active++;
      }
    }else{
      echo "0 result";
    }
    ?>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
</div>
<div class="row">
 <div class="col-md-4">
  <ul class="list-group list-group-flush">
    <li class="list-group-item">
     <div class="input-group mb-3">
       <input type="text" class="form-control" placeholder="search..." aria-label="Recipient's username" aria-describedby="basic-addon2">
       <div class="input-group-append">
        <span class="input-group-text" id="basic-addon2">search</span>
      </div>
    </div>
    <div class="form-check">
     <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
     <label class="form-check-label" for="exampleRadios1">
      News
    </label>
  </div>
  <div class="form-check">
   <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
   <label class="form-check-label" for="exampleRadios2">
    Seconds
  </label>
</div>
<div class="form-check">
 <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option2">
 <label class="form-check-label" for="exampleRadios2">
  Factorys
</label>
</div>
<div class="form-check">
 <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios4" value="option2">
 <label class="form-check-label" for="exampleRadios2">
  Products
</label>
</div>
</li>
<li class="list-group-item">Dapibus ac facilisis in</li>
<li class="list-group-item">Morbi leo risus</li>
<li class="list-group-item">Porta ac consectetur ac</li>
<li class="list-group-item">Vestibulum at eros</li>
</ul>
<?php  
$sql="SELECT * FROM advertise LIMIT 2";
$result=$conn->query($sql);
if ($result->num_rows > 0) {
  while ($row = $result->fetch_array()) {
    $adsPhoto='assets/images/advertise/'.$row['AdsPhoto'];
    ?>
    <a href="#">
     <div class="card mt-2">
      <img src='<?php echo $adsPhoto ?>' class="card-img-top" alt='<?php echo $row['AdsName']?>'>
      <div class="card-body">
        <p class="card-text"><?php echo $row['AdsDes'] ?></p>
      </div>
    </div>
  </a>
  <?php
}
}else{
  echo "0 result";
}
?>
</div>
<div class="col-md-8">
  <div class="row mt-3" style="background-color: #fcfafa;">
    <div class="col-md-6">
     <a class="navbar-brand"><b>Recent Upload</b></a>
   </div>
   <div class="col-md-6" align="right">
     <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
      <button type="button" class="btn btn-light"><i class="fa fa-th-list"></i></button>
      <button type="button" class="btn btn-light"><i class="fa fa-th"></i></button>

      <div class="btn-group" role="group">
       <button id="btnGroupDrop1" type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Filter
      </button>
      <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
        <a class="dropdown-item" href="#">Low to hight</a>
        <a class="dropdown-item" href="#">Hight to low</a>
      </div>
    </div>
  </div>
</div>
</div>
<div class="row mt-3">
  <div class="col-md-12">
    <div class="row">
      <?php  
      $sql="SELECT * FROM product LIMIT 8";
      $result=$conn->query($sql);
      if ($result->num_rows > 0) {
        while ($row = $result->fetch_array()) {
          ?>
          <div class="col-md-3 product mb-2">
            <div class="card">
              <a href="product_detail.php?pro_id=<?php echo $row['ProId']?>"><img src="assets/images/thumbnail/<?php echo $row['ProThumbnail'] ?>" class="card-img-top" alt="..." ></a>
              <div class="card-body">
                <h2><?php echo $row['ProName'] ?></h2>
                <p class="card-text text-price" style="margin: 20px 0;"><b><?php echo $row['ProPrice'] ?></b></p>
              </div>
            </div>
          </div>
          <?php
        }
      }else{
        echo "0 result";
      }
      ?>
    </div>
  </div>
</div>
</div>
</div>
</div>
<?php 
include ('footer.php');
?>

