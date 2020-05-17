<?php return array (
  'emails.orcidCollectAuthorId.subject' => 'ORCID Zugriff erbeten',
  'emails.orcidCollectAuthorId.body' => 'Liebe/r {$authorName},<br/>
<br/>
Sie sind als Autor/in eines eingereichten Beitrags bei der Zeitschrift {$contextName} benannt worden.<br/>
<br/>
Um Ihre Autor/innenschaft zu bestätigen, geben Sie bitte Ihre ORCID iD für diese Einreichung an, indem Sie den unten angegebenen Link aufrufen.<br/>
<a href="{$authorOrcidUrl}"><img id="orcid-id-logo" src="https://orcid.org/sites/default/files/images/orcid_16x16.png" width=\'16\' height=\'16\' alt="ORCID iD icon" style="display: block; margin: 0 .5em 0 0; padding: 0; float: left;"/>ORCID iD registrieren oder ihre verbinden</a><br/>
<br/>
<br/>
<a href="{$orcidAboutUrl}">Mehr Informationen zu ORCID bei {$contextName}</a><br/>
<br/>
Wenn Sie Fragen dazu haben, melden Sie sich bitte bei mir.<br/>
<br/>
{$principalContactSignature}<br/>
',
  'emails.orcidCollectAuthorId.description' => 'Diese E-Mail-Vorlage wird verwendet, um die ORCID-iDs von Co-Autor/innen einzuholen.',
  'emails.orcidRequestAuthorAuthorization.subject' => 'ORCID Zugriff erbeten',
  'emails.orcidRequestAuthorAuthorization.body' => 'Liebe/r {$authorName},<br>
<br>
Sie sind als Autor/in eines eingereichten Beitrags bei der Zeitschrift {$contextName} benannt worden.<br>
<br>
Bitte gestatten Sie uns ihre ORCID-ID, falls vorhanden, zu diesem Beitrag hinzuzufügen, sowie ihr ORCID Profil bei Veröffentlichung des Beitrags zu aktualisieren.<br>
Dazu folgen sie dem unten stehenden Link zur offiziellen ORCID-Seite, melden sich mit ihren Daten an und authorisieren sie den Zugriff, indem
sie den Anweisungen auf der Seite folgen.<br>
<a href="{$authorOrcidUrl}"><img id="orcid-id-logo" src="https://orcid.org/sites/default/files/images/orcid_16x16.png" width=\'16\' height=\'16\' alt="ORCID iD icon" style="display: block; margin: 0 .5em 0 0; padding: 0; float: left;"/>ORCID iD registrieren oder ihre verbinden</a><br/>
<br/>
<br>
<a href="{$orcidAboutUrl}">Mehr Informationen zu ORCID bei {$contextName}</a>.
<br>
Wenn Sie Fragen dazu haben, melden Sie sich bitte.<br>
<br>
{$principalContactSignature}<br>
',
  'emails.orcidRequestAuthorAuthorization.description' => 'Diese E-Mail-Vorlage wird verwendet, um die Authorisierung für ORCID Profil Zugriff von Autor/innen einzuholen.',
);