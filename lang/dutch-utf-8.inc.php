<?php
/* $Id$ */

/*
 * Updated by "CaliMonk" <calimonk at gmx.net> on 2004/11/05.
 */

$charset = 'utf-8';
$allow_recoding = TRUE;
$text_dir = 'ltr';
$left_font_family = 'verdana, arial, helvetica, geneva, sans-serif';
$right_font_family = 'arial, helvetica, geneva, sans-serif';
$number_thousands_separator = '.';
$number_decimal_separator = ',';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits = array('Bytes', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB');

$day_of_week = array('Zo', 'Ma', 'Di', 'Wo', 'Do', 'Vr', 'Za');
$month = array('Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%d %B %Y om %H:%M';
$timespanfmt = '%s dagen, %s uren, %s minuten en %s seconden';

$strAPrimaryKey = 'Een primaire sleutel is toegevoegd aan %s';
$strAbortedClients = 'Afgehaakte';
$strAbsolutePathToDocSqlDir = 'Geef een absoluut pad op de webserver aan naar de docSQL directory';
$strAccessDenied = 'Toegang geweigerd ';
$strAccessDeniedExplanation = 'phpMyAdmin probeerde met de MySQL server te verbinden maar de server weigerde de verbinding. Controleer de host, de gebruikersnaam en het wachtwoord in config.inc.php en zorg er voor dat deze overeenkomen met de informatie die u van de Beheerder van de MySQL server kreeg.';
$strAction = 'Actie';
$strAddAutoIncrement = 'Voeg AUTO_INCREMENT waarde toe';
$strAddConstraints = 'Voeg beperkingen toe';
$strAddDeleteColumn = 'Toevoegen/Verwijderen Veld Kolommen';
$strAddDeleteRow = 'Toevoegen/Verwijderen Criteria Rij';
$strAddDropDatabase = 'Voeg DROP DATABASE toe';
$strAddHeaderComment = 'Voeg een commentaar toe in de header (\\n om regels af te breken';
$strAddIfNotExists = 'Voeg IF NOT EXISTS toe';
$strAddIntoComments = 'Voeg toe in commentaar';
$strAddNewField = 'Nieuw veld toevoegen';
$strAddPrivilegesOnDb = 'Voeg privileges toe aan de volgende database';
$strAddPrivilegesOnTbl = 'Voeg privileges toe aan de volgende tabel';
$strAddSearchConditions = 'Zoek condities toevoegen (het "where" gedeelte van de query):';
$strAddToIndex = 'Voeg &nbsp;%s&nbsp; kolom(men) toe aan index';
$strAddUser = 'Voeg een nieuwe gebruiker toe';
$strAddUserMessage = 'U heeft een nieuwe gebruiker toegevoegd.';
$strAddedColumnComment = 'Voeg commentaar toe aan de kolom';
$strAddedColumnRelation = 'Voeg een relatie toe aan de kolom';
$strAdministration = 'Administratie';
$strAffectedRows = 'Getroffen rijen:';
$strAfter = 'Na %s';
$strAfterInsertBack = 'Terug';
$strAfterInsertNewInsert = 'Voeg een nieuw record toe';
$strAfterInsertSame = 'Ga terug naar deze pagina';
$strAll = 'Alle';
$strAllTableSameWidth = 'Alle tabellen weergeven met dezelfde breedte?';
$strAlterOrderBy = 'Wijzig het \"Sorteren op/Order by\" van de tabel';
$strAnIndex = 'Een index is toegevoegd aan %s';
$strAnalyzeTable = 'Analyseer tabel';
$strAnd = 'En';
$strAny = 'Elke'; //! Willekeurige?
$strAnyHost = 'Een willekeurige host';
$strAnyUser = 'Een willekeurige gebruiker';
$strArabic = 'Arabisch';
$strArmenian = 'Armeens';
$strAscending = 'Oplopend';
$strAtBeginningOfTable = 'Aan het begin van de tabel';
$strAtEndOfTable = 'Aan het eind van de tabel';
$strAttr = 'Attributen';
$strAutodetect = 'Auto detectie';
$strAutomaticLayout = 'Automatische lay-out';

$strBack = 'Terug';
$strBaltic = 'Baltisch';
$strBeginCut = 'Begin KNIP';
$strBeginRaw = 'Begin RAW';
$strBinary = ' Binair ';
$strBinaryDoNotEdit = ' Binair - niet aanpassen ';
$strBookmarkAllUsers = 'Geef elke gebruiker toegang tot deze bookmark';
$strBookmarkDeleted = 'De boekenlegger (Bookmark) is verwijderd.';
$strBookmarkLabel = 'Label';
$strBookmarkOptions = 'Bookmark opties';
$strBookmarkQuery = 'Opgeslagen SQL-query';
$strBookmarkThis = 'Sla deze SQL-query op';
$strBookmarkView = 'Alleen bekijken';
$strBrowse = 'Verkennen';
$strBrowseForeignValues = 'Bekijk vreemde waardes';
$strBulgarian = 'Bulgaars';
$strBzError = 'phpMyAdmin is er niet in geslaagd om de dump te comprimeren doordat de Bz2 extensie in deze php versie niet functioneert. Het wordt sterk aangeraden om de instelling <code>$cfg[\'BZipDump\']</code> in uw phpMyAdmin configuratie bestand op <code>FALSE</code> te zetten. Als u Bz2 compressie wilt gebruiken zult u moeten upgraden naar een latere php versie. Zie php bug report %s voor meer informatie.';
$strBzip = '"ge-bzipt"';

$strCSVOptions = 'CSV opties';
$strCalendar = 'Kalender';
$strCannotLogin = 'Kan niet inloggen op de MySQL server';
$strCantLoad = 'Kan de %s extentie niet laden,<br />Controleer de PHP Configuratie';
$strCantLoadRecodeIconv = 'Kan iconv of recode extensies niet laden die nodig zijn voor de Karakterset conversie, configureer php om deze extensies toe te laten of schakel Karakterset conversie uit in phpMyAdmin';
$strCantRenameIdxToPrimary = 'Kan index niet naar PRIMARY hernoemen';
$strCantUseRecodeIconv = 'Kan iconv, libiconv en recode_string functies niet gebruiken zolang de extensies geladen moeten worden. Controleer de php configuratie.';
$strCardinality = 'Kardinaliteit';
$strCarriage = 'Harde return: \\r';
$strCaseInsensitive = 'hoofdletter ongevoelig';
$strCaseSensitive = 'hoofdletter gevoelig';
$strCentralEuropean = 'Centraal Europees';
$strChange = 'Veranderen';
$strChangeCopyMode = 'Maak een nieuwe gebruiker aan met dezelfde privileges en ...';
$strChangeCopyModeCopy = '... behoud de oude.';
$strChangeCopyModeDeleteAndReload = ' ... verwijder de oude van de user tabellen en vernieuw de privileges achteraf.';
$strChangeCopyModeJustDelete = ' ... verwijder de oude van de user tabellen.';
$strChangeCopyModeRevoke = ' ... herstel alle actieve privileges van de oude en verwijder deze daarna.';
$strChangeCopyUser = 'Wijzig de Login Informatie / Kopieer gebruiker';
$strChangeDisplay = 'Kies weer te geven veld';
$strChangePassword = 'Wijzig wachtwoord';
$strCharset = 'Karakterset';
$strCharsetOfFile = 'Karakter set van het bestand:';
$strCharsets = 'Karaktersets';
$strCharsetsAndCollations = 'Karakter Sets en Collaties';
$strCheckAll = 'Selecteer alles';
$strCheckOverhead = 'Controleer Overhead';
$strCheckPrivs = 'Controleer privileges';
$strCheckPrivsLong = 'Controleer privileges voor database &quot;%s&quot;.';
$strCheckTable = 'Controleer tabel';
$strChoosePage = 'Kies een pagina om aan te passen';
$strColComFeat = 'Toon kolom commentaar';
$strCollation = 'Collatie';
$strColumnNames = 'Kolom namen';
$strColumnPrivileges = 'Kolom-specifieke privileges';
$strCommand = 'Commando';
$strComments = 'Commentaar';
$strCommentsForTable = 'COMMENTAAR VOOR TABEL';
$strCompleteInserts = 'Invoegen voltooid';
$strCompression = 'Compressie';
$strConfigFileError = 'phpMyAdmin kon het configuratie bestand niet lezen! <br />Dit kan gebeuren als php een parse error in dit bestand aantreft of dit bestand helemaal niet gevonden kan worden.<br />Roep het configuratie bestand direct aan met de snelkoppeling hieronder en lees de php foutmelding(en). In de meeste gevallen ontbreekt er ergens bijvoorbeeld een quote.<br /> Wanneer er een blanco pagina wordt weergegeven zijn er geen problemen.';
$strConfigureTableCoord = 'Configureer de coördinaten voor de tabel %s';
$strConnectionError = 'Kan niet verbinden: ongeldige instellingen.';
$strConnections = 'Connecties';
$strConstraintsForDumped = 'Beperkingen voor gedumpte tabellen';
$strConstraintsForTable = 'Beperkingen voor tabel';
$strCookiesRequired = 'Cookies moeten aan staan voorbij dit punt.';
$strCopyTable = 'Kopieer tabel naar (database<b>.</b>tabel):';
$strCopyTableOK = 'Tabel %s is gekopieerd naar %s.';
$strCopyTableSameNames = 'Kan de tabel niet naar dezelfde kopiëren!';
$strCouldNotKill = 'phpMyAdmin is er niet in geslaagd om de %s te sluiten.Waarschijnlijk is het al gesloten.';
$strCreate = 'Aanmaken';
$strCreateIndex = 'Creëer een index op kolommen&nbsp;%s&nbsp;';
$strCreateIndexTopic = 'Creëer een nieuwe index';
$strCreateNewDatabase = 'Nieuwe database aanmaken';
$strCreateNewTable = 'Nieuwe tabel aanmaken in database %s';
$strCreatePage = 'Creëer een nieuwe pagina';
$strCreatePdfFeat = 'Aanmaken van PDF bestanden';
$strCreationDates = 'Creatie/Update/Controleer datum';
$strCriteria = 'Criteria';
$strCroatian = 'Kroatisch';
$strCyrillic = 'Cyrillisch';
$strCzech = 'Tsjechisch';
$strCzechSlovak = 'Tsjechische-Slowaak';

$strDBComment = 'Database commentaar: ';
$strDBGContext = 'Context';
$strDBGContextID = 'Context ID';
$strDBGHits = 'Hits';
$strDBGLine = 'Regel';
$strDBGMaxTimeMs = 'Max tijd, ms';
$strDBGMinTimeMs = 'Min tijd, ms';
$strDBGModule = 'Module';
$strDBGTimePerHitMs = 'Tijd/Hit, ms';
$strDBGTotalTimeMs = 'Totaal tijd, ms';
$strDBRename = 'Hernoem database naar';
$strDanish = 'Deens';
$strData = 'Data';
$strDataDict = 'Data Woordenboek';
$strDataOnly = 'Alleen data';
$strDatabase = 'Database';
$strDatabaseEmpty = 'De database naam is leeg!';
$strDatabaseExportOptions = 'Database export opties';
$strDatabaseHasBeenDropped = 'Database %s is vervallen.';
$strDatabaseNoTable = 'Deze database bevat geen tabel!';
$strDatabases = 'databases';
$strDatabasesDropped = '%s databases zijn succesvol verwijderd.';
$strDatabasesStats = 'Database statistieken';
$strDatabasesStatsDisable = 'Statistieken uitzetten';
$strDatabasesStatsEnable = 'Statistieken aanzetten';
$strDatabasesStatsHeavyTraffic = 'Attentie: Indien u hier Database statistieken aanzet kan dit zorgen voor veel data verkeer tussen de webserver en de MySQL server.';
$strDbPrivileges = 'Database-specifieke privileges';
$strDbSpecific = 'database-specifiek';
$strDefault = 'Standaardwaarde';
$strDefaultValueHelp = 'Voer voor standaard waarden aub een enkele waarde in, zonder backslash of aanhalingstekens, gebruik makend van dit formaat: a';
$strDefragment = 'Defragment tabel';
$strDelOld = 'De huidige pagina heeft referenties met tabellen die niet langer bestaan. Wilt u deze referenties verwijderen?';
$strDelayedInserts = 'Gebruik vertraagde inserts';
$strDelete = 'Verwijderen';
$strDeleteAndFlush = 'Verwijder de gebruikers en vernieuw de privileges daarna.';
$strDeleteAndFlushDescr = 'Dit is de nette manier, maar het vernieuwen van de privileges kan even duren.';
$strDeleted = 'De rij is verwijderd';
$strDeletedRows = 'Verwijder rijen:';
$strDeleting = 'Verwijderen van %s';
$strDescending = 'Aflopend';
$strDescription = 'Beschrijving';
$strDictionary = 'Woordenboek';
$strDisabled = 'Uitgeschakeld';
$strDisplayFeat = 'Toon Opties';
$strDisplayOrder = 'Weergave volgorde:';
$strDisplayPDF = 'Geef het PDF schema weer';
$strDoAQuery = 'Voer een query op basis van een vergelijking uit (wildcard: "%")';
$strDoYouReally = 'Weet u zeker dat u dit wilt ';
$strDocu = 'Documentatie';
$strDrop = 'Verwijderen';
$strDropDatabaseStrongWarning = 'U staat op het punt een complete database te DESTROY-en!';
$strDropSelectedDatabases = 'Geselecteerde databases verwijderen';
$strDropUsersDb = 'Verwijder de databases die dezelfde naam hebben als de gebruikers.';
$strDumpSaved = 'Dump is bewaard als %s.';
$strDumpXRows = '%s rijen aan het dumpen, start bij rij %s.';
$strDumpingData = 'Gegevens worden uitgevoerd voor tabel';
$strDynamic = 'dynamisch';

$strEdit = 'Wijzigen';
$strEditPDFPages = 'PDF Pagina\'s aanpassen';
$strEditPrivileges = 'Wijzig rechten';
$strEffective = 'Effectief';
$strEmpty = 'Legen';
$strEmptyResultSet = 'MySQL gaf een lege resultaat set terug (0 rijen).';
$strEnabled = 'Ingeschakeld';
$strEncloseInTransaction = 'Sluit de export in een transactie';
$strEnd = 'Einde';
$strEndCut = 'Einde KNIP';
$strEndRaw = 'Einde RAW';
$strEnglish = 'Engels';
$strEnglishPrivileges = ' Aantekening: de namen van de MySQL rechten zijn uitgelegd in het Engels ';
$strError = 'Fout';
$strEstonian = 'Estlands';
$strExcelEdition = 'Excel editie';
$strExcelOptions = 'Excel opties';
$strExecuteBookmarked = 'Voor de gebookmarkte query uit';
$strExplain = 'Verklaar SQL';
$strExport = 'Exporteer';
$strExtendedInserts = 'Uitgebreide invoegingen';
$strExtra = 'Extra';

$strFailedAttempts = 'Mislukte pogingen';
$strField = 'Veld';
$strFieldHasBeenDropped = 'Veld %s is vervallen';
$strFields = 'Velden';
$strFieldsEmpty = ' Het velden aantal is leeg! ';
$strFieldsEnclosedBy = 'Velden ingesloten door';
$strFieldsEscapedBy = 'Velden ontsnapt door';
$strFieldsTerminatedBy = 'Velden beëindigd door';
$strFileAlreadyExists = 'Bestaand %s bestaat al op de server, verander de bestandsnaam of controleer overschrijf opties.';
$strFileCouldNotBeRead = 'Bestand kon niet worden gelezen';
$strFileNameTemplate = 'File naam template';
$strFileNameTemplateHelp = 'Gebruik __DB__ voor de database naam, __TABLE__ voor tabel naam en %salle strftime%s opties voor tijd specificaties, extensies zullen automatisch worden bijgevoegd. Elke andere tekst zal worden bewaard.';
$strFileNameTemplateRemember = 'Onthoud template';
$strFixed = 'vast';
$strFlushPrivilegesNote = 'Opmerking: phpMyAdmin krijgt de rechten voor de gebruikers uit de MySQL privileges tabel. De content van deze tabel kan verschillen met de rechten van de server als er handmatig aanpassingen zijn aangebracht. Mocht dit het geval zijn dan moet men %sde privilege tabel vernieuwen%s voordat men verder gaat.';
$strFlushTable = 'Schoon de tabel ("FLUSH")';
$strFormEmpty = 'Er ontbreekt een waarde in het formulier!';
$strFormat = 'Formatteren';
$strFullText = 'Volledige teksten';
$strFunction = 'Functie';

$strGenBy = 'Gegenereerd door';
$strGenTime = 'Generatie Tijd';
$strGeneralRelationFeat = 'Basis relatie opties';
$strGeorgian = 'Georgisch';
$strGerman = 'Duits';
$strGlobal = 'globaal';
$strGlobalPrivileges = 'Globale privileges';
$strGlobalValue = 'Globale waarde';
$strGo = 'Start';
$strGrantOption = 'Toekennen';
$strGreek = 'Grieks';
$strGzip = '"ge-gzipt"';

$strHasBeenAltered = 'is veranderd.';
$strHasBeenCreated = 'is aangemaakt.';
$strHaveToShow = 'Er moet ten minste 1 weer te geven kolom worden gekozen';
$strHebrew = 'Hebreeuws';
$strHome = 'Home';
$strHomepageOfficial = 'Officiële phpMyAdmin Website';
$strHost = 'Host';
$strHostEmpty = 'De host naam is leeg!';
$strHungarian = 'Hongaars';

$strId = 'ID';
$strIdxFulltext = 'Volledige tekst';
$strIfYouWish = 'Indien u slechts enkele van de tabel kolommen wilt laden, voer dan een door komma\'s gescheiden veld lijst in.';
$strIgnore = 'Negeer';
$strIgnoreInserts = 'Gebruik ignore inserts';
$strIgnoringFile = 'Negeer bestand %s';
$strImportDocSQL = 'Importeer docSQL Bestanden';
$strImportFiles = 'Importeren bestanden';
$strImportFinished = 'Importeren voltooid';
$strInUse = 'in gebruik';
$strIndex = 'Index';
$strIndexHasBeenDropped = 'Index %s is vervallen';
$strIndexName = 'Index naam&nbsp;:';
$strIndexType = 'Index type&nbsp;:';
$strIndexes = 'Indexen';
$strInnodbStat = 'InnoDB Status';
$strInsecureMySQL = 'Uw configuratie bestand bevat instellingen (root zonder wachtwoord) die betrekking hebben tot de standaard MySQL account. Uw MySQL server draait met deze standaard waardes, en is open voor ongewilde toegang, het wordt dus aangeraden dit op te lossen.';
$strInsert = 'Invoegen';
$strInsertAsNewRow = 'Voeg toe als nieuwe rij';
$strInsertNewRow = 'Nieuwe rij invoegen';
$strInsertTextfiles = 'Invoegen tekstbestanden in tabel';
$strInsertedRowId = 'Ingevoegde rij id:';
$strInsertedRows = 'Ingevoegde rijen:';
$strInstructions = 'Instructies';
$strInternalNotNecessary = '* Een interne relatie is niet nodig wanneer er ook een InnoDB aanwezig is.';
$strInternalRelations = 'Interne relaties';

$strJapanese = 'Japans';
$strJumpToDB = 'Ga naar database &quot;%s&quot;.';
$strJustDelete = 'Verwijder gewoon de gebruikers van de privileges tabel.';
$strJustDeleteDescr = 'De &quot;verwijderde&quot; gebruikers zullen de server kunnen gebruiken zoals altijd zolang de privileges nog niet zijn vernieuwd.';

$strKeepPass = 'Wijzig het wachtwoord niet';
$strKeyname = 'Sleutel naam';
$strKill = 'stop proces';
$strKorean = 'Koreaans';

$strLaTeX = 'LaTeX';
$strLaTeXOptions = 'LaTeX opties';
$strLandscape = 'Landschap';
$strLatexCaption = 'Tabel titel';
$strLatexContent = 'Content van tabel __TABLE__';
$strLatexContinued = '(vervolgd)';
$strLatexContinuedCaption = 'Vervolgde tabel titel';
$strLatexIncludeCaption = 'Voeg tabel titel toe';
$strLatexLabel = 'Label sleutel';
$strLatexStructure = 'Structuur van de tabel __TABLE__';
$strLengthSet = 'Lengte/Waardes*';
$strLimitNumRows = 'records per pagina';
$strLineFeed = 'Regel opschuiving: \\n';
$strLinesTerminatedBy = 'Regels beëindigd door';
$strLinkNotFound = 'Link niet gevonden';
$strLinksTo = 'Gelinkt naar';
$strLithuanian = 'Litouws';
$strLoadExplanation = 'De beste methode is aan gevinkt standaard maar u kunt dit veranderen mocht het niet lukken.';
$strLoadMethod = 'LOAD methode';
$strLocalhost = 'lokaal';
$strLocationTextfile = 'Locatie van het tekstbestand';
$strLogPassword = 'Wachtwoord:';
$strLogServer = 'Server';
$strLogUsername = 'Gebruikers naam:';
$strLogin = 'Inloggen';
$strLoginInformation = 'Login Informatie';
$strLogout = 'Uitloggen';

$strMIMETypesForTable = 'MIME TYPES VOOR TABEL';
$strMIME_MIMEtype = 'MIME-type';
$strMIME_available_mime = 'Beschikbare MIME-types';
$strMIME_available_transform = 'Beschikbare transformaties';
$strMIME_description = 'Beschrijving';
$strMIME_nodescription = 'Geen beschrijving beschikbaar voor deze transformatie.<br />Raadpleeg de maker over wat %s doet.';
$strMIME_transformation = 'Browser transformaties';
$strMIME_transformation_note = 'Voor een lijst met beschikbare transformatie opties en MIME-type transformaties, klik op %sTransformatie opties%s';
$strMIME_transformation_options = 'Transformatie opties';
$strMIME_transformation_options_note = 'Voeg de waardes voor transformatie optie in het volgende formaat in: \'a\',\'b\',\'c\'...<br />Wanneer u een backslash ("\") of een enkele quote ("\'") moet invoegen in deze waardes, backslashes het dan (bijvoorbeeld \'\\\\xyz\' of \'a\\\'b\').';
$strMIME_without = 'MIME-types die in italic staan (Schuin) hebben geen aparte transformatie functies';
$strMaximumSize = 'Maximale grootte: %s%s';
$strModifications = 'Wijzigingen opgeslagen.';
$strModify = 'Aanpassen';
$strModifyIndexTopic = 'Wijzig een index';
$strMoreStatusVars = 'Meer status variabelen';
$strMoveTable = 'Verplaats tabel naar (database<b>.</b>tabel):';
$strMoveTableOK = 'Tabel %s is verplaatst naar %s.';
$strMoveTableSameNames = 'Kan de tabel niet naar dezelfde verplaatsen!';
$strMultilingual = 'meertalig';
$strMustSelectFile = 'U moet een bestand selecteren welke u wilt invoegen.';
$strMySQLCharset = 'MySQL Karakterset';
$strMySQLReloaded = 'MySQL opnieuw geladen.';
$strMySQLSaid = 'MySQL retourneerde: ';
$strMySQLServerProcess = 'MySQL %pma_s1% draait op %pma_s2% als %pma_s3%';
$strMySQLShowProcess = 'Laat processen zien';
$strMySQLShowStatus = 'MySQL runtime informatie';
$strMySQLShowVars = 'MySQL systeemvariabelen';

$strName = 'Naam';
$strNeedPrimaryKey = 'U zou een primaire sleutel moeten defineren voor deze tabel.';
$strNext = 'Volgende';
$strNo = 'Nee';
$strNoDatabases = 'Geen databases';
$strNoDatabasesSelected = 'Er is geen databases geselecteerd.';
$strNoDescription = 'Geen beschrijving aanwezig';
$strNoDropDatabases = '"DROP DATABASE" opdrachten zijn niet mogelijk.';
$strNoExplain = 'Uitleg SQL overslaan';
$strNoFrames = 'phpMyAdmin is werkt gebruiksvriendelijker met een browser die <b>frames</b> aan kan.';
$strNoIndex = 'Geen index gedefinieerd!';
$strNoIndexPartsDefined = 'Geen index delen gedefinieerd!';
$strNoModification = 'Geen verandering';
$strNoOptions = 'Dit format heeft geen opties';
$strNoPassword = 'Geen wachtwoord';
$strNoPermission = 'De web server heeft geen rechten om het bestand %s op te slaan.';
$strNoPhp = 'zonder PHP Code';
$strNoPrivileges = 'Geen rechten';
$strNoQuery = 'Geen SQL query!';
$strNoRights = 'U heeft niet genoeg rechten om hier te zijn!';
$strNoSpace = 'Onvoldoende ruimte om het bestand %s op te slaan.';
$strNoTablesFound = 'Geen tabellen gevonden in de database.';
$strNoUsersFound = 'Geen gebruiker(s) gevonden.';
$strNoValidateSQL = 'SQL validatie overslaan';
$strNone = 'Geen';
$strNotNumber = 'Dit is geen cijfer!';
$strNotOK = 'Niet Goed';
$strNotSet = '<b>%s</b> tabel niet gevonden of niet ingesteld in %s';
$strNotValidNumber = ' geen geldig rij nummer!';
$strNull = 'Null';
$strNumSearchResultsInTable = '%s overeenkomst(en) in de tabel<i>%s</i>';
$strNumSearchResultsTotal = '<b>Totaal:</b> <i>%s</i> overeenkomst(en)';
$strNumTables = 'Tabellen';

$strOK = 'Correct';
$strOftenQuotation = 'Meestal aanhalingstekens. OPTIONEEL betekent dat alleen char en varchar velden omsloten worden met het "omsloten met"-karakter.';
$strOperations = 'Handelingen';
$strOperator = 'Operator';
$strOptimizeTable = 'Optimaliseer tabel';
$strOptionalControls = 'Optioneel. Geeft aan hoe speciale karakters geschreven of gelezen moeten worden.'; // 'Optional. Controls how to write or read special characters.';
$strOptionally = 'OPTIONEEL';
$strOr = 'Of';
$strOverhead = 'Overhead';
$strOverwriteExisting = 'Overschrijf bestaande bestand (en)';

$strPHP40203 = 'U gebruikt PHP 4.2.3, deze versie bevat een grote fout in de multi-byte strings (mbstring). Voor meer informatie zie PHP bug report 19404. Het wordt sterk afgeraden deze versie van PHP te gebruiken met phpMyAdmin.';
$strPHPVersion = 'PHP Versie';
$strPageNumber = 'Pagina nummer:';
$strPaperSize = 'Papier grootte';
$strPartialText = 'Gedeeltelijke teksten';
$strPassword = 'Wachtwoord';
$strPasswordChanged = 'Het wachtwoord voor %s is met succes veranderd.';
$strPasswordEmpty = 'Het wachtwoord is leeg!';
$strPasswordNotSame = 'De wachtwoorden zijn niet gelijk!';
$strPdfDbSchema = 'Schema van de "%s" database - Pagina %s';
$strPdfInvalidTblName = 'De tabel "%s" bestaat niet!';
$strPdfNoTables = 'Geen Tabellen';
$strPerHour = 'per uur';
$strPerMinute = 'per minuut';
$strPerSecond = 'per seconde';
$strPhoneBook = 'Telefoonboek';
$strPhp = 'Creëer PHP Code';
$strPmaDocumentation = 'phpMyAdmin Documentatie';
$strPmaUriError = 'De <tt>$cfg[\'PmaAbsoluteUri\']</tt> richtlijn MOET gezet zijn in het configuratie bestand!';
$strPortrait = 'Portret';
$strPos1 = 'Begin';
$strPrevious = 'Vorige';
$strPrimary = 'Primaire sleutel';
$strPrimaryKeyHasBeenDropped = 'De primaire sleutel is vervallen';
$strPrimaryKeyName = 'De naam van de primaire sleutel moet PRIMARY zijn!';
$strPrimaryKeyWarning = '("PRIMARY" <b>moet</b> de naam van en <b>alleen van</b> een primaire sleutel zijn!)';
$strPrint = 'Afdrukken';
$strPrintView = 'Printopmaak';
$strPrintViewFull = 'Print overzicht (met volledige teksten)';
$strPrivDescAllPrivileges = 'Bevat alle privileges behalve GRANT.';
$strPrivDescAlter = 'Maakt het mogelijk de structuur van bestaande tabellen aan te passen.';
$strPrivDescCreateDb = 'Maakt het mogelijk om nieuwe databases en tabellen te maken.';
$strPrivDescCreateTbl = 'Maakt het mogelijk nieuwe tabellen te maken.';
$strPrivDescCreateTmpTable = 'Maakt het mogelijk om tijdelijke tabellen te maken.';
$strPrivDescDelete = 'Maakt het mogelijk om data te verwijderen.';
$strPrivDescDropDb = 'Maakt het mogelijk om databases en tabellen te verwijderen.';
$strPrivDescDropTbl = 'Maakt het mogelijk tabellen te verwijderen.';
$strPrivDescExecute = 'Maakt het mogelijk om opgeslagen procedures uit te voeren; Heeft geen effect in deze MySQL versie.';
$strPrivDescFile = 'Maakt het mogelijk om data te importeren en te exporteren van en naar bestanden.';
$strPrivDescGrant = 'Maakt het mogelijk dat gebruikers en privileges toe te voegen zonder de privileges tabel opnieuw op te vragen.';
$strPrivDescIndex = 'Maakt het mogelijk om indexen te creëren en te verwijderen.';
$strPrivDescInsert = 'Maakt het mogelijk om data in te voegen en te vervangen.';
$strPrivDescLockTables = 'Maakt het mogelijk tabellen op slot te zetten voor de huidige thread.';
$strPrivDescMaxConnections = 'Limiteert het aantal nieuwe connecties die een gebruiker per uur mag openen.';
$strPrivDescMaxQuestions = 'Limiteert het aantal queries dat een gebruiker mag versturen per uur.';
$strPrivDescMaxUpdates = 'Limiteert het aantal commando\'s, welke een database of tabel veranderen, die een gebruiker per uur mag uitvoeren.';
$strPrivDescProcess3 = 'Maakt het mogelijk processen te stoppen voor andere gebruikers.';
$strPrivDescProcess4 = 'Maakt het mogelijk om complete queries in de process lijst te zien.';
$strPrivDescReferences = 'Heeft geen effect in deze MySQL versie.';
$strPrivDescReload = 'Maakt het mogelijk om de server instellingen opnieuw op te vragen en de cache van de server leeg te maken.';
$strPrivDescReplClient = 'Geeft het recht aan de gebruiker om te vragen waar de slaves (slaven) / masters (meesters) zijn.';
$strPrivDescReplSlave = 'Nodig om slaves (slaven) de repliceren.';
$strPrivDescSelect = 'Maakt het lezen van data mogelijk.';
$strPrivDescShowDb = 'Geeft toegang tot de complete lijst van databases.';
$strPrivDescShutdown = 'Maakt het mogelijk de server te stoppen.';
$strPrivDescSuper = 'Maakt het mogelijk verbinding te maken, zelfs als het maximaal aantal verbindingen als is bereikt; Dit is vereist voor de meeste administratieve opties zoals het instellen van globale variabelen of het stoppen van threads van andere gebruikers.';
$strPrivDescUpdate = 'Maakt het mogelijk data aan te passen.';
$strPrivDescUsage = 'Geen privileges.';
$strPrivileges = 'Rechten';
$strPrivilegesReloaded = 'De privileges zijn met succes vernieuwd';
$strProcesslist = 'Process lijst';
$strProperties = 'Eigenschappen';
$strPutColNames = 'Plaats veldnamen in de eerste rij';

$strQBE = 'Query opbouwen';
$strQBEDel = 'Verwijder';
$strQBEIns = 'Toevoegen';
$strQueryFrame = 'Query window';
$strQueryOnDb = 'SQL-query op database <b>%s</b>:';
$strQuerySQLHistory = 'SQL-geschiedenis';
$strQueryStatistics = '<b>Query statistieken</b>: Sinds het opstarten zijn er, %s queries gestuurd naar de server.';
$strQueryTime = 'Query duurde %01.4f sec';
$strQueryType = 'Query type';
$strQueryWindowLock = 'Overschrijf deze query niet van buitenaf dit scherm';

$strReType = 'Type opnieuw';
$strReceived = 'Ontvangen';
$strRecords = 'Records';
$strReferentialIntegrity = 'Controleer referentiële integriteit';
$strRefresh = 'Vernieuw';
$strRelationNotWorking = 'Extra opties om met tabellen te werken die gelinkt zijn, zijn uitgeschakeld. Om te weten te komen waarom klik %shier%s.';
$strRelationView = 'Relatie overzicht';
$strRelationalSchema = 'Relationeel schema';
$strRelations = 'Relaties';
$strRelationsForTable = 'RELATIES VOOR TABEL';
$strReloadFailed = 'Opnieuw laden van MySQL mislukt.';
$strReloadMySQL = 'MySQL opnieuw laden.';
$strReloadingThePrivileges = 'Bezig de privileges te vernieuwen';
$strRemoveSelectedUsers = 'Verwijder de geselecteerde gebruikers';
$strRenameDatabaseOK = 'Database %s is hernoemed naar %s';
$strRenameTable = 'Tabel hernoemen naar';
$strRenameTableOK = 'Tabel %s is hernoemt naar %s';
$strRepairTable = 'Repareer tabel';
$strReplace = 'Vervangen';
$strReplaceNULLBy = 'Vervang NULL door';
$strReplaceTable = 'Vervang tabel gegevens met het bestand';
$strReset = 'Opnieuw';
$strResourceLimits = 'Resource beperkingen';
$strRevoke = 'Ongedaan maken';
$strRevokeAndDelete = 'Trek alle actieve privileges in van alle gebruikers en verwijder ze daarna.';
$strRevokeAndDeleteDescr = 'De gebruikers zullen nog steeds het USAGE (gebruik) privilege hebben zolang de privileges nog niet zijn vernieuwd.';
$strRevokeMessage = 'U heeft de rechten ingetrokken voor %s';
$strRowLength = 'Lengte van de rij';
$strRowSize = ' Grootte van de rij';
$strRows = 'Rijen';
$strRowsFrom = 'rijen beginnend bij';
$strRowsModeFlippedHorizontal = 'horizontaal (geroteerde headers)';
$strRowsModeHorizontal = 'horizontaal';
$strRowsModeOptions = 'in %s modus en herhaal kopregels na %s cellen';
$strRowsModeVertical = 'verticaal';
$strRowsStatistic = 'Rij statistiek';
$strRunQuery = 'Query uitvoeren';
$strRunSQLQuery = 'Draai SQL query/queries op database %s';
$strRunning = 'wordt uitgevoerd op %s';
$strRussian = 'Russisch';

$strSQL = 'SQL';
$strSQLExportType = 'Export type';
$strSQLOptions = 'SQL opties';
$strSQLParserBugMessage = 'Er is een kans dat u een fout heeft aangetroffen in de SQL parser. Let er goed op, dat de query op de correcte plaatsen quotes heeft. Een ander mogelijkheid voor deze foutmelding kan zijn dat u het ge-quote text gedeelte in binairy mode heeft. U kunt ook uw query proberen in de command line van MySQL. De MySQL server foutmelding hieronder, mocht die aanwezig zijn, kan ook helpen met het opsporen van fouten. Blijft u problemen houden of als de parser fouten geeft terwijl het goed gaat in de command line van MySQL, probeer dan de SQL query in te korten en een bug report met het stukje data te sturen van het CUT gedeelte hieronder:';
$strSQLParserUserError = 'Er schijnt een fout te zijn in uw SQL query. Mocht de MySQL server een error hebben terug gegeven, probeer dan of uw hiermee uw fout kunt oplossen.';
$strSQLQuery = 'SQL-query';
$strSQLResult = 'SQL resultaat';
$strSQPBugInvalidIdentifer = 'Ongeldig herkenningsteken';
$strSQPBugUnclosedQuote = 'Quote niet afgesloten';
$strSQPBugUnknownPunctuation = 'Onbekende Punctuatie String';
$strSave = 'Opslaan';
$strSaveOnServer = 'Bewaar op de server in %s directory';
$strScaleFactorSmall = 'De schaal factor is te klein om het schema op een pagina te zetten';
$strSearch = 'Zoeken';
$strSearchFormTitle = 'Zoeken in de database';
$strSearchInTables = 'In de tabel(len):';
$strSearchNeedle = 'Woord(en) of waarde(s) waarnaar gezocht moet worden (wildcard: "%"):';
$strSearchOption1 = 'ten minste een van de woorden';
$strSearchOption2 = 'alle woorden';
$strSearchOption3 = 'de exacte zin';
$strSearchOption4 = 'als een reguliere expressie';
$strSearchResultsFor = 'Zoek resultaten voor "<i>%s</i>" %s:';
$strSearchType = 'Zoek:';
$strSecretRequired = 'Het configuratie bestand heeft nu een geheime wachtwoord zin nodig (blowfish_secret).';
$strSelectADb = 'Selecteer A.U.B. een database';
$strSelectAll = 'Selecteer alles';
$strSelectFields = 'Selecteer velden (tenminste 1):';
$strSelectNumRows = 'in query';
$strSelectTables = 'Selecteer tabellen';
$strSend = 'verzenden';
$strSent = 'Verzonden';
$strServer = 'Server';
$strServerChoice = 'Server keuze';
$strServerStatus = 'Runtime Informatie';
$strServerStatusUptime = 'Deze MySQL server draait inmiddels %s. Hij is gestart op %s.';
$strServerTabProcesslist = 'Processen';
$strServerTabVariables = 'Variabelen';
$strServerTrafficNotes = '<b>Server verkeer</b>: Deze tabellen geven statistieken weer van het verkeer van deze MySQL server vanaf het moment dat hij is gestart';
$strServerVars = 'Server variabelen en instellingen';
$strServerVersion = 'Server versie';
$strSessionValue = 'Sessie variabelen';
$strSetEnumVal = 'Als het veld type "enum" of "set" is, voer dan de waardes in volgens dit formaat: \'a\',\'b\',\'c\'...<br />Als u ooit een backslash moet plaatsen ("\") of een enkel aanhalingsteken ("\'") bij deze waardes, backslash het (voorbeeld \'\\\\xyz\' of \'a\\\'b\').';
$strShow = 'Toon';
$strShowAll = 'Toon alles';
$strShowColor = 'Toon kleur';
$strShowDatadictAs = 'Data Dictionary Formaat';
$strShowFullQueries = 'Toon volledige Queries';
$strShowGrid = 'Toon grid';
$strShowPHPInfo = 'Laat informatie over PHP zien';
$strShowTableDimension = 'Geef de dimensies van de tabellen weer';
$strShowTables = 'Toon tabellen';
$strShowThisQuery = ' Laat deze query hier zien ';
$strShowingRecords = 'Toon Records';
$strSimplifiedChinese = 'Vereenvoudigd Chinese';
$strSingly = '(apart)';
$strSize = 'Grootte';
$strSort = 'Sorteren';
$strSortByKey = 'Sorteren op sleutel';
$strSpaceUsage = 'Ruimte gebruik';
$strSplitWordsWithSpace = 'Woorden worden gesplit door een spatie karakter (" ").';
$strStatCheckTime = 'Laatst gecontroleerd';
$strStatCreateTime = 'Gecreëerd';
$strStatUpdateTime = 'Laatst bijgewerkt';
$strStatement = 'Opdrachten';
$strStatus = 'Status';
$strStrucCSV = 'CSV gegevens';
$strStrucData = 'Structuur en gegevens';
$strStrucDrop = 'DROP TABLE toevoegen';
$strStrucExcelCSV = 'CSV voor MS Excel data';
$strStrucOnly = 'Alleen structuur';
$strStructPropose = 'Tabel structuur voorstellen';
$strStructure = 'Structuur';
$strSubmit = 'Verzenden';
$strSuccess = 'Uw SQL-query is succesvol uitgevoerd.';
$strSum = 'Som';
$strSwedish = 'Zweeds';
$strSwitchToTable = 'Wissel naar de gekopieerde tabel';

$strTable = 'Tabel';
$strTableComments = 'Tabel opmerkingen';
$strTableEmpty = 'De tabel naam is leeg!';
$strTableHasBeenDropped = 'Tabel %s is vervallen';
$strTableHasBeenEmptied = 'Tabel %s is leeg gemaakt';
$strTableHasBeenFlushed = 'Tabel %s is geschoond';
$strTableMaintenance = 'Tabel onderhoud';
$strTableOfContents = 'Inhoudsopgave';
$strTableOptions = 'Tabel opties';
$strTableStructure = 'Tabel structuur voor tabel';
$strTableType = 'Tabel type';
$strTables = '%s tabel(len)';
$strTblPrivileges = 'Tabel-specifieke privileges';
$strTextAreaLength = ' Vanwege z\'n lengte,<br /> is dit veld misschien niet te wijzigen ';
$strThai = 'Thais';
$strTheContent = 'De inhoud van uw bestand is ingevoegd.';
$strTheContents = 'De inhoud van het bestand vervangt de inhoud van de geselecteerde tabel voor rijen met een identieke primaire of unieke sleutel.';
$strTheTerminator = 'De afsluiter van de velden.';
$strThisHost = 'Deze Host';
$strThisNotDirectory = 'Dit was geen directory';
$strThreadSuccessfullyKilled = 'Thread %s is met succes afgesloten.';
$strTime = 'Tijd';
$strToggleScratchboard = 'toggle scratchboard';
$strTotal = 'totaal';
$strTotalUC = 'Totaal';
$strTraditionalChinese = 'Traditioneel Chinees';
$strTraffic = 'Verkeer';
$strTransformation_application_octetstream__download = 'Toon een link om de binaire data van een veld te downloaden. Eerste optie is de bestandsnaam van het binaire bestand. De tweede optie is een mogelijke veldnaam van een rij van de tabel welke de bestandsnaam bevat. Wanneer de tweede optie wordt gekozen is het vereist dat de eerste optie leeg is.';
$strTransformation_image_jpeg__inline = 'Toont een klik bare thumbnail; opties: width,height in pixels (houdt de originele ratio)';
$strTransformation_image_jpeg__link = 'Toont een link naar deze image (directe blob download, i.e.).';
$strTransformation_image_png__inline = 'Zie image/jpeg: inline';
$strTransformation_text_plain__dateformat = 'Neemt een TIME, TIMESTAMP of DATETIME veld en vormt het naar uw lokale datum formaat. Eerst optie is de offset (in uren) welke zal worden toegevoegd aan de timestamp (Default: 0). De tweede opties is een ander datum formaat volgens de parameters beschikbaar volgens PHPs strftime().';
$strTransformation_text_plain__external = 'ALLEEN LINUX: Lanceert een externe applicatie en voed het de veld data via standaard input. Geeft standaard output van de applicatie terug. Default is Netjes, om nette HTML code te tonen. Om beveiligings redenen zult u handmatig het bestand libraries/transformations/text_plain__external.inc.php moeten aanpassen en de tools die u mag draaien invoegen. De eerste opties is het nummer van het programma wat u wilt gebruiken, de tweede optie zijn de parameters voor dit programma. Het derde parameter, wanneer ingesteld op 1, zal de output omzetten door middel van htmlspecialchars() (Standaard is 1). Een vierde parameter, wanneer ingesteld als 1 zal NOWRAP aan de content cell toevoegen, zodat de gehele output getoond zal worden zonder te herstructureren (Standaard 1)';
$strTransformation_text_plain__formatted = 'Preserveert het originele formaat van het veld. Er wordt geen Escaping toegepast.';
$strTransformation_text_plain__imagelink = 'Toont een plaatje en een link, het veld bevat de bestandsnaam; De eerste optie is een prefix als "http://domein.com/", de tweede optie is de breedte in pixels, de derde is de hoogte.';
$strTransformation_text_plain__link = 'Toont een link, het veld bevat de bestandsnaam; De eerste optie is een prefix als "http://domein.com/", de tweede optie is de titel voor de link.';
$strTransformation_text_plain__substr = 'Toont alleen een stuk van een string. De eerst optie is een offset om te bepalen waar de output van uw tekst start (Standaard 0). De tweede optie is een offset van de hoeveel tekst die terug wordt gegeven. Wanneer leeg, zal het alle overgebleven tekst teruggeven. De derde optie defineerd welke karakters worden toegevoegd aan de output wanneer een substring wordt teruggegeven (Standaard: ...) .';
$strTransformation_text_plain__unformatted = 'Toont HTML code als HTML entities. Er wordt geen HTML formatting getoond.';
$strTruncateQueries = 'Truncate getoonde Queries';
$strTurkish = 'Turks';
$strType = 'Type';

$strUkrainian = 'Oekraïens';
$strUncheckAll = 'Deselecteer alles';
$strUnicode = 'Unicode';
$strUnique = 'Unieke waarde';
$strUnknown = 'onbekend';
$strUnselectAll = 'Deselecteer alles';
$strUpdComTab = 'Raadpleeg de Documentatie over hoe u uw Column_comments tabel bijwerkt.';
$strUpdatePrivMessage = 'U heeft de rechten aangepast voor %s.';
$strUpdateProfileMessage = 'Het profiel is aangepast.';
$strUpdateQuery = 'Wijzig Query';
$strUpgrade = 'U moet opwaarderen (Upgraden) naar %s of hoger.';
$strUsage = 'Gebruik';
$strUseBackquotes = 'Gebruik backquotes (`) bij tabellen en velden\' namen';
$strUseHostTable = 'Gebruik Host Tabel';
$strUseTables = 'Gebruik tabellen';
$strUseTextField = 'Gebruik tekstveld';
$strUseThisValue = 'Gebruik deze waarde';
$strUser = 'Gebruiker';
$strUserAlreadyExists = 'De gebruiker %s bestaat al!';
$strUserEmpty = 'De gebruikersnaam is leeg!';
$strUserName = 'Gebruikersnaam';
$strUserNotFound = 'De geselecteerde gebruiker werd niet aangetroffen in de privileges tabel';
$strUserOverview = 'Gebruikers Overzicht';
$strUsersDeleted = 'De geselecteerde gebruikers zijn met succes verwijderd.';
$strUsersHavingAccessToDb = 'Gebruikers die toegang hebben tot &quot;%s&quot;';

$strValidateSQL = 'Valideer SQL';
$strValidatorError = 'De SQL validatie kon niet worden geinitialiseerd. Controleer of u de nodige php extensies heeft geinstalleerd zoals beschreven in de %sdocumentatie%s.';
$strValue = 'Waarde';
$strVar = 'Variabelen';
$strViewDump = 'Bekijk een dump (schema) van tabel';
$strViewDumpDB = 'Bekijk een dump (schema) van database';
$strViewDumpDatabases = 'Bekijk dump (schema) van de databases';

$strWebServerUploadDirectory = 'web-server upload directory';
$strWebServerUploadDirectoryError = 'De directory die u heeft ingesteld om te uploaden kan niet worden bereikt.';
$strWelcome = 'Welkom op %s';
$strWestEuropean = 'West Europees';
$strWildcard = 'joker teken';
$strWindowNotFound = 'Het doel browser scherm kon niet worden bijgewerkt. Misschien heeft u het scherm gesloten of uw browser blokkeert bijwerkingen van uw browser beveiliging';
$strWithChecked = 'Met geselecteerd:';
$strWritingCommentNotPossible = 'Het toevoegen van commentaar is niet mogelijk';
$strWritingRelationNotPossible = 'Toevoegen van een relatie is niet mogelijk';
$strWrongUser = 'Verkeerde gebruikersnaam/wachtwoord. Toegang geweigerd.';

$strXML = 'XML';

$strYes = 'Ja';

$strZeroRemovesTheLimit = 'Opmerking: Het instellen van deze waarden op 0 (nul) verwijderd het limiet.';
$strZip = '"Gezipt"';

// To translate:

$strNoRowsSelected = 'No rows selected';  //to translate


$strSpanish = 'Spanish';  //to translate
$strStrucNativeExcel = 'Native MS Excel data';  //to translate
$strDisableForeignChecks = 'Disable foreign key checks';  //to translate
$strServerNotResponding = 'The server is not responding';  //to translate
$strTheme = 'Theme / Style';  //to translate
$strTakeIt = 'take it';  //to translate
?>
