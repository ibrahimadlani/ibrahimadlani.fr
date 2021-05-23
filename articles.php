<?php 


require_once('lib/pdo_db.php');
require_once('models/Article.php');

$article = new Article();

$articles = $article->getArticles();
?>

<!DOCTYPE html>
<html lang="fr">
<head>

  <meta charset="utf-8">
  <title>Projects - Ibrahim Adlani</title>
  <meta name="description" content="Curious computer science student, programming and UI/UIX enthusiast, freelance developer in my spare time.">
  <meta name="author" content="Ibrahim ADLANI">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/skeleton.css">
  <link rel="stylesheet" href="css/master.css">
  <link rel="icon" type="image/png" href="img/articles.png">
  <script src="https://kit.fontawesome.com/8e5a240d2c.js" crossorigin="anonymous"></script>


</head>
<body>
  <div class="container">
    <div class="row">
    <div class="one-half column" style="margin-top: 15%">
    <a href="index.php"><img src="img/articles.png" alt="Cool tree by NeoCyania" srcset="" height=88></a>
    <h4>Ibrahim's Blog</h4>
    <hr>
    <ul class="nav-list">
        <li class="nav-item"><a href="index.php"><i class="fas fa-home"></i><p>Home</p></a></li>
        <li class="nav-item"><a href="projects.php"><i class="far fa-file-code"></i><p>Projects</p></a></li>
        <li class="nav-item"><a href="resume.php"><i class="far fa-id-badge"></i><p>Resume</p></a></li>
        <li class="nav-item"><a href="articles.php"><i class="far fa-newspaper"></i><p>Articles</p></a></li>
        <li class="nav-item"><a target="_blank"  href="https://github.com/ibrahimadlani"><i class="fab fa-github-alt"></i><p>Github</p></a></li>
    </ul>
    <hr>
    <br>
    <div>
    <?php foreach ($articles as $a) { ?>
        <div class="project">
            <h5><b><?php echo $a->title;?></b></h5>
            <p><?php echo $a->subtitle;?></p>
            <a href="/article.php?id=<?php echo $a->id;?>">See the demo</a>
            <hr>
        </div>
    <?php }?>
    </div>
</div>
</div>
</body>
</html>