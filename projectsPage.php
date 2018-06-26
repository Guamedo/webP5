<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My P5 Projects</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <style>
        table{
            width: 100%;
        }

        .image-link {
            position: relative;
            padding-bottom: 10px;
            padding-top: 10px;
            width: 33%;
        }

        .image {
            display: inline;
            width: 80%;
            height: auto;
            border: 2px solid black;
            border-radius: 10px;
        }

        .overlay {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            height: 100%;
            width: 100%;
            opacity: 0;
            transition: .5s ease;
            padding-bottom: 10px;
            padding-top: 10px;
        }

        .image-link:hover .overlay {
            opacity: 1;
        }

        .gif {
            display: inline;
            width: 80%;
            height: auto;
            border: 2px solid black;
            border-radius: 10px;
        }

        article h1{
            padding-left: 5%;
        }
    </style>
</head>
<body>

<div class="container">

    <header>
        <h1>My P5 Projects</h1>
    </header>

    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a class="active" href="projectsPage.php"">Projects</a></li>
            <li><a href="aboutMe.php">About Me</a></li>
        </ul>
    </nav>

    <article>
        <h1>Projects</h1>

        <?php

        $dir = 'projects';
        $file_names  = scandir($dir);
        $project_files = array();

        foreach ($file_names as $file){
            if(file_exists("images/".trim($file).".jpg")){
                array_push($project_files, $file);
                //echo $file_names[$i];
                //echo "<br>";
            }
        }
        echo "<table>";
        if(count($project_files) <= 3 and count($project_files) > 0){
            echo "<tr>";
            for($i = 0; $i < count($project_files); $i++){
                echo $project_files[$i];
                echo "<br>";
            }
            echo "</tr>";
        }else{
            for($i = 0; $i < intval(count($project_files)/3); $i++){
                echo "<tr>";
                for($j = 0; $j < 3; $j++){

                    echo "<th class='image-link'>";
                        echo "<a href='projects/".$project_files[$j+3*$i]."/index.html'>
                                <img class='image' src='images/".$project_files[$j+3*$i].".jpg' alt='".$project_files[$j+3*$i]."'>
                                <div class=\"overlay\">
                                    <img class='gif' src='images/".$project_files[$j+3*$i].".gif' alt='".$project_files[$j+3*$i]."'>
                                </div>
                              </a>";
                    echo "</th>";
                    //echo "<th>";
                    //echo "<a class='image' href='projects/".$project_files[$j+3*$i]."/index.html'><img src='images/".$project_files[$j+3*$i].".jpg' alt='".$project_files[$j+3*$i]."'></a>";
                    //echo "<a class='gif' href='projects/".$project_files[$j+3*$i]."/index.html'><img src='images/".$project_files[$j+3*$i].".gif' alt='".$project_files[$j+3*$i]."'></a>";
                    //echo $project_files[$j+3*$i];
                    //echo "</th>";
                }
                echo "<tr>";
            }
            $last_line = count($project_files) % 3;
            if($last_line > 0){
                echo "<tr>";
                for($i = 0; $i < 3; $i++){
                    if($i < $last_line){

                        echo "<th class='image-link'>";
                        echo "<a href='projects/".$project_files[intval(count($project_files)-$last_line)+$i]."/index.html'>
                                <img class='image' src='images/".$project_files[intval(count($project_files)-$last_line)+$i].".jpg' alt='".$project_files[$j+3*$i]."'>
                                <div class='overlay'>
                                    <img class='gif' src='images/".$project_files[intval(count($project_files)-$last_line)+$i].".gif' alt='".$project_files[$j+3*$i]."'>
                                </div>
                              </a>";
                        echo "</th>";

                        //echo "<th>";
                        //echo "<a href='projects/".$project_files[intval(count($project_files)-$last_line)+$i]."/index.html'><img src='images/".$project_files[intval(count($project_files)-$last_line)+$i].".jpg'></a>";
                        //echo $project_files[intval(count($project_files)/3)+$i];
                        //echo "</th>";
                    }
                }
                echo "<tr>";
            }
        }
        echo "</table>";

        /*for($i = 0; $i < count($project_files); $i++){
            echo $project_files[$i];
            echo "<br>";
        }*/

        ?>

        <!--<table>
            <tr>
                <th><a href="#"><img src="images/sudoku.jpg"></a></th>
                <th><a href="#"><img src="images/sudoku.jpg"></a></th>
                <th><a href="#"><img src="images/sudoku.jpg"></a></th>
            </tr>
        </table>-->
    </article>

    <footer>
        Made by Gonzalo Piérola
    </footer>

</div>

</body>
</html>