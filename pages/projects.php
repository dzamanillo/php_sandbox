<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Projects</title>
</head>
<body>
    <?php require('../templates/header.php'); ?>

    <div class="container d-flex justify-content-center flex-wrap ">

    <?php
        $projectsFile = '../projects.json';
        $string = file_get_contents($projectsFile);
        $json = json_decode($string);

        foreach ($json as $project){
            echo 
            "<div class='card m-3' style='width: 18rem;'>
                <div class='card-body'>
                    <h5 class='card-title'>" . $project->name . "</h5>
                    <p class='card-text'>" . $project->description . "</p>
                    <a href='" . $project->gitLink . "' class='card-link' target='_blank'>Github</a>
                    <a href='" . $project->deployLink . "' class='card-link' target='_blank'>Website</a>
                </div>
            </div>";
        }

    ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>