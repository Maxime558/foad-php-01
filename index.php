<!-- 

███████╗███╗   ██╗ ██████╗ ███╗   ██╗ ██████╗███████╗     ██████╗  ██████╗        
██╔════╝████╗  ██║██╔═══██╗████╗  ██║██╔════╝██╔════╝    ██╔═████╗██╔═████╗    ██╗
█████╗  ██╔██╗ ██║██║   ██║██╔██╗ ██║██║     █████╗█████╗██║██╔██║██║██╔██║    ╚═╝
██╔══╝  ██║╚██╗██║██║   ██║██║╚██╗██║██║     ██╔══╝╚════╝████╔╝██║████╔╝██║    ██╗
███████╗██║ ╚████║╚██████╔╝██║ ╚████║╚██████╗███████╗    ╚██████╔╝╚██████╔╝    ╚═╝
╚══════╝╚═╝  ╚═══╝ ╚═════╝ ╚═╝  ╚═══╝ ╚═════╝╚══════╝     ╚═════╝  ╚═════╝        
                                                                                  

Créer un tableau php avec ces nombres : 27,15,34,379,248,5643,81,211,999,142,300,572
Tester les nombres de ce tableau pour savoir si chaque nombre est pair ou impair (un nombre est pair si le reste de la division par 2 est 0)
Afficher les résultats sous forme de liste html ul comme ceci (xx : pair yy : impaire) : -->

<!DOCTYPE html>
<html>

<head>
    <title>Pair/Impaire</title>
</head>

<body>
    <ul>
        <?php

        $nombres = [27, 15, 34, 379, 248, 5643, 81, 211, 999, 142, 300, 572];

        foreach ($nombres as $nombre) {
            $pair = ($nombre % 2 == 0) ? "pair" : "impair";
            echo "<li>", $nombre, ' : ', $pair, "</li>";
        }
        ?>
    </ul>
</body>

</html>






<!-- 

███████╗███╗   ██╗ ██████╗ ███╗   ██╗ ██████╗███████╗     ██████╗  ██╗       
██╔════╝████╗  ██║██╔═══██╗████╗  ██║██╔════╝██╔════╝    ██╔═████╗███║    ██╗
█████╗  ██╔██╗ ██║██║   ██║██╔██╗ ██║██║     █████╗█████╗██║██╔██║╚██║    ╚═╝
██╔══╝  ██║╚██╗██║██║   ██║██║╚██╗██║██║     ██╔══╝╚════╝████╔╝██║ ██║    ██╗
███████╗██║ ╚████║╚██████╔╝██║ ╚████║╚██████╗███████╗    ╚██████╔╝ ██║    ╚═╝
╚══════╝╚═╝  ╚═══╝ ╚═════╝ ╚═╝  ╚═══╝ ╚═════╝╚══════╝     ╚═════╝  ╚═╝       
                                                                             
Réaliser une fonction qui convertit une température de degré Celsius °C en degré Fahrenheit °F
Afficher les résultats dans un tableau html table , utiliser la fonction php round pour arrondir à l'unité supérieur
Voici le tableau de conversion que vous devez avoir : -->

<!-- 
<!DOCTYPE html>
<html>
<head>
    <title>Conversion de température</title>
</head>
<body>
    <h1>Conversion de température de Celsius (°C) à Fahrenheit (°F)</h1>
    <table border="1">
        <tr>
            <th>Degré Celsius (°C)</th>
            <th>Degré Fahrenheit (°F)</th>
        </tr>
        <?php

        /*  function celsiusToFahrenheit($celsius) {
            return round(($celsius * 9/5) + 32);
        }

        for ($celsius = -20; $celsius <= 40; $celsius += 5) {
            $fahrenheit = celsiusToFahrenheit($celsius);
            echo "<tr>";
            echo "<td>{$celsius} °C</td>";
            echo "<td>{$fahrenheit} °F</td>";
            echo "</tr>";
        } */
        ?>
    </table>
</body>
</html> -->






<!-- 

███████╗███╗   ██╗ ██████╗ ███╗   ██╗ ██████╗███████╗     ██████╗ ██████╗        
██╔════╝████╗  ██║██╔═══██╗████╗  ██║██╔════╝██╔════╝    ██╔═████╗╚════██╗    ██╗
█████╗  ██╔██╗ ██║██║   ██║██╔██╗ ██║██║     █████╗█████╗██║██╔██║ █████╔╝    ╚═╝
██╔══╝  ██║╚██╗██║██║   ██║██║╚██╗██║██║     ██╔══╝╚════╝████╔╝██║██╔═══╝     ██╗
███████╗██║ ╚████║╚██████╔╝██║ ╚████║╚██████╗███████╗    ╚██████╔╝███████╗    ╚═╝
╚══════╝╚═╝  ╚═══╝ ╚═════╝ ╚═╝  ╚═══╝ ╚═════╝╚══════╝     ╚═════╝ ╚══════╝       
                                                                                 

Travailler avec le fichier json persons.json dans le dossier data
Afficher le(a) deuxième ami(e) de Raymond Jimenez dans un titre html <h3>
Afficher la couleur des yeux de Ball Shaffer en gras html strong sous la forme d'une phrase : La couleur des yeux de Ball Shaffer est :
Afficher dans une balise html article dans l'ordre suivant :
image de la personne dans une balise html img
Nom : le nom de la personne
Age: âge de la personne
Couleur des yeux : la couleur des yeux de la personne
Email: email de la personne
Age: age de la personne
Fruit favori : fruit favori de la personne
Si isActive est à true : afficher ACTIF
Tags : afficher tous les tags de la personne séparé d'une virgule
Chaque personne sera séparé d'une ligne horizontale html <hr> -->


<!-- <!DOCTYPE html>
<html>
<head>
    <title>Informations sur les personnes</title>
</head>
<body>
    <?php
    /* $json_data = file_get_contents('data/persons.json');
    $data = json_decode($json_data, true);

    foreach ($data as $person) {
        echo "<article>",'<br>';
        echo "<img src='{$person['picture']}' alt='Image de la personne'>",'<br>';
        echo "Nom : {$person['name']}",'<br>';
        echo "Age : {$person['age']}",'<br>';
        echo "Couleur des yeux : {$person['eyeColor']}",'<br>';
        echo "Email : {$person['email']}",'<br>';
        echo "Age : {$person['age']}",'<br>';
        echo "Fruit favori : {$person['favoriteFruit']}",'<br>';

        if ($person['isActive']) {
            echo "ACTIF",'<br>';
        }

        $tags = implode(", ", $person['tags']);
        echo "Tags : $tags",'<br>';

        echo "</article><hr>";
    } */
    ?>
</body>
</html> -->

<!-- 

███████╗███╗   ██╗ ██████╗ ███╗   ██╗ ██████╗███████╗███████╗       ██████╗ ██████╗        
██╔════╝████╗  ██║██╔═══██╗████╗  ██║██╔════╝██╔════╝██╔════╝      ██╔═████╗╚════██╗    ██╗
█████╗  ██╔██╗ ██║██║   ██║██╔██╗ ██║██║     █████╗  ███████╗█████╗██║██╔██║ █████╔╝    ╚═╝
██╔══╝  ██║╚██╗██║██║   ██║██║╚██╗██║██║     ██╔══╝  ╚════██║╚════╝████╔╝██║ ╚═══██╗    ██╗
███████╗██║ ╚████║╚██████╔╝██║ ╚████║╚██████╗███████╗███████║      ╚██████╔╝██████╔╝    ╚═╝
╚══════╝╚═╝  ╚═══╝ ╚═════╝ ╚═╝  ╚═══╝ ╚═════╝╚══════╝╚══════╝       ╚═════╝ ╚═════╝        
                                                                                    

A l'aide d'une boucle foreach clef/valeur , parcourir le fichier colors.json , afin d'obtenir le résultats de la capture d'écran suivante : -->


<!-- <!DOCTYPE html>
<html>

<head>
    <title>Parcours de colors.json</title>
</head>

<body>
    <h1>Liste des couleurs</h1>
    <ul>
        <?php

        /* $json_data = file_get_contents('data/colors.json');
        $colors = json_decode($json_data, true);

        foreach ($colors as $colorData) {
            $colorName = $colorData["color"];
            $colorValue = $colorData["value"];
            echo "<div style='background-color: $colorValue; width: 100px; height: 100px; display: flex; align-items: center; justify-content: center; margin: 5px; text-align: center;'>";
            echo "<p style='color: white;'>$colorName</p>";
            echo "</div>";
        } */
        ?>
    </ul>
</body>

</html>
 -->


<!-- 

