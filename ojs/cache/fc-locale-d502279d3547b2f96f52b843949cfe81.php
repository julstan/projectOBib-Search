<?php return array (
  'plugins.importexport.medra.displayName' => 'mEDRA-Export/Registrierungs-Plugin',
  'plugins.importexport.medra.description' => 'Exportieren Sie Metadaten zu Ausgaben, Artikeln und Fahnen im Format Onix for DOI (O4DOI), und registrieren Sie DOI bei der mEDRA-Registrierungsagentur.',
  'plugins.importexport.medra.intro' => '
		Wenn Sie DOI bei mEDRA registrieren möchten, folgen Sie bitten den Hinweisen auf der 
		<a href="http://www.medra.org/de/guide.htm" target="_blank">mEDRA-Homepage</a>,
		um einen Benutzer/innennamen und ein Passwort zu erhalten. Wenn Sie nicht über Benutzer/innennamen und
		Passwort verfügen, werden Sie immerhin in der Lage sein, in das mEDRA-XML-Format (Onix for DOI) zu exportieren,
		aber Sie können Ihre DOI nicht aus OJS heraus bei mEDRA registrieren.
		Bitte beachten Sie, dass das Passwort im Klartext, d.h. unverschlüsselt, gespeichert werden
		wird, da der mEDRA-Registrierungsdienst dies erfordert.
	',
  'plugins.importexport.medra.settings.form.description' => 'Bitte konfigurieren Sie das mEDRA-Export-Plugin:',
  'plugins.importexport.medra.settings.form.username' => 'Benuzter/innenname',
  'plugins.importexport.medra.settings.form.usernameRequired' => 'Bitte geben Sie Ihren mEDRA-Benutzer/innennamen ein. Der Benutzer/innenname darf keinen Doppelpunkt enthalten.',
  'plugins.importexport.medra.settings.form.registrantName' => 'Der Name der bei mEDRA registrierten Institution',
  'plugins.importexport.medra.settings.form.registrantNameRequired' => 'Bitte geben Sie die Institution, die bei mEDRA registriert ist, ein.',
  'plugins.importexport.medra.settings.form.fromFields' => 'Person, die von mEDRA kontaktiert werden soll im Fall technischer Anfragen:',
  'plugins.importexport.medra.settings.form.fromCompany' => 'Institution',
  'plugins.importexport.medra.settings.form.fromCompanyRequired' => 'Bitte geben Sie die Institution an, die technisch für den DOI-Export zuständig ist (z.B. die Institution, die Ihren Webserver betreut).',
  'plugins.importexport.medra.settings.form.fromName' => 'Kontaktperson',
  'plugins.importexport.medra.settings.form.fromNameRequired' => 'Bitte geben Sie eine technische Kontaktperson an.',
  'plugins.importexport.medra.settings.form.fromEmail' => 'E-Mail',
  'plugins.importexport.medra.settings.form.fromEmailRequired' => 'Bitte geben Sie eine gültige E-Mail-Adresse für den technischen Kontakt an.',
  'plugins.importexport.medra.settings.form.publicationCountry' => 'Bitte wählen Sie das Land aus, das als \'Publikationsland\' an mEDRA gemeldet werden soll.',
  'plugins.importexport.medra.settings.form.exportIssuesAs' => 'Bitte wählen Sie aus, ob Sie Ausgaben als <a href="http://www.medra.org/de/metadata_td.htm" target="_blank">\'Werke\' oder als \'Manifestationen\'</a> exportieren möchten.',
  'plugins.importexport.medra.settings.form.work' => 'Werk',
  'plugins.importexport.medra.settings.form.manifestation' => 'Manifestation',
  'plugins.importexport.medra.settings.form.exportIssuesAs.label' => 'Ausgaben exportieren als',
  'plugins.importexport.medra.settings.form.automaticRegistration.description' => 'OJS wird zugewiesene DOI automatisch bei mEDRA registrieren. Bitte beachten Sie, dass dieser Prozess eine gewisse Zeit nach der Veröffentlichung dauern kann (z.B. abhängig von Ihrer Cronjob-Konfiguration). Sie können nach bisher unregistrierten DOI suchen.',
  'plugins.importexport.medra.settings.form.testMode.description' => 'Die mEDRA-Test-API (Testumgebung) für die DOI-Ablieferung benutzen. Bitte vergessen Sie nicht, diese Option vor dem Produktivbetrieb abzuwählen.',
  'plugins.importexport.medra.workOrProduct' => 'Achtung: DOI, die Artikeln zugewiesen worden sind, werden zu mEDRA als <a href="http://www.medra.org/de/metadata_td.htm" target="_blank">\'Werke\'</a> exportiert. DOI, die Fahnen zugewiesen worden sind, werden als <a href="http://www.medra.org/de/metadata_td.htm" target="_blank">\'Manifestationen\'</a> exportiert.',
  'plugins.importexport.medra.senderTask.name' => 'mEDRA automatische Registrierung',
  'plugins.importexport.medra.cliUsage' => 'Verwendung: 
{$scriptName} {$pluginName} export [xmlFileName] [journal_path] {issues|articles|galleys} objectId1 [objectId2] ...
{$scriptName} {$pluginName} register [journal_path] {issues|articles|galleys} objectId1 [objectId2] ...
',
);