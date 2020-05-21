{**
 * templates/dashboard/index.tpl
 *
 * Copyright (c) 2014-2020 Simon Fraser University
 * Copyright (c) 2003-2020 John Willinsky
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * Dashboard index.
 *}
{include file="common/header.tpl" pageTitle="navigation.submissions"}

{assign var="uuid" value=""|uniqid|escape}
<div id="dashboard-{$uuid}">
	<tabs>
		<tab id="myQueue" label="{translate key="dashboard.myQueue"}" :badge="components.{$smarty.const.SUBMISSIONS_LIST_MY_QUEUE}.itemsMax">
			{help file="submissions" class="pkp_help_tab"}
			<submissions-list-panel
				v-bind="components.{$smarty.const.SUBMISSIONS_LIST_MY_QUEUE}"
				@set="set"
			/>
		</tab>
		{if array_intersect(array(ROLE_ID_SITE_ADMIN, ROLE_ID_MANAGER), (array)$userRoles)}
			<tab id="unassigned" label="{translate key="common.queue.long.submissionsUnassigned"}" :badge="components.{$smarty.const.SUBMISSIONS_LIST_UNASSIGNED}.itemsMax">
				{help file="submissions" section="unassigned" class="pkp_help_tab"}
				<submissions-list-panel
					v-bind="components.{$smarty.const.SUBMISSIONS_LIST_UNASSIGNED}"
					@set="set"
				/>
			</tab>
			<tab id="active" label="{translate key="common.queue.long.active"}" :badge="components.{$smarty.const.SUBMISSIONS_LIST_ACTIVE}.itemsMax">
				{help file="submissions" section="active" class="pkp_help_tab"}
				<submissions-list-panel
					v-bind="components.{$smarty.const.SUBMISSIONS_LIST_ACTIVE}"
					@set="set"
				/>
			</tab>
		{/if}
		<tab id="archive" label="{translate key="navigation.archives"}" :badge="components.{$smarty.const.SUBMISSIONS_LIST_ARCHIVE}.itemsMax">
			{help file="submissions" section="archives" class="pkp_help_tab"}
			<submissions-list-panel
				v-bind="components.{$smarty.const.SUBMISSIONS_LIST_ARCHIVE}"
				@set="set"
			/>
		</tab>
	</tabs>
</div>
<script type="text/javascript">
	pkp.registry.init('dashboard-{$uuid}', 'Container', {$containerData|json_encode});
</script>

{include file="common/footer.tpl"}
