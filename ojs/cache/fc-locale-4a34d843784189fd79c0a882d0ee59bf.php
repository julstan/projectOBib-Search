<?php return array (
  'plugins.importexport.doaj.displayName' => 'DOAJ-Export-Plugin',
  'plugins.importexport.doaj.description' => 'Zeitschrift für DOAJ exportieren.',
  'plugins.importexport.doaj.export.contact' => 'Kontaktieren Sie DOAJ zur Aufnahme',
  'plugins.importexport.doaj.registrationIntro' => 'Wenn Sie Artikel aus OJS heraus registrieren möchten, geben Sie bitte Ihren DOAJ-API-Key ein. Ansonsten können Sie immer noch Metadaten in das DOAJ-XML-Format exportieren, aber keine Artikel aus OJS bei DOAJ registrieren.',
  'plugins.importexport.doaj.settings.form.apiKey' => 'DOAJ-API-Key',
  'plugins.importexport.doaj.settings.form.apiKey.description' => 'Sie finden Ihren API-Key auf Ihrer DOAJ-Nutzerseite.',
  'plugins.importexport.doaj.settings.form.automaticRegistration.description' => 'OJS wird Artikel automatisch an DOAJ abliefern. Bitte beachten Sie, dass dieser Prozess eine gewisse Zeit nach der Veröffentlichung dauern kann (z.B. abhängig von Ihrer Cronjob-Konfiguration). Sie können nach allen unregistrierten Artikeln suchen.',
  'plugins.importexport.doaj.settings.form.testMode.description' => 'Die DOAJ-Test-API (Testumgebung) für die Registrierung nutzen. Bitte vergessen Sie nicht, diese Option für den Produktivbetrieb wieder abzuwählen.',
  'plugins.importexport.doaj.senderTask.name' => 'DOAJ automatische Registrierung',
  'plugins.importexport.doaj.register.error.mdsError' => 'Ablieferung war nicht erfolgreich! Die DOAJ-API hat einen Fehler zurückgemeldet: \'{$param}\'.',
  'plugins.importexport.doaj.cliUsage' => 'Verwendung:
{$scriptName} {$pluginName} export [xmlFileName] [journal_path] articles objectId1 [objectId2] ...
',
);