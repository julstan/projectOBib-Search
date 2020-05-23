# projectOBib-Search

Dokumentation unserer Schritte:

1. XAMPP installieren
	-> über XAMPP-Control-Panel Apache und MySQL starten
	-> ojs-3.2.0-2 Ordner aus VirtualBox in /htdocs einfügen und in ojs umbenennen
	-> localhost/phpmyadmin aufrufen, neue Datenbank (ojs) erstellen und ojs.sql aus VirtualBox einfügen

2. Git-Projekt nutzbar machen
	-> Projekt in /htdocs klonen
	-> Datenbank aus dem Projekt einfügen unter /mysql/data
		-> ersetzt die zuvor eingefügte ojs-Datenbank aus VirtualBox

3. im Browser aufrufen
	-> localhost/projectOBib-Search/ojs
		-> es wird nicht mehr die ojs-Konfiguration aus VirtualBox aufgerufen, sonder die über git versionierte Version

4. installierte Plugins
	-> Angepasste-Header-Plugin
	-> Bootstrap3 Theme Plugin
	-> Beitrag einreichen Block Plugin
	-> Verwaltung benutzerdefinierte Blöcke Plugin
	-> Quick Submit Plugin (bzw. Schnelleinreichungs-Plugin)
		-> manuelle Installation:
		   Plugin von Github herunterladen, unzippen, einfügen unter projectOBib-Search\ojs\plugins\importexport
