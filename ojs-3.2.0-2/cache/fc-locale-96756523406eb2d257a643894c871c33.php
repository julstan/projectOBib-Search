<?php return array (
  'plugins.importexport.native.displayName' => 'Natives XML-Plugin',
  'plugins.importexport.native.description' => 'Artikel und Ausgaben in OJS\' nativem XML-Format importieren und exportieren.',
  'plugins.importexport.native.import' => 'Import',
  'plugins.importexport.native.import.instructions' => 'Lade XML-Datei zum Import hoch',
  'plugins.importexport.native.exportSubmissionsSelect' => 'Wählen Sie Artikel aus, die exportiert werden sollen',
  'plugins.importexport.native.exportSubmissions' => 'Artikel exportieren',
  'plugins.importexport.native.exportIssues' => 'Ausgaben exportieren',
  'plugins.importexport.native.results' => 'Ergebnisse',
  'plugins.inportexport.native.uploadFile' => 'Bitte laden Sie unter "Import" eine Datei hoch, um fortzufahren.',
  'plugins.importexport.native.importComplete' => 'Der Import wurde erfolgreich abgeschlossen. Die folgenden Elemente wurden importiert:',
  'plugins.importexport.native.cliUsage' => 'Nutzung: {$scriptName} {$pluginName} [command] ...
Befehle:
	import [xmlFileName] [journal_path] [user_name] ...
	export [xmlFileName] [journal_path] articles [articleId1] [articleId2] ...
	export [xmlFileName] [journal_path] article [articleId]
	export [xmlFileName] [journal_path] issues [issueId1] [issueId2] ...
	export [xmlFileName] [journal_path] issue [issueId]

Zusätzliche Parameter sind wie folgt erforderlich, abhängig
von dem Wurzelelement der XML-Datei.

Wenn das Wurzelelement <article> oder <articles> ist, sind zusätzliche Parameter erforderlich.
Die folgenden Formate sind zulässig:

{$scriptName} {$pluginName} import [xmlFileName] [journal_path] [user_name]
	issue_id [issueId] section_id [sectionId]

{$scriptName} {$pluginName} import [xmlFileName] [journal_path] [user_name]
	issue_id [issueId] section_name [name]

{$scriptName} {$pluginName} import [xmlFileName] [journal_path]
	issue_id [issueId] section_abbrev [abbrev]
',
  'plugins.importexport.native.error.unknownSection' => 'Unbekannte Rubrik {$param}',
  'plugins.importexport.native.error.unknownUser' => 'Der angegebene Nutzer/die angegebene Nutzerin, "{$userName}", existiert nicht.',
  'plugins.importexport.native.import.error.sectionTitleMismatch' => 'Rubrikentitel "{$section1Title}" und Rubrikentitel "{$section2Title}" in Ausgabe "{$issueTitle}" sind mit existierenden Rubriken vereinbar.',
  'plugins.importexport.native.import.error.sectionTitleMatch' => 'Rubrikentitel "{$sectionTitle}" in Ausgabe "{$issueTitle}" ist mit einer existierenden Rubrik vereinbar, aber ein anderer Titel ist mit existierenden Rubrikentiteln in dieser Zeitschrift nicht vereinbar.',
  'plugins.importexport.native.import.error.sectionAbbrevMismatch' => 'Rubrikenabkürzung "{$section1Abbrev}" und Rubrikenabkürzung "{$section2Abbrev}" in Ausgabe "{$issueTitle}" sind mit existierenden Rubriken vereinbar.',
  'plugins.importexport.native.import.error.sectionAbbrevMatch' => 'Die Rubrikenabkürzung "{$sectionAbbrev}" in Ausgabe "{$issueTitle}" ist mit einer existierenden Rubrik vereinbar, aber eine andere Rubrikenabkürzung ist mit existierenden Rubrikenabkürzungen in dieser Zeitschrift nicht vereinbar.',
  'plugins.importexport.native.import.error.issueIdentificationMatch' => 'Keine oder mehr als eine Ausgabe passen zu der angegebenen Ausgabenkennung "{$issueIdentification}".',
  'plugins.importexport.native.import.error.issueIdentificationDuplicate' => 'Die existierende Ausgabe mit der ID {$issueId} passt zur angegebenen Kennung "{$issueIdentification}". Diese Ausgabe wird nicht verändert, aber Artikel werden hinzugefügt werden.',
  'plugins.importexport.native.import.error.issueIdentificationMissing' => 'Das Element zur Ausgabenidentifizierung fehlt für den Artikel "{$articleTitle}".',
  'plugins.importexport.native.import.error.publishedDateMissing' => 'Der Artikel "{$articleTitle}" ist in einer Ausgabe enthalten, aber hat kein Veröffentlichungsdatum.',
);