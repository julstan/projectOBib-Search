<?php return array (
  'emails.paypalInvestigatePayment.subject' => 'Ungewöhnliche PayPal-Aktivität',
  'emails.paypalInvestigatePayment.body' => 'Open Journal Systems hat eine ungewöhnliche Aktivität in Bezug auf die Unterstützung  von PayPal-Zahlungen für die Zeitschrift {$contextName} festgestellt. Diese Aktivität könnte eine nähere Untersuchung oder ein Eingreifen erfordern.<br />
<br />
Diese E-Mail wurde durch das Open Journal Systems-Plugin PayPal-Gebührenzahlung erzeugt.<br />
<br />
Volle Informationen zu dieser Anfrage:<br />
{$postInfo}<br />
<br />
Zusätzliche Informationen (soweit angegeben):<br />
{$additionalInfo}<br />
<br />
Server vars:<br />
{$serverVars}<br />
',
  'emails.paypalInvestigatePayment.description' => 'Diese E-Mail-Vorlage wird genutzt, um den primären Zeitschriftenkontakt darüber zu benachrichtigen, dass verdächtige Aktivitäten durch das PayPal-PlugIn entdeckt worden sind.',
);