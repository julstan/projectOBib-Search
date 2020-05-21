{**
 * templates/controllers/grid/settings/preparedEmails/form/emailTemplateForm.tpl
 *
 * Copyright (c) 2014-2020 Simon Fraser University
 * Copyright (c) 2003-2020 John Willinsky
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * Form to edit or create a prepared email
 *}

<div id="editEmailTemplate">
	<pkp-form
		v-bind="components.{$smarty.const.FORM_EMAIL_TEMPLATE}"
		@set="set"
	/>
</div>
<script type="text/javascript">
	pkp.registry.init('editEmailTemplate', 'SettingsContainer', {$containerData|json_encode});
</script>
