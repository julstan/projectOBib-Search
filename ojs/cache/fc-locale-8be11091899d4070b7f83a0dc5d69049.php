<?php return array (
  'plugins.importexport.users.displayName' => 'Benutzer-XML-Plugin',
  'plugins.importexport.users.description' => 'Benutzer/innen importieren und exportieren',
  'plugins.importexport.users.cliUsage' => 'Gebrauch: {$scriptName} {$pluginName} [Befehl] ...
Befehle:
	import [xmlFileName] [journal_path]
	export [xmlFileName] [journal_path]
	export [xmlFileName] [journal_path] [userId1] [userId2] ...
',
  'plugins.importexport.users.cliUsage.examples' => '
Beispiele:
	Benutzer/innen aus myImportFile.xml nach myJournal importieren:
	{$scriptName} {$pluginName} import myImportFile.xml myJournal

	Alle Benutzer/innen aus myJournal exportieren:
	{$scriptName} {$pluginName} export myExportFile.xml myJournal

	Benutzer/innen anhand ihrer ID exportieren:
	{$scriptName} {$pluginName} export myExportFile.xml myJournal 1 2
',
  'plugins.importexport.users.import.importUsers' => 'Benutzer/innen importieren',
  'plugins.importexport.users.import.instructions' => 'XML-Datendatei mit der in die Zeitschrift zu importierenden Benutzerinformation auswählen. S. Hilfe der Zeitschrift zum Format dieser Datei im Einzelnen.<br /><br />Beachten Sie, dass für in der Datei enthaltene Benutzernamen und E-Mail-Adressen, die im System bereits existieren kein Datenimport stattfindet und neue Funktionen den existierenden Benutzer/innen zugeschrieben werden.',
  'plugins.importexport.users.import.dataFile' => 'Benutzerdatendatei',
  'plugins.importexport.users.import.sendNotify' => 'Allen importierten Benutzer/innen eine E-Mail mit Benutzernamen und Passwort senden.',
  'plugins.importexport.users.import.continueOnError' => 'Mit dem Import anderer Benutzer/innen fortfahren, wenn Fehler auftritt.',
  'plugins.importexport.users.import.usersWereImported' => 'Die folgenden Benutzer/innen wurden erfolgreich importiert',
  'plugins.importexport.users.import.errorsOccurred' => 'Import fehlerhaft',
  'plugins.importexport.users.import.confirmUsers' => 'Bestätigen Sie, dass Sie diese Benutzer/innen in das System importieren wollen',
  'plugins.importexport.users.import.warning' => 'Warnung',
  'plugins.importexport.users.import.encryptionMismatch' => 'Kann keine Benutzer/innen importieren, die mit {$importHash} gehasht wurden; OJS ist dafür konfiguriert, {$ojsHash} zu benutzen. Wenn Sie fortfahren, werden Sie die Passwörter der importierten Benutzer/innen zurücksetzen müssen.',
  'plugins.importexport.users.unknownPress' => 'Der angegebene Pfad "{$journalPath}" für die Zeitschrift ist unbekannt.',
  'plugins.importexport.users.export.exportUsers' => 'Benutzer/innen exportieren',
  'plugins.importexport.users.export.exportByRole' => 'Nach Funktion exportieren',
  'plugins.importexport.users.export.exportAllUsers' => 'Alle exportieren',
  'plugins.importexport.users.export.errorsOccurred' => 'Fehlerhafter Export',
  'plugins.importexport.users.export.couldNotWriteFile' => 'Konnte nicht in Datei "{$fileName}" schreiben.',
  'plugins.importexport.users.importComplete' => 'Der Import wurde erfolgreich abgeschlossen. Benutzer/innen mit Namen und E-Mail-Adressen, die noch nicht in Benutzung sind, wurden importiert, zusammen mit den zugehörigen Nutzergruppen.',
  'plugins.importexport.users.results' => 'Ergebnisse',
  'plugins.importexport.users.uploadFile' => 'Bitte laden Sie eine Datei unter "Importieren" hoch, um fortzufahren.',
);