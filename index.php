<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/template.css">


</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="form_main">
                <h4 class="heading"><strong>Quick </strong> Contact <span></span></h4>
                <div class="form">
                    <form action="add.php" method="post" id="contactFrm" name="contactFrm">
                        <input type="text" required="" placeholder="Nom" value="" name="nom" class="txt">
                        <input type="text" required="" placeholder="Prénom" value="" name="prenom" class="txt">
                        <input type="text" required="" placeholder="Adresse" value="" name="adresse" class="txt">
                        <input type="text" required="" placeholder="Code Postal" value="" name="code_postal"
                               class="txt">
                        <input type="text" required="" placeholder="Ville" value="" name="ville" class="txt">
                        <input type="text" required="" placeholder="Télephone" value="" name="telephone" class="txt">
                        <input type="text" required="" placeholder="Mobile" value="" name="mobile" class="txt">

                        <input type="submit" value="submit" name="submit" class="txt2">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>
                Nom
            </th>
            <th>
                Prénom
            </th>
            <th>
                Adresse Complète
            </th>
            <th>
                Code Postal
            </th>
            <th>
                Ville
            </th>
            <th>
                Téléphone
            </th>
            <th>
                Mobile
            </th>
            <th>
                Option
            </th>
        </tr>
        </thead>
        <tbody>
        <?php
        $sections = file('./data.txt', FILE_USE_INCLUDE_PATH);

        foreach ($sections as $key => $element) {

            $pieces = explode("|", $element);
            //$cle = array_search($pieces[1], $pieces);
            if (count($pieces) > 2) {
                echo("<tr>" .
                    "<td>" . $pieces[0] . "</td>" .
                    "<td>" . $pieces[1] . "</td>" .
                    "<td>" . $pieces[2] . "</td>" .
                    "<td>" . $pieces[3] . "</td>" .
                    "<td>" . $pieces[4] . "</td>" .
                    "<td>" . $pieces[5] . "</td>" .
                    "<td>" . $pieces[6] . "</td>" .
                    "<td>" . "<a href='delete.php?id=$key'> supprimer</a>" . " | "  . "<a href='modify.php?id=$key'> Modifier</a>" . "</td>" .
                    "</tr>");

            } else {
                break;

            }


        }
        ?>

        </tbody>
    </table>
</div>

<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="monjs.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</body>
</html>