$files = Get-ChildItem -Path "src/pages" -Filter "*.php"

foreach ($file in $files) {
    $content = Get-Content $file.FullName -Raw
    
    # Remplacer les chemins d'images avec la fonction asset()
    $content = $content -replace 'src="images/([^"]+)"', 'src="<?php echo asset(''images/$1''); ?>"'
    $content = $content -replace 'src=''images/([^'']+)''', 'src="<?php echo asset(''images/$1''); ?>"'
    
    # Sauvegarder le fichier
    $content | Set-Content $file.FullName -Force
}
