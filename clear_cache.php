<?php

// Este script ayudará a limpiar la caché de Laravel
// Ejecuta este archivo en el servidor después de actualizar el archivo de configuración CORS

echo "Limpiando caché de configuración...\n";
system('php artisan config:clear');
echo "Limpiando caché de rutas...\n";
system('php artisan route:clear');
echo "Limpiando caché de aplicación...\n";
system('php artisan cache:clear');
echo "Limpiando caché de vistas...\n";
system('php artisan view:clear');
echo "Configurando caché de nuevo...\n";
system('php artisan config:cache');
echo "Todo listo! La caché ha sido actualizada.\n"; 