
NAMES = French-fr-FR 

ZIPS = $(NAMES:=.zip)

all: $(ZIPS)

%.zip:
	@echo "-------------------------------------------------------"
	@echo attachments-$*
	@rm -f attachments-$@
	@(cd attachments-$*; zip -r ../attachments-$@ * -x "*.svn/*")


purge:
	@find . -name '*.bak' -exec rm {} \;


TOOLSDIR = /home/jmcameron/src/attachments/translation-tools

linktools:
	@echo "Linking translation tools here..."
	@for f in ${TOOLSDIR}/*.py; do \
	     ln -s $${f} . ; \
         done;
	@ln -s ${TOOLSDIR}/lib .
	@ln -s ${TOOLSDIR}/fixlang .
	@ln -s ${TOOLSDIR}/fixtokens .
