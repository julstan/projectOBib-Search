{**
 * templates/frontend/pages/search.tpl
 *
 * Copyright (c) 2014-2017 Simon Fraser University Library
 * Copyright (c) 2003-2017 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @brief Display the page to search and view search results.
 *
 * @uses $query Value of the primary search query
 * @uses $authors Value of the authors search filter
---------$section Value for the section search filter (dropdown)---------------
 * @uses $dateFrom Value of the date from search filter (published after).
 *  Value is a single string: YYYY-MM-DD HH:MM:SS
 * @uses $dateTo Value of the date to search filter (published before).
 *  Value is a single string: YYYY-MM-DD HH:MM:SS
 * @uses $yearStart Earliest year that can be used in from/to filters
 * @uses $yearEnd Latest year that can be used in from/to filters
 *}
{include file="frontend/components/header.tpl" pageTitle="common.search"}

<div  id="main-content" class="page page_search">

	<div class="page-header">
		<h1>{translate key="common.search"}</h1>
	</div>

	{* Main Search From *}
<div class="row">
	
	<div class="col-md-2"> {* Bootstrap Grid-System Styling *}

					{* Volltextsuche Boolesche Operatoren *}
					<div class="form-group">
					 	<select id="querybool" class="form-control" for="operator" name="operator" onchange="GetSelectedValueQuery()"> {* hier JS-Funktion für Boolesche Operatoren *}
						<option value="" selected ></option> {* Standardeinstellung leerer value *}
						<option value=" UND " >UND</option>
						<option value=" ODER " >ODER</option>
						<option value=" NICHT ">NICHT</option>
						 </select>
					</div>
	</div>


	{* Volltextsuche *}
	<div class="col-md-10"> {* Bootstrap Grid-System Styling *}
	<form method="post" id="search-form" class="search-form" action="{url op="search"}" role="search">
		{csrf}
		<div class="form-group">
			<label class="sr-only" for="query">
				{translate key="search.searchFor"}
			</label>
			<div class="input-group">
				<span class="input-group-btn">
				<input type="text" id="query" name="query" value="{$query|escape}" class="query form-control" placeholder="{translate key="common.search"}">
				</span>
			</div>
		</div>
	</div>


</div>

		{*Suchhinweise Collapse-Button*}
		<div class="text-center">
		<button class="btn btn-light " type="button" data-toggle="collapse" data-target="#collapseHinweise" aria-expanded="false" aria-controls="collapseHinweise">
					Suchhinweise <i class="fas fa-chevron-down"></i> {*Pfeil-Icon nach unten "v" *}
  		</button> 
					  </div>
		<div class="collapse" id="collapseHinweise">
  		<div class="card card-body">
		<ul>
		{* Suchhinweise Text deutsch *}
   		<li>Groß- und Kleinschreibung der Suchbegriffe werden nicht unterschieden.</li>
		<li>Häufig vorkommende Worte werden ignoriert</li>
		<li>Standardmäßig werden nur die Artikel aufgelistet, die <em>alle</em> Suchbegriffe enthalten (implizites <em>UND</em>).</li>
		<li>Mehrere Suchbegriffe verbunden durch <em>ODER</em> ergeben Artikel, die den einen und/oder den anderen Begriff enthalten, z.B. <em>Bildung ODER Forschung.</em></li>
		<li>Verwenden Sie Klammern für eine komplexere Suche, z.B. <em>Archiv ((Zeitschrift ODER Vortrag) NICHT Dissertation)</em>.</li>
		<li>Suchen Sie nach einer genauen Wortfolge, indem Sie sie in Anführungszeichen setzen, z.B. <em>"Veröffentlichung mit freiem Zugang"</em>.</li>
		<li>Schließen Sie ein Wort aus, indem Sie ihm <strong>-</strong> oder <em>NICHT</em> voranstellen, z.B. <em>Internetpublikation -Politik</em> oder <em>Internetpublikation NICHT Politik</em>.</li>
		<li>Verwenden Sie <strong>*</strong> als Platzhalter für beliebige Zeichenfolgen, z.B. <em>Sozi* Moral</em> listet alle Dokumente, die "soziologisch" oder "sozial" enthalten.</li>
		</ul>
		</div>
		</div>
		
		{* Filter der Erweiterten Suche *}
		<fieldset class="search-advanced">
			<legend>
				{translate key="search.advancedFilters"}
			</legend>
			<div class="row">

				{* Zeitraumfilter *}
				<div class="col-md-5">
					<div class="form-group">
						<label for="dateFromYear">
							{translate key="search.dateFrom"}
						</label>

						{*Info-Icon*}
						<span title="Muss mit einer Autoren- oder Freitextsuche kombiniert werden">
							<i class="fas fa-info-circle"></i>
						</span>

						<div class="form-inline">
							<div class="form-group">
								{html_select_date prefix="dateFrom" time=$dateFrom start_year=$yearStart end_year=$yearEnd year_empty="" month_empty="" day_empty="" field_order="YMD"}
							</div>
						</div>
					</div>
					<div class="form-group">
						<label for="dateToYear">
							{translate key="search.dateTo"}
						</label>
						<div class="form-inline" >
							<div class="form-group">
								{html_select_date prefix="dateTo" time=$dateTo start_year=$yearStart end_year=$yearEnd year_empty="" month_empty="" day_empty="" field_order="YMD"}
							</div>
						</div>
					</div>
				</div>
				
		
				{*Autorensuche Boolesche Operatoren*}
				<div class="col-md-2"> {* Bootstrap Grid-System Styling *}
					<div class="form-group">
						<label class="invisible">1</label>
					 	<select id="authorbool" class="form-control" for="operator" name="operator" onchange="GetSelectedValueAuthor()"> {* hier JS-Funktion für Boolesche Operatoren *}
						<option value="" selected ></option> {* Standardeinstellung leerer value *}
						<option value=" UND " >UND</option>
						<option value=" ODER " >ODER</option>
						<option value=" NICHT ">NICHT</option>
						 </select>
					</div>
				</div>

				{*Autorensuche*}
				<div class="col-md-5">
					<div class="form-group">
						<label for="authors">
							{translate key="search.author"} {*Hier funktioniert der key: Nach Autor/in / By Author*}
						</label>
						<div class="input-group">
						<span class="input-group-btn">
						<input class="form-control" type="text" id="authors" for="authors" name="authors"  value="{$authors|escape}" placeholder="{translate key="common.search"}"> {* Platzhalter "Suchen/Search" eingefügt vgl. Volltextsuche*}
						{*<input type="submit" value="{translate key="common.search"}" class="btn btn-info">*}
						</span>
						</div>
					</div>
					
					{*Rubrikenfilter Dropdown*}
					<div class="form-group">
				
					<div class="form-group">
					<label for="section">Nach Rubrik</label>

					{*Info-Icon*}
					<span title="Muss mit einer Autoren- oder Freitextsuche kombiniert werden">
					<i class="fas fa-info-circle"></i>
					</span>
					
					<select id="section" class="form-control" for="section" name="section">
					<option value="" selected>Alle</option>{* Alle muss einen leeren value haben *}
					<option value="Kongressbeiträge">Kongressbeiträge</option>
					<option value="Aufsätze">Aufsätze</option>
					<option value="Tagungsberichte">Tagungsberichte</option>
					<option value="Berichte und Mitteilungen">Berichte und Mitteilungen</option>
					<option value="Diskussionsbeiträge">Diskussionsbeiträge</option>
					<option value="Rezensionen">Rezensionen</option>
					<option value="Aus den Landes- und Regionalverbänden des VDB">Landes- und Regionalverbänden VDB</option>
					{* Es ist wichtig den value= genau so anzugeben, wie der richtige Rubrikenname lautet*}</select></div>
					
		
										
				</div>	
			</div>
			
			{*Suchbutton um die Suche auszuführen*}
			<div class="text-center">
				<input type="submit" value="{translate key="common.search"}" class="btn btn-info">
			</div>

		</fieldset>
	
		{* Search results *}
		<div class="search-results">
			<h2>
				{translate key="search.searchResults"}
			</h2>
			{*Zähler-Variable, die die Ergebisse zählt, 
			-- wichtig für die Trefferanzeige bei der Suche mit dem Rubrikenfilter*}
			{assign var='zahler' value=0}  

			{iterate from=results item=result}

				{* $rubrik = Variable für die Rubriken in den Suchergebnissen:
				Diese wird später mit der gesuchten Rubrik ($section) verglichen, 
				damit nur Artikel in den Suchergebnissen stehen, 
				die die gleiche Rubrik ($rubrik) haben wie die gesuchte Rubrik ($section) *}
				
				{foreach from=$result item=item} {*für alle Suchergebnisse wird $rubrik definiert*}
					{assign var='rubrik' value=$item->_data.title.de_DE} {*hier wird der Wert für die Variable aus dem result Array entnommen*}
				{/foreach}

				{*Anzeige der Suchergebnisse bei Benutzung des Rubrikenfilters*}
				{if $section}
					{if $rubrik==$section} {*hier wird überprüft ob $section mit einer Ergebnisrubrik ($rubrik) übereinstimmt*}
					{assign var='zahler' value=$zahler+1}	{* hier werden die Suchergebnisse für die Trefferanzahl am Ende der Seite gezählt *}
					
					{*Ausgabe der Suchergebnisse nach Rubrikenfilterung*}
					{include file="frontend/objects/article_summary.tpl" article=$result.publishedSubmission showDatePublished=true hideGalleys=true}
					{/if}
				{else}	

					{*Anzeige der Suchergebnisse ohne den Rubrikenfilter*}
					{include file="frontend/objects/article_summary.tpl" article=$result.publishedSubmission showDatePublished=true hideGalleys=true}
				{/if}
			{/iterate}
			
		</div>
	
		{* No results found *}
		{if $results->wasEmpty()}
			{if $error}
				{include file="frontend/components/notification.tpl" type="error" message=$error|escape}
			{else}
				{* $results ist ein VirtualArrayIterator Object es kann wie ein normales Array behandelt werden *}
				{include file="frontend/components/notification.tpl" type="notice" messageKey="search.noResults"}
			{/if}

		{*Verbesserung der Trefferanzeige*}
		{* Results pagination *}
		{else}
			<div class="cmp_pagination">
			
			{* Trefferanzahl bei einer Suche ohne Rubrikenfilter *}
			{if !$section}	
				{page_info iterator=$results}	{* Hier wird die Trefferanzahl-Ausgabe erzeugt *}
				{page_links anchor="results" iterator=$results name="search" query=$query searchJournal=$searchJournal authors=$authors title=$title abstract=$abstract galleyFullText=$galleyFullText discipline=$discipline subject=$subject type=$type coverage=$coverage indexTerms=$indexTerms dateFromMonth=$dateFromMonth dateFromDay=$dateFromDay dateFromYear=$dateFromYear dateToMonth=$dateToMonth dateToDay=$dateToDay dateToYear=$dateToYear orderBy=$orderBy orderDir=$orderDir}
				
		
				{*$results ist hier anders als im Rest des Codes - es sind die Trefferanzahl insgesammt und Informationen für die Pagination enthalten*}
			
			{* Trefferanzahl mit Rubrikenfilter *}
			{elseif $section} 	
				<p>1 - {$zahler} von {$zahler} Treffern</p>	
				{* Ausgabe des Textes, hier fest in deutsch *}
			{/if}
			</div>
		{/if}
	</form>
	
		
</div> <!-- .page -->


{* Javascript Code -------------------------------------*}
<script>

// Boolesche Operatoren Funktion -- Volltextsuche
function GetSelectedValueQuery(){
var dropdown_search = document.getElementById("querybool");
var selected_operator = dropdown_search.options[dropdown_search.selectedIndex].value;

document.getElementById("query").value = document.getElementById("query").value + selected_operator;
}

// Boolesche Operatoren Funktion -- Autorensuche
function GetSelectedValueAuthor(){
var dropdown_author = document.getElementById("authorbool");  //Dropdown mit der richtigen ID wird ausgewählt
var selected_operator = dropdown_author.options[dropdown_author.selectedIndex].value;  //Ergebnisswert wird definiert, der value der options hier also UND,NICHT,ODER

document.getElementById("authors").value = document.getElementById("authors").value + selected_operator; 
//Inputsuchschlitz mit der richtigen ID wird ausgewählt, der dortige Value wird übernommen und result wird drangehängt, 
//das ganze wird wieder abgespeichert, damit man mehrere results (boolesche Operatoren) miteinander verknüpfen kann
}

</script>

{* Einbindung des Fontawesome-Pakets für die Icon-Symbole (Info und Pfeil)*}
<script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" data-auto-replace-svg="nest"></script>

{include file="common/frontend/footer.tpl"}
