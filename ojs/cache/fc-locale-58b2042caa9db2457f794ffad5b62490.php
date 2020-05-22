<?php return array (
  'emails.notification.subject' => 'Neue Benachrichtigung von {$siteTitle}',
  'emails.notification.body' => 'Sie haben eine neue Benachrichtigung von {$siteTitle}:<br />
<br />
{$notificationContents}<br />
<br />
Link: {$url}<br />
<br />
{$principalContactSignature}',
  'emails.notification.description' => 'Diese E-Mail wird an angemeldete Benutzer/innen geschickt, die sich für diese Art der Benachrichtigung angemeldet haben.',
  'emails.passwordResetConfirm.subject' => 'Reset-Bestätigung für Ihr Passwort',
  'emails.passwordResetConfirm.body' => 'Wir wurden aufgefordert, Ihr Passwort für die Webseite {$siteTitle} neu zu setzen.<br />
<br />
Falls die Aufforderung nicht von Ihnen stammt, ignorieren Sie bitte diese E-Mail, und Ihr Passwort bleibt unverändert. Falls Sie Ihr Passwort neu setzen möchten, klicken Sie bitte auf die folgende URL:<br />
<br />
Mein Passwort neu setzen: {$url}<br />
<br />
{$principalContactSignature}',
  'emails.passwordResetConfirm.description' => 'Diese E-Mail wird an registrierte Benutzer/innen der Benachrichtigungs-Mailingliste gesendet, die angegeben haben, dass sie ihr Passwort vergessen haben oder sich nicht einloggen können. Sie liefert eine URL, der die Benutzer/innen folgen können, um ihr Passwort zurückzusetzen.',
  'emails.passwordReset.subject' => 'Passwort neu gesetzt',
  'emails.passwordReset.body' => 'Ihr Benutzer/innen-Passwort für die Webseite {$siteTitle} wurde neu gesetzt. Bitte notieren Sie Benutzer/innennamen und Passwort, beides wird für alle Arbeiten mit dieser Zeitschrift gebraucht.<br />
<br />
Ihr Benutzer/innenname: {$username}<br />
Passwort: {$password}<br />
<br />
{$principalContactSignature}',
  'emails.passwordReset.description' => 'Diese E-Mail wird an registrierte Benutzer/innen gesendet, nachdem sie ihr Passwort erfolgreich nach dem in der PASSWORD_RESET_CONFIRM-E-Mail beschriebenen Verfahren zurückgesetzt haben.',
  'emails.userRegister.subject' => 'Registrierung bei der Zeitschrift',
  'emails.userRegister.body' => '{$userFullName},<br />
<br />
Sie sind nun als neue/r Benutzer/in von {$contextName} registriert. Wir haben Ihren Benutzer/innennamen und Ihr Passwort in dieser Mail aufgeführt, beides wird für alle Arbeiten mit dieser Zeitschrift gebraucht. Sie können sich zu jedem Zeitpunkt als Benutzer/in der Zeitschrift austragen lassen, indem Sie mich kontaktieren.<br />
<br />
Benutzer/innenname: {$username}<br />
Passwort: {$password}<br />
<br />
Vielen Dank,<br />
{$principalContactSignature}',
  'emails.userRegister.description' => 'Diese E-Mail wird an neu registrierte Benutzer/innen gesendet, um sie beim System willkommen zu heißen und ihnen Benutzer/innennamen und Passwort zu bestätigen.',
  'emails.userValidate.subject' => 'Bestätigung Ihres Benutzer/innenkontos',
  'emails.userValidate.body' => '{$userFullName},<br />
<br />
Sie haben ein Benutzer/innenkonto bei {$contextName} angelegt, aber bevor Sie es benutzen können, müssen Sie Ihre E-Mail-Adresse bestätigen. Dazu folgen Sie bitte einfach dem folgenden Link:<br />
<br />
{$activateUrl}<br />
<br />
Vielen Dank,<br />
{$principalContactSignature}',
  'emails.userValidate.description' => 'Diese E-Mail wird an neu registrierte Benutzer/innen gesendet, um sie aufzufordern, die angegebene E-Mail-Adresse zu verifizieren.',
  'emails.reviewerRegister.subject' => 'Registrierung als Gutachter/in bei {$contextName}',
  'emails.reviewerRegister.body' => 'Angesichts Ihrer Erfahrung haben wir uns erlaubt, Ihren Namen der Gutachter/innendatenbank von {$contextName} hinzuzufügen. Dies verpflichtet Sie in keiner Weise, ermöglicht uns aber, Sie um mögliche Gutachten für eine Einreichung zu bitten. Wenn Sie zu einem Gutachten eingeladen werden, werden Sie Titel und Abstract des Beitrags sehen können und werden stets selber entscheiden können, ob Sie der Einladung folgen oder nicht. Sie können zu jedem Zeitpunkt Ihren Namen von der Gutachter/innenliste entfernen lassen.<br />
<br />
Wir senden Ihnen einen Benutzer/innennamen und ein Passwort, die sie in allen Schritten der Zusammenarbeit mit der Zeitschrift über deren Website benötigen. Vielleicht möchten Sie z.B. Ihr Profil inkl. Ihrer Begutachtungsinteressen aktualisieren.<br />
<br />
Username: {$username}<br />
Password: {$password}<br />
<br />
Vielen Dank,<br />
{$principalContactSignature}',
  'emails.reviewerRegister.description' => 'Diese E-Mail wird an neu registrierte Gutachter/innen gesendet, um sie beim System willkommen zu heißen und ihnen Benutzer/innennamen und Passwort zu bestätigen.',
  'emails.publishNotify.subject' => 'Neue Ausgabe erschienen',
  'emails.publishNotify.body' => 'Liebe Leserinnen und Leser,<br />
<br />
{$contextName} hat soeben die neueste Ausgabe unter {$contextUrl} veröffentlicht. Wir laden Sie ein, hier das Inhaltsverzeichnis zu lesen und sich dann auf unserer Webseite die Sie interessierenden Beiträge anzusehen.<br />
<br />
Danke für das andauernde Interesse an unserer Arbeit,<br />
{$editorialContactSignature}',
  'emails.publishNotify.description' => 'Diese E-Mail wird an registrierte Benutzer/innen mittels des "Benutzer/innen benachrichtigen"-Links auf der persönlichen Startseite einer Redakteurin/eines Redakteurs gesendet. Sie benachrichtigt Benutzer/innen über eine neue Ausgabe und lädt sie ein, die Zeitschrift unter einer angegebenen URL aufzusuchen.',
  'emails.lockssExistingArchive.subject' => 'Bitte um Archivierung von {$contextName}',
  'emails.lockssExistingArchive.body' => 'Sehr geehrte/r [Bibliotheksleiter/in],<br />
<br />
{$contextName} &amp;lt;{$contextUrl}&amp;gt; ist eine Zeitschrift, an der ein Mitglied Ihrer Universität, [Name], als [Mitarbeiterfunktion] mitarbeitet. Die Zeitschrift beabsichtigt, mit Ihrer und anderen Universitätsbibliotheken ein mit LOCKSS (Lots of Copies Keep Stuff Safe) kompatibles Archiv aufzubauen.<br />
<br />
[Kurze Beschreibung der Zeitschrift]<br />
<br />
Die Webadresse der LOCKSS-Erklärung für unsere Zeitschrift ist: {$contextUrl}/gateway/lockss<br />
<br />
Wir gehen von der Annahme aus, dass Sie bereits an LOCKSS beteiligt sind. Falls weitere Metadaten zur Aufnahme unserer Zeitschrift in Ihre Version von LOCKSS gebraucht werden, stellen wir sie Ihnen gern zur Verfügung.<br />
<br />
Vielen Dank,<br />
{$principalContactSignature}',
  'emails.lockssExistingArchive.description' => 'Diese E-Mail bittet die/den Verwalter/in eines LOCKSS-Archivs zu überlegen, diese Zeitschrift in ihr/sein Archiv aufzunehmen. Sie liefert die URL zur LOCKSS-Erklärung der Herausgeber/innen der Zeitschrift.',
  'emails.lockssNewArchive.subject' => 'Bitte um Archivierung von {$contextName}',
  'emails.lockssNewArchive.body' => 'Sehr geehrte/r [Bibliotheksleiter/in],<br />
<br />
{$contextName} &amp;lt;{$contextUrl}&amp;gt; ist eine Zeitschrift, an der ein Mitglied Ihrer Universität, [Name], als [Mitarbeiterfunktion] mitarbeitet. Die Zeitschrift beabsichtigt, mit Ihrer und anderen Universitätsbibliotheken ein mit LOCKSS (Lots of Copies Keep Stuff Safe) kompatibles Archiv aufzubauen.<br />
<br />
[Kurze Beschreibung der Zeitschrift]<br />
<br />
Das LOCKSS-Programm &amp;lt;http://lockss.stanford.edu/&amp;gt;, eine internationale Initiative von Bibliotheken und Verlagen, ist ein funktionierendes verteiltes System zur Erhaltung und zur Archivierung; nähere Einzelheiten finden Sie weiter unten. Die auf jedem gewöhnlichen Rechner laufende Software ist frei; das System lässt sich leicht online bringen; es braucht wenig Wartung.<br />
<br />
Falls Sie sich an der Archivierung unserer Zeitschrift beteiligen möchten, laden wir Sie ein, Mitglied der LOCKSS-Community zu werden und mitzuhelfen, Texte aus Ihrer Einrichtung und von Wissenschaftler/innen aus der ganzen Welt zu sammeln und zu erhalten. Dazu sollte sich jemand aus Ihrer Einrichtung auf der Webseite von LOCKSS darüber informieren, wie dieses System funktioniert. Wir freuen uns darauf, von Ihnen zu hören, um die Möglichkeit Ihre Unterstützung bei der Archivierung dieser Zeitschrift und erwarten gern Ihre Antwort zur konkreten Vorgehensweise.<br />
<br />
Vielen Dank,<br />
{$principalContactSignature}',
  'emails.lockssNewArchive.description' => 'Diese E-Mail ermuntert die Empfängerin/den Empfänger, an der LOCKSS-Initiative teilzunehmen und diese Zeitschrift in das Archiv aufzunehmen. Sie liefert Informationen über die LOCKSS-Initiative und über Wege, daran teilzunehmen.',
  'emails.submissionAck.subject' => 'Eingangsbestätigung',
  'emails.submissionAck.body' => '{$authorName},<br />
<br />
vielen Dank für die Einreichung Ihres Manuskript &quot;{$submissionTitle}&quot; zur Veröffentlichung in {$contextName}. Das Verwaltungssystem unserer Webzeitschrift erlaubt Ihnen, jederzeit den Lauf Ihres Beitrags im Redaktionsprozess zu beobachten. Sie loggen sich dazu einfach auf unserer Webseite ein:<br />
<br />
URL des Manuskripts: {$submissionUrl}<br />
Benutzer/innenname: {$authorUsername}<br />
<br />
Für weitere Fragen stehen wir Ihnen gern zur Verfügung. Danke für Ihr Interesse an einer Veröffentlichung in unserer Zeitschrift.<br />
<br />
{$editorialContactSignature}',
  'emails.submissionAck.description' => 'Diese E-Mail wird, sofern aktiviert, automatisch an eine Autorin/einen Autor gesendet, wenn sie oder er den Einreichungsprozess eines Manuskripts für die Zeitschrift abgeschlossen hat. Sie liefert Informationen über das Verfolgen der Einreichung durch den Prozess hindurch und dankt der Autorin/dem Autor für die Einreichung.',
  'emails.submissionAckNotUser.subject' => 'Eingangsbestätigung',
  'emails.submissionAckNotUser.body' => 'Liebe/r Autor/in,<br />
<br />
{$submitterName} hat das Manuskript &quot;{$submissionTitle}&quot; bei {$contextName} eingereicht. <br />
<br />
Für weitere Fragen stehen wir Ihnen gern zur Verfügung. Danke für Ihr Interesse an einer Veröffentlichung in unserer Zeitschrift.<br />
<br />
{$editorialContactSignature}',
  'emails.submissionAckNotUser.description' => 'Diese E-Mail wird, sofern aktiviert, automatisch an die weiteren Autor/innen geschickt, die laut Einreichung keine OJS-Benutzeraccounts haben.',
  'emails.editorAssign.subject' => 'Zuweisung an Rubrikredakteur/in',
  'emails.editorAssign.body' => '{$editorialContactName},<br />
<br />
der Beitrag &quot;{$submissionTitle}&quot; für {$contextName} wird Ihnen zur Durchführung des redaktionellen Prozesses in Ihrer Rolle als Rubrikredakteur/in zugewiesen.<br />
<br />
URL des Beitrags: {$submissionUrl}<br />
Benutzer/innenname: {$editorUsername}<br />
<br />
Vielen Dank.',
  'emails.editorAssign.description' => 'Diese E-Mail benachrichtigt eine/n Rubrikredakteur/in, dass die Redakteurin/der Redakteur ihr/ihm die Aufgabe übertragen hat, eine Einreichung durch den Redaktionsprozess hindurch zu betreuen. Sie liefert Informationen zu der Einreichung und darüber, wie auf die Zeitschriftenseite zugegriffen werden kann.',
  'emails.reviewRequest.subject' => 'Bitte um ein Gutachten',
  'emails.reviewRequest.body' => '{$reviewerName},<br />
<br />
aufgrund Ihrer Forschungsschwerpunkte wären Sie ein/e ausgezeichnete/r Gutachter/in für das Manuskript &quot;{$submissionTitle}&quot;, das zur Publikation in {$contextName} eingereicht worden ist. Weiter unten finden Sie eine Kurzfassung des Beitrags. Ich hoffe sehr, dass Sie sich bereitfinden können, uns mit Ihrer Stellungnahme zu unterstützen. Sie wären uns eine große Hilfe.<br />
<br />
Loggen Sie sich bitte bis zum {$responseDueDate} auf der Webseite unserer Zeitschrift ein, um uns Ihre Zu- oder Absage mitzuteilen. Sie finden dort den Beitrag und können gegebenenfalls auch Ihr Gutachten und Ihre Empfehlung dort abgeben. Die Webseite ist {$contextUrl}.<br />
<br />
Das Gutachten wäre fällig am {$reviewDueDate}.<br />
<br />
Falls Sie nicht über Benutzer/innennamen und Passwort verfügen, können Sie über folgenden Link Ihr Passwort neu setzen (Benutzer/innennamen und Passwort gehen Ihnen umgehend per E-Mail zu). {$passwordResetUrl}<br />
<br />
URL des Beitrags: {$submissionReviewUrl}<br />
<br />
In der Hoffnung auf eine positive Antwort,<br />
<br />
{$editorialContactSignature}<br />
<br />
&quot;{$submissionTitle}&quot;<br />
<br />
{$submissionAbstract}',
  'emails.reviewRequest.description' => 'Diese E-Mail von der/dem Rubrikredakteur/in an eine/n Gutachter/in bittet darum, dass diese/r die Aufgabe, eine Einreichung zu begutachten, übernimmt oder ablehnt. Sie liefert Informationen über die Einreichung wie Titel und Abstract, ein Fälligkeitsdatum für das Gutachten und darüber, wie auf die Einreichung zugegriffen werden kann. Diese Nachricht wird benutzt, wenn in Schritt 2 des Zeitschriftensetups das Standardbegutachtungsverfahren ausgewählt worden ist. (Ansonsten siehe REVIEW_REQUEST_ATTACHED.)',
  'emails.reviewRequestRemindAuto.subject' => 'Bitte um Begutachtung eines Artikels',
  'emails.reviewRequestRemindAuto.body' => '{$reviewerName}:<br />
dies ist eine freundliche Erinnerung an unsere Bitte an Sie, den Artikel &quot;{$submissionTitle},&quot; für {$contextName} zu begutachten. Wir hatten auf Ihre Antwort bis zum {$responseDueDate} gehofft. Diese E-Mail wurde automatisch erzeugt und mit Verstreichen dieses Datums verschickt.
<br />
Wir glauben, dass Sie ausgezeichnet geeignet für die Begutachtung dieses Manuskript wären. Ein Abstract des Beitrags ist angefügt, und wir hoffen, dass Sie diese wichtige Aufgabe für uns übernehmen können.<br />
<br />
Bitte melden Sie sich bei der Webseite der Zeitschrift an, um uns mitzuteilen, ob Sie die Begutachtung übernehmen werden. Über die Webseite können Sie auch auf den Beitrag zugreifen und Ihr Gutachten sowie Ihre Empfehlung hinzufügen. Die Webseite erreichen Sie hier: {$contextUrl}<br />
<br />
Wir benötigen das Gutachten bis zum {$reviewDueDate}.<br />
<br />
Wenn Sie Ihre Benutzerkennung und Ihr Passwort für die Webseite des Journals nicht haben, können Sie den folgenden Link nutzen, um Ihr Passwort zurückzusetzen (es wird Ihnen dann zusammen mit Ihrer Benutzerkennung per Mail zugeschickt): {$passwordResetUrl}<br />
<br />
URL des Beitrags: {$submissionReviewUrl}<br />
<br />
Vielen Dank, dass Sie unsere Bitte berücksichtigen.<br />
<br />
{$editorialContactSignature}<br />
<br />
&quot;{$submissionTitle}&quot;<br />
<br />
{$submissionAbstract}',
  'emails.reviewRequestRemindAuto.description' => 'Diese E-Mail wird automatisch verschickt, wenn das Fälligkeitsdatum für eine/n Gutachter/in verstrichen ist (vgl. die Begutachtungseinstellungen in Schritt 2 des Zeitschriftensetups) und wenn der One-Click-Zugang für Gutachter/innen deaktiviert ist. Planmäßige Aufgaben (scheduled tasks) müssen aktiviert und konfiguriert sein (vgl. die Konfigurationsdatei der Website).',
  'emails.reviewRequestOneclick.subject' => 'Bitte um ein Gutachten',
  'emails.reviewRequestOneclick.body' => '{$reviewerName},<br />
<br />
aufgrund Ihrer Forschungsschwerpunkte wären Sie ein/e ausgezeichnete/r Gutachter/in für das Manuskript &quot;{$submissionTitle}&quot;, das zur Publikation in {$contextName} eingereicht worden ist. Weiter unten finden Sie eine Kurzfassung des Beitrags. Ich hoffe sehr, dass Sie sich bereitfinden können, uns mit Ihrer Stellungnahme zu unterstützen. Sie wären uns eine große Hilfe.<br />
<br />
Loggen Sie sich bitte bis zum {$responseDueDate} auf der Webseite unserer Zeitschrift ein, um uns Ihre Zu- oder Absage mitzuteilen. Sie finden dort den Beitrag und können gegebenenfalls auch Ihr Gutachten und Ihre Empfehlung dort abgeben.<br />
<br />
Das Gutachten wäre fällig am {$reviewDueDate}.<br />
<br />
URL des Beitrags: {$submissionReviewUrl}<br />
<br />
In der Hoffnung auf eine positive Antwort,<br />
<br />
{$editorialContactSignature}<br />
<br />
&quot;{$submissionTitle}&quot;<br />
<br />
{$submissionAbstract}',
  'emails.reviewRequestOneclick.description' => 'Diese E-Mail von der/dem Rubrikredakteur/in an eine/n Gutachter/in bittet darum, dass diese/r die Aufgabe, eine Einreichung zu begutachten, übernimmt oder ablehnt. Sie liefert Informationen über die Einreichung wie Titel und Abstract, ein Fälligkeitsdatum für das Gutachten und darüber, wie auf die Einreichung zugegriffen werden kann. Diese Nachricht wird benutzt, wenn in Schritt 2 des Zeitschriftensetups das Standardbegutachtungsverfahren ausgewählt worden ist und wenn der One-Click-Zugang für Gutachter/innen aktiviert ist.',
  'emails.reviewRequestRemindAutoOneclick.subject' => 'Bitte um Begutachtung eines Artikels',
  'emails.reviewRequestRemindAutoOneclick.body' => '{$reviewerName}:<br />
dies ist eine höfliche Erinnerung an unsere Bitte an Sie, den Artikel &quot;{$submissionTitle},&quot; für {$contextName} zu begutachten. Wir hatten auf Ihre Antwort bis zum {$responseDueDate} gehofft. Diese E-Mail wurde automatisch erzeugt und mit Verstreichen dieses Datums verschickt.
<br />
Wir glauben, dass Sie dass Sie ausgezeichnet geeignet für die Begutachtung dieses Manuskript wären. Ein Abstract des Beitrags ist angefügt, und wir hoffen, dass Sie diese wichtige Aufgabe für uns übernehmen können.<br />
<br />
Bitte melden Sie sich bei der Webseite der Zeitschrift an, um uns mitzuteilen, ob Sie die Begutachtung übernehmen werden. Über die Webseite können Sie auch auf den Beitrag zugreifen und Ihr Gutachten sowie Ihre Empfehlung hinzufügen.<br />
<br />
Wir benötigen das Gutachten bis zum {$reviewDueDate}.<br />
<br />
URL des Beitrags: {$submissionReviewUrl}<br />
<br />
Vielen Dank, dass Sie unsere Bitte berücksichtigen.<br />
<br />
{$editorialContactSignature}<br />
<br />
&quot;{$submissionTitle}&quot;<br />
<br />
{$submissionAbstract}',
  'emails.reviewRequestRemindAutoOneclick.description' => 'Diese E-Mail wird automatisch verschickt, wenn das Fälligkeitsdatum für eine/n Gutachter/in verstrichen ist (vgl. die Begutachtungseinstellungen in Schritt 2 des Zeitschriftensetups) und wenn der One-Click-Zugang für Gutachter/innen deaktiviert ist. Planmäßige Aufgaben (scheduled tasks) müssen aktiviert und konfiguriert sein (vgl. die Konfigurationsdatei der Website).',
  'emails.reviewRequestAttached.subject' => 'Bitte um ein Gutachten',
  'emails.reviewRequestAttached.body' => '{$reviewerName},<br />
<br />
aufgrund Ihrer Forschungsschwerpunkte wären Sie ein/e ausgezeichnete/r Gutachter/in für das Manuskript &quot;{$submissionTitle}&quot;. Ich hoffe sehr, dass Sie sich bereitfinden können, uns mit Ihrer Stellungnahme zu unterstützen. Sie wären uns eine große Hilfe. Die Richtlinien für die Begutachtung sind angefügt, ebenso der Beitrag, um den es geht. Ihr Gutachten und Ihre Empfehlung sollten gegebenenfalls bis zum {$reviewDueDate} per E-Mail bei uns eingehen.<br />
<br />
Bitte benachrichtigen Sie uns bis zum {$responseDueDate} per E-Mail, ob Sie das Gutachten übernehmen können.<br />
<br />
In der Hoffnung auf eine positive Antwort,<br />
<br />
{$editorialContactSignature}<br />
<br />
<br />
Richtlinien für Gutachter/innen<br />
<br />
{$reviewGuidelines}<br />
',
  'emails.reviewRequestAttached.description' => 'Diese E-Mail wird von der/dem Rubrikredakteur/in an eine/n Gutachter/in gesendet, um darum zu bitten, dass sie/er die Aufgabe, eine Einreichung zu begutachten, übernimmt oder ablehnt. Sie enthält die Einreichung als E-Mail-Anhang. Diese Nachricht wird benutzt, wenn in Schritt 2 des Zeitschriftensetups das Begutachtungsverfahren über E-Mail-Anhänge ausgewählt worden ist. (Ansonsten siehe REVIEW_REQUEST.)',
  'emails.reviewRequestSubsequent.subject' => 'Bitte um ein Gutachten',
  'emails.reviewRequestSubsequent.body' => '{$reviewerName},<br />
<br />
diese E-Mail betrifft das Manuskript &quot;{$submissionTitle}&quot;, das bei {$contextName} in der Begutachtung ist.<br />
<br />
Nach der Begutachtung der früheren Fassung des Manuskripts haben die Autor/innen nun eine überarbeitete Fassung ihres Artikels eingereicht. Wir würden uns freuen, wenn Sie bei der Beurteilung helfen könnten.<br />
<br />
Bitte loggen Sie sich auf der Website der Zeitschrift bis zum {$responseDueDate} ein, um uns Ihre Zu- oder Absage mitzuteilen. Sie finden dort den Beitrag und können auch Ihr Gutachten und Ihre Empfehlung dort abgeben. Die Adresse ist {$contextUrl}.<br />
<br />
Das Gutachten selbst wäre fällig am {$reviewDueDate}.<br />
<br />
Falls Sie nicht über Benutzer/innennamen und Passwort verfügen, können Sie über folgenden Link Ihr Passwort neu setzen (das Ihnen dann zusammen mit Ihrem Benutzer/innennamen per E-Mail zugesandt wird). {$passwordResetUrl}<br />
<br />
URL des Beitrags: {$submissionReviewUrl}<br />
<br />
In der Hoffnung auf eine positive Antwort,<br />
<br />
{$editorialContactSignature}<br />
<br />
&quot;{$submissionTitle}&quot;<br />
<br />
{$submissionAbstract}',
  'emails.reviewRequestSubsequent.description' => 'Diese E-Mail wird von der/dem Rubrikredakteur/in an eine/n Gutachter/in gesendet, damit diese/r die Aufgabe, eine Einreichung in einer zweiten oder weiteren Begutachtungsrunde zu beurteilen, übernimmt oder ablehnt. Sie übermittelt Informationen über die Einreichung wie den Titel und das Abstract, ein Fälligkeitsdatum für das Gutachten und Informationen, wie auf die Einreichung zugegriffen werden kann. Diese Nachricht wird benutzt, wenn in Schritt 2 des Zeitschriftensetups das Standardbegutachtungsverfahren ausgewählt worden ist. (Ansonsten siehe REVIEW_REQUEST_ATTACHED_SUBSEQUENT.)',
  'emails.reviewRequestOneclickSubsequent.subject' => 'Bitte um ein Gutachten',
  'emails.reviewRequestOneclickSubsequent.body' => '{$reviewerName},<br />
<br />
diese E-Mail betrifft das Manuskript &quot;{$submissionTitle}&quot;, das bei {$contextName} in der Begutachtung ist.<br />
<br />
Nach der Begutachtung der früheren Fassung des Manuskripts haben die Autor/innen nun eine überarbeitete Fassung ihres Artikels eingereicht. Wir würden uns freuen, wenn Sie bei der Beurteilung helfen könnten.<br />
<br />
Bitte loggen Sie sich auf der Website der Zeitschrift bis zum {$responseDueDate} ein, um uns Ihre Zu- oder Absage mitzuteilen. Sie finden dort den Beitrag und können auch Ihr Gutachten und Ihre Empfehlung dort abgeben.<br />
<br />
Das Gutachten selbst wäre fällig zum {$reviewDueDate}.<br />
<br />
URL des Beitrags: {$submissionReviewUrl}<br />
<br />
In der Hoffnung auf eine positive Antwort,<br />
<br />
{$editorialContactSignature}<br />
<br />
&quot;{$submissionTitle}&quot;<br />
<br />
{$submissionAbstract}',
  'emails.reviewRequestOneclickSubsequent.description' => 'Diese E-Mail wird von der/dem Rubrikredakteur/in an eine/n Gutachter/in gesendet, damit diese/r die Aufgabe, eine Einreichung in einer zweiten oder weiteren Begutachtungsrunde zu beurteilen, übernimmt oder ablehnt. Sie übermittelt Informationen über die Einreichung wie den Titel und das Abstract, ein Fälligkeitsdatum für das Gutachten und Informationen, wie auf die Einreichung zugegriffen werden kann. Diese Nachricht wird benutzt, wenn in Schritt 2 des Zeitschriftensetups das Standardbegutachtungsverfahren ausgewählt worden ist und wenn der One-Click-Zugang für Gutachter/innen aktiviert ist.',
  'emails.reviewRequestAttachedSubsequent.subject' => 'Bitte um ein Gutachten',
  'emails.reviewRequestAttachedSubsequent.body' => '{$reviewerName},<br />
<br />
diese E-Mail betrifft das Manuskript &quot;{$submissionTitle}&quot;, das bei {$contextName} in der Begutachtung ist.<br />
<br />
Nach der Begutachtung der früheren Fassung des Manuskripts haben die Autor/innen nun eine überarbeitete Fassung ihres Artikels eingereicht. Wir würden uns freuen, wenn Sie bei der Beurteilung helfen könnten.<br />
<br />
Die Begutachtungsrichtlinien dieser Zeitschrift sind unten angehängt, und der Beitrag selber ist dieser E-Mail beigefügt. Ihr Gutachten zu diesem Beitrag sollte zusammen mit Ihrer Empfehlung mir per E-Mail bis zum {$reviewDueDate} zugehen.<br />
<br />
Bitte teilen Sie uns in einer E-Mail bis zum {$responseDueDate} mit, ob Sie das Gutachten übernehmen können.<br />
<br />
In der Hoffnung auf eine positive Antwort,<br />
<br />
{$editorialContactSignature}<br />
<br />
<br />
Begutachtungsrichtlinien<br />
<br />
{$reviewGuidelines}<br />
',
  'emails.reviewRequestAttachedSubsequent.description' => 'Diese E-Mail wird von der/dem Rubrikredakteur/in an eine/n Gutachter/in gesendet, damit diese/r die Aufgabe, eine Einreichung in einer zweiten oder weiteren Begutachtungsrunde zu beurteilen, übernimmt oder ablehnt. Sie enthält die Einreichung als E-Mail-Anhang. Diese Nachricht wird benutzt, wenn in Schritt 2 des Zeitschriftensetups das Begutachtungsverfahren über E-Mail-Anhänge ausgewählt worden ist. (Ansonsten siehe  REVIEW_REQUEST_SUBSEQUENT.)',
  'emails.reviewCancel.subject' => 'Rücknahme einer Bitte um ein Gutachten',
  'emails.reviewCancel.body' => '{$reviewerName},<br />
<br />
wir haben uns entschieden, unsere Anfrage nach einem Gutachten für den Beitrag &quot;{$submissionTitle}&quot; für {$contextName} zurückzuziehen. Verzeihen Sie bitte die Ihnen dadurch evtl. entstandenen Unannehmlichkeiten. Wir hoffen, dass wir weiterhin auf Ihre Hilfe als Gutachter/in für die Zeitschrift zählen können.<br />
<br />
Falls Sie Fragen haben, können Sie sich gerne an mich wenden.',
  'emails.reviewCancel.description' => 'Diese E-Mail wird von der/dem Rubrikredakteur/in an eine/n Gutachter/in gesendet, die an einem Gutachten arbeiten, um sie darüber zu informieren, dass das Gutachten abgesagt worden ist.',
  'emails.reviewConfirm.subject' => 'Einwilligung in die Begutachtung',
  'emails.reviewConfirm.body' => 'Sehr geehrte Redaktion,<br />
<br />
ich bin in der Lage und auch gern bereit, den Beitrag &quot;{$submissionTitle}&quot; für {$contextName} zu begutachten. Vielen Dank für Ihr Vertrauen; ich werde das Gutachten spätestens bis zum {$reviewDueDate} einreichen, wenn möglich auch früher.<br />
<br />
{$reviewerName}',
  'emails.reviewConfirm.description' => 'Diese E-Mail wird von einer Gutachterin/einem Gutachter an die/den Rubrikredakteur/in als Antwort auf eine Begutachtungsanfrage gesendet, um die/den Rubrikredakteur/in darüber zu informieren, dass die Begutachtung übernommen wird und bis zu dem angegebenen Datum abgeschlossen sein wird.',
  'emails.reviewDecline.subject' => 'Ablehnung der Bitte um ein Gutachten',
  'emails.reviewDecline.body' => 'Sehr geehrte Redaktion,<br />
<br />
leider kann ich gegenwärtig die Begutachtung des Beitrags &quot;{$submissionTitle}&quot; für {$contextName} nicht übernehmen. Ich danke für Ihr Vertrauen. Bei anderer Gelegenheit können Sie sich gerne wieder an mich wenden.<br />
<br />
{$reviewerName}',
  'emails.reviewDecline.description' => 'Diese E-Mail wird von einer Gutachterin/einem Gutachter an die/den Rubrikredakteur/in als Antwort auf eine Begutachtungsanfrage gesendet, um darüber zu informieren, dass die Anfrage abgelehnt wird.',
  'emails.reviewAck.subject' => 'Eingangsbestätigung für ein Gutachten',
  'emails.reviewAck.body' => '{$reviewerName},<br />
<br />
vielen Dank für Ihr Gutachten zum Beitrag &quot;{$submissionTitle}&quot; für {$contextName}. Ihre Stellungnahme ist eine wichtige Unterstützung für unsere Bemühungen um die Qualität der von uns veröffentlichten Arbeiten.',
  'emails.reviewAck.description' => 'Diese E-Mail wird von eine/r Rubrikredakteur/in gesendet, um den Empfang eines abgeschlossenen Gutachtens zu bestätigen und um der Gutachterin/dem Gutachter für die Mitwirkung zu danken.',
  'emails.reviewRemind.subject' => 'Erinnerung an fälliges Gutachten',
  'emails.reviewRemind.body' => '{$reviewerName},<br />
<br />
wir möchten Sie freundlich an Ihre Zusage erinnern, den Beitrag &quot;{$submissionTitle}&quot; für {$contextName} zu begutachten. Wir hatten gehofft, das Gutachten bis zum {$reviewDueDate} zu erhalten. Wir würden uns freuen, wenn es uns baldmöglichst zur Verfügung stünde.<br />
<br />
Falls Ihnen Benutzer/innenname und Passwort fehlen, können Sie über folgenden Link Ihr Passwort neu setzen (Benutzer/innenname und Passwort gehen Ihnen umgehend per E-Mail zu). {$passwordResetUrl}<br />
<br />
URL des Beitrags: {$submissionReviewUrl}<br />
<br />
Könnten Sie uns bitte bestätigen, dass Sie nach wie vor bereit sind, unsere Zeitschrift gutachterlich zu unterstützen? Wir würden uns freuen, bald von Ihnen zu hören.<br />
<br />
{$editorialContactSignature}',
  'emails.reviewRemind.description' => 'Diese E-Mail wird von einer Rubrikredakteurin/einem Rubrikredakteur gesendet, um eine/n Gutachter/in daran zu erinnern, dass ihr/sein Gutachten fällig ist.',
  'emails.reviewRemindOneclick.subject' => 'Erinnerung an die Fälligkeit eines Gutachtens',
  'emails.reviewRemindOneclick.body' => '{$reviewerName},<br />
<br />
hiermit möchten wir Sie freundlich an Ihre Zusage erinnern, den Beitrag &quot;{$submissionTitle}&quot; für {$contextName} zu begutachten. Wir hatten gehofft, das Gutachten zum {$reviewDueDate} zu erhalten. Diese E-Mail wurde automatisch erstellt und nach Überschreitung des Termins versandt. Wir würden uns freuen, wenn uns das Gutachten baldmöglichst zur Verfügung stünde.<br />
<br />
URL des Beitrags: {$submissionReviewUrl}<br />
<br />
Könnten Sie uns bitte bestätigen, dass Sie nach wie vor bereit sind, unsere Zeitschrift gutachterlich zu unterstützen? Wir würden uns freuen, bald von Ihnen zu hören.<br />
<br />
{$editorialContactSignature}',
  'emails.reviewRemindOneclick.description' => 'Diese E-Mail wird von einer Rubrikredakteurin/einem Rubrikredakteur gesendet, um eine/n Gutachter/in daran zu erinnern, dass ihr/sein Gutachten fällig ist.',
  'emails.reviewRemindAuto.subject' => 'Automatische Erinnerung an die Fälligkeit eines Gutachtens',
  'emails.reviewRemindAuto.body' => '{$reviewerName},<br />
<br />
hiermit möchten wir Sie freundlich an Ihre Zusage erinnern, den Beitrag &quot;{$submissionTitle}&quot; für {$contextName} zu begutachten. Wir hatten gehofft, das Gutachten zum {$reviewDueDate} zu erhalten. Diese E-Mail wurde automatisch erstellt und nach Überschreitung des Termins versandt. Wir würden uns freuen, wenn uns das Gutachten baldmöglichst zur Verfügung stünde.<br />
<br />
Falls Ihnen Benutzer/innennamen und Passwort fehlen, können Sie über folgenden Link Ihr Passwort neu setzen (Benutzer/innenname und Passwort gehen Ihnen umgehend per E-Mail zu). {$passwordResetUrl}<br />
<br />
URL des Beitrags: {$submissionReviewUrl}<br />
<br />
Könnten Sie uns bitte bestätigen, dass Sie nach wie vor bereit sind, unsere Zeitschrift gutachterlich zu unterstützen? Wir würden uns freuen, bald von Ihnen zu hören.<br />
<br />
{$editorialContactSignature}',
  'emails.reviewRemindAuto.description' => 'Diese E-Mail wird automatisch verschickt, wenn das Fälligkeitsdatum für eine/n Gutachter/in verstrichen ist (vgl. die Begutachtungseinstellungen in Schritt 2 des Zeitschriftensetups) und wenn der One-Click-Zugang für Gutachter/innen deaktiviert ist. Planmäßige Aufgaben (scheduled tasks) müssen aktiviert und konfiguriert sein (vgl. die Konfigurationsdatei der Website).',
  'emails.reviewRemindAutoOneclick.subject' => 'Automatische Erinnerung an Begutachtung',
  'emails.reviewRemindAutoOneclick.body' => '{$reviewerName},<br />
<br />
hiermit möchten wir Sie freundlich an Ihre Zusage erinnern, den Beitrag &quot;{$submissionTitle}&quot; für {$contextName} zu begutachten. Wir hatten gehofft, das Gutachten zum {$reviewDueDate} zu erhalten. Diese E-Mail wurde automatisch erstellt und nach Überschreitung des Termins versandt. Wir würden uns freuen, wenn uns das Gutachten baldmöglichst zur Verfügung stünde.<br />
<br />
URL des Beitrags: {$submissionReviewUrl}<br />
<br />
Könnten Sie uns bitte bestätigen, dass Sie nach wie vor bereit sind, unsere Zeitschrift mit Ihrer wertvollen gutachterlichen Arbeit zu unterstützen? Wir würden uns freuen, bald von Ihnen zu hören.<br />
<br />
{$editorialContactSignature}',
  'emails.reviewRemindAutoOneclick.description' => 'Diese E-Mail wird automatisch verschickt, wenn das Fälligkeitsdatum für eine/n Gutachter/in verstrichen ist (vgl. die Begutachtungseinstellungen in Schritt 2 des Zeitschriftensetups) und wenn der One-Click-Zugang für Gutachter/innen aktiviert ist. Planmäßige Aufgaben (scheduled tasks) müssen aktiviert und konfiguriert sein (vgl. die Konfigurationsdatei der Website).',
  'emails.editorDecisionAccept.subject' => 'Entscheidung der Redaktion',
  'emails.editorDecisionAccept.body' => '{$authorName},<br />
<br />
wir sind zu einer Entscheidung in Bezug auf Ihre Einreichung für {$contextName}: &quot;{$submissionTitle}&quot; gekommen.<br />
<br />
Unsere Entscheidung lautet: Beitrag annehmen',
  'emails.editorDecisionAccept.description' => 'Diese E-Mail von der/dem Redakteur/in oder Rubrikredakteur/in an eine/n Autor/in informiert diese/n über eine getroffene Entscheidung zu ihrer/seiner Einreichung.',
  'emails.editorDecisionSendToExternal.subject' => 'Entscheidung der Redaktion',
  'emails.editorDecisionSendToExternal.body' => '{$authorName}:<br />
<br />
Wir sind zu einer Entscheidung hinsichtlich Ihrer Einreichung für {$contextName}, &quot;{$submissionTitle}&quot; gekommen.<br />
<br />
Wir haben entschieden, ein Gutachten anzufordern.<br />
<br />
URL des Beitrags: {$submissionUrl}',
  'emails.editorDecisionSendToExternal.description' => 'Diese E-Mail von Redakteur/in oder Rubrikredakteur/in benachrichtigt die/den Autor/in darüber, dass ein externes Gutachten angefordert wird.',
  'emails.editorDecisionSendToProduction.subject' => 'Entscheidung der Redaktion',
  'emails.editorDecisionSendToProduction.body' => '{$authorName}:<br />
<br />
Das Lektorat Ihrer Einreichung &quot;{$submissionTitle}&quot; ist beendet. Wir leiten den Beitrag jetzt zur Herstellung weiter.<br />
<br />
URL des Beitrags: {$submissionUrl}',
  'emails.editorDecisionSendToProduction.description' => 'Diese E-Mail von Redakteur/in oder Rubrikredakteur/in informiert die/den Autor/in darüber, dass deren Beitrag in die Herstellung weitergeleitet worden ist.',
  'emails.editorDecisionRevisions.subject' => 'Entscheidung der Redaktion',
  'emails.editorDecisionRevisions.body' => '{$authorName},<br />
<br />
wir sind zu einer Entscheidung in Bezug auf Ihren Beitrag für {$contextName}: &quot;{$submissionTitle}&quot; gekommen.<br />
<br />
Wir haben entschieden, dass Ihr Beitrag überarbeitet werden muss.',
  'emails.editorDecisionRevisions.description' => 'Diese E-Mail von der/dem Redakteur/in oder Rubrikredakteur/in an eine/n Autor/in informiert diese/n über eine getroffene Entscheidung zu ihrer/seiner Einreichung.',
  'emails.editorDecisionResubmit.subject' => 'Entscheidung der Redaktion',
  'emails.editorDecisionResubmit.body' => '{$authorName},<br />
<br />
wir sind zu einer Entscheidung in Bezug auf Ihre Einreichung für {$contextName}: &quot;{$submissionTitle}&quot; gekommen.<br />
<br />
Wir haben entschieden, dass Ihr Beitrag überarbeitet werden muss und dann erneut zum Begutachtung versendet wird.',
  'emails.editorDecisionResubmit.description' => 'Diese E-Mail von der/dem Redakteur/in oder Rubrikredakteur/in an eine/n Autor/in informiert diese/n über eine getroffene Entscheidung zu ihrer/seiner Einreichung.',
  'emails.editorDecisionDecline.subject' => 'Entscheidung der Redaktion',
  'emails.editorDecisionDecline.body' => '{$authorName},<br />
<br />
wir sind zu einer Entscheidung in Bezug auf Ihre Einreichung für {$contextName}: &quot;{$submissionTitle}&quot; gekommen.<br />
<br />
Unsere Entscheidung lautet: Beitrag ablehnen',
  'emails.editorDecisionDecline.description' => 'Diese E-Mail von der/dem Redakteur/in oder Rubrikredakteur/in an eine/n Autor/in informiert diese/n über eine getroffene Entscheidung zu ihrer/seiner Einreichung.',
  'emails.editorRecommendation.subject' => 'Entscheidung der Redaktion',
  'emails.editorRecommendation.body' => '{$editors}:<br />
<br />
Die Empfehlung hinsichtlich der Einreichung für {$contextName}, &quot;{$submissionTitle}&quot; ist: {$recommendation}',
  'emails.editorRecommendation.description' => 'Diese E-Mail von der/dem vorschlagenen Redakteur/in oder Rubrikenredakteur/in an die/den Entscheidungen treffenden Redakteur/in oder Rubrikenredakteur/in informiert diese/n über die endgültige Empfehlung zur vorliegenden Einreichung.',
  'emails.copyeditRequest.subject' => 'Bitte um ein Lektorat',
  'emails.copyeditRequest.body' => '{$participantName},<br />
<br />
ich bitte Sie, das Manuskript &quot;{$submissionTitle}&quot; für {$contextName} zu lektorieren. Bitte gehen Sie dabei folgendermaßen vor:<br />
1. Klicken Sie auf die unten stehende URL des Beitrags.<br />
2. Öffnen Sie alle Dateien, die unter Entwurf für Lektorat verfügbar sind, und beginnen Sie Ihr Lektorat. Fügen Sie neue Diskussionen zum Lektorat nach Bedarf hinzu.<br />
3. Sichern Sie die lektorierte(n) Dateien und laden Sie sie unter Lektoriert hoch.<br />
4. Benachrichtigen Sie die/den Redakteur/in, dass alle Dateien fertig sind und dass der Herstellungsprozess beginnen kann.<br />
<br />
URL {$contextName}: {$contextUrl}<br />
URL des Beitrags: {$submissionUrl}<br />
Benutzer/innenname: {$participantUsername}',
  'emails.copyeditRequest.description' => 'Diese E-Mail wird von der/dem Rubrikredakteur/in an die/den Lektor einer Einreichung gesendet, um diese/n zu bitten, mit dem Lektorat zu beginnen. Sie liefert Informationen über die Einreichung und darüber, wie auf sie zuzugreifen ist.',
  'emails.layoutRequest.subject' => 'Bitte um Layout',
  'emails.layoutRequest.body' => '{$participantName},<br />
<br />
ich bitte Sie um das Layout der Fahnen für das Manuskript &quot;{$submissionTitle}&quot; für {$contextName}. Bitte gehen Sie folgendermaßen vor:<br />
<br />
1. Klicken Sie auf die unten stehende URL des Beitrags.<br />
2. Loggen Sie sich bei der Zeitschrift ein und verwenden Sie die Datei der Layout-Fassung, um die Fahne entsprechend den Vorgaben der Zeitschrift zu erstellen.<br />
3. Schicken Sie die ABGESCHLOSSEN-E-Mail an die Redaktion.<br />
<br />
URL {$contextName}: {$contextUrl}<br />
URL des Beitrags: {$submissionUrl}<br />
Benutzer/innenname: {$participantUsername}<br />
<br />
Falls Sie zur Zeit nicht in der Lage sein sollten, die Arbeit zu übernehmen, oder Fragen haben, geben Sie mir bitte Bescheid. Vielen Dank für Ihre Unterstützung dieser Zeitschrift.',
  'emails.layoutRequest.description' => 'Diese E-Mail von der/dem Rubrikredakteur/in an die/den Layouter/in benachrichtigt diese/n, dass ihr/ihm die Aufgabe zugewiesen wird, einen Beitrag zu layouten. Sie liefert Informationen über den Beitrag und darüber, wie auf ihn zugegriffen werden kann.',
  'emails.layoutComplete.subject' => 'Fahnen fertigestellt',
  'emails.layoutComplete.body' => '{$editorialContactName},<br />
<br />
die Fahnen für das Manuskript &quot;{$submissionTitle}&quot; für {$contextName} sind fertig und stehen zum Korrekturlektorat bereit.<br />
<br />
Falls Sie Fragen haben, können Sie sich gerne an mich wenden.<br />
<br />
{$participantName}',
  'emails.layoutComplete.description' => 'Diese E-Mail von der/dem Layouter/in an die/den Rubrikredakteur/in benachrichtigt diese/n, dass der Layoutprozess abgeschlossen worden ist.',
  'emails.emailLink.subject' => 'Möglicherweise interessierender Artikel',
  'emails.emailLink.body' => 'Ich dachte, Sie würden sich vielleicht für den Beitrag &quot;{$submissionTitle}&quot; von {$authorName}, veröffentlicht in Band {$volume}, Nummer {$number} ({$year}) von {$contextName} unter &quot;{$articleUrl}&quot;, interessieren.',
  'emails.emailLink.description' => 'Diese E-Mail-Vorlage gibt einer registrierten Leserin/einem registrierten Leser die Möglichkeit, Informationen über einen Artikel an jemanden zu senden, die/der sich eventuell dafür interessiert. Sie ist über die Lesewerkzeuge erreichbar und muss von der/dem Zeitschriftenverwalter/in in den Einstellungen der Lesewerkzeuge aktiviert werden.',
  'emails.subscriptionNotify.subject' => 'Abonnementbestätigung',
  'emails.subscriptionNotify.body' => '{$subscriberName},<br />
<br />
Sie wurden als Abonnent/in in unserem Zeitschriftenverwaltungssystem für {$contextName} registriert, und zwar in der folgenden Kategorie:<br />
<br />
{$subscriptionType}<br />
<br />
Um auf Inhalte, die nur Abonnent/innen zur Verfügung stehen, zuzugreifen, loggen Sie sich einfach mit Ihrem Benutzer/innennamen &quot;{$username}&quot; in das System ein.<br />
<br />
Einmal eingeloggt, können Sie jederzeit die Einzelheiten Ihres Benutzer/innenprofils und Ihr Passwort ändern.<br />
<br />
Beachten Sie bitte, dass Sie sich nicht einloggen müssen, wenn Sie ein institutionelles Abonnement haben. Das System gestattet Ihnen dann automatisch den Zugang zu den Inhalten für Abonnent/innen.<br />
<br />
Falls Sie Fragen haben, können Sie sich gerne an mich wenden.<br />
<br />
{$subscriptionContactSignature}',
  'emails.subscriptionNotify.description' => 'Diese E-Mail benachrichtigt eine/n registrierte/n Leser/in, dass die/der Abonnementverwalter/in für sie/ihn ein Abonnement angelegt hat. Sie liefert die URL der Zeitschrift und Zugriffsinformationen.',
  'emails.openAccessNotify.subject' => 'Ausgabe jetzt im Open Access',
  'emails.openAccessNotify.body' => 'Liebe Leser/innen,<br />
<br />
{$contextName} hat soeben die nächste Ausgabe frei zugänglich gemacht. Wir laden Sie ein, sich hier das Inhaltsverzeichnis und auf unserer Webseite ({$contextUrl}) die Sie interessierenden Beiträge anzusehen.<br />
<br />
Wir danken für Ihr Interesse an unserer Arbeit,<br />
{$editorialContactSignature}',
  'emails.openAccessNotify.description' => 'Diese E-Mail wird an registrierte Leser/innen gesendet, die darum gebeten haben, informiert zu werden, wenn eine Ausgabe frei verfügbar wird.',
  'emails.subscriptionBeforeExpiry.subject' => 'Benachrichtigung über ablaufendes Abonnement',
  'emails.subscriptionBeforeExpiry.body' => '{$subscriberName},<br />
<br />
Ihr Abonnement für {$contextName} läuft demnächst aus.<br />
<br />
{$subscriptionType}<br />
Ablaufdatum: {$expiryDate}<br />
<br />
Um den künftigen Zugang zu dieser Zeitschrift zu gewährleisten, gehen Sie bitte zur Website der Zeitschrift und erneuern Sie Ihr Abonnement. Sie können sich mit Ihrem Benutzer/innennamen &quot;{$username}&quot; in das System einloggen.<br />
<br />
Falls Sie Fragen haben, können Sie sich gerne an mich wenden.<br />
<br />
{$subscriptionContactSignature}',
  'emails.subscriptionBeforeExpiry.description' => 'Diese E-Mail informiert eine/n Abonnentin/Abonnenten, dass ihr/sein Abonnement demnächst abläuft. Sie liefert die URL der Zeitschrift und Zugriffsinformationen.',
  'emails.subscriptionAfterExpiry.subject' => 'Abonnement abgelaufen',
  'emails.subscriptionAfterExpiry.body' => '{$subscriberName},<br />
<br />
Ihr Abonnement für {$contextName} ist ausgelaufen.<br />
<br />
{$subscriptionType}<br />
Ablaufdatum: {$expiryDate}<br />
<br />
Falls Sie Ihr Abonnement erneuern möchten, gehen Sie bitte zur Website der Zeitschrift. Sie können sich mit Ihrem Benutzer/innennamen &quot;{$username}&quot; in das System einloggen.<br />
<br />
Falls Sie Fragen haben, können Sie sich gerne an mich wenden.<br />
<br />
{$subscriptionContactSignature}',
  'emails.subscriptionAfterExpiry.description' => 'Diese E-Mail informiert eine/n Abonnentin/Abonnenten, dass ihr/sein Abonnement abgelaufen ist. Sie liefert die URL der Zeitschrift und Zugriffsinformationen.',
  'emails.subscriptionAfterExpiryLast.subject' => 'Abonnement abgelaufen – letzte Benachrichtigung',
  'emails.subscriptionAfterExpiryLast.body' => '{$subscriberName},<br />
<br />
Ihr Abonnement für {$contextName} ist abgelaufen.<br />
Bitte beachten Sie, dass dies die letzte Benachrichtung ist, die wir Ihnen senden.<br />
<br />
{$subscriptionType}<br />
Ablaufdatum: {$expiryDate}<br />
<br />
Falls Sie Ihr Abonnement erneuern möchten, gehen Sie bitte zur Website der Zeitschrift. Sie können sich mit Ihrem Benutzer/innennamen &quot;{$username}&quot; in das System einloggen.<br />
<br />
Falls Sie Fragen haben, können Sie sich gerne an mich wenden.<br />
<br />
{$subscriptionContactSignature}',
  'emails.subscriptionAfterExpiryLast.description' => 'Diese E-Mail informiert eine/n Abonnentin/Abonnenten, dass ihr/sein Abonnement abgelaufen ist. Sie liefert die URL der Zeitschrift und Zugriffsinformationen.',
  'emails.subscriptionPurchaseIndl.subject' => 'Abschluss eines Abonnements: Individuell',
  'emails.subscriptionPurchaseIndl.body' => 'Ein individuelles Abonnement ist online für {$contextName} mit den folgenden Details abgeschlossen worden.<br />
<br />
Art des Abonnements:<br />
{$subscriptionType}<br />
<br />
Benutzer/in:<br />
{$userDetails}<br />
<br />
Informationen zur Mitgliedschaft (sofern angegeben):<br />
{$membership}<br />
<br />
Um sich dieses Abonnement anzusehen oder es zu ändern, benutzen Sie bitte die folgende URL.<br />
<br />
Abonnement-URL: {$subscriptionUrl}<br />
',
  'emails.subscriptionPurchaseIndl.description' => 'Diese E-Mail benachrichtigt die/den Abonnementverwalter/in, dass ein individuelles Abonnement online erworben worden ist. Sie liefert Informationen über das Abonnement und einen Link zum schnellen Zugriff auf das abgeschlossene Abonnement.',
  'emails.subscriptionPurchaseInstl.subject' => 'Abschluss eines Abonnements: Institutionell',
  'emails.subscriptionPurchaseInstl.body' => 'Ein institutionelles Abonnement ist online für {$contextName} mit den folgenden Details abgeschlossen worden. Um dieses Abonnement zu aktivieren, benutzen Sie bitte den angegebenen Abonnement-URL und setzen Sie den Abonnementstatus auf \'Aktiv\'.<br />
<br />
Art des Abonnements:<br />
{$subscriptionType}<br />
<br />
Institution:<br />
{$institutionName}<br />
{$institutionMailingAddress}<br />
<br />
Domain (sofern angegeben):<br />
{$domain}<br />
<br />
IP-Bereich (sofern angeben):<br />
{$ipRanges}<br />
<br />
Kontaktperson:<br />
{$userDetails}<br />
<br />
Informationen zur Mitgliedschaft (sofern angegeben):<br />
{$membership}<br />
<br />
Um sich dieses Abonnement anzusehen oder es zu ändern, benutzen Sie bitte die folgende URL.<br />
<br />
Abonnement-URL: {$subscriptionUrl}<br />
',
  'emails.subscriptionPurchaseInstl.description' => 'Diese E-Mail benachrichtigt die/den Abonnementverwalter/in, dass ein institutionelles Abonnement online erworben worden ist. Sie liefert Informationen über das Abonnement und einen Link zum schnellen Zugriff auf das abgeschlossene Abonnement.',
  'emails.subscriptionRenewIndl.subject' => 'Erneuerung eines Abonnements: Individuell',
  'emails.subscriptionRenewIndl.body' => 'Ein individuelles Abonnement ist online für {$contextName} mit den folgenden Details erneuert worden.<br />
<br />
Art des Abonnements:<br />
{$subscriptionType}<br />
<br />
Benutzer/in:<br />
{$userDetails}<br />
<br />
Informationen zur Mitgliedschaft (sofern angegeben):<br />
{$membership}<br />
<br />
Um sich dieses Abonnement anzusehen oder es zu ändern, benutzen Sie bitte die folgende URL.<br />
<br />
Abonnement-URL: {$subscriptionUrl}<br />
',
  'emails.subscriptionRenewIndl.description' => 'Diese E-Mail benachrichtigt die/den Abonnementverwalter/in, dass ein individuelles Abonement online erneuert worden ist. Sie liefert Informationen über das Abonnement und einen Link zum schnellen Zugriff auf das erneuerte Abonnement.',
  'emails.subscriptionRenewInstl.subject' => 'Erneuerung eines Abonnements: Institutionell',
  'emails.subscriptionRenewInstl.body' => 'Ein institutionelles Abonnement ist online für {$contextName} mit den folgenden Details erneuert worden.<br />
<br />
Art des Abonnements:<br />
{$subscriptionType}<br />
<br />
Institution:<br />
{$institutionName}<br />
{$institutionMailingAddress}<br />
<br />
Domain (sofern angegeben):<br />
{$domain}<br />
<br />
IP-Bereich (sofern angeben):<br />
{$ipRanges}<br />
<br />
Kontaktperson:<br />
{$userDetails}<br />
<br />
Informationen zur Mitgliedschaft (sofern angegeben):<br />
{$membership}<br />
<br />
Um sich dieses Abonnement anzusehen oder es zu ändern, benutzen Sie bitte die folgende URL.<br />
<br />
Abonnement-URL: {$subscriptionUrl}<br />
',
  'emails.subscriptionRenewInstl.description' => 'Diese E-Mail benachrichtigt die/den Abonnementverwalter/in, dass ein institutionelles Abonement online erneuert worden ist. Sie liefert Informationen über das Abonnement und einen Link zum schnellen Zugriff auf das erneuerte Abonnement.',
  'emails.citationEditorAuthorQuery.subject' => 'Zitationsbearbeitung',
  'emails.citationEditorAuthorQuery.body' => '{$authorFirstName},<br />
<br />
könnten Sie uns bitte die korrekte Zitation für den folgenden Verweis aus Ihrem Artikel {$submissionTitle} bestätigen bzw. nachreichen:<br />
<br />
{$rawCitation}<br />
<br />
Vielen Dank!<br />
<br />
{$userFirstName}<br />
Lektor/in, {$contextName}<br />
',
  'emails.citationEditorAuthorQuery.description' => 'Diese E-Mail ermöglicht es Lektor/innen, zusätzliche Informationen über Verweise von Autor/innen anzufordern.',
  'emails.revisedVersionNotify.subject' => 'Überarbeitete Version hochgeladen',
  'emails.revisedVersionNotify.body' => 'Sehr geehrte Redaktion,<br />
<br />
eine überarbeitete Fassung von &quot;{$submissionTitle}&quot; ist von der/dem Autor/in {$authorName} hochgeladen worden.<br />
<br />
URL des Beitrags: {$submissionUrl}<br />
<br />
{$editorialContactSignature}',
  'emails.revisedVersionNotify.description' => 'Diese E-Mail wird automatisch an die/den zuständige/n Redakteur/in geschickt, wenn ein/e Autor/in eine überarbeitete Fassung eines Artikels hochgeladen hat.',
  'emails.notificationCenterDefault.subject' => 'Eine Nachricht bezüglich {$contextName}',
  'emails.notificationCenterDefault.body' => 'Bitte geben Sie Ihre Nachricht ein.',
  'emails.notificationCenterDefault.description' => 'Die (leere) Standardnachricht, die in der Nachrichtenliste des Benachrichtigungscenters angezeigt wird.',
  'emails.editorDecisionInitialDecline.subject' => 'Entscheidung der Redaktion',
  'emails.editorDecisionInitialDecline.body' => '
			{$authorName}:<br />
<br />
Wir sind zu einer Entscheidung hinsichtlich Ihrer Einreichung für {$contextName}, &quot;{$submissionTitle}&quot; gekommen.<br />
<br />
Wir haben entschieden, Ihre Einreichung abzulehnen.',
  'emails.editorDecisionInitialDecline.description' => 'Diese E-Mail wird an die/den Autor/in gesendet, wenn die/der Redakteur/in die Einreichung bereits vor dem Begutachtungsprozess ablehnt.',
  'emails.reviewReinstate.description' => 'Diese E-Mail wird von der/dem Rubrikredakteur/in an eine/n Gutachter/in gesendet, die an einem Gutachten arbeiten, um sie darüber zu informieren, dass die zurüchgezogene Anfrage nach einem Gutachten hiermit erneuert wird.',
  'emails.reviewReinstate.body' => '{$reviewerName},<br />
<br />
Wir möchten unsere Anfrage nach einem Gutachten für den Beitrag &quot;{$submissionTitle},&quot;, welcher bei {$contextName} eingereicht wurde, erneuern. Wir hoffen, dass Sie uns im Begutachtunsprozess dieser Zeitschrift unterstützen können.<br />
<br />
Wenn Sie Fragen haben, können Sie sich gern an mich wenden.',
  'emails.reviewReinstate.subject' => 'Anfrage nach einem Gutachten wiederhergestellt.',
  'emails.statisticsReportNotification.description' => 'Diese E-Mail wird monatlich an die Redakteure und Journal Manager gesendet und stellt Statistiken zum Journal zur Verfügung.',
  'emails.statisticsReportNotification.body' => '
Sehr geehrte/r {$name}, <br />
<br />
Der Bericht zu Ihrem Journal für {$month}, {$year} ist nun verfügbar. Die Hauptstatistiken für diesen Monat finden Sie im folgenden.<br />
<ul>
	<li>Neue Einreichungen in diesem Monat: {$newSubmissions}</li>
	<li>Abgelehnte Einreichungen in diesem Monat: {$declinedSubmissions}</li>
	<li>Angenommene Einreichungen in diesem Monat: {$acceptedSubmissions}</li>
	<li>Gesamtzahl der Einreichungen im System: {$totalSubmissions}</li>
</ul>
Detailliertere Daten finden Sie beim Journal unter <a href="{$editorialStatsLink}">Redaktionelle Trends</a> und <a href="{$publicationStatsLink}">Veröffentlichungsstatistik</a>.  Eine Kopie des Gesamtberichtes der redaktionellen Trends ist beigefügt.<br />
<br />
Mit freundlichen Grüßen,<br />
{$principalContactSignature}',
  'emails.statisticsReportNotification.subject' => 'Aktivität der Redaktion für {$month}, {$year}',
);