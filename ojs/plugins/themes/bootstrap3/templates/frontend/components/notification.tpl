{**
 * templates/frontend/components/notification.tpl
 *
 * Copyright (c) 2014-2017 Simon Fraser University Library
 * Copyright (c) 2003-2017 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @brief View of an embedded notification element. Intended to be basic and highly
 *  reusable.
 *
 * @uses $type string A class which will be added to the notification element
 * @uses $message string The notification message
 * @uses $messageKey string Optional translation key to generate the message
 *}
<div class="cmp_notification {$type|escape|replace:' ':'_'} alert alert-info" role="alert">
	{if $messageKey}
		{translate key=$messageKey}
	{else}
		{$message}
	{/if}
</div>
