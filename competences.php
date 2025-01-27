<?php include('partials/header.php'); ?>

<div class="container">
    <div id="fh5co-intro">
        <div class="row animate-box">
            <div class="col-md-8 col-md-offset-2 col-md-pull-2">
                <h2>Compétences</h2>
            </div>
        </div>
    </div>

    <div id="fh5co-portfolio">
        <div class="row justify-content-center text-center">
            <?php 
            $competences = [
                "Gérer le patrimoine informatique", 
                "Répondre aux incidents et aux demandes d'assistance et d'évolution", 
                "Développer la présence en ligne de l'organisation", 
                "Travailler en mode projet", 
                "Mettre à disposition des utilisateurs un service informatique", 
                "Organiser son développement professionnel"
            ];

            foreach ($competences as $index => $competence) : ?>
                <div class="col-md-4 animate-box d-flex justify-content-center">
                    <div class="competence-box" style="border:1px solid #ddd; border-radius:10px; padding:20px; text-align:center; cursor:pointer; background:#f9f9f9; transition:box-shadow 0.3s ease; height:200px; display:flex; align-items:center; justify-content:center;" onmouseover="this.style.boxShadow='0 5px 15px rgba(0,0,0,0.2)';" onmouseout="this.style.boxShadow='none';" onclick="openPopup(<?php echo $index; ?>)">
                        <h3><?php echo $competence; ?></h3>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<!-- Pop-up détaillé (amélioré) -->

<?php foreach ($competences as $index => $competence) : ?>
<div id="popup-<?php echo $index; ?>" class="competence-popup" style="display:none; position:fixed; top:50%; left:50%; transform:translate(-50%, -50%); background:#fff; padding:30px; border-radius:10px; box-shadow:0 10px 30px rgba(0,0,0,0.3); z-index:1000; width:400px; height:300px;">
    <h2 style="margin-bottom:15px; font-size:20px;"> <?php echo $competence; ?></h2>
    <p style="margin-bottom:20px; font-size:16px; overflow-y:auto; max-height:150px;">
        <?php 
        switch ($competence) {
            case "Travailler en mode projet":
				echo '<a href="calculetteimo.php" style="color:#007BFF; text-decoration:underline;">Calculette Immobilière</a>';
				echo '<br><a href="projectWelcomeTraining.php" style="color:#007BFF; text-decoration:underline;">WelcomeTraining</a>';
                break;
            case "Mettre à disposition des utilisateurs un service informatique":
                echo '<a href="calculetteimo.php" style="color:#007BFF; text-decoration:underline;">Calculette Immobilière</a>';
                break;
            default:
                echo 'Description détaillée ici...';
                break;
        }
        ?>
    </p>
    <button type="button" style="padding:10px 20px; background:#007BFF; color:white; border:none; border-radius:5px; cursor:pointer;" onclick="closePopup(<?php echo $index; ?>)">Fermer</button>
</div>
<?php endforeach; ?>


<script>
    function openPopup(index) {
        document.getElementById('popup-' + index).style.display = 'block';
    }

    function closePopup(index) {
        document.getElementById('popup-' + index).style.display = 'none';
    }
</script>

<?php include('partials/footer.php'); ?>
<?php include('partials/script.php'); ?>
