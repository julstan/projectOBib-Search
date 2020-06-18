#!/bin/bash

# Execute this script on *nix systems to stop the solr server. Please read
# the README file that comes with this plugin first to understand how to install
# and configure Solr. You'll find usage examples there, too.
#
# Usage: stop.sh

# Source common variables.
EXEC_PATH=`dirname $0`
source "$EXEC_PATH/script-startup"

# The deployment directory
DEPLOYMENT_DIR="$PLUGIN_DIR/embedded"

SOLR_HOME="$DEPLOYMENT_DIR/solr81"
SOLR_DATA="$LUCENE_FILES/data"
SOLR_PID_DIR="$LUCENE_FILES"


# Stop the solr process.
SOLR_INCLUDE="$PLUGIN_DIR/embedded/etc/solr.in.sh" SOLR_HOME="$SOLR_HOME" SOLR_PID_DIR="$SOLR_PID_DIR"  SOLR_DATA_HOME="$SOLR_DATA" $PLUGIN_DIR/lib/solr/bin/solr stop