███████╗███╗   ██╗ ██████╗ ███╗   ██╗ ██████╗███████╗███████╗       ██████╗ ██╗  ██╗       
██╔════╝████╗  ██║██╔═══██╗████╗  ██║██╔════╝██╔════╝██╔════╝      ██╔═████╗██║  ██║    ██╗
█████╗  ██╔██╗ ██║██║   ██║██╔██╗ ██║██║     █████╗  ███████╗█████╗██║██╔██║███████║    ╚═╝
██╔══╝  ██║╚██╗██║██║   ██║██║╚██╗██║██║     ██╔══╝  ╚════██║╚════╝████╔╝██║╚════██║    ██╗
███████╗██║ ╚████║╚██████╔╝██║ ╚████║╚██████╗███████╗███████║      ╚██████╔╝     ██║    ╚═╝
╚══════╝╚═╝  ╚═══╝ ╚═════╝ ╚═╝  ╚═══╝ ╚═════╝╚══════╝╚══════╝       ╚═════╝      ╚═╝       
                                                                                           

Récupérer les données que vous renvoie cette url : https://dummyjson.com/user
Puis afficher , l'image , le prénom,nom et email de chaque user -->

<!-- <!DOCTYPE html>
<html>
<head>
    <title>Utilisateurs</title>
</head>
<body>
    <h1>Liste des utilisateurs</h1>
    <div class="user-container">
    <?php
    /* 
    $json_data = file_get_contents('https://dummyjson.com/user');
    $data = json_decode($json_data, true);

    if (isset($data['users']) && is_array($data['users'])) {
        $users = $data['users'];

        for ($i = 0; $i < count($users); $i++) {
            $user = $users[$i];
            $image = $user['image'];
            $prenom = $user['firstName'];
            $nom = $user['lastName'];
            $email = $user['email'];

            echo "<div class='user-box' style='width: 33.33%; float: left; box-sizing: border-box;'>";
            echo "<img src='$image' alt='Image de l'utilisateur' style='width: 100%;'>";
            echo "<p style='text-align: center;'>$prenom  $nom</p>";
            echo "<p style='text-align: center;'>$email</p>";
            echo "</div>";

            if (($i + 1) % 3 === 0) {
                echo "<div style='clear: both;'></div>";
            }
        }
    } 
    */
    ?>
    </div>
</body>
</html> -->






<!-- 

███████╗███╗   ██╗ ██████╗ ███╗   ██╗ ██████╗███████╗███████╗       ██████╗ ███████╗       
██╔════╝████╗  ██║██╔═══██╗████╗  ██║██╔════╝██╔════╝██╔════╝      ██╔═████╗██╔════╝    ██╗
█████╗  ██╔██╗ ██║██║   ██║██╔██╗ ██║██║     █████╗  ███████╗█████╗██║██╔██║███████╗    ╚═╝
██╔══╝  ██║╚██╗██║██║   ██║██║╚██╗██║██║     ██╔══╝  ╚════██║╚════╝████╔╝██║╚════██║    ██╗
███████╗██║ ╚████║╚██████╔╝██║ ╚████║╚██████╗███████╗███████║      ╚██████╔╝███████║    ╚═╝
╚══════╝╚═╝  ╚═══╝ ╚═════╝ ╚═╝  ╚═══╝ ╚═════╝╚══════╝╚══════╝       ╚═════╝ ╚══════╝       
                                                                                           

Récupérer les données que vous renvoie cette url : https://randomuser.me/api/?results=20
Puis afficher , l'image , le prénom,nom et email de chaque user
Pour chaque femme souligner son prénom et nom
Voir un exemple de rendu sur ce pen : -->

<!-- <!DOCTYPE html>
<html>

<head>
    <title>Liste d'utilisateurs</title>

</head>

<body>
    <h1>Liste d'utilisateurs</h1>
    <div class="user-container">
        <?php
        // $json_data = file_get_contents('https://randomuser.me/api/?results=20');
        // $data = json_decode($json_data, true);

        // if (isset($data['results']) && is_array($data['results'])) {
        //     $users = $data['results'];

        //     foreach ($users as $user) {
        //         $image = $user['picture']['large'];
        //         $prenom = $user['name']['first'];
        //         $nom = $user['name']['last'];
        //         $email = $user['email'];
        //         $genre = $user['gender'];

        //         $userStyle = "border: 1px solid #ccc; margin: 10px; padding: 10px; width: 10%; display: inline-block;";
        //         $femaleStyle = "text-decoration: underline;";

        //         echo "<div class='user' style='$userStyle'>";
        //         echo "<p style='text-align: center;'>" . (($genre === 'female') ? "<span style='$femaleStyle'>$prenom $nom</span>" : "$prenom $nom") . "</p>";
        //         echo "<img src='$image' alt='Image de l'utilisateur' style='width: 100%;'>";
        //         echo "<p style='text-align: center; font-size : 14px;'>Email: $email</p>";
        //         echo "</div>";
        //     }
        // }
        ?>
    </div>
</body>

</html> -->