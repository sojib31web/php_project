
<?php
defined ('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> After Insert</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
  
<div class="container">
     <table class="table table-bordered">
          <tr class="bg-info">
            <th>#</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th> Language</th>
            <th> Gender</th>
            <th> Qualification</th>
            <th>Image</th>
            <th colspan="2"> Action</th>

          </tr>
       <?php  if (!empty($arr)) { 
          foreach($arr as $key=> $v1) { 
            ?>
            <tr>
             <td> <?=++$key ?> </td>
             <td>  <?= $v1->name?>  </td>
             <td> <?= $v1->email?> </td>
             <td>  <?= $v1->phone?></td>
             <td> <?= $v1->language?>  </td>
             <td> <?= $v1->gender?> </td>
             <td> <?= $v1->qualification ?> </td>
             <td > <img src="<?=base_url()?>/uploads/<?= $v1->image?>" alt="" width="80">  </td>
             <td>  <a href="update_data/<?=$v1->id?>" class="btn btn-outline-primary"> Update </a></td>
             <td> <a href="delete_data/<?=$v1->id?>" class="btn btn-outline-primary"> Delete </a>  </td>
            </tr>
         <?php
          } }
        else { ?>
          <tr>
             <td colspan="9" class="text-center"> Do't contain any Data</td>
          </tr>

        <?php }?> 
                      
     </table>
  </div>
 
</body>
</html>


