<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Joblister</title>
    <link rel="stylesheet" href="https://getbootstrap.com/docs/3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://bootswatch.com/4/flatly/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>
    <div class="container">
      <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills pull-right">
            <li class="nav-item" role="presentation" ><a class="nav-link" href="index.php">Home</a></li>
            <li class="nav-item" role="presentation"><a class="nav-link" href="create.php">Create listing</a></li>
          </ul>
        </nav>
        <h3 class="brand"><?php echo SITE_TITLE; ?></h3>
      </div>
      <?php displayMessage(); ?>
