
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Documentation data</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
  
      <div class="container">
        <h1>Update Your Info</h1>
      <?=form_open_multipart('crudcontroller/afterupdate/'.$singledata->id)?>
    <div class="row mt-5">
        <div class="col-md-12 col-lg-12">
            <div class="col-md-6 col-lg-6 mb-3">
              <label for="name">Full Name</label>
              <input type="text" name="name" value="<?=$singledata->name?>" class="form-control" >
              <?= form_error('name')?>
            </div>

            <div class="col-md-6 col-lg-6 mb-3">
              <label for="email">Email</label>
              <input type="email" name="email" value="<?=$singledata->email?>" class="form-control">
              <?= form_error('email')?>
            </div>
            <div class="col-md-6 col-lg-6 mb-3">
              <label for="phone"> Phone </label>
              <input type="number" name="phone" value="<?=$singledata->phone;?>" class="form-control">
              <?= form_error('phone')?>
            </div>

            <div class="col-md-6 col-lg-6 mb-3">
              <label for="language">Language</label>
              <select name="language" id="language" class="form-control">
                <option value="">Select</option>
                <option value="PHP" <?php if($singledata->language== "PHP"){
                  echo  "Selected"; } ?> >PHP </option>

                <option value="Phython" <?php if($singledata->language== "Phython"){
                  echo  "Selected"; } ?> > 
                  Phython</option>

                <option value="Java" <?php if( $singledata->language== "Java"){
                  echo  "Selected"; } ?>> Java </option>
              </select>
              <?= form_error('language')?>
            </div>
            <div class="col-md-6 col-lg-6 mb-3">
              <label > Gender </label>
                    <div class="form-group">
                    <input type="radio" name="gender" Value="Male"  <?php if( $singledata->gender== "Male"){
                    echo  "checked"; } ?>>  Male
                    <input type="radio" name="gender" value="Female"  <?php if( $singledata->gender== "Female"){
                    echo  "checked"; } ?>> Female
                    </div>
            </div>
            <div class="col-md-6 col-lg-6 mb-3">
              <label > Qualification </label>
                    <div class="form-group">
                    <input type="checkbox" name="qualification" Value="BEng" <?php if( $singledata-> qualification == "BEng"){
                    echo  "checked"; } ?> > BEng
                    <input type="checkbox" name="qualification" value="BSc"  <?php if( $singledata-> qualification == "BSc"){
                    echo  "checked"; } ?> > BSc
                    </div>
            </div>
            <div class="col-md-6 col-lg-6 mb-3">
              <label> Photo/Document </label>
              <input type="file" name="image"  class="form-control">  
              <?php if( $singledata->id) { ?>
              <img src="<?=base_url()?>/uploads/<?=$singledata->image?>" width="80">
              <?php } ?>
            </div>
            <?= form_error('image')?>
            <input type="submit" value="submit" class="btn btn-success mt-2" >
    </div>
    <?= form_close()?>
</div>
</body>
</html>


