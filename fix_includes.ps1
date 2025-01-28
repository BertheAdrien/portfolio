$files = Get-ChildItem -Path "src/pages" -Filter "*.php"

foreach ($file in $files) {
    $content = Get-Content $file.FullName -Raw
    
    # Supprimer les includes de header, footer et script
    $content = $content -replace '(?s)<\?php\s*include\(''partials/header.php''\);\s*\?>', ''
    $content = $content -replace '(?s)<\?php\s*include\(''partials/footer.php''\);\s*\?>', ''
    $content = $content -replace '(?s)<\?php\s*include\(''partials/script.php''\);\s*\?>', ''
    
    # Ajouter la déclaration du titre de la page
    if (-not ($content -match '\$pageTitle')) {
        $title = $file.BaseName.Substring(0,1).ToUpper() + $file.BaseName.Substring(1)
        $content = "<?php`n`$pageTitle = '$title - Adrien Berthe';`n?>`n" + $content
    }
    
    # Sauvegarder le fichier
    $content | Set-Content $file.FullName -Force
}
