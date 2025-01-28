<?php
$pageTitle = 'Tableau de Synthèse - Adrien Berthe';
?>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Afficher PDF avec PDF.js</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.5.207/pdf.min.js"></script>
</head>

<body>
    <div class="container">
        <div id="fh5co-intro">
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2 col-md-pull-2">
                    <h2>Tableau de Synthèse</h2>
                    <p>Ce tableau présente une synthèse de mes compétences acquises durant mon BTS SIO option SLAM.</p>
                </div>
            </div>
        </div>

        <div class="row animate-box">
            <div class="col-md-12 text-center">
                <div class="embed-responsive embed-responsive-16by9" style="height: 800px;">
                    <iframe class="embed-responsive-item" src="<?php echo asset('pdf/synthesePDF.pdf'); ?>" width="100%" height="100%"></iframe>
                </div>
                <div class="mt-4">
                    <a href="<?php echo asset('pdf/synthesePDF.pdf'); ?>" class="btn btn-primary" target="_blank" style="margin-top: 20px;">
                        <i class="icon-download"></i> Télécharger le PDF
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>
