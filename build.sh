#!/bin/bash
composer install --no-interaction --working-dir=admin
npm install && npm run build  
chmod -R 755 storage/
