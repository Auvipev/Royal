#!/bin/bash
./vendor/bin/phpunit --coverage-clover ./build/logs/clover.xml
./vendor/bin/psalm
