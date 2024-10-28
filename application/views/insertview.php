
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
<a href="crudcontroller/display_data" class="btn btn-success"> View data</a>
  <?= form_open_multipart('crudcontroller/addnew')?>
    <div class="row mt-5">
        <div class="col-md-12 col-lg-12">
            <div class="col-md-6 col-lg-6 mb-3">
              <label for="name">Full Name</label>
              <input type="text" name="name" id="name" class="form-control">
              <?= form_error('name')?>
            </div>

            <div class="col-md-6 col-lg-6 mb-3">
              <label for="email">Email</label>
              <input type="email" name="email" id="email" class="form-control">
              <?= form_error('email')?>
            </div>
            <div class="col-md-6 col-lg-6 mb-3">
              <label for="phone"> Phone </label>
              <input type="number" name="phone" id="phone" class="form-control">
              <?= form_error('phone')?>
            </div>

            <div class="col-md-6 col-lg-6 mb-3">
              <label for="language">Language</label>
              <select name="language" id="language" class="form-control">
                <option value="">Select</option>
                <option value="PHP"> PHP </option>
                <option value="Phython"> Phython</option>
                <option value="Java"> Java </option>
              </select>
              <?= form_error('language')?>
            </div>
            <div class="col-md-6 col-lg-6 mb-3">
              <label > Gender </label>
                    <div class="form-group">
                    <input type="radio" name="gender" Value="Male" >  Male
                    <input type="radio" name="gender" value="Female" > Female
                    </div>
            </div>
            <div class="col-md-6 col-lg-6 mb-3">
              <label > Qualification </label>
                    <div class="form-group">
                    <input type="checkbox" name="qualification" Value="BEng" > BEng
                    <input type="checkbox" name="qualification" value="BSc" > BSc
                    </div>
            </div>
            <div class="col-md-6 col-lg-6 mb-3">
              <label> Photo/Document </label>
              <input type="file" name="image"  class="form-control">  
            </div>
            <?= form_error('image')?>
            <input type="submit" value="submit" class="btn btn-success mt-2" >
    </div>
    <?= form_close()?>
</div>


</body>
</html>