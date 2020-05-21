{**
 * templates/manageIssues/issues.tpl
 *
 * Copyright (c) 2014-2020 Simon Fraser University
 * Copyright (c) 2003-2020 John Willinsky
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * The issue management page.
 *}
{strip}
{assign var="pageTitle" value="editor.navigation.issues"}
{include file="common/header.tpl"}
{/strip}

{include file="manageIssues/issuesTabs.tpl"}


{include file="common/footer.tpl"}
