#!/bin/bash

# Execute this script on *nix systems to check whether the solr server is
# running. Please read the README file that comes with this plugin first to
# understand how to install and configure Solr.
#
# Usage: check.sh [UID]
#
# Options:
#    UID: If given, the running server's UID will be compared to the given UID.
#         When the two are different, then the script will exit with a nonzero
#         return code.

# Source common variables.
EXEC_PATH=`dirname $0`
source "$EXEC_PATH/script-startup"

# The deployment directory
DEPLOYMENT_DIR="$PLUGIN_DIR/embedded"
# Solr home /configset
SOLR_HOME="$DEPLOYMENT_DIR/solr81"
SOLR_DATA="$LUCENE_FILES/data"
SOLR_PID_DIR="$LUCENE_FILES"

SOLR_INCLUDE="$PLUGIN_DIR/embedded/etc/solr.in.sh" SOLR_HOME="$SOLR_HOME" SOLR_PID_DIR="$SOLR_PID_DIR" SOLR_DATA_HOME="$SOLR_DATA"  $PLUGIN_DIR/lib/solr/bin/solr status

