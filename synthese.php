<?php include('partials/header.php'); ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Afficher PDF avec PDF.js</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.5.207/pdf.min.js"></script>
</head>

<body>
    <h1 class="synthese-title">Tableau de synthèse</h1>
    <div class="pdf-container">
        <canvas id="pdf-render"></canvas>
    </div>

</body>

	<?php include('partials/footer.php'); ?>
	<?php include('partials/script.php'); ?>

    