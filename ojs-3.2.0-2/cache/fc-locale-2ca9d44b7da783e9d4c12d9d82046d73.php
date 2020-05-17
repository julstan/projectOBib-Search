<?php return array (
  'plugins.importexport.datacite.displayName' => 'DataCite-Export/Registrierungs-Plugin',
  'plugins.importexport.datacite.description' => 'Exportieren oder registrieren Sie Metadaten zu Ausgaben, Artikeln, Fahnen und Zusatzdateien im DataCite-Format.',
  'plugins.importexport.datacite.settings.description' => 'Bitte konfigurieren Sie das DataCite-Plugin, bevor Sie es das erste Mal benutzen.',
  'plugins.importexport.datacite.intro' => '
		Wenn Sie DOI bei DataCite registrieren möchten, kontaktieren Sie bitte die/den
		Bevollmächtigte/n über die  <a href="http://datacite.org/contact" target="_blank">
		DataCite-Homepage</a>, die/der Sie an Ihr lokales DataCite-Mitglied verweisen wird.
		Nachdem Sie Kontakt zu der Mitgliedsorganisation hergestellt haben, wird Ihnen ein
		Zugang zum DataCite-Dienst zum Ausstellen persistenter Kennungen (DOI) und zur
		Registrierung zugehöriger Metadaten ermöglicht. Wenn Sie über keinen eigenen Benutzer/innennamen und
		kein eigenes Passwort verfügen, können Sie immerhin in das DataCite-XML-Format exportieren, aber Sie
		können Ihre DOI nicht aus OJS heraus bei DataCite registrieren.
		Bitte beachten Sie, dass das Passwort im Klartext, d.h. unverschlüsselt, gespeichert werden
		wird, da der DataCite-Registrierungsdienst dies erfordert.
	',
  'plugins.importexport.datacite.settings.form.username' => 'Benutzer/innenname (symbol)',
  'plugins.importexport.datacite.settings.form.usernameRequired' => 'Bitte geben Sie den Benutzer/innennamen (symbol) ein, den Sie von DataCite erhalten haben. Der Benutzer/innenname darf keinen Doppelpunkt enthalten.',
  'plugins.importexport.datacite.settings.form.automaticRegistration.description' => 'OJS wird die zugewiesenen DOI automatisch an DataCite liefern. Bitte beachten Sie, dass dieser Prozess eine gewisse Zeit nach der Veröffentlichung dauern kann (z.B. abhängig von Ihrer Cronjob-Konfiguration). Sie können nach bisher unregistrierten DOI suchen.',
  'plugins.importexport.datacite.settings.form.testMode.description' => 'Den DataCite-Test-Präfix für die DOI-Registrierung benutzen. Bitte vergessen Sie nicht, diese Option vor dem Produktivbetrieb abzuwählen.',
  'plugins.importexport.datacite.senderTask.name' => 'DataCite automatische Registrierung',
  'plugins.importexport.datacite.cliUsage' => 'Verwendung: 
{$scriptName} {$pluginName} export [outputFileName] [journal_path] {issues|articles|galleys} objectId1 [objectId2] ...
{$scriptName} {$pluginName} register [journal_path] {issues|articles|galleys} objectId1 [objectId2] ...
',
);