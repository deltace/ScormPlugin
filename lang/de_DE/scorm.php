<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'scorm', language 'de', branch 'MOODLE_23_STABLE'
 *
 * @package   scorm
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activation'] = 'Aktivierung';
$string['activityloading'] = 'Sie werden automatisch zur Aktivit�t weitergeleitet:';
$string['activitypleasewait'] = 'Aktivit�t wird geladen. Bitte warten ....';
$string['adminsettings'] = 'Admin-Einstellungen';
$string['advanced'] = 'Einstellungen';
$string['aicchacpkeepsessiondata'] = 'AICC HACP Sessiondaten';
$string['aicchacpkeepsessiondata_desc'] = 'Speicherdauer in Tagen f�r externe AICC HACP Sessiondaten (ein hoher Wert speichert viele Daten in der Datenbnaktabelle, kann jedoch zum debuggen hilfreich sein.';
$string['aicchacptimeout'] = 'AICC HACP Timeout';
$string['aicchacptimeout_desc'] = 'L�nge in Minuten, die eine externe AICC HACP Session offen bleiben darf';
$string['allowapidebug'] = 'API debug und tracing aktivieren (Capture Maske mit apidebumask einrichten)';
$string['allowtypeaicchacp'] = 'Externe AICC HACP aktivieren';
$string['allowtypeaicchacp_desc'] = 'Die Aktivierung erm�glicht AICC HACP die externe Kommunikation ohne ein Nutzerlogin zu ben�tigen, um Anfragen des externen AICC Pakets zu verarbeiten.';
$string['allowtypeexternal'] = 'Externen Pakettyp aktivieren';
$string['allowtypeexternalaicc'] = 'Direkte AICC URL aktivieren';
$string['allowtypeexternalaicc_desc'] = 'Erm�glicht den direkten Aufruf �ber eine URL auf ein einfaches AICC Paket.';
$string['allowtypeimsrepository'] = 'IMS Pakettyp aktivieren';
$string['allowtypelocalsync'] = 'Download Paketyp aktivieren';
$string['apidebugmask'] = 'API Debug Capture Mask (simple regex on <username>:<activityname>) z.B. admin:* zeigt die Debugmitteilungen nur f�r den Nutzer admin';
$string['areacontent'] = 'Inhaltsdateien';
$string['areapackage'] = 'Paketdatei';
$string['asset'] = 'Anlage';
$string['assetlaunched'] = 'Anlage gesehen';
$string['attempt'] = 'Versuch';
$string['attempt1'] = '1 Versuch';
$string['attempts'] = 'Versuche';
$string['attemptsx'] = '{$a} Versuche';
$string['attr_error'] = 'Falscher Wert f�r das Attribut ({$a->attr}) im Tag {$a->tag}';
$string['autocontinue'] = 'Automatische Fortsetzung';
$string['autocontinuedesc'] = 'Diese Einstellung setzt die standardm��ige automatische Fortsetzung f�r diese Aktivit�t';
$string['autocontinue_help'] = 'Wenn die Option aktiviert ist, wird nach dem Bearbeiten eines Lernobjekts automatisch das n�chste verf�gbare Lernobjekt aufgerufen. Andernfalls muss eine Taste \'Weiter\' benutzt werden.';
$string['averageattempt'] = 'Durchschnitt';
$string['badmanifest'] = 'Einige Fehler im Manifest gefunden: siehe Fehlerprotokoll';
$string['badpackage'] = 'Mit dem genutzten Lernpaket sind Probleme aufgetreten. Pr�fen Sie bitte das Lernpaket und versuchen Sie es noch einmal.';
$string['browse'] = 'Vorschau';
$string['browsed'] = 'Durchsucht';
$string['browsemode'] = 'Vorschaumodus';
$string['browserepository'] = 'Repository durchsuchen';
$string['cannotfindsco'] = 'SCO konnte nicht gefunden werden';
$string['chooseapacket'] = 'Ausw�hlen/aktualisieren eines Pakets';
$string['completed'] = 'Abgeschlossen';
$string['completionscorerequired'] = 'Mindestpunkte notwendig';
$string['completionscorerequired_help'] = 'Wenn diese Option aktiviert ist, m�ssen Teilnehmer/innen neben anderen Anforderungen auch die angegebene Mindestpunkte erreichen, um dieses Lernpaket als \'abgeschlossen\' markieren zu k�nnen.';
$string['completionstatus_completed'] = 'Erledigt';
$string['completionstatus_passed'] = 'Durchlaufen';
$string['completionstatusrequired'] = 'Status erforderlich';
$string['completionstatusrequired_help'] = 'Wenn Sie einen oder mehrere Punkte anw�hlen, m�ssen Teilnehmer/innen neben anderen Anforderungen auch mindestens einen dieser Punkte erledigen, um dieses Lernpaket als \'abgeschlossen\' markieren zu k�nnen.';
$string['confirmloosetracks'] = 'Warnung: Das Lernpaket scheint ver�ndert worden zu sein. Evtl. ist die Paketstruktur ge�ndert worden. Beim Update k�nnten Protokolldaten der Nutzer/innen verloren gehen.';
$string['contents'] = 'Inhalte';
$string['coursepacket'] = 'Lernpaket';
$string['coursestruct'] = 'Kursstruktur';
$string['currentwindow'] = 'Aktuelles Fenster';
$string['datadir'] = 'Dateisystemfehler: Das Verzeichnis f�r Kursdaten konnte nicht erstellt werden';
$string['defaultdisplaysettings'] = 'Standardm��ige Anzeigeeinstellungen';
$string['defaultgradesettings'] = 'Standardm��ige Bewertungseinstellungen';
$string['defaultothersettings'] = 'Weitere Standardeinstellungen';
$string['deleteallattempts'] = 'Alle Versuche im Lernpaket l�schen';
$string['deleteattemptcheck'] = 'Sind Sie wirklich sicher, dass Sie diese Versuche vollst�ndig l�schen m�chten?';
$string['deleteuserattemptcheck'] = 'Sind Sie sich wirklich sicher, dass alle Versuche gel�scht werden sollen?';
$string['details'] = 'Trackingdetails';
$string['directories'] = 'Verzeichnislinks anzeigen';
$string['disabled'] = 'Deaktiviert';
$string['display'] = 'Lernpaket anzeigen';
$string['displayattemptstatus'] = 'Status der Versuche anzeigen';
$string['displayattemptstatusdesc'] = 'Diese Einstellung setzt den Standardwert f�r die Einstellung "Status der Versuche anzeigen"';
$string['displayattemptstatus_help'] = '<h2>Anzeige der durchgef�hrten Versuche</h2>

<p>Zeigt den Status der Versuche im Lernpaket f�r die Teilnehmer/innen an. Angezeigt werden Versuche, Bewertung und die in den Bewertungsbereich �bergebenen Punkte (bei mehreren Versuchen)</p>';
$string['displaycoursestructure'] = 'Kursstruktur anzeigen';
$string['displaycoursestructuredesc'] = 'Diese Option setzt den Standardwert f�r Einstellung "Kursstruktur anzeigen" auf der Startseite';
$string['displaycoursestructure_help'] = 'Wenn diese Option aktiviert ist, wird die Inhaltsstruktur des Lernpakets neben dem Inhalt angezeigt.';
$string['displaydesc'] = 'Diese Einstellung setzt den Standardwert f�r die Einstellung ob ein Lernpaket f�r eine Aktivit�t angezeigt werden soll oder nicht.';
$string['displaysettings'] = 'Anzeigeeinstellungen';
$string['dnduploadscorm'] = 'Lernpaket hinzuf�gen';
$string['domxml'] = 'DOMXML externe Bibliothek';
$string['duedate'] = 'Termin';
$string['element'] = 'Element';
$string['elementdefinition'] = 'Elementdefinition';
$string['enter'] = 'Start';
$string['entercourse'] = 'Lernpaket starten';
$string['errorlogs'] = 'Fehlerprotokoll';
$string['everyday'] = 'Jeden Tag';
$string['everytime'] = 'Alle Nutzungszeiten';
$string['exceededmaxattempts'] = 'Sie haben die H�chstzahl der Versuche erreicht.';
$string['exit'] = 'Lernpaket beenden';
$string['exitactivity'] = 'Abbrechen';
$string['expired'] = 'Entschuldigung, die Aktivit�t wurde am {$a} geschlossen und ist nicht l�nger verf�gbar';
$string['external'] = 'Externe Paket-Zeitnahme benutzen';
$string['failed'] = 'Fehlgeschlagen';
$string['finishscorm'] = 'Haben Sie das Material lange genug angesehen?';
$string['finishscormlinkname'] = 'Zur�ck zur Kursseite';
$string['firstaccess'] = 'Erster Zugang';
$string['firstattempt'] = 'Erster Versuch';
$string['forcecompleted'] = 'Abschluss einfordern';
$string['forcecompleteddesc'] = 'Diese Einstellung setzt den Standardwert f�r die Einstellung "Abschluss einfordern"';
$string['forcecompleted_help'] = 'Mit dieser Einstellung \'Abschluss einfordern\' wird sicher gestellt, dass ein Versuch als \'abgeschlossen\' registriert wird. Dies funktioniert nur mit SCORM 1.2. Die Option sollte aktiviert werden, falls das Lernpaket den wiederholten Aufruf (im Modus Wiederholen oder Durchbl�ttern) nicht richtig verarbeitet. Andernfalls erhalten Sie falsche Angaben zum Status \'Abgeschlossen\'.';
$string['forcejavascript'] = 'Zur Aktivierung von JavaScript auffordern';
$string['forcejavascript_desc'] = 'Lernpakete erfordern JavaScript zur Kommunikation zwischen dem Lernpaket und Moodle, z.B. um Bewertungen zu �bergeben. Mit dieser Funktion wird der Zugriff auf ein Lernpaket unterbunden, wenn JavaScript im Browser nicht verf�gbar ist. Es wird empfohlen, diese Funktion zu aktivieren.';
$string['forcejavascriptmessage'] = 'Um dieses Objekt anzuzeigen ist JavaScript notwendig. Bitte aktivieren Sie JavaScript f�r Ihren Browser und versuchen Sie es nochmal.';
$string['forcenewattempt'] = 'Neuen Versuch erzwingen';
$string['forcenewattemptdesc'] = 'Diese Einstellung setzt den Standardwert f�r die Einstellung "Neuen Versuch erzwingen"';
$string['forcenewattempt_help'] = '<h2>Neuen Versuch erzwingen</h2>

<p>Jeder neue Aufruf des Lernpakets wird als neuer Versuch betrachtet. Auch wenn der vorherige Versuch nicht abgeschlossen wurde.</p>';
$string['found'] = 'Manifest gefunden';
$string['frameheight'] = 'Die Einstellung definiert die H�he der Darstellung.';
$string['framewidth'] = 'Die Einstellung definiert die Breite der Darstellung.';
$string['fullscreen'] = 'Auf Bildschirmgr��e anpassen';
$string['general'] = 'Grunddaten';
$string['gradeaverage'] = 'Durchschnittsnote';
$string['gradeforattempt'] = 'Bewertung f�r Versuch';
$string['gradehighest'] = 'H�chstnote';
$string['grademethod'] = 'Bewertungsmethode';
$string['grademethoddesc'] = 'Diese Einstellung setzt die Standardbewertungsmethode f�r eine Aktivit�t';
$string['grademethod_help'] = 'Die Bewertungsmethoden legen fest, wie ein Versuch ausgewertet wird:

* Zahl der Lernobjekte - Zahl der abgeschlossenen bzw. erfolgreichen Lernobjekte
* H�chstbewertung - Die h�chste Bewertung der erfolgreichen Lernobjekte wird �bernommen
* Durchschnitt - Die Durchschnittswerte aller Bewertungen werden errechnet
* Summe der Bewertungen - Alle erreichten Bewertungen werden summiert';
$string['gradereported'] = 'Bewertung ver�ffentlicht';
$string['gradescoes'] = 'Zahl der Lernobjekte';
$string['gradesettings'] = 'Bewertungseinstellungen';
$string['gradesum'] = 'Summe der Bewertungen';
$string['height'] = 'H�he';
$string['hidden'] = 'Verborgen';
$string['hidebrowse'] = 'Vorschau deaktivieren';
$string['hidebrowsedesc'] = 'Diese Einstellung legt fest, ob eine Vorschau angezeigt wird oder nicht.';
$string['hidebrowse_help'] = 'Der Vorschaumodus erlaubt es, eine Aktivit�t von dem Abgeben noch einmal anzusehen. Wenn die Vorschau deaktiviert ist, wird die Taste \'Vorschau\' nicht angezeigt.';
$string['hideexit'] = 'Taste \'Beenden\' verbergen';
$string['hidenav'] = 'Navigationstasten verbergen';
$string['hidenavdesc'] = 'Diese Einstellung legt fest, ob Navigationstasten angezeigt werden oder nicht';
$string['hidereview'] = 'Taste \'Wiederholen\' verbergen';
$string['hidetoc'] = 'Kursstruktur anzeigen';
$string['hidetocdesc'] = 'Diese Einstellung bestimmt, ob die Kursstruktur (Inhaltsverzeichnis) angezeigt wird oder nicht';
$string['hidetoc_help'] = 'Diese EInstellung legt fest, wie das Inhaltsverzeichnis im SCORM-Player angezeigt wird.';
$string['highestattempt'] = 'Bester Versuch';
$string['identifier'] = 'Fragen-ID';
$string['incomplete'] = 'Unvollst�ndig';
$string['info'] = 'Info';
$string['interactions'] = 'Interaktionen';
$string['interactionscorrectcount'] = 'Zahl der richtigen Antworten f�r die Frage';
$string['interactionsid'] = 'ID des Elements';
$string['interactionslatency'] = 'Verstrichene Zeit zwischen der Anzeige der Seite<br />und der ersten Beantwortung durch den Teilnehmer.';
$string['interactionslearnerresponse'] = 'Antwort des Teilnehmers';
$string['interactionspattern'] = 'Muster f�r richtige Antwort';
$string['interactionsresponse'] = 'Antwort des Teilnehmers';
$string['interactionsresult'] = 'Ergebnis auf Grundlage der Teilnehmerantwort <br />und dem richtifgen Ergebnis';
$string['interactionsscoremax'] = 'H�chstwert f�r den Rohwert der Bewertung';
$string['interactionsscoremin'] = 'Mindestwert f�r den Rohwert zur Bewertung';
$string['interactionsscoreraw'] = 'Die Zahl stellt die Leistung eines Lerners <br />auf einer Skala dar.';
$string['interactionssuspenddata'] = 'Platz zum Speichern und Wiederfinden von Daten<br />zwischen den Sessions der Teilnehmer';
$string['interactionstime'] = 'Zeitpunkt zu dem Versuch gestartet wurde';
$string['interactionstype'] = 'Fragetyp';
$string['interactionsweight'] = 'Gewichtung des Elements';
$string['invalidactivity'] = 'Aktivit�t im Lernpaket ist falsch';
$string['invalidhacpsession'] = 'Ung�ltige HACP Session';
$string['invalidmanifestresource'] = 'Warnung: folgende Ressourcen wurden im Manifest referenziert, konnten jedoch nicht gefunden werden:';
$string['invalidurl'] = 'Ung�ltige URL angegeben';
$string['last'] = 'Letzter Versuch am';
$string['lastaccess'] = 'Letzter Versuch';
$string['lastattempt'] = 'Letzter vollst�ndiger Versuch';
$string['lastattemptlock'] = 'Nach letztem Versuch sperren';
$string['lastattemptlockdesc'] = 'Diese Option legt fest, ob die Aktivit�t nach letztem Versuch f�r weitere Versuche gesperrt wird';
$string['lastattemptlock_help'] = 'Diese Option legt fest, ob Teilnehmer/innen nach dem Erreichen der Anzahl zul�ssiger Versuche weiter auf das Lernpaket zugreifen k�nnen oder ob der Zugriff zum Lernpaket nach dem letzten zul�ssigen Versuch gesperrt wird. Dazu muss ein Wert f�r die Anzahl der Versuche angegeben sein.';
$string['location'] = 'Adresse anzeigen';
$string['max'] = 'H�chstpunktzahl';
$string['maximumattempts'] = 'Zahl der Versuche';
$string['maximumattemptsdesc'] = 'Diese Einstellung legt die maximale Anzahl von Versuchen f�r eine Aktivit�t fest';
$string['maximumattempts_help'] = 'Diese Einstellung legt die maximale Anzahl der m�glichen Versuche fest, was nur f�r Lernpakete im Format SCORM1.2 und AICC funktioniert.';
$string['maximumgradedesc'] = 'Diese Einstellung setzt den Standardwert f�r die maximale Bewertung einer Aktivit�t';
$string['menubar'] = 'Men�s anzeigen';
$string['min'] = 'Minimale Punktzahl';
$string['missing_attribute'] = 'Fehlende Attribute {$a->attr} im Tag {$a->tag}';
$string['missingparam'] = 'Ein Eintrag fehlt oder ist falsch.';
$string['missing_tag'] = 'Fehlendes Tag {$a->tag}';
$string['mode'] = 'Einstellung';
$string['modulename'] = 'Lernpaket';
$string['modulename_help'] = 'In einem Lernpaket sind die Inhalte meist �ber mehrere Seiten verteilt und werden �ber eine Navigation aufgerufen. H�ufig sind Testfragen direkt integriert. Die Ergebnisse der Bearbeitung k�nnen in Moodle gespeichert werden.

Ein Lernpaket wird au�erhalb von Moodle mit spezieller Autorensoftware erstellt und im Format SCORM gespeichert. SCORM ist ein Standard, der die plattform�bergreifende Verwendbarkeit von webbasierten Lerninhalten anstrebt.';
$string['modulenameplural'] = 'Lernpakete';
$string['navigation'] = 'Navigation';
$string['newattempt'] = 'Neuen Versuch beginnen';
$string['next'] = 'Weiter';
$string['noactivity'] = 'Nichts zu berichten';
$string['noattemptsallowed'] = 'Zahl zul�ssiger Versuche';
$string['noattemptsmade'] = 'Zahl Ihrer Versuche';
$string['no_attributes'] = 'Tag {$a->tag} muss Attribute haben';
$string['no_children'] = 'Tag {$a->tag} muss Kinder (children) haben';
$string['nolimit'] = 'Unbegrenzte Zahl der Versuche';
$string['nomanifest'] = 'Zeichen nicht gefunden';
$string['noprerequisites'] = 'Sie haben die Zugangvoraussetzungen zu diesem Lernobjekt noch nicht erf�llt.';
$string['noreports'] = 'Kein Bericht zum Anzeigen vorhanden';
$string['normal'] = 'Normal';
$string['noscriptnoscorm'] = 'Ihr Browser unterst�tzt kein Javascript oder Javascript ist ausgeschaltet. Dieses Lernpaket wird deswegen nicht richtig angezeigt und kann Daten nicht korrekt speichern.';
$string['notattempted'] = 'Nicht versucht';
$string['not_corr_type'] = 'Falsche Schreibweise im Tag {$a->tag}';
$string['notopenyet'] = 'Entschuldigung, diese Aktivit�t ist nicht verf�gbar bist {$a}';
$string['objectives'] = 'Ziele';
$string['optallstudents'] = 'alle Nutzer/innen';
$string['optattemptsonly'] = 'Nutzer/innen mit Versuchen';
$string['options'] = 'Einstellungen (von einigen Browsern nicht unterst�tzt)';
$string['optionsadv'] = 'Optionen (erweitert)';
$string['optionsadv_desc'] = 'Wenn die Option aktiviert ist, werden Fensteroptionen als erweiterte Einstellungen im Formular vorgenommen.';
$string['optnoattemptsonly'] = 'Nutzer/innen ohne Versuche';
$string['organization'] = 'Organisation';
$string['organizations'] = 'Organisationen';
$string['othersettings'] = 'Erweiterte Einstellungen';
$string['othertracks'] = 'Andere Tracks';
$string['package'] = 'Lernpaket';
$string['packagedir'] = 'Dateisystemfehler: Das Paketverzeichnis kann nicht erstellt werden';
$string['packagefile'] = 'Keine Lernpaket ausgew�hlt';
$string['package_help'] = 'Ein Lernpaket ist eine ZIP-Datei (oder eine PIF-Datei), die alle SCORM- oder AICC-Kursdefinitionen und Dateien enth�lt.';
$string['packageurl'] = 'URL';
$string['packageurl_help'] = 'Diese Einstellung erm�glicht die Eingabe einer URL f�r das Lernpaket, anstatt das Lernpaket in der Dateiauswahl auszusuchen.';
$string['page-mod-scorm-x'] = 'Jede Lernpaketseite';
$string['pagesize'] = 'Seitenzahl';
$string['passed'] = 'Abgeschlossen';
$string['php5'] = 'PHP 5 (DOMXML native library)';
$string['pluginadministration'] = 'Lernpaket-Administration';
$string['pluginname'] = 'Lernpaket';
$string['popup'] = 'In neuem Fenster';
$string['popupmenu'] = 'In einem Dropdown-Men�';
$string['popupopen'] = 'Lernpaket in neuem Fenster �ffnen';
$string['popupsblocked'] = 'Es scheint so als ob Popup-Fenster blockiert sind. Das Lernpaket kann nicht angezeigt werden. Bitte pr�fen Sie Ihre Browsereinstellungen, bevor Sie es noch einmal probieren.';
$string['position_error'] = 'Das Tag {$a-tag} kann nicht Kind (Child) des Tags {$a->parent} sein';
$string['preferencespage'] = 'Voreinstellungen f�r diese Seite';
$string['preferencesuser'] = 'Voreinstellungen f�r diese �bersicht';
$string['prev'] = 'Zur�ck';
$string['raw'] = 'Rohpunktwert';
$string['regular'] = 'Regul�res Manifest';
$string['report'] = 'Bericht';
$string['reportcountallattempts'] = '{$a->nbresults} Ergebnisse ({$a->nbattempts} Versuche von {$a->nbusers} Nutzer/innen)';
$string['reportcountattempts'] = '{$a->nbresults} Ergebnisse ({$a->nbusers} Nutzerinnen)';
$string['reports'] = '�bersicht';
$string['resizable'] = 'Fenstergr��e anpassbar';
$string['result'] = 'Ergebnis';
$string['results'] = 'Ergebnisse';
$string['review'] = 'R�ckblick';
$string['reviewmode'] = 'R�ckblick-Modus';
$string['scoes'] = 'Lernobjekte';
$string['score'] = 'Bewertung';
$string['scorm:addinstance'] = 'Neues Lernpaket hinzuf�gen';
$string['scormclose'] = 'Bis';
$string['scormcourse'] = 'Lernpaket-Kurs';
$string['scorm:deleteownresponses'] = 'Eigene Versuche l�schen';
$string['scorm:deleteresponses'] = 'Versuche im Lernpaket l�schen';
$string['scormloggingoff'] = 'API-Logdatei ausgeschaltet';
$string['scormloggingon'] = 'API-Logdatei eingeschaltet';
$string['scormopen'] = '�ffnen';
$string['scormresponsedeleted'] = 'Versuche der Nutzer/innen l�schen';
$string['scorm:savetrack'] = 'Trackingdaten speichern';
$string['scorm:skipview'] = '�bersicht �berspringen';
$string['scormtype'] = 'Typ';
$string['scormtype_help'] = 'Diese Einstellung legt fest, wie das Lernpaket in den Kurs eingebunden wird. Es gibt 4 Optionen: * Hochgeladenes Lernpaket - das Lernpaket kann �ber die Dateiauswahl ausgesucht werden * Externes SCORM Manifest - eine URL imsmanifest.xml muss angegeben werden. Hinweis: Falls diese URL einen anderen Domainnamen als Ihre Website besitzt, ist das \'Heruntergeladene Lernpaket\' die bessere Variante, da sonst Bewertungen nicht gespeichert werden. * Heruntergeladenes Lernpaket - eine URL zum Lernpaket muss angegeben werden. Das Lernpaket wird heruntergeladen, ausgepackt und lokal gespeichert. Sobald das externe Lernpaket aktualisiert wird, werden alle �nderungen lokal �bernommen. * Lokales IMS Content Repository - das Lernpaket wird aus einem IMS-Repository ausgew�hlt *Externe AICC URL - Die URL f�hrt zu einer extern abgelegten einzelnen AICC Aktivit�t. Ein \'Pseudo\'-Paket wird darum herum angelegt werden.';
$string['scorm:viewreport'] = 'Berichte sehen';
$string['scorm:viewscores'] = 'Bewertungen sehen';
$string['scrollbars'] = 'Scrollfunktion im Fenster bereitstellen';
$string['selectall'] = 'Alles ausw�hlen';
$string['selectnone'] = 'Alles abw�hlen';
$string['show'] = 'Zeigen';
$string['sided'] = 'Auf der linken Seite';
$string['skipview'] = '�bersicht �berspringen';
$string['skipviewdesc'] = 'Diese Einstellung legt fest, ob die �bersicht einer Seite �bersprungen werden kann.';
$string['skipview_help'] = 'Diese Einstellung legt fest, ob die Struktur�bersicht einer Seite �bersprungen werden kann (bzw. nicht angezeigt wird). Falls das Lernpaket nur ein Lernobjekt enth�lt, dann wird grunds�tzlich keine �bersicht angezeigt.';
$string['slashargs'] = 'Achtung: Slash-Argumente sind f�r diese Website ausgeschaltet. Einige Objekte werden nicht wie erwartet funktionieren!';
$string['stagesize'] = 'Darstellungsgr��e';
$string['stagesize_help'] = 'Diese beiden Einstellungen legen die Breite und die H�he f�r die Darstellung eines Lernpakets fest.';
$string['started'] = 'Begonnen am';
$string['status'] = 'Status';
$string['statusbar'] = 'Statusanzeige';
$string['student_response'] = 'Antwort';
$string['subplugintype_scormreport'] = '�bersicht';
$string['subplugintype_scormreport_plural'] = '�bersicht';
$string['suspended'] = 'Ausgeschlossen';
$string['syntax'] = 'Schreibfehler';
$string['tag_error'] = 'Unbekanntes Tag ({$a->tag}) mit dem Inhalt: {$a->value}';
$string['time'] = 'Zeit';
$string['timerestrict'] = 'Zugriff auf diesen Zeitraum beschr�nken.';
$string['title'] = 'Titel';
$string['toc'] = 'Inhaltsverzeichnis';
$string['toolbar'] = 'Toolbar anzeigen';
$string['too_many_attributes'] = 'Tag {$a->tag} hat zu viele Attribute';
$string['too_many_children'] = 'Tag {$a->tag} hat zu viele Kinder (children)';
$string['totaltime'] = 'Zeit';
$string['trackingloose'] = 'Achtung: Die Trackingdaten dieses Lernpaketes gehen verloren!';
$string['type'] = 'Typ';
$string['typeaiccurl'] = 'Externe AICC URL';
$string['typeexternal'] = 'Externe Lernpaket-Liste';
$string['typeimsrepository'] = 'Lokales IMS Content Repository';
$string['typelocal'] = 'Hochgeladenes Paket';
$string['typelocalsync'] = 'Heruntergeladenes Paket';
$string['unziperror'] = 'Beim Entpacken des Pakets ist ein Fehler aufgetreten.';
$string['updatefreq'] = 'Auto-Update-H�ufigkeit';
$string['updatefreqdesc'] = 'Diese Einstellung setzt den Standardwert  f�r die Auto-Update-H�ufigkeit einer Aktivit�t';
$string['updatefreq_help'] = 'Diese Option erlaubt dem externen Lernpaket, automatisch heruntergeladen und aktualisiert zu werden';
$string['validateascorm'] = '�berpr�fen eines Lernpakets';
$string['validation'] = 'Pr�fergebnis';
$string['validationtype'] = 'Die Einstellungen der DOMXML Library werden zur Pr�fung der Lernpaket-Liste verwandt. Wenn Sie sich nicht genau auskennen, lassen Sie die Einstellungen unver�ndert stehen.';
$string['value'] = 'Wert';
$string['versionwarning'] = 'Die Version der Liste ist �lter als 1.3, Warnung beim {$a->tag} Schl�sselwort';
$string['viewallreports'] = 'Bericht f�r {$a} Versuch/e anzeigen';
$string['viewalluserreports'] = 'Berichte f�r {$a} Nutzer anzeigen';
$string['whatgrade'] = 'Bewertung der Versuche';
$string['whatgradedesc'] = 'Diese Einstellung setzt den Standardwert f�r die Bewertung der Versuche';
$string['whatgrade_help'] = 'Bei mehreren Versuchen legt diese Einstellung den Einfluss der Ergebnisse auf die Bewertung fest (z.B. beste Bewertung, erste oder letzte Bewertung oder Durchschnittswert).
Die Option \'letzte Bewertung\' l�sst fehlgeschlagene Versuche ber�cksichtigt.

* Die Option zum Starten eines neuen Versuchs wird mit einer Checkbox auf der �bersichtsseite angezeigt. Pr�fen Sie, ob Sie mehr als einen Versuch zulassen m�chten.
* Einige Lernpakete unterst�tzen erneute Versuchen, viele aber nicht. Wenn Teilnehmer/innen erneut in einen bereits beendeten Versuch einsteigen, k�nnte die Bewertung des vorherigen Versuchs �berschrieben werden, selbst wenn der Versuch als \'abgeschlossen\' oder \'erfolgreich\' markiert war.
* Die Einstellungen \'Abschluss einfordern\', \'Neuen Versuch erzwingen\' und \'Nach letztem Versuch sperren\' bieten zus�tzliche M�glichkeiten f�r mehrerer Versuche.';
$string['width'] = 'Breite';
$string['window'] = 'Fenster';
