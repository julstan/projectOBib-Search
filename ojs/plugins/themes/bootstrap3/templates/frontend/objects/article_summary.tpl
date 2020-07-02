{**
 * templates/frontend/objects/article_summary.tpl
 *
 * Copyright (c) 2014-2017 Simon Fraser University Library
 * Copyright (c) 2003-2017 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @brief View of an Article summary which is shown within a list of articles.
 *
 * @uses $article Article The article
 * @uses $hasAccess bool Can this user access galleys for this context? The
 *       context may be an issue or an article
 * @uses $showGalleyLinks bool Show galley links to users without access?
 * @uses $hideGalleys bool Hide the article galleys for this article?
 * @uses $primaryGenreIds array List of file genre ids for primary file types
 *}
{assign var=articlePath value=$article->getBestId($currentJournal)}
{if (!$section.hideAuthor && $article->getHideAuthor() == $smarty.const.AUTHOR_TOC_DEFAULT) || $article->getHideAuthor() == $smarty.const.AUTHOR_TOC_SHOW}
	{assign var="showAuthor" value=true}
{elseif ($section.hideAuthor && $article->getHideAuthor() == $smarty.const.AUTHOR_TOC_DEFAULT) || $article->getHideAuthor() == $smarty.const.AUTHOR_TOC_SHOW}
	{assign var="showAuthor" value=true}
{/if}

{* es wird mit section die Variable $hideauthor geliefert. Bei {elseif} wird das abgefangen, damit der Autor trotzdem angezeigt wird *}

<div class="article-summary media">
	{if $article->getLocalizedCoverImage()}
		<div class="cover media-left">
			<a href="{url page="article" op="view" path=$articlePath}" class="file">
				<img class="media-object" src="{$article->getLocalizedCoverImageUrl()|escape}" alt="{$article->getLocalizedCoverImageAltText()|escape|default:''}">
			</a>
		</div>
	{/if}

	<div class="media-body">
		<h3 class="media-heading">
			<a href="{url page="article" op="view" path=$articlePath}">
				{$article->getLocalizedTitle()|strip_unsafe_html}
				{if $article->getLocalizedSubtitle()}
					<p>
						<small>{$article->getLocalizedSubtitle()|escape}</small>
					</p>
				{/if}
			</a>
		</h3>

		{* Rubrikenanzeige*}
 
            <div>
				{foreach name=sections from=$publishedSubmissions item=section}
					{if $section.articles}
						{if $section.title}
							{assign var='rubrik' value=$section.title}
							{assign var='artikelId' value=$articlePath}
							{if $section.articles}						
								{assign var="artikelProRubrik" value=-1}
								{foreach from=$section.articles item=article}
									{assign var="artikelProRubrik" value=$artikelProRubrik+1}
									{assign var='tempArtikelId' value=$section.articles.$artikelProRubrik->_data.id}
									{if $tempArtikelId == $artikelId}
										Rubrik: {$section.title}
										{* {$tempArtikelId}
										{$artikelId} *}
									{/if}
								{/foreach}
							{/if}
						{/if}
					{/if}
				{/foreach}
             </div>

		{* Rubrikenanzeige Ende *}
		
{* hier Veroffentlicht*}
		{if $article->getDatePublished()}
			<p class="published">
				{$article->getDatePublished()|escape|date_format:$dateFormatShort}
			</p>
		{/if}


		{if $showAuthor || $article->getPages()}

			{if $showAuthor}	{* dieser Abschnitt ist für die ANzeige der Autorennamen zuständig *}
				<div class="meta">
					{if $showAuthor}
						<div class="authors">
							{$article->getAuthorString()|escape}
						</div>
					{/if}
				</div>
			{/if}

			
			
 

			{* AB HIER NEU-LABEL *}
	
			{* Array in dem für jeden Monat die jeweilige Anzahl der Tage enthalten ist, Monate können anhand der 'zahl' referenziert werden *}
				{* bewusste Entscheidung für 28 Tage im Februar, da so nur alle vier Jahre manche neu veröffentlichten Artikel einen Tag zu kurz mit dem Neu-Label ausgezeichnet werden *}
			{assign var='monate' value=[['zahl'=>1, 'anzahlTage'=>31], 
										['zahl'=>2, 'anzahlTage'=>28], 
										['zahl'=>3, 'anzahlTage'=>31], 
										['zahl'=>4, 'anzahlTage'=>30], 
										['zahl'=>5, 'anzahlTage'=>31], 
										['zahl'=>6, 'anzahlTage'=>30],
										['zahl'=>7, 'anzahlTage'=>31],
										['zahl'=>8, 'anzahlTage'=>31],
										['zahl'=>9, 'anzahlTage'=>30],
										['zahl'=>10, 'anzahlTage'=>31],
										['zahl'=>11, 'anzahlTage'=>30],
										['zahl'=>12, 'anzahlTage'=>31]]}

		

			{* Variablen für Veröffentlichungsdatum vom Artikel *}
			{* zerlegen in Tag, Monat und Jahr, um mit den einzelnen Zahlen rechnen zu können *}
			{assign var='tagArtikel' value=$article->getDatePublished()|date_format: "%e"}
			{assign var='monatArtikel' value=$article->getDatePublished()|date_format: "%m"}
			{assign var='jahrArtikel' value=$article->getDatePublished()|date_format: "%Y"}

			{* Variablen für Datum von heute *}
			{* zerlegen in Tag, Monat und Jahr, um mit den einzelnen Zahlen rechnen zu können *}
			{assign var='tagDatumHeute' value=$smarty.now|date_format: "%e"}
			{assign var='monatDatumHeute' value=$smarty.now|date_format: "%m"}
			{assign var='jahrDatumHeute' value=$smarty.now|date_format: "%Y"}

			{* Testausgabe um herauszufinden ob Datumsrechnung in vorheriges Jahr auch funktionieren *}
			{* {assign var='tagDatumHeute' value=20}
			{assign var='monatDatumHeute' value=1}
			{assign var='jahrDatumHeute' value=2020} *}

			{* wir wollen das Datum herausfinden das 28 Tage zurückliegt, um das Veröffentlichungsdatum zu bekommen, das ein Artikel maximal haben darf um noch mit dem Neu-Label ausgezeichnet zu werden *}
			
			{* vom aktuellen Datum (heute) 28 Tage subtrahieren *}
			{assign var='zielTag' value=$tagDatumHeute-28}

			{* wenn die Zahl des zielTag kleiner als 1 ist, liegt das maximale Zieldatum im vorherigen Monat *}
			{if $zielTag < 1}
				{* überprüfen ob im Moment Januar ist *}
				{if $monatDatumHeute == $monate[0].zahl}
					{* wenn momentan Januar ist, liegt das Zieldatum im Dezember des vorherigen Jahres *}
					{assign var="zielMonat" value=12}
					{assign var="zielJahr" value=$jahrDatumHeute-1}
					{* zielTag enthält hier noch eine negative Zahl, der Betrag der Zahl soll von 31 abgezogen werden, um den tatsächlichen zielTag zu erhalten *}
					{assign var="zielTag" value=31-abs($zielTag)}	{* abs(): Funktion die den Betrag der negativen Zahl bestimmt *}

				{* wenn nicht Januar ist, dann... *}
				{else}
					{* ...wird vom aktuellen Monat ein Monat zurückgegangen *}
					{assign var="zielMonat" value=$monatDatumHeute-1}
					{* ...überprüfen wie viele Tage der zielMonat hat, um zielTag zu errechnen *}
					{foreach from=$monate item=monat}
						{if $monat.zahl == $zielMonat}
							{assign var="zielTag" value=$monat.anzahlTage-abs($zielTag)}
						{/if}
					{/foreach}
				{/if}
			{/if}

			{* prüfen ob Neu-Label angezeigt werden muss oder nicht *}
			{* ausschließen welche Artikel vom Veröffentlichungsjahr her kein New-Label bekommen *}
			{if $jahrArtikel >= $zielJahr}
				{* wenn der Artikel im aktuellen Monat veröffentlicht wurde, wird ein New-Label angezeigt *}
                {if $monatArtikel > $zielMonat}
                    <button class="btn btn-success">NEW</button>
                {/if}
				{* wenn der Monat der Veröffentlichung dem Monat des Zieldatums entspricht... *}
                {if $monatArtikel == $zielMonat}
					{* ...und der Veröffentlichungstag größer oder gleich dem Tag des Zieldatums ist, wird New-Label angezeigt *}
                    {if $tagArtikel >= $zielTag}
                        <button class="btn btn-success">NEW</button>
					{/if}
                {/if}
            {/if}



			{* Page numbers for this article *}
			{if $article->getPages()}
				<p class="pages">
					{$article->getPages()|escape}
				</p>
			{/if}

		{/if}

		{if !$hideGalleys && $article->getGalleys()}
			<div class="btn-group" role="group">
				{foreach from=$article->getGalleys() item=galley}
					{if $primaryGenreIds}
						{assign var="file" value=$galley->getFile()}
						{if !$galley->getRemoteUrl() && !($file && in_array($file->getGenreId(), $primaryGenreIds))}
							{continue}
						{/if}
					{/if}
					{assign var="hasArticleAccess" value=$hasAccess}
					{if $currentContext->getSetting('publishingMode') == $smarty.const.PUBLISHING_MODE_OPEN || $publication->getData('accessStatus') == $smarty.const.ARTICLE_ACCESS_OPEN}
						{assign var="hasArticleAccess" value=1}
					{/if}
					{include file="frontend/objects/galley_link.tpl" parent=$article hasAccess=$hasArticleAccess}
				{/foreach}
			</div>
		{/if}
	</div>

	{call_hook name="Templates::Issue::Issue::Article"}
</div><!-- .article-summary -->
