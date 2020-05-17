<?php return array (
  'plugins.generic.usageStats.settings.logging' => 'Zugriffsprotokoll-Optionen',
  'plugins.generic.usageStats.settings.createLogFiles' => 'Logdateien anlegen',
  'plugins.generic.usageStats.settings.createLogFiles.description' => 'Das Aktivieren dieser Option lässt das Plugin Zugriffsprotokolldateien innerhalb des Dateienverzeichnisses anlegen. Diese Dateien sollten benutzt werden, um Daten zur Nutzungsstatistik zu extrahieren. Wenn Sie keine weiteren Zugriffsprotokolldateien erzeugen wollen, können Sie diese Option deaktiviert lassen und ihre eigenen Server-Logdateien benutzen.',
  'plugins.generic.usageStats.settings.logParseRegex' => 'Regex zum Parsen der Logdateien',
  'plugins.generic.usageStats.settings.logParseRegex.description' => 'Der standardmäßig benutzte reguläre Ausdruck kann Apache-Logdateien im Combined-Format und außerdem die Logdateien des Plugins parsen. Wenn Ihre Zugriffsprotokolldateien in einem anderen Format sind, müssen Sie einen regulären Ausdruck einfügen, mit dem die Dateien geparst werden können und der die erwarteten Werte liefert. Vgl. UsageStatsLoader::_getDataFromLogEntry() für weitere Informationen.',
  'plugins.generic.usageStats.settings.saved' => 'Einstellungen des Zugriffsstatistik-Plugins gespeichert',
  'plugins.generic.usageStats.settings.dataPrivacyOption' => 'Datenschutz-Option',
  'plugins.generic.usageStats.settings.dataPrivacyOption.saltFilepath' => 'Pfad zum Salt (für die Anonymisierung)',
  'plugins.generic.usageStats.settings.dataPrivacyOption.saltFilepath.invalid' => 'Die Salt-Datei ist nicht schreibbar.',
  'plugins.generic.usageStats.settings.dataPrivacyOption.requirements' => 'Um den Datenschutz zu gewährleisten, müssen Sie eine Datei angeben, die für den Webnutzer les- und schreibbar ist und die einen zufällig erzeugten Salt-Wert enthält. Diese Datei darf NICHT nicht im Backup gesichert werden, um den Datenschutz zu garantieren. Das Salt wird zufällig mittels einer der folgenden Methoden erzeugt: durch die Funktion mcrypt_create_iv, die PHP-mycrypt benötigt; die Funktion openssl_random_pseudo_bytes, die PHP-openssl benötigt; die Datei /dev/urandom, die nur in *nix-Systemen existiert, oder die Funktion function mt_rand, die nicht kryptografisch sicher ist. Deshalb sollten Sie, wenn Sie einen Windows-Server nutzen, sicherstellen, dass Sie in PHP entweder mcrypt oder openssl aktiviert haben, um einen kryptografisch sicheren Salt benutzen.',
  'plugins.generic.usageStats.settings.dataPrivacyOption.description' => 'Aktivieren Sie diese Option, um eine Verson des Plugins zu benutzen, die Datenschutzregeln berücksichtigt, indem nur gehashte IP-Adressen protokolliert werden, Benutzer/innen über das Tracking informiert werden und eine Opt-Out-Möglichkeit für Nutzer/innen angeboten wird. Hinweis: Bei Nutzung dieser Option können Sie nicht die Geo-Funktionalitäten des Plugins benutzen.',
  'plugins.generic.usageStats.settings.dataPrivacyOption.requiresSalt' => 'Um die Datenschutz-Option zu aktivieren, wird eine Salt-Datei benötigt.',
  'plugins.generic.usageStats.settings.dataPrivacyOption.excludesCity' => 'Die Datenschutz-Option zu aktivieren, schließt die Erhebung von Statistiken zu "Stadt" aus.',
  'plugins.generic.usageStats.settings.dataPrivacyOption.excludesRegion' => 'Die Datenschutz-Option zu aktivieren, schließt die Erhebung von Statistiken zu "Region" aus.',
  'plugins.generic.usageStats.settings.dataPrivacyCheckbox' => 'Datenschutz-Option aktivieren',
  'plugins.generic.usageStats.settings.optionalColumns' => 'Optionale statistische Informationen',
  'plugins.generic.usageStats.settings.optionalColumns.description' => 'Die Sammlung folgender optionaler Daten aktivieren oder deaktivieren.  Dies beeinflusst, welche Berichte Sie erhalten können und wie groß die Datenbank wird. Ändern Sie diese Einstellungen NICHT, wenn Sie nicht genau wissen, was Sie tun.',
  'plugins.generic.usageStats.settings.optionalColumns.cityRequiresRegion' => 'Die optionale Spalte "Stadt" erfordert die optionale Spalte "Region".',
  'plugins.generic.usageStats.settings.archives' => 'Archive',
  'plugins.generic.usageStats.settings.compressArchives.description' => 'Aktivieren Sie diese Option, um archivierte Logdateien mit gzip zu komprimieren (Sie werden Einstellungen zu gzip in config.inc.php eintragen müssen.). Wenn Sie eine stark genutzte Website haben, ist die Aktivierung dieser Option anzuraten, damit Speicherplatz gespart wird.',
  'plugins.generic.usageStats.settings.compressArchives' => 'Archive komprimieren',
  'plugins.generic.usageStats.settings.statsDisplayOptions' => 'Anzeigeoptionen für die Statistiken',
  'plugins.generic.usageStats.settings.statsDisplayOptions.contextWide' => 'Diese Einstellungen wurden nur auf die Nutzungsstatistiken von {$contextName} angewendet.',
  'plugins.generic.usageStats.settings.statsDisplayOptions.display' => 'Eine Statistik-Grafik für die Leser/innen anzeigen',
  'plugins.generic.usageStats.settings.statsDisplayOptions.chartType' => 'Wählen Sie die Art des Diagramms, um die Download-Statistiken anzuzeigen.',
  'plugins.generic.usageStats.settings.statsDisplayOptions.chartType.bar' => 'Balkengrafik',
  'plugins.generic.usageStats.settings.statsDisplayOptions.chartType.line' => 'Liniengrafik',
  'plugins.generic.usageStats.settings.statsDisplayOptions.datasetMaxCount' => 'Geben Sie die maximale Anzahl von Datenpunkten an, die gleichzeitig an einer X-Achsen-Position angezeigt werden sollen. Ein höherer Wert kann schwer verständliche Diagramme verursachen. Werte zwischen 3 und 5 sollten sicher sein.',
  'plugins.generic.usageStats.usageStatsLoaderName' => 'Task zum Laden der Nutzungsstatistik-Datei',
  'plugins.generic.usageStats.openFileFailed' => 'Die Datei {$file} konnte nicht geöffnet werden und wurde zurückgewiesen.',
  'plugins.generic.usageStats.invalidLogEntry' => 'Die Zeile {$lineNumber} aus der Datei {$file} stellt keinen gültigen Logeintrag dar, und die Datei wurde zurückgewiesen.',
  'plugins.generic.usageStats.removeUrlError' => 'Die Zeile {$lineNumber} aus der Datei {$file} enthält eine Adresse, aus der das System nicht den Basis-URL entfernen kann.',
  'plugins.generic.usageStats.loadDataError' => 'Konnte keine extrahierten Daten aus Datei {$file} laden. Die Datei wurde entfernt, um sie erneut zu bearbeiten.',
  'plugins.generic.usageStats.pluginNotEnabled' => 'Das Nutzungsstatistik-Plugin ist deaktiviert. Es wurden keine Logdateien verarbeitet.',
  'plugins.generic.usageStats.processingPathNotEmpty' => 'Das Verzeichnis {$directory} ist nicht leer. Dies kann auf einen zuvor gescheiterten oder einen momentan laufenden Prozess hinweisen. Diese Datei wird automatisch erneut verarbeitet, falls Sie auch scheduledTasksAutoStage.xml benutzen; ansonsten werden Sie manuell alle verwaisten Dateien aus dem Verarbeitungsverzeichnis zurück in das Bereitstellungsverzeichnis verschieben müssen.',
  'plugins.generic.usageStats.displayName' => 'Nutzungsstatistik',
  'plugins.generic.usageStats.description' => 'Zeigt Nutzungsstatistik zu Objekten an. Kann Server-Logdateien benutzen, um Statistiken zu extrahieren.',
  'plugins.reports.usageStats.report.displayName' => 'Nutzungsstatistik-Bericht',
  'plugins.reports.usageStats.report.description' => 'Standardbericht zur Nutzungsstatistik (COUNTER-fähig)',
  'plugins.generic.usageStats.optout.displayName' => 'Datenschutz-Informationen zur Nutzungsstatistik',
  'plugins.generic.usageStats.optout.description' => 'Datenschutz-Informationen zur Nutzungsstatistik',
  'plugins.generic.usageStats.optout.title' => 'Nutzungsstatistik-Informationen',
  'plugins.generic.usageStats.optout.shortDesc' => 'Wir führen eine anonymisierte Nutzungsstatistik. Bitte lesen Sie die <a href="{$privacyInfo}">Datenschutz-Informationen</a>, um mehr zu erfahren.',
  'plugins.generic.usageStats.optout.done' => '
		<p>Sie haben der Nutzung Ihrer Daten für die Nutzungsstatistik erfolgreich widersprochen. Solange Sie diese Nachricht sehen, werden keine statistischen Daten aus Ihrer Nutzung dieser Seite gewonnen. Klicken Sie den Knopf unten, um Ihre Entscheidung zurückzunehmen.</p>',
  'plugins.generic.usageStats.optin' => 'Opt In (Einwilligen)',
  'plugins.generic.usageStats.optout' => 'Opt Out (Widersprechen)',
  'plugins.generic.usageStats.optout.cookie' => '
		<p>Sollten Sie den Wunsch haben, dass Ihre anonymisierten Daten nicht gespeichert werden, bieten wir Ihnen die Möglichkeit, die Teilnahme am Auswertungsprozess zu unterbinden. Durch einen Klick auf den unten stehenden Opt-out-Button wird ein sog. <em>Cookie</em> auf Ihrem System erstellt, das Ihre Entscheidung dokumentiert und speichert. Sollten die Sicherheits- oder Privatsphären-Einstellungen Ihres Browser Cookies automatisch nach Beendigung löschen, müssen Sie beim nächsten Zugriff auf diese Seite erneut dem Auswertungsprozess widersprechen. Das Cookie ist jeweils nur für einen Browser gültig. Sollten Sie unterschiedliche Browser benutzen, so müssen Sie für jeden Browser Ihren Widerspruch dokumentieren und auf den unten stehenden Button klicken. Innerhalb des Cookies werden keinerlei personenbezogene Daten gespeichert, sondern lediglich Ihr Widerspruch dokumentiert. Dieses Cookie wird bei jedem Zugriff auf dieses Journal automatisch um ein Jahr verlängert.</p>
		<p>Bitte berücksichtigen Sie, dass die allgemeinen Server-Logs von Ihrer Entscheidung unberührt bleiben, am detaillierten Evaluationsprozess nicht teilzunehmen. Berücksichtigen Sie daher auch unsere <a href="{$privacyStatementUrl}">allgemeinen Datenschutzhinweise</a>.</p>',
  'plugins.reports.usageStats.metricType' => 'COUNTER',
  'plugins.reports.usageStats.metricType.full' => 'Nutzungsstatistik (COUNTER-fähig)',
  'plugins.generic.usageStats.statsSum' => 'Summe aller Downloads',
  'plugins.generic.usageStats.noStats' => 'Keine Nutzungsdaten vorhanden.',
  'plugins.generic.usageStats.monthInitials' => 'Jan Feb Mär Apr Mai Jun Jul Aug Sep Okt Nov Dez',
  'plugins.generic.usageStats.downloads' => 'Downloads',
  'plugins.generic.usageStats.optout.description.long.ojs2' => '
		<h3>Allgemeine Datenschutz-Hinweise</h3>
		<p>Unsere allgemeinen Datenschutz-Hinweise finden Sie <a href="{$privacyStatementUrl}">hier</a>.</p>
		<h3>Nutzungsstatistik</h3>
		<p>Zum Zwecke der Analyse von Nutzung und Reichweite unseres Journals sowie der hier publizierten Artikel dokumentieren und speichern wir die Zugriffe auf die Hauptseite des Journals, auf Ausgaben, Artikel, Fahnen und zusätzlichen Dateien. Dabei werden alle Informationen anonymisiert. IP-Adressen werden mittels eines Hash-Algorithmus (<em>SHA 256</em>) in Kombination mit einem <em>sicheren 64-Zeichen Salt</em> anonymisiert. Der Salt wird <em>automatisch zufallsgeneriert und täglich überschrieben.</em> Auf diese Weise können IP-Adressen nachträglich nicht mehr rekonstruiert werden.</p>
		<p>Über die anonymisierten IP-Adressen hinaus werden folgende Daten erhoben:</p>
		<ul>
		<li>Zugriffsart (z.B. administrative Zugriffe)</li>
		<li>Zugriffszeit</li>
		<li>aufgerufene URL</li>
		<li>HTTP-Status-Code</li>
		<li>Browser</li>
		</ul>
		<p>Die gesammelten Informationen werden nur verwendet, um die Nutzung der Inhalte statistisch auszuwerten. Es findet keine Zuordnung von IP-Adressen zu Benutzer-IDs statt. Es ist technisch unmöglich, nachträglich einen spezifischen Datensatz zu einer spezifischen IP-Adresse nachzuverfolgen.</p>',
  'plugins.generic.usageStats.settings.statsDisplayOptions.siteWide.ojs2' => 'Diese Einstellungen lassen sich für jede Zeitschrift bei deren Einstellungen für Plugins verändern.',
  'plugins.generic.usageStats.optout.description.long.omp' => '
		<h3>Allgemeine Datenschutzinformationen</h3>
		<p>Bitte beachten Sie unsere <a href="{$privacyStatementUrl}">Datenschutzerklärung</a>.</p>
		<h3>Nutzungsstatistiken</h3>
		<p>Um Nutzung und Einfluss unserer Publikationen analysieren zu können, protokollieren wir Zugriffe auf die Homepage, Kategorien, Reihen, Bücher und Dateien. Während dieses Vorgangs werden alle Daten anonymisiert. Es werden keine personenbezogenen Daten protokolliert. IP-Adressen werden anonymisiert, in dem sie gehasht werden (mit <em>SHA 256</em>) und durch einen <em>sicheren 64 Zeichen langes Salt</em>, das automatisch <em>zufällig generiert und täglich überschrieben</em> wird. Daher können IP-Adressen nicht rekonstruiert werden.</p>
		<p>Die folgenden Informationen werden zusammen mit den anonymisierten IP-Adressen gespeichert:</p>
		<ul>
		<li>Art des Zugriffs (z.B. administrativ)</li>
		<li>Zeitpunkt des Zugriffs</li>
		<li>Angeforderte URL</li>
		<li>HTTP status code</li>
		<li>Browser</li>
		</ul>
		<p>Die gesammelten Daten werden ausschließlich zu Auswertungszwecken genutzt. Es findet keine Zuordnung von IP-Adressen zu Nutzer-Accounts statt. Es ist nicht möglich, einen bestimmten Datensatz einer bestimmten IP-Adresse zuzuordnen.</p>',
);