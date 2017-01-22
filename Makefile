# Makefile for compiling static website using crystal-edge

.PHONY: build

# Build the website to build/
build: clean
	php export.php

# Clean build folder
clean:
	find build -maxdepth 1 ! -path build -a ! -name .gitignore -a ! -name .git -exec rm -rf {} \; 2> /dev/null