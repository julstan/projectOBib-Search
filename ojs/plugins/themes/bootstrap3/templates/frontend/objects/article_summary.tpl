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
{/if}

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

{* hier Veroffentlicht*}
		{if $article->getDatePublished()}
				<p class="published">
					{$article->getDatePublished()|escape|date_format:$dateFormatShort}
				</p>
			{/if}
		{if $showAuthor || $article->getPages()}

			{if $showAuthor}
				<div class="meta">
					{if $showAuthor}
						<div class="authors">
							{$article->getAuthorString()|escape}
						</div>
					{/if}
				</div>
			{/if}

			{* hier Label für NEU*}
	
			{* wenn DatePublished nicht 4 Wochen älter als aktuelles Datum*}
			{*assign var='f' value=0}
			{assign var='DatumAufsatz' value=$article->getDatePublished()}
			{assign var='AktuellDatum' value=$smarty.now|date_format: "%Y-%m-%d"}
			{if $DatumAufsatz == $AktuellDatum} 
			<button class="btn btn-success">NEW</button>
			{math equation="$f + 2"*}  {*math equation glaub unnötig, kann man weglassen*} {*hier muss die Ausgabe noch versteckt werden, gerade sieht man die 2*}
			{* {elseif $f > 0}
			<button class="btn btn-primary">NEW</button>
			{math equation="$f - 1"}
			{else $f <= 0}
			{"{$DatumAufsatz} ist älter als 2 Tage von {$AktuellDatum}"}
			{/if} *}

			{* Übersicht für Tagesanzahl pro Monat *}
			{assign var='januar' value=['zahl'=>01, 'anzahlTage'=>31]}
			{assign var='februar' value=['zahl'=>2, 'anzahlTage'=>28]}
			{assign var='maerz' value=['zahl'=>3, 'anzahlTage'=>31]}
			{assign var='april' value=['zahl'=>4, 'anzahlTage'=>30]}
			{assign var='mai' value=['zahl'=>5, 'anzahlTage'=>31]}
			{assign var='juni' value=['zahl'=>6, 'anzahlTage'=>30]}
			{assign var='juli' value=['zahl'=>7, 'anzahlTage'=>31]}
			{assign var='august' value=['zahl'=>8, 'anzahlTage'=>31]}
			{assign var='september' value=['zahl'=>9, 'anzahlTage'=>30]}
			{assign var='oktober' value=['zahl'=>10, 'anzahlTage'=>31]}
			{assign var='november' value=['zahl'=>11, 'anzahlTage'=>30]}
			{assign var='dezember' value=['zahl'=>12, 'anzahlTage'=>31]}

			{* Variablen für Veröffentlichungsdatum vom Artikel *}
			{assign var='counter' value=0}
			{assign var='tagArtikel' value=$article->getDatePublished()|date_format: "%e"}
			{assign var='monatArtikel' value=$article->getDatePublished()|date_format: "%m"}
			{assign var='jahrArtikel' value=$article->getDatePublished()|date_format: "%Y"}

			{* Variablen für Datum von heute *}
			{assign var='tagDatumHeute' value=$smarty.now|date_format: "%e"}
			{assign var='monatDatumHeute' value=$smarty.now|date_format: "%m"}
			{assign var='jahrDatumHeute' value=$smarty.now|date_format: "%Y"}

			{* zu Datum von heute 14 Tage dazu addieren *}
			{assign var='tagDatumNeu' value=$tagDatumHeute-14}
			{if $tagDatumNeu < 1}
				{if $monatDatumHeute == $januar.zahl}
					{assign var="monatDatumNeu" value=12}
					{assign var="jahrDatumNeu" value=$jahrDatumHeute-1}
					{assign var="tagDatumNeu" value=31-abs($tagDatumNeu)}
					{$tagDatumNeu}
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
