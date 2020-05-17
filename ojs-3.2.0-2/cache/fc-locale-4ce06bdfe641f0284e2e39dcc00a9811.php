<?php return array (
  'plugins.importexport.crossref.displayName' => 'Crossref-Export/Registrierungs-Plugin',
  'plugins.importexport.crossref.description' => 'Artikel-Metadaten im Crossref-Format exportieren oder registrieren.',
  'plugins.importexport.crossref.requirements' => 'Anforderungen',
  'plugins.importexport.crossref.requirements.satisfied' => 'Alle Anforderungen des Plugins sind erfüllt.',
  'plugins.importexport.crossref.error.publisherNotConfigured' => 'Es ist noch kein Verlag konfiguriert! Sie müssen eine publizierende Organisation in <a href="{$journalSettingsUrl}" target="_blank">Zeitschrifteneinstellungen</a> angeben.',
  'plugins.importexport.crossref.error.issnNotConfigured' => 'Es ist noch keine ISSN der Zeitschrift eingestellt! Sie müssen eine ISSN in den <a href="{$journalSettingsUrl}" target="_blank">Zeitschrifteneinstellungen</a> angeben.',
  'plugins.importexport.crossref.error.noDOIContentObjects' => 'Artikel sind im DOI-Plugin nicht zur DOI-Vergabe eingetragen, also gibt es keine Möglichkeit zur Ablieferung oder zum Export in diesem Plugin.',
  'plugins.importexport.crossref.settings.depositorIntro' => 'Die folgenden Angaben werden für eine erfolgreiche Abgabe bei Crossref nötig.',
  'plugins.importexport.crossref.settings.form.depositorName' => 'Depositor-Name',
  'plugins.importexport.crossref.settings.form.depositorEmail' => 'Depositor-E-Mail',
  'plugins.importexport.crossref.settings.form.depositorNameRequired' => 'Bitte geben Sie den Depositor-Namen ein.',
  'plugins.importexport.crossref.settings.form.depositorEmailRequired' => 'Bitte geben Sie die Depositor-E-Mail-Adresse ein.',
  'plugins.importexport.crossref.registrationIntro' => 'Wenn Sie dieses Plugin benutzen möchten, um Digital Object Identifiers (DOI) direkt bei Crossref zu registrieren, benötigen Sie dazu einen Nutzernamen und ein Passwort (das Sie bei <a href="http://www.crossref.org" target="_blank">Crossref</a> erhalten). Wenn Sie keine eigenen Zugangsdaten haben, können Sie immer noch Metadaten in das Crossref-XML-Format exportieren, aber Sie können Ihre DOI nicht aus OJS heraus bei Crossref registrieren.',
  'plugins.importexport.crossref.settings.form.username' => 'Benutzer/innenname',
  'plugins.importexport.crossref.settings.form.usernameRequired' => 'Bitte geben Sie den Benutzer/innennamen ein, den Sie von Crossref erhalten haben.',
  'plugins.importexport.crossref.settings.form.automaticRegistration.description' => 'OJS wird die zugewiesenen DOI automatisch an Crossref liefern. Bitte beachten Sie, dass dieser Prozess eine gewisse Zeit nach der Veröffentlichung dauern kann (z.B. abhängig von Ihrer Cronjob-Konfiguration). Sie können nach bisher unregistrierten DOI suchen.',
  'plugins.importexport.crossref.settings.form.testMode.description' => 'Die Crossref-Test-API (Testumgebung) für die DOI-Ablieferung benutzen. Bitte vergessen Sie nicht, diese Option vor dem Produktivbetrieb abzuwählen.',
  'plugins.importexport.crossref.issues.description' => 'Hinweis: Nur Ausgaben (aber nicht ihre Artikel) werden hier für Export und Registrierung berücksichtigt.',
  'plugins.importexport.crossref.status.failed' => 'Fehlgeschlagen',
  'plugins.importexport.crossref.status.registered' => 'Aktiv',
  'plugins.importexport.crossref.status.markedRegistered' => 'Als aktiv markiert',
  'plugins.importexport.crossref.action.register' => 'Ablieferung',
  'plugins.importexport.crossref.statusLegend' => '
		<p>Ablieferungsstatus:</p>
		<p>
		- Nicht abgeliefert: noch kein Ablieferungsversuch für diesen DOI.<br />
		- Aktiv: Der DOI wurde abgeliefert und wird korrekt aufgelöst.<br />
		- Fehlgeschlagen: DOI-Ablieferung ist fehlgeschlagen.<br />
		- Als aktiv markiert: Der DOI wurde manuell als aktiv markiert.
		</p>
		<p>Es wird nur der Status des letzten Übermittlungsversuchs angezeigt.</p>
		<p>Wenn eine Ablieferung fehlgeschlagen ist, beheben Sie bitte die Ursache und versuchen Sie erneut, den DOI zu registrieren.</p>',
  'plugins.importexport.crossref.action.export' => 'XML herunterladen',
  'plugins.importexport.crossref.action.markRegistered' => 'Als aktiv markieren',
  'plugins.importexport.crossref.senderTask.name' => 'Crossref automatic registration task',
  'plugins.importexport.crossref.cliUsage' => 'Verwendung:
{$scriptName} {$pluginName} export [xmlFileName] [journal_path] articles objectId1 [objectId2] ...
{$scriptName} {$pluginName} register [journal_path] articles objectId1 [objectId2] ...
',
  'plugins.importexport.crossref.export.error.issueNotFound' => 'Angegebene Ausgabenkennung "{$issueId}" passt zu keiner Ausgabe.',
  'plugins.importexport.crossref.export.error.articleNotFound' => 'Angegebene Artikelkennung "{$articleId}" passt zu keinem Artikel.',
  'plugins.importexport.crossref.register.success.warning' => 'Die Registrierung war erfolgreich, aber die folgende Warnung ist aufgetreten: \'{$param}\'.',
  'plugins.importexport.crossref.register.error.mdsError' => 'Die Registrierung war nicht erfolgreich! Der DOI Registrierungsserver gibt einen Fehler zurück.',
  'plugins.importexport.crossref.settings.form.validation' => 'XML validieren. Nutzen Sie diese Option für den Download von XML, wenn DOIs per Hand registriert werden.',
);