# ORCID Profile Plugin

**NOTE: Please ensure you're using the correct branch. See the Releases area for packaged downloads. We recommend using the Plugin Gallery to install the plugin. For OJS 2.x, see the [ojs-dev-2_4 branch](https://github.com/pkp/orcidProfile/tree/ojs-dev-2_4).**

Plugin for adding and verifying ORCID iD in PKP user profiles and author metadata.

Copyright © 2015-2019 University of Pittsburgh
Copyright © 2014-2020 Simon Fraser University
Copyright © 2003-2020 John Willinsky

Licensed under GPLv3. See LICENSE.txt for details.

## Features:
### New in version 1.1.0
* Enable site-wide configuration of ORCID API settings using config.inc.php 
* Support ORCID API Version 2.1  (store only https ORCID Ids)
* Allow journal managers to send e-mails requesting authors for ORCID authorization on submission or later.
* Automated e-mail based authorization requests to authors when submission enters to production stage.
* Display  ORCID access status and expiration date in Author metadata
* Support of template  based  detailed success/failure messages for ORCID authorization redirects.
* Extra configurable (in plugin settings) ORCID log file in `OJS_FILES_DIR/orcid.log` for API communication. 
 *NOTE: Make sure that the files folder is not publicly accessible*
 
#### Extra functionalities for ORCID Member organizations
  
  * Extra e-mail template `ORCID_REQUEST_AUTHOR_AUTHORIZATION`  for requesting API access tokens.
  * Updated template text, e-mail templates for English and German locales. 
  * Member API Email-Template activated upon selection of ORCID member API
  * Support for synchronizing submission meta data to authorized records  in follwing stage changes:
    * Assign a submission to an already published issue
    * Publish a new issue
    * Author grants permission after the publication of the issue  
   

### Technical Workflow  description
  The included authorization link will have the access scope `/activities/update`. 
  An author can authorize access to his/her ORCID record to allow the adding of the submission to the record.  
  See https://members.orcid.org/api/oauth/orcid-scopes for more information.

  

### Installation

Use the Plugin Gallery from within your PKP application to install the plugin. For further information refer to [PKP|DOCS](https://docs.pkp.sfu.ca/orcid/en/installation-setup).
