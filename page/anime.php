<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Anime</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="../logo.css">
</head>

<body>
  <!-- header -->
  <?php include_once('../components/header2.php') ?>

  <!-- slide -->
  <?php include_once('../components/banner2.php') ?>

  <!--main-->
  <?php include_once('../components/anime_detail.php') ?> 

  <!--Footer-->
  <?php include_once('../components/footer.php') ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const likeBtn = document.querySelector('.like-btn');
      const likeCount = document.querySelector('.like-count');

      let likes = 0;

      likeBtn.addEventListener('click', () => {
        likes++;
        likeCount.textContent = likes;
      });
    });
  </script>


</body>

</html>