all: help.html


help.html: help.rst help.css help.config
	rst2html --no-generator --language=es --config=help.config help.rst > help.html
	cp help.html /mnt/ender1/www/joomla-pruebas-17/administrator/components/com_attachments/help/es-ES/

updatecss:
	cp help.css /mnt/ender1/www/joomla-pruebas-17/administrator/components/com_attachments/help/es-ES/
