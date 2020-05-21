{**
 * templates/controllers/grid/queries/form/queryForm.tpl
 *
 * Copyright (c) 2014-2020 Simon Fraser University
 * Copyright (c) 2003-2020 John Willinsky
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @brief Query grid form
 *
 * @uses $hasParticipants boolean Are any participants available
 * @uses $queryParticipantsListData array JSON-encoded data for the ListPanel to select a user
 *}

 {if !$hasParticipants}
		{translate key="submission.query.noParticipantOptions"}
 {else}
	<script>
		// Attach the handler.
		$(function() {ldelim}
			$('#queryForm').pkpHandler(
				'$.pkp.controllers.form.CancelActionAjaxFormHandler',
				{ldelim}
					cancelUrl: {if $isNew}'{url|escape:javascript op="deleteQuery" queryId=$queryId csrfToken=$csrfToken params=$actionArgs escape=false}'{else}null{/if}
				{rdelim}
			);
		{rdelim});
	</script>

	<form class="pkp_form" id="queryForm" method="post" action="{url op="updateQuery" queryId=$queryId params=$actionArgs}">
		{csrf}

		{include file="controllers/notification/inPlaceNotification.tpl" notificationId="queryFormNotification"}

		{if $queryParticipantsListData}
			{fbvFormSection}
				{assign var="uuid" value=""|uniqid|escape}
				<div id="queryParticipants-{$uuid}">
					<list-panel
						v-bind="components.queryParticipants"
						@set="set"
					/>
				</div>
				<script type="text/javascript">
					pkp.registry.init('queryParticipants-{$uuid}', 'Container', {$queryParticipantsListData|json_encode});
				</script>
			{/fbvFormSection}
		{/if}

		{fbvFormArea id="queryContentsArea"}
			{fbvFormSection title="common.subject" for="subject" required="true"}
				{fbvElement type="text" id="subject" value=$subject required="true"}
			{/fbvFormSection}

			{fbvFormSection title="stageParticipants.notify.message" for="comment" required="true"}
				{fbvElement type="textarea" id="comment" rich=true value=$comment required="true"}
			{/fbvFormSection}
		{/fbvFormArea}

		{fbvFormArea id="queryNoteFilesArea"}
			{capture assign=queryNoteFilesGridUrl}{url router=$smarty.const.ROUTE_COMPONENT component="grid.files.query.QueryNoteFilesGridHandler" op="fetchGrid" params=$actionArgs queryId=$queryId noteId=$noteId escape=false}{/capture}
			{load_url_in_div id="queryNoteFilesGrid" url=$queryNoteFilesGridUrl}
		{/fbvFormArea}

		<p><span class="formRequired">{translate key="common.requiredField"}</span></p>

		{fbvFormButtons id="addQueryButton"}

	</form>
{/if}
