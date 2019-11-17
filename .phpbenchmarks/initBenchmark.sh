#!/usr/bin/env bash

set -e

function clearCache() {
    if [ -d logs ]; then
        rm -rf logs/*.log
        chmod -R 777 logs
    fi

    if [ -d tmp ]; then
        rm -rf tmp/*
        chmod -R 777 tmp
    fi
}

clearCache
composer install --no-dev --classmap-authoritative --ansi
clearCache
