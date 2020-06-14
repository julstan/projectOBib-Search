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
	{assign var="alleDaten" value=[]}	{* Array mit dem datePublished zu jedem veröffentlichten Artikel *}
		{foreach name=sections from=$publishedSubmissions item=section}	{* durchgehen des Arrays publishedSubmissions *}
			<section class="section">
				{if $section.articles}	{* Prüfen, ob section articles enthält *}
					{if $section.title}	{* Prüfen, ob section title enthält *}
						{assign var="artikelProRubrik" value=-1}	{* artikelProRubrik ist eine Zahl die benötigt wird um den Pfad zum Artikel in publishedSubmissions auf der Ebende der Rubrik aufzurufen *}
																	{* die Variable wird auf -1 gesetzt, da der erste Wert der zum Aufrufen benötigt wird 0 sein muss und in der Schleife immer um 1 addiert wird *}
						{foreach from=$section.articles item=article}	{* durchgehen der Artikel einer Rubrik *}
							{assign var="artikelProRubrik" value=$artikelProRubrik+1}
							{* Ausgabe zum Testen: {$artikelProRubrik} *}
							{assign var="artikelVersion" value=-1}	{* artikelVersion ist eine Zahl die benötigt wird um den Pfad zur Artikelversion in publishedSubmissions auf der Ebende der Rubrik aufzurufen *}
																	{* die Variable wird auf -1 gesetzt, da der erste Wert der zum Aufrufen benötigt wird 0 sein muss und in der Schleife immer um 1 addiert wird *}
							{foreach from=$section.articles.$artikelProRubrik->_data.publications item=version}	{* durchgehen der Artikel pro Rubrik, um Artikelversionen herauszufinden *}
								{assign var="artikelVersion" value=$artikelVersion+1}
								{* Ausgabe zum Testen: {$artikelVersion} <br> <br> *}
								{assign var="datum" value=$section.articles.$artikelProRubrik->_data.publications.$artikelVersion->_data.datePublished} {* datum enthählt das datePublished *}
								{append var="alleDaten" value=$datum}	{* datePublished der Artikelversion wird in Array alleDaten geschrieben *}
								{* {foreach from=$alleDaten item=datumEintrag}
									Ausgabe zum Testen: {$datumEintrag} <br>
								{/foreach} *}
							{/foreach}
						{/foreach}
					{/if}
				{/if}
			</section>
		{/foreach}
		{* Ergebnis: wir haben ein Array (alleDaten), das das datePublished jedes veröffentlichten Artikel enthält *}

		{assign var="neuestesDatum" value="0000-00-00"}	{* enthält neuestes Datum aus dem Array alleDaten *}
														{*ist zu Beginn immer auf einen Wert gesetzt mit dem verglichen werden kann und der das gleiche Format hat wie die Daten in alleDaten *}
		{assign var="alleDatenSortiert" value=[]}	{* enthält jedes datePublished in chronologisch sortierter Reihenfolge (neu -> alt) *}
		{assign var="restlicheDaten" value=[]}	{* enthält temporär alle übrigen Daten aus alleDaten, die beim Durchlauf der Schleife nicht das neuesteDatum sind *}

		{foreach from=$alleDaten item=anzahlSchleifendurchgaenge name=datumsSchleife}	{* festlegen, dass Schleife so oft wiederholt wird, wie Daten in alleDaten vorhanden sind *}
																	{* entspricht in Python "for i in range (len (alleDaten))" *}
			{foreach from=$alleDaten item=datum}	{* Durchgehen des Arrays alleDaten, um neuestes Datum herauszufinden *}
				{if $datum > $neuestesDatum}	{* überprüfen ob datum neuer ist als Wert in neuestesDatum *}
					{if $neuestesDatum != "0000-00-00"}
						{append var="restlicheDaten" value=$neuestesDatum}	{* wenn Wert in neuestesDatum überschrieben wird (also doch nicht das neueste Datum ist), wird dieser Wert in restlicheDaten geschrieben *}
					{/if}
					{assign var="neuestesDatum" value=$datum}	{* wenn datum neuer ist als neuestesDatum, wird der Wert in neuestesDatum durch datum ersetzt *}
				{else}
					{append var="restlicheDaten" value=$datum}	{* wenn das Datum nicht neuer ist, wird datum in restlicheDaten geschrieben *}
				{/if}
			{/foreach}
			{* Ergebnis: wir haben das neueste Datum aus alleDaten herausgefiltert und alle älteren Daten in restlicheDaten geschrieben *}
			
			{* Ausgabe zum Testen: neuestes Datum: {$neuestesDatum} <br> *}
			{append var="alleDatenSortiert" value=$neuestesDatum}	{* neuestesDatum wird in alleDatenSortiert geschrieben *}
			{assign var="alleDaten" value=[]}	{* Wert von alleDaten wird durch eine leere Liste ersetzt *}

			{foreach from=$restlicheDaten item=uebrigesDatum}	{* Übertragen der Daten aus restlicheDaten nach alleDaten, damit wir die Schleife (datumsSchleife) erneut durchlaufen können *}
				{append var="alleDaten" value=$uebrigesDatum}
			{/foreach}

			{assign var="neuestesDatum" value="0000-00-00"}	{* neuestesDatum wieder auf Ausgangswert zurücksetzen, um erneut das neueste Datum bestimmen zu können unter den restlichen Daten *}
			{assign var="restlicheDaten" value=[]}	{* restlicheDaten auf Ausgangswert zurücksetzen *}
			{* äußere Schleife wird so oft durchlaufen, bis alleDaten leer ist *}
		{/foreach}
		{* Ergebnis: Daten sind sortiert (neu -> alt), es sind aber noch Dopplungen vorhanden *}

		{* Dopplungen in alleDatenSortiert entfernen *}
		{assign var="zuletztAufgerufenesDatum" value="0000-00-00"}	{* wird benutzt um in Schleife dopplungenEntfernen zu überprüfen, ob das zuvor aufgerufene Datum dasselbe ist wie das aktuell aufgerufene *}
		{assign var="datenOhneDopplungen" value=[]}	{* Array mit sortierten Daten ohne Dopplungen *}

		{foreach from=$alleDatenSortiert item=datum name=dopplungenEntfernen}	{* durchgehen der Daten in alleDatenSortiert *}
			{if $datum != $zuletztAufgerufenesDatum}	{* prüfen ob Datum identisch *}
				{append var="datenOhneDopplungen" value=$datum}	{* wenn nicht identisch datum in datenOhneDopplungen schreiben *}
				{assign var="zuletztAufgerufenesDatum" value=$datum}	{* Wert von zuletztAufgerufenesDatum auf datum setzen *}
			{/if}
		{/foreach}
		{* Ergebnis: Array (datenOhneDopplungen) in dem jedes Datum nur einmal vorkommt und das sortiert ist (neu -> alt) *}

		{* Artikel in chronologischer Reihenfolge ausgeben *}
		{foreach from=$datenOhneDopplungen item=datum}	{* durchgehen der Daten in datenOhneDopplungen *}

			{* durchgehen der Rubriken und jeweiligen Artikel (und deren Versionen) in publishedSubmissions, herausfiltern des datePublished, Kommentare siehe oben *}
			{foreach name=sections from=$publishedSubmissions item=section}
				<section class="section">
					{if $section.articles}						
						{assign var="artikelProRubrik" value=-1}
						{foreach from=$section.articles item=article}
							{assign var="artikelProRubrik" value=$artikelProRubrik+1}
							{assign var="artikelVersion" value=-1}
							{foreach from=$section.articles.$artikelProRubrik->_data.publications key=k item=v}
								{assign var="artikelVersion" value=$artikelVersion+1}
			{* ab hier anders wie oben *}

								{assign var="datumVeroeffentlichung" value=$section.articles.$artikelProRubrik->_data.publications.$artikelVersion->_data.datePublished} {* datumVeroeffentlichung enthält datePublished der Artikelversion *}

								{if $datum == $datumVeroeffentlichung}	{* prüfen ob datePublished des Artikels == datum aus datenOhneDopplungen, wenn ja dann Template ausgeben *}
									<div class="page-header">
										{* Ausgabe zum Testen: {$datumVeroeffentlichung} *}
										{include file="frontend/objects/article_summary.tpl"}
									</div>
								{/if}
							{/foreach}
						{/foreach}	
					{/if}	
				</section>
			{/foreach}
		{/foreach}
		{* Ergebnis: chronologisch sortierte Ausgabe der Artikel *}

		{* Ausgaben zum Testen: *}
			{* datenOhneDopplungen: 
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
			{/foreach} <br> *}
		{* Ende Testausgabe *}

	</div><!-- .sections -->

</div><!-- .issue-toc -->
