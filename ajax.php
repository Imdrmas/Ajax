<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Simple Ajax</title>
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
<link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
  </head>
  <body>
    <?php
    include_once ('detect_language_class.php');
    //include('lang.php');
    //$default = ($_GET['lang']=='') ? 'en' : $_GET['lang'];
     ?>
<div class="container">
  <div class="text-center">
      <h1><?php echo "<h1>".$lang_info_h1[$lang]."</h1>"; ?></h1>
    <ul>
	<li><a title="English" href="?lang=en">English</a></li>
	<li><a title="Français" href="?lang=fr">Français</a></li>
	<li><a title="Español" href="?lang=es">Español</a></li>
</ul>
  </div>
  <div class="row">
    <div class="form-cont col-md-6">
    <form class="form-horizontal" method="POST" action="insert.php">
       <!-- start Username field -->
       <div class="form-group form-group-lg">
      <label class="col-sm-3 control-label"><?php echo "<p>".$lang1[$lang].".</p>"; ?></label>
      <div class="col-sm-9 col-md-6">
        <input type="text" name="fname" class="form-control" autocomplete="off" placeholder="<?php echo $lang1[$lang]?>" required="required">
      </div>
    </div>
      <!-- end Username field -->
      <!-- start FullName field -->
        <div class="form-group form-group-lg">
     <label class="col-sm-3 control-label"><?php echo "<p>".$lang2[$lang].".</p>"; ?></label>
     <div class="col-sm-9 col-md-6">
       <input type="text" name="lname" class="form-control" placeholder="<?php echo $lang2[$lang] ?>" required="required">
     </div>
      </div>
     <!-- end FullName field -->
      <!-- start Password field -->
        <div class="form-group form-group-lg">
     <label class="col-sm-3 control-label"><?php echo "<p>".$lang3[$lang].".</p>"; ?></label>
     <div class="col-sm-9 col-md-6">
       <input type="text" name="job" class="password form-control" autocomplete="new-password" placeholder="<?php echo $lang3[$lang]?>" required="required">
     </div>
       </div>
     <!-- end Username field -->
     <!-- start Email field -->
       <div class="form-group form-group-lg">
   <label class="col-sm-3 control-label"><?php echo "<p>".$lang4[$lang].".</p>"; ?></label>
    <div class="col-sm-9 col-md-6">
      <input type="email" name="email" class="form-control" placeholder="<?php echo $lang4[$lang] ?>" required="required">
    </div>
      </div>
    <!-- end Email field -->
   <!-- start submit field -->
         <div class="form-group form-group-lg">
       <div class="col-sm-offset-3 col-sm-9">
         <input type="submit" name="insert_now" value="<?php echo $lang5[$lang]?>" class="btn btn-primary btn-lg" id="insert">
       </div>
        </div>
      <!-- end submit field -->
    </form>
  </div>


  <div class="col-md-6 ">
<div class="form-cont1">
    <table class="table table-striped">
      <!-- On rows -->
     <thead>
       <tr>
         <th>#Id</th>
         <th><?php echo $lang1[$lang]?></th>
         <th><?php echo $lang2[$lang]?></th>
         <th><?php echo $lang3[$lang]?></th>
         <th><?php echo $lang4[$lang]?></th>
         <th class="btn-edit"><?php echo $lang8[$lang]?></th>
         <th class="btn-delete"><?php echo $lang9[$lang]?></th>
       </tr>
     </thead>
     <tbody id="updateMe">


     </tbody>
    </table>
    <button id="updateThis" type="button" name="button" class="btn btn-primary btn-lg"><?php echo $lang10[$lang]?></button>
</div>
</div>
</div>
</div>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/bootstrap.min.js"></script>
  <script src="js/plugin.js"></script>
  </body>
</html>
