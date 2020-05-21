{**
 * plugins/importexport/native/templates/index.tpl
 *
 * Copyright (c) 2014-2020 Simon Fraser University
 * Copyright (c) 2003-2020 John Willinsky
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * List of operations this plugin can perform
 *}
{include file="common/header.tpl" pageTitle="plugins.importexport.pubmed.displayName"}

<script type="text/javascript">
	// Attach the JS file tab handler.
	$(function() {ldelim}
		$('#exportTabs').pkpHandler('$.pkp.controllers.TabHandler');
		$('#exportTabs').tabs('option', 'cache', true);
	{rdelim});
</script>
<div id="exportTabs">
	<ul>
		<li><a href="#exportSubmissions-tab">{translate key="plugins.importexport.native.exportSubmissions"}</a></li>
		<li><a href="#exportIssues-tab">{translate key="plugins.importexport.native.exportIssues"}</a></li>
	</ul>
	<div id="exportSubmissions-tab">
		<script type="text/javascript">
			$(function() {ldelim}
				// Attach the form handler.
				$('#exportSubmissionXmlForm').pkpHandler('$.pkp.controllers.form.FormHandler');
			{rdelim});
		</script>
		<form id="exportSubmissionXmlForm" class="pkp_form" action="{plugin_url path="exportSubmissions"}" method="post">
			{csrf}
			{fbvFormArea id="submissionsXmlForm"}
				{fbvFormSection}
					{assign var="uuid" value=""|uniqid|escape}
					<div id="export-submissions-{$uuid}">
						<select-submissions-list-panel
							v-bind="components.exportSubmissionsListPanel"
							@set="set"
						/>
					</div>
					<script type="text/javascript">
						pkp.registry.init('export-submissions-{$uuid}', 'Container', {$exportSubmissionsListData|json_encode});
					</script>
				{/fbvFormSection}
				{fbvFormButtons submitText="plugins.importexport.native.exportSubmissions" hideCancel="true"}
			{/fbvFormArea}
		</form>
	</div>
	<div id="exportIssues-tab">
		<script type="text/javascript">
			$(function() {ldelim}
				// Attach the form handler.
				$('#exportIssuesXmlForm').pkpHandler('$.pkp.controllers.form.FormHandler');
			{rdelim});
		</script>
		<form id="exportIssuesXmlForm" class="pkp_form" action="{plugin_url path="exportIssues"}" method="post">
			{csrf}
			{fbvFormArea id="issuesXmlForm"}
				{capture assign=issuesListGridUrl}{url router=$smarty.const.ROUTE_COMPONENT component="grid.issues.ExportableIssuesListGridHandler" op="fetchGrid" escape=false}{/capture}
				{load_url_in_div id="issuesListGridContainer" url=$issuesListGridUrl}
				{fbvFormButtons submitText="plugins.importexport.native.exportIssues" hideCancel="true"}
			{/fbvFormArea}
		</form>
	</div>
</div>

{include file="common/footer.tpl"}
