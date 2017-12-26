#!/usr/bin/env bash

function clearCache() {
    sudo /bin/rm -rf logs/*.log
    sudo /bin/chmod -R 777 logs

    sudo /bin/rm -rf tmp/*
    sudo /bin/chmod -R 777 tmp
}

function init() {
    clearCache
    composer install --no-dev --classmap-authoritative
    clearCache

    return 0;
}
