
NAMES = Chinese-zh-CN \
        Chinese-zh-TW \
        Dutch-nl-NL \
        Finnish-fi-FI \
        French-fr-FR \
        German-de-DE \
        Greek-el-GR \
        Italian-it-IT \
        Lithuanian-li-LT \
        Norwegian-nb-NO \
        Persian-pj-FA \
        Portuguese-pt-BR \
        Russian-ru-RU \
        Spanish-es-ES \
        Swedish-sv-SE \
        Turkish-tr-TR \
        Bulgarian-bg-BG

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
