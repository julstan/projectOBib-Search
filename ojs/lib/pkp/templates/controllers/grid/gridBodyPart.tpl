{**
 * templates/controllers/grid/gridBodyPart.tpl
 *
 * Copyright (c) 2014-2020 Simon Fraser University
 * Copyright (c) 2000-2020 John Willinsky
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * a set of grid rows within a tbody
 *}
<tbody>
	{foreach from=$rows item=row}
		{$row}
	{/foreach}
	<tr></tr>
</tbody>

