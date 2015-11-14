.PHONY: compile watch

help:
	@echo "compile - re-run compass with compression on"
	@echo "watch - run compass in watch mode, for development"

compile:
	cd library/scss && compass compile --output-style compressed --force

watch:
	cd library/scss && compass compile --force
	cd library/scss && compass watch
