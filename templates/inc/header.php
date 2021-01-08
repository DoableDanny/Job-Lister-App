<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/4.5.3/cerulean/bootstrap.min.css"
    integrity="sha512-dQLT/B7byn2LjN/DN4zeBKpwGV6qbidV0XiMRWQOL7TGrV7FkZFldkGG+DGMU+CQnMTcRZlUI7GMWt1j6akNew=="
    crossorigin="anonymous" />
  <link rel="stylesheet" href="css/styles.css">
  <title>JobLister</title>
</head>

<body>

  <div class="header clearfix">
    <nav>
      <ul class="nav nav-pills float-right">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="create.php">Create Listing</a>
        </li>
      </ul>
    </nav>
    <h3 class="text-muted ml-3"><?php echo SITE_TITLE; ?></h3>
  </div>
  <?php displayMessage(); ?>