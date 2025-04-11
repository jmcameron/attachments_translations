
NAMES ?= French-fr-FR 

ZIPS = $(NAMES:=.zip)
ZIPFILE = attachments-${NAMES}-language-pack${VNAME}.zip
FIXSHA = $(NAMES:=.fixsha)
VERSION ?= 4.0.4

ZIPIGNORES = -x "*.svn/*" -x ".svnignore" -x ".directory" -x "*.xcf" -x "*admin/help*" -x update_pkg.xml

all: $(ZIPS) $(FIXSHA)

%.zip:
	@echo "-------------------------------------------------------"
	@echo attachments-$*
	@rm -f attachments-$@
	@(cd attachments-$*; zip -r ../attachments-$*-language-pack-${VERSION}.zip * $(ZIPIGNORES))


%.fixsha:
	@echo "Updating update xml files with checksums"
	@(cd attachments-$*;../fixsha.sh ../attachments-$*-language-pack-${VERSION}.zip 'update_pkg.xml')

purge:
	@find . -name '*.bak' -exec rm {} \;

fixquotes:
	@find ${LANGUAGE} -type f -name '*.ini' -exec sed -i 's/"_QQ_"/\&quot;/g' {} \;


updateweb:
	@echo "Updating updates/translations on jmcameron.net..."
	@ssh jmcameron.net "cd webapps/jmcameron/attachments/updates/translations; git pull"


TOOLSDIR = /home/jmcameron/src/attachments/translation-tools

linktools:
	@echo "Linking translation tools here..."
	@for f in ${TOOLSDIR}/*.py; do \
	     ln -s $${f} . ; \
         done;
	@ln -s ${TOOLSDIR}/lib .
	@ln -s ${TOOLSDIR}/fixlang .
	@ln -s ${TOOLSDIR}/fixtokens .
