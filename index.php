<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mia Stories</title>

  <!-- bootstrap css cdn-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <!--Styles sheet-->
  <link rel="stylesheet" href="styles.css">

  <!--font awesome cdn-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>

  <?php include './partials/connect.php'; ?>

  <!--<h1 class="text-center">Hiiii There!</h1>-->
  <div class="container-fluid slider">
  <?php include './partials/header.php'; ?>

    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="Images/pin6.jpg" class="d-block w-100" alt="first slide">
          <div class="carousel-caption d-none d-md-block">
            <h5><i><b>Write It Down!</b></i></h5>
          </div>
        </div>
        <div class="carousel-item">
          <img src="Images/pin5.jpg" class="d-block w-100" alt="second slide">
          <div class="carousel-caption d-none d-md-block">
            <h5><i><b>Write It Down!</b></i></h5>
          </div>
        </div>
        <div class="carousel-item">
          <img src="Images/pin7.jpg" class="d-block w-100" alt="third slide">
          <div class="carousel-caption d-none d-md-block">
            <h5><i><b>Write It Down!</b></i></h5>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

  </div>

  <!--cards-->

  <div class="container">
    <h1 class="text-center featureTitle mb-5">
      Featured Stories
    </h1>
    <div class="row">

      <?php
      $sql = "SELECT * FROM `topics`";
      $result = mysqli_query($con, $sql);
      if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
          $id = $row['topic_id'];
          $topic_image = $row['topic_image'];
          $topic_name = $row['topic_name'];
          $topic_desc = $row['topic_desc'];
          echo '<div class="col-md-4 col-sm-6 mb-5">
          <div class="card" style="width: 18rem;">
            <img src=' . $topic_image . ' class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">' . $topic_name . '</h5>
              <p class="card-text">' . substr($topic_desc, 0, 52) . '........</p>
              <a href="stories.php?story_id=' . $id . '" class="btn btn-primary">Continue Reading</a>
            </div>
          </div>
          </div>';
        }
      }
      ?>
    </div>
  </div>

  <?php include './partials/footer.php'; ?>

</body>

</html>