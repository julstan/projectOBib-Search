{**
 * templates/submitSuccess.tpl
 *
 * Copyright (c) 2013-2020 Simon Fraser University
 * Copyright (c) 2003-2020 John Willinsky
 * Distributed under the GNU GPL v3. For full terms see the file LICENSE.
 *
 * Display a message indicating that the article was successfuly submitted.
 *}
{strip}
{assign var="pageTitle" value="plugins.importexport.quickSubmit.success"}
{include file="common/header.tpl"}
{/strip}

{capture assign="submissionUrl"}{url router=$smarty.const.ROUTE_PAGE page="workflow" op="access" stageId=$stageId submissionId=$submissionId contextId="submission" escape=false}{/capture}

<div class="pkp_page_content pkp_successQuickSubmit">
	<p>
		{translate key="plugins.importexport.quickSubmit.successDescription"}  
	</p>
	<p> 
		<a href="{plugin_url}">
			{translate key="plugins.importexport.quickSubmit.successReturn"}
		</a>
	</p>
	<p> 
		<a href="{url router=$smarty.const.ROUTE_PAGE page="workflow" op="access" path=$submissionId escape=false}">
			{translate key="plugins.importexport.quickSubmit.goToSubmission"}
		</a>
	</p>
</div>

{include file="common/footer.tpl"}
