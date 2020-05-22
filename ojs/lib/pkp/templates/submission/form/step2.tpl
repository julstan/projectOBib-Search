{**
 * templates/submission/form/step2.tpl
 *
 * Copyright (c) 2014-2020 Simon Fraser University
 * Copyright (c) 2003-2020 John Willinsky
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * Step 2 of author submission.
 *}
<script type="text/javascript">
	$(function() {ldelim}
		// Attach the form handler.
		$('#submitStep2Form').pkpHandler('$.pkp.pages.submission.SubmissionStep2FormHandler');
	{rdelim});
</script>
<form class="pkp_form" id="submitStep2Form" method="post" action="{url op="saveStep" path=$submitStep}" enctype="multipart/form-data">
	{csrf}
	<input type="hidden" name="submissionId" value="{$submissionId|escape}" />
	{include file="controllers/notification/inPlaceNotification.tpl" notificationId="submitStep2FormNotification"}

	{capture assign=submissionFilesGridUrl}{url router=$smarty.const.ROUTE_COMPONENT component="grid.files.submission.SubmissionWizardFilesGridHandler" op="fetchGrid" submissionId=$submissionId escape=false}{/capture}
	{load_url_in_div id="submissionFilesGridDiv" url=$submissionFilesGridUrl}

	{fbvFormButtons id="step2Buttons" submitText="common.saveAndContinue"}
</form>
