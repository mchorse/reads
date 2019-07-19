# Makefile for compiling static website using crystal-edge

.PHONY: build

# Build the website to build/
build: clean
	mkdir build
	php export.php

# Clean build folder
clean:
	rm -rf build