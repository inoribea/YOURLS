#!/bin/bash

composer install --no-interaction --prefer-dist

chmod -R 755 user/
chmod -R 755 storage/
