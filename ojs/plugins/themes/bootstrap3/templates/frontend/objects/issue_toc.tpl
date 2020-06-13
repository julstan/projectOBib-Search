{**
 * templates/frontend/objects/issue_toc.tpl
 *
 * Copyright (c) 2014-2017 Simon Fraser University Library
 * Copyright (c) 2003-2017 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @brief View of an Issue which displays a full table of contents.
 *
 * @uses $issue Issue The issue
 * @uses $issueTitle string Title of the issue. May be empty
 * @uses $issueSeries string Vol/No/Year string for the issue
 * @uses $issueGalleys array Galleys for the entire issue
 * @uses $hasAccess bool Can this user access galleys for this context?
 * @uses $showGalleyLinks bool Show galley links to users without access?
 *}
<div class="issue-toc">

	{* Indicate if this is only a preview *}
	{if !$issue->getPublished()}
		{include file="frontend/components/notification.tpl" type="warning" messageKey="editor.issues.preview"}
	{/if}

	{* Issue introduction area above articles *}
	<div class="heading row">
		{assign var="issueDetailsCol" value="12"}

		{* Issue cover image and description*}
		{assign var=issueCover value=$issue->getLocalizedCoverImageUrl()}
		{if $issueCover}
			{assign var="issueDetailsCol" value="8"}
			<div class="thumbnail col-md-4">
				<a class="cover" href="{url|escape op="view" page="issue" path=$issue->getBestIssueId()}">
					<img class="img-responsive" src="{$issueCover|escape}" alt="{$issue->getLocalizedCoverImageAltText()|escape|default:''}">
				</a>
			</div>
		{/if}

		<div class="issue-details col-md-{$issueDetailsCol}">

			{if $issue->hasDescription()}
				<div class="description">
					{$issue->getLocalizedDescription()|strip_unsafe_html}
				</div>
			{/if}

			{* PUb IDs (eg - DOI) *}
			{foreach from=$pubIdPlugins item=pubIdPlugin}
				{if $issue->getPublished()}
					{assign var=pubId value=$issue->getStoredPubId($pubIdPlugin->getPubIdType())}
				{else}
					{assign var=pubId value=$pubIdPlugin->getPubId($issue)}{* Preview pubId *}
				{/if}
				{if $pubId}
					{assign var="doiUrl" value=$pubIdPlugin->getResolvingURL($currentJournal->getId(), $pubId)|escape}
					<p class="pub_id {$pubIdPlugin->getPubIdType()|escape}">
						<strong>
							{$pubIdPlugin->getPubIdDisplayType()|escape}:
						</strong>
						{if $doiUrl}
							<a href="{$doiUrl|escape}">
								{$doiUrl}
							</a>
						{else}
							{$pubId}
						{/if}
					</p>
				{/if}
			{/foreach}

			{* Published date *}
			{if $issue->getDatePublished()}
				<p class="published">
					<strong>
						{translate key="submissions.published"}:
					</strong>
					{$issue->getDatePublished()|escape|date_format:$dateFormatShort}
				</p>
			{/if}
		</div>
	</div>

	{* Full-issue galleys *}
	{if $issueGalleys}
		<div class="galleys">
			<div class="page-header">
				<h2>
					<small>{translate key="issue.fullIssue"}</small>
				</h2>
			</div>
			<div class="btn-group" role="group">
				{foreach from=$issueGalleys item=galley}
					{include file="frontend/objects/galley_link.tpl" parent=$issue purchaseFee=$currentJournal->getData('purchaseIssueFee') purchaseCurrency=$currentJournal->getData('currency')}
				{/foreach}
			</div>
		</div>
	{/if}


	
	

	{* chronologische Reihenfolge *}
	<div class="sections">
	{assign var="alleDaten" value=[]}
		{foreach name=sections from=$publishedSubmissions item=section}
			<section class="section">
				{if $section.articles}
					{* hier Rubriken Titel versteckt*}
					{if $section.title}
						<div class="page-header">
							<h2>
								<small>{$section.title|escape}</small>
							</h2>
							{assign var="artikelProRubrik" value=-1}
							{foreach from=$section.articles item=article}
								{assign var="artikelProRubrik" value=$artikelProRubrik+1}
								{$artikelProRubrik}
								{assign var="artikelVersion" value=-1}
								{foreach from=$section.articles.$artikelProRubrik->_data.publications key=k item=v}
									{assign var="artikelVersion" value=$artikelVersion+1}
									{$artikelVersion} <br> <br>
									
										{assign var="datum" value=$section.articles.$artikelProRubrik->_data.publications.$artikelVersion->_data.datePublished}
										{append var="alleDaten" value=$datum}
										{foreach from=$alleDaten item=datumEintrag}
											{$datumEintrag} <br>
										{/foreach}
									
								{/foreach}
							{/foreach}
							</div>
					{/if}
					<div class="media-list">
						{foreach from=$section.articles item=article}
							{include file="frontend/objects/article_summary.tpl"}
						{/foreach}
					</div>
				{/if}
			</section>
		{/foreach}
		{assign var="neuestesDatum" value="0000-00-00"}
		{assign var="alleDatenSortiert" value=[]}
		{assign var="restlicheDaten" value=[]}

		{foreach from=$alleDaten item=datum}
			{foreach from=$alleDaten item=erstesDatum}
				{if $erstesDatum > $neuestesDatum}
					{if $neuestesDatum != "0000-00-00"}
						{append var="restlicheDaten" value=$neuestesDatum}
					{/if}
					{assign var="neuestesDatum" value=$erstesDatum}
				{else}
					{append var="restlicheDaten" value=$erstesDatum}
				{/if}
			{/foreach}
			

			neuestes Datum: {$neuestesDatum} <br>
			{append var="alleDatenSortiert" value=$neuestesDatum}
			{assign var="alleDaten" value=[]}

			{foreach from=$restlicheDaten item=uebrigesDatum}
				{append var="alleDaten" value=$uebrigesDatum}
			{/foreach}
			{assign var="neuestesDatum" value="0000-00-00"}
			{assign var="restlicheDaten" value=[]}
		{/foreach}

		{* Dopplungen in alleDatenSortiert entfernen *}

		{assign var="letztesDatum" value="0000-00-00"}
		{assign var="datenOhneDopplungen" value=[]}

		{foreach from=$alleDatenSortiert item=datum}
			{if $datum != $letztesDatum}
				{append var="datenOhneDopplungen" value=$datum}
				{assign var="letztesDatum" value=$datum}
			{/if}
		{/foreach}

		{foreach from=$datenOhneDopplungen item=datum1}
			{foreach name=sections from=$publishedSubmissions item=section}
			<section class="section">
				{if $section.articles}
					{* hier Rubriken Titel versteckt*}
						<div class="page-header">
							{assign var="artikelProRubrik" value=-1}
							{foreach from=$section.articles item=article}
								{assign var="artikelProRubrik" value=$artikelProRubrik+1}
								{assign var="artikelVersion" value=-1}
								{foreach from=$section.articles.$artikelProRubrik->_data.publications key=k item=v}
									{assign var="artikelVersion" value=$artikelVersion+1}
									{assign var="datum" value=$section.articles.$artikelProRubrik->_data.publications.$artikelVersion->_data.datePublished}

									{* prüfen ob datePublished des Artikels == datum1 aus datenOhneDopplungen *}
									{if $datum1 == $datum}
										{include file="frontend/objects/article_summary.tpl"}
									{/if}

								{/foreach}
							{/foreach}
						</div>
				{/if}
					
			</section>
			{/foreach}
		{/foreach}

		datenOhneDopplungen: 
			{foreach from=$datenOhneDopplungen item=dasDatum}
				{$dasDatum}
			{/foreach} <br>

		alleDaten: 
			{foreach from=$alleDaten item=einDatum}
				{$einDatum}
			{/foreach} <br>

			restliche Daten:
			{foreach from=$restlicheDaten item=restlichesDatum}
				{$restlichesDatum}
			{/foreach} <br>

		alleDatenSortiert: 
		{foreach from=$alleDatenSortiert item=datum1}
			{$datum1}
		{/foreach} <br>
	</div><!-- .sections -->

</div><!-- .issue-toc -->
