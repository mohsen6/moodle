<?php
/// Please, do not edit this file manually! It's auto generated from
/// contents stored in your standard lang pack files:
/// (langconfig.php, install.php, moodle.php, admin.php and error.php)
///
/// If you find some missing string in Moodle installation, please,
/// keep us informed using http://moodle.org/bugs Thanks!
///
/// File generated by cvs://contrib/lang2installer/installer_builder
/// using strings defined in stringnames.txt (same dir)

$string['admindirerror'] = 'Специфицирани администраторски директоријум је нетачан';
$string['admindirname'] = 'Администраторски директоријум';
$string['admindirsettinghead'] = 'Подешавање администраторског директоријума';
$string['admindirsettingsub'] = 'Понеки веб сервери користе /admin као специјални URL за приступ разним подешавањима или нечем другом. Нажалост то је у конфликту са стандардном Moodle локацијом за администраторске странице. Можете решити проблем преименовањем администраторског директоријума у Вашој инсталацији, и навођењем тог новог назива овде. На пример: <br /> <br /><b>moodleadmin</b><br /> <br />
Ово подешавање ће преправити администраторске линкове у Moodle систему.';
$string['bypassed'] = 'Избегнуто';
$string['cannotcreatelangdir'] = 'Није могуће креирање директоријума језика';
$string['cannotcreatetempdir'] = 'Није могуће креирање привременог директоријума.';
$string['cannotdownloadcomponents'] = 'Није могуће преузети компоненте.';
$string['cannotdownloadzipfile'] = 'Није могуће преузимање архиве.';
$string['cannotfindcomponent'] = 'Није могуће пронаћи компоненту.';
$string['cannotsavemd5file'] = 'Није могуће сачувати md5 датотеку.';
$string['cannotsavezipfile'] = 'Није могуће сачувти ZIP архиву.';
$string['cannotunzipfile'] = 'Није могуће распаковати ZIP датотеку.';
$string['caution'] = 'Опрез';
$string['check'] = 'Провери';
$string['chooselanguagehead'] = 'Изаберите језик';
$string['chooselanguagesub'] = 'Молимо изаберите језик који ће се користити само током инсталације. Касније ћете моћи да изаберете језичка подешавања на нивоу сајта и корисника.';
$string['closewindow'] = 'Затворите овај прозор';
$string['compatibilitysettingshead'] = 'Провера Ваших PHP подешавања...';
$string['compatibilitysettingssub'] = 'Ваш сервер би требао проћи све ове тестове да би Moodle на њему успешно функционисао';
$string['componentisuptodate'] = 'Компонента је доступна у својој најновијој верзији.';
$string['configfilenotwritten'] = 'Инсталациони скрипт није био у могућности да аутоматски креира датотеку config.php која би садржавала Ваша одабрана подешавања, веројатно због тога што нема права на писање (мењање садржаја) у Вашем Moodle директоријуму. Ако то желите, можете ручно копирати код у датотеку config.php у основном директоријуму Ваше Moodle инсталације.';
$string['configfilewritten'] = 'config.php је успешно креиран';
$string['configurationcompletehead'] = 'Конфигурација је завршена';
$string['configurationcompletesub'] = 'Moodle је покушао да сачува Вашу конфигурацију у датотеци смештеној у коренском директоријуму Moodle инсталације.';
$string['continue'] = 'Наставак';
$string['ctyperecommended'] = 'Инсталирање опционе PHP екстензије ctype се строго препоручује да би се унапредило функционисање сајта, поготово ако Ваш сајт подржава не-латиничне језике.';
$string['ctyperequired'] = 'PHP екстензије ctype је сада обавезна за Moodle, да би се унапредило функционисање сајта и да би се нудила вишејезична компатибилност.';
$string['curlrecommended'] = 'Инсталирање опционе Curl библиотеке је врло препоручљиво, јер је она неопходна за успешно коришћење функција за умрежавање.';
$string['curlrequired'] = 'PHP екстензију cURL сада је обавезна за Moodle да би се комуницирало са Moodle репозиторијумима';
$string['customcheck'] = 'Друге провере';
$string['database'] = 'База података';
$string['databasecreationsettingshead'] = 'Сада је потребно конфигурисати подешавања базе података у којој ће се чувати највећи део Moodle података. Та база података ће бити креирана аутоматски приликом инсталације, са подешавањима специфицираним испод.';
$string['databasecreationsettingssub'] = '<b>Тип:</b> постављено на \"mysql\" приликом инсталације<br />
<b>Сервер:</b> постављено на \"localhost\" приликом инсталације<br />
<b>Назив:</b> назив базе података, нпр. moodle<br />
<b>Корисник:</b> постављено на \"root\" приликом инсталације<br />
<b>Лозинка:</b> Ваша лозинка за базу података<br />
<b>Префикс табела:</b> опциони префикс који ће се користити у називима свих табела';
$string['databasesettingshead'] = 'Сада је потребно конфигурисати базу података у којој ће се чувати већи део Moodle података. Та база података мора већ бити креирана, као и корисничко име и лозинка за приступ истој.';
$string['databasesettingssub'] = '<b>Тип:</b> mysql или postgres7<br />
<b>Сервер:</b> нпр. localhost или db.isp.com<br />
<b>Назив:</b> назив базе података, нпр. moodle<br />
<b>Корисник:</b> Ваше корисничко име за приступ бази података<br />
<b>Лозинка:</b> Ваша лозинка за приступ бази података<br />
<b>Префикс табела:</b> опциони префикс који ће се користити у називима свих табела';
$string['databasesettingssub_mssql'] = '<b>Тип:</b> SQL* Сервер (који није UTF-8) <b><font color=\"red\">Експерименталан! (није за јавни приступ)</font></b><br />
<b>Сервер:</b> нпр localhost или db.isp.com<br />
<b>Назив:</b> назив базе података, нпр moodle<br />
<b>Корисник:</b> Ваше корисничко име за приступ бази података<br />
<b>Лозинка:</b> Ваша лозинка за приступ бази података<br />
<b>Префикс табела:</b> префикс који ће се користити у називима свих табела (обавезно)';
$string['databasesettingssub_mssql_n'] = '<b>Тип:</b> SQL* Сервер (UTF-8 омогућен)<br />
<b>Сервер:</b> нпр localhost или db.isp.com<br />
<b>Назив:</b> назив базе података, нпр moodle<br />
<b>Корисник:</b> Ваше корисничко име за приступ бази података<br />
<b>Лозинка:</b> Ваша лозинка за приступ бази одатака<br />
<b>Префикс табела:</b> префикс који ће се користити у називима свих табела (обавезно)';
$string['databasesettingssub_mysql'] = '<b>Тип:</b> MySQL<br />
<b>Сервер:</b> нпр localhost или db.isp.com<br />
<b>Назив:</b> назив базе података, нпр moodle<br />
<b>Корисник:</b> Ваше корисничко име за приступ бази података<br />
<b>Лозинка:</b> Ваша лозинка за приступ бази података<br />
<b>Префикси табела:</b> префикс који ће се  користити у називима свих табела (опционо)';
$string['databasesettingssub_mysqli'] = '<b>Тип:</b> Унапређени MySQL<br />
<b>Хост:</b> нпр. localhost или db.isp.com<br />
<b>Имe:</b> име базе података, нпр. moodle<br />
<b>Корисник:</b> Корисничко име за Вашу базу података<br />
<b>Password:</b> Лозинка корисника Ваше  базе података<br />
<b>Префикс за табеле:</b> префикс који се додаје испред имена свих табела (није обавезно)';
$string['databasesettingssub_oci8po'] = '<b>Тип:</b> Oracle<br />
<b>Сервер:</b> не користи се, мора се оставити празно<br />
<b>Назив:</b> име које сте дали tnsnames.ora конекцији<br />
<b>Корисник:</b> Ваше корисничко име за приступ бази података<br />
<b>Лозинка:</b> Ваша лозинка за приступ бази података<br />
<b>Префикси табела:</b> префикс који ће се користити у називима свих табела (обавезно, максимално 2 видљиве копије)';
$string['databasesettingssub_odbc_mssql'] = '<b>Тип:</b> SQL* Сервер (преко ODBC) <b><font color=\"red\">Експериментално! (није за јавни приступ)</font></b><br />
<b>Сервер:</b> име које сте дали DSN-у у ODBC контролном панелу<br />
<b>Назив:</b> назив базе података, нпр moodle<br />
<b>Корисник:</b> Ваше корисничко име за приступ бази података<br />
<b>Password:</b> Ваша лозинка за приступ бази података<br />
<b>Префикси табела:</b> префикс који ће се користити у називима свих табела (обавезно)';
$string['databasesettingssub_postgres7'] = '<b>Тип:</b> PostgreSQL<br />
<b>Сервер:</b> нпр localhost или db.isp.com<br />
<b>Назив:</b> назив базе података, нпр moodle<br />
<b>Корисник:</b> Ваше корисничко име за приступ бази података<br />
<b>Лозинка:</b> Ваша лозинка за приступ бази података<br />
<b>Префикси табела:</b> префикс који ће се користити у називима свих табела (обавезно)';
$string['databasesettingswillbecreated'] = '<b>Напомена:</b> Програм ѕа инсталацију ће аутоматски покушати да креира базу података уколико она не постоји.';
$string['dataroot'] = 'Директоријум података';
$string['datarooterror'] = '\'Директоријум података\' који сте навели не може бити пронађен или креиран. Унесите тачну путању или направите тај директоријум ручно.';
$string['datarootpublicerror'] = '\'Директоријум за податке\' који сте подесили је директно доступан са веба, морате користити други директоријум.';
$string['dbconnectionerror'] = 'Немогуће је успоставити везу са базом података коју сте навели. Молимо проверите подешавања базе података.';
$string['dbcreationerror'] = 'Грешка при креирању базе података. Није било могуће креирати базу наведеног имена уз задата подешавања';
$string['dbhost'] = 'Сервер';
$string['dbprefix'] = 'Префикс табеле';
$string['dbtype'] = 'Тип';
$string['dbwrongencoding'] = 'Изабрана база података ради под непрепоручљивим кодним распоредом ($a). Било би боље да уместо ње користите Unicode (UTF-8) кодирану базу. У сваком случају, можете избећи овај тест бирањем опције \"Прескочити тест кодног распореда базе података\" испод, али се у будућности можете суочити са проблемима при коришћењу изабране базе.';
$string['dbwronghostserver'] = 'Морате пратити правила \"Сервера\" као што је објашњено изнад.';
$string['dbwrongnlslang'] = 'NLS_LANG променљива окружења Вашег web сервера мора да користи AL32UTF8 скуп карактера. Погледајте PHP документацију о томе како да правилно подесите OCI8.';
$string['dbwrongprefix'] = 'Морате пратити правила \"Префикси табела\" као што је горе објашњено.';
$string['directorysettingshead'] = 'Молимо потврдите локације ове Moodle инсталације';
$string['directorysettingssub'] = '<b>Веб адреса:</b>
Специфицирајте потпуну web адресу на којој ће се приступати Moodle систему.
Ако је Вашем web сајту могуће приступити преко више URL-ова, изаберите онај који ће највероватније користити Ваши студенти. Немојте наводити крајњу косу црту.
<br />
<br />
<b>Moodle директоријум:</b>
Специфицирајте потпуну путању до ове инсталације
Водите рачуна о великим и малим словима.
<br />
<br />
<b>Директоријум података:</b>
Морате одредити место на ком ће Moodle чувати постављене датотеке. Корисник web сервера (обично \'нико\' или \'apache\') би морао имати могућност да чита податке из тог директоријума, али и да их у њега уписује, али они не би требали бити доступни директно преко web-a.';
$string['dirroot'] = 'Moodle директоријум';
$string['dirrooterror'] = 'Подешавање \'Moodle директоријума\' је чини се нетачно - не може се тамо наћи Moodle инсталацијa. Нижа вредност ће бити поново доведена на почетни положај.';
$string['download'] = 'Преузети';
$string['downloadedfilecheckfailed'] = 'Није успела провера преузете датотеке.';
$string['downloadlanguagebutton'] = 'Преузми \"$a\" језички пакет';
$string['downloadlanguagehead'] = 'Преузми језички пакет';
$string['downloadlanguagenotneeded'] = 'Можете наставити процес инсталације коришћењем подразумеваног језичког пакета, \"$a\".';
$string['downloadlanguagesub'] = 'Сада имате могућност преузимања жељеног језичког пакета и наставка инсталационог процеса на том језику.<br /><br />Ако нисте у могућности да преузмете језички пакет, инсталациони процес ће се наставити на енглеском језику. (Када се инсталација заврши, имаћете могућност да преузмете и инсталирате додатне језичке пакете.)';
$string['environmenterrortodo'] = 'Морате решити све проблеме окружења (грешке) наведене изнад пре наставка инсталације ове Moodle верзије!';
$string['environmenthead'] = 'Проверавање Вашег окружења...';
$string['environmentrecommendcustomcheck'] = 'уколико овај тест не прође, постоји могућност појављивања потенцијалног проблема.';
$string['environmentrecommendinstall'] = 'је препоручљиво инсталирати/омогућити';
$string['environmentrecommendversion'] = 'препоручена верзија је $a->needed а Ви тренутно користите верзију $a->current';
$string['environmentrequirecustomcheck'] = 'Овај тест мора проћи';
$string['environmentrequireinstall'] = 'је неопходно инсталирати/омогућити';
$string['environmentrequireversion'] = 'неопходна верзија је $a->needed а Ви тренутно користите верзију $a->current';
$string['environmentsub'] = 'Проверава се да ли разне компоненте Вашег система задовољавају системске захтеве';
$string['environmentxmlerror'] = 'Грешка у читању података окружења ($a->error_code)';
$string['error'] = 'Грешка';
$string['fail'] = 'Није прошло';
$string['fileuploads'] = 'Постављање датотека';
$string['fileuploadserror'] = 'Ова опција би требала бити укључена';
$string['fileuploadshelp'] = '<p>Постављање датотека је изгледа недоступно на Вашем серверу.</p>

<p>Moodle још увек може бити инсталиран, али без ове могућности, нећете бити у могућности да учитавате датотеке курса или нове слике за корисничке профиле.</p>

<p>Да учитавање датотеке буде доступно Ви (или Ваш систем администратор) треба да промените php.ini датотеку на Вашем систему и поставите подешавање за <b>file_uploads</b> на \'1\'.</p>';
$string['gdversion'] = 'GD верзија';
$string['gdversionerror'] = 'GD датотека са изворним кодом требала би презентирати процес и креирати слике';
$string['gdversionhelp'] = '<p>На Вашем серверу изгледа није инсталиран GD.</p>

<p>GD је библиотека коју тражи PHP да би дозволио Moodle систему да процесира слике (као што су иконице корисничких профила) и да креира нове слике (као што је графикон пријава на систем).  Moodle ће још радити и без GD библиотеке - ове опције Вам једноставно неће бити доступне.</p>

<p>Да бисте додали GD у PHP под Unix-ом, компајлираjте PHP користећи --with-gd параметар.</p>

<p>Под Windows-ом обично можете изменити php.ini и скинути ознаку коментара у линији која се односи на php_gd2.dll.</p>';
$string['globalsquotes'] = 'Несигурно руковање глобалним варијаблама';
$string['globalsquoteserror'] = 'Поправите своја PHP подешавања: онемогућите register_globals и/или омогућите magic_quotes_gpc';
$string['globalsquoteshelp'] = '<p>Комбинација истовремено онемогућеног подешавања Magic Quotes GPC и омогућеног Register Globals није препоручљива.</p>

<p>Препоручено подешавање је <b>magic_quotes_gpc = On</b> и <b>register_globals = Off</b> у Вашој датотеци php.ini</p>

<p>Ако немате приступ својој php.ini датотеци, можда можете да ставите следећи ред у датотеку под називом .htaccess у Вашем Moodle директоријуму:
<blockquote>php_value magic_quotes_gpc On</blockquote>
<blockquote>php_value register_globals Off</blockquote>
</p>';
$string['globalswarning'] = 'p><strong>Безбедносно упозерење</strong>: да би функционисао исправно, Moodle захтева <br />да направите неке измене у вашим PHP подешавањима.<p/><p><em>Морате</em> да поставите <code>register_globals=off</code>.<p>Ово подешавање је под контролом ваше <code>php.ini</code>, Apache/IIS <br />конфигурације или <code>.htaccess</code> датотеке.</p>';
$string['help'] = 'Помоћ';
$string['iconvrecommended'] = 'Инсталирање опционе ICONV библиотеке је врло препоручљиво у циљу унапређивања перформанси сајта, поготово ако Ваш сајт подржава језике који не користе латинично писмо.';
$string['info'] = 'Информација';
$string['installation'] = 'Инсталација';
$string['invalidmd5'] = 'Неисправна md5 датотека';
$string['langdownloaderror'] = 'Нажалост језик \"$a\" није инсталиран. Процес инсталације биће настављен на енглеском језику.';
$string['langdownloadok'] = 'Језик \"$a\" је успешно инсталиран. Инсталациони процес ће бити настављен на овом језику.';
$string['language'] = 'Језик';
$string['magicquotesruntime'] = 'Magic Quotes време извршавања';
$string['magicquotesruntimeerror'] = 'Ова опција би требала бити искључена';
$string['magicquotesruntimehelp'] = '<p>Magic Quotes време извршавања би требало искључити да Moodle прописно функционише.</p>

<p>Нормално ово је искључено по подразумеваној вредности... погледајте подешавање <b>magic_quotes_runtime</b> у својој php.ini датотеци.</p>

<p>Ако немате приступ php.ini датотеци, можда можете да ставите следећи ред у датотеку под називом .htaccess која се налази у Вашем Moodle директоријуму: <blocquote>php_value magic_quotes_runtime Off</blockquote>
</p>';
$string['mbstringrecommended'] = 'Инсталирање опционе MBSTRING библиотеке је врло препоручљиво у циљу унапређивања перформанси сајта, поготово ако Ваш сајт подржава језике који не користе латинично писмо.';
$string['memorylimit'] = 'Ограничење меморије';
$string['memorylimiterror'] = 'PHP ограничење меморије је подешено на прилично низак ниво... касније може доћи до проблема.';
$string['memorylimithelp'] = '<p>PHP ограничење меморије за Ваш сервер је тренутно подешено на $a.</p>

<p>Ово може да проузрокује касније меморијске проблеме Вашег Moodle система, посебно ако имате много дозвољених модула и/или много корисника.</p>

<p>Препоручујемо да конфигуришете PHP са вишим ограничењем ако је могуће, рецимо 16М. Постоји неколико начина да се то уради. Покушајте:</p><ol>
<li>Ако можете, рекомпајлирајте PHP са <i>--enable-memory-limit</i>. Ово ће дозволити Moodle систему да постави меморијско ограничење сам за себе.</li>
<li>Ако имате приступ Вашој php.ini датотеци, можете променити <b>memory_limit</b> подешавање у рецимо 16М. Ако немате приступ тој датотеци можете питати свог администратора да то уради за Вас.</li>
<li>На неким PHP серверима можете креирати .htaccess датотеку у Moodle директоријуму која садржи ред:
<p><blockquote>php_value memory_limit 40M</blockquote></p>
<p>Какогод, на неким серверима ће то спречити приказивање <b>свих</b> PHP страница (биће Вам приказана порука о грешци уместо сваке странице), па ћете са њих морати уклонити .htaccess датотеку.</p></li>
</ol>';
$string['missingrequiredfield'] = 'Недостаје неко обавезно поље';
$string['moodledocslink'] = 'Moodle документација за ову страницу';
$string['mssql'] = 'SQL* Сервер (mssql)';
$string['mssqlextensionisnotpresentinphp'] = 'PHP није био прописно конфигурисан са MSSQL екстензијом тако да може комуницирати са SQL* Сервером. Молимо Вас да проверите своју php.ini датотеку или опет компајлирате PHP.';
$string['mssql_n'] = 'SQL* Сервер са UTF-8 подршком (mssql_n)';
$string['mysql'] = 'MySQL (mysql)';
$string['mysql416bypassed'] = 'Међутим, ако Ваш сајт користи iso-8859-1 (latin) језике, можете да наставите с коришћењем Ваше тренутно инсталиране MySQL верзије 4.1.12 (или више).';
$string['mysql416required'] = 'MySQL 4.1.16 је минимална верзија потребна за Moodle 1.6 да би се гарантовало даље конвертовање свих података у UTF-8.';
$string['mysqlextensionisnotpresentinphp'] = 'PHP неће бити прописно конфигурисан са MySQL екстензијом тако да може комуницирати са MySQL-ом. Молимо Вас да проверите своју php.ini датотеку или опет компајлирате PHP.';
$string['mysqli'] = 'Унапређени MySQL (mysqli)';
$string['mysqliextensionisnotpresentinphp'] = 'PHP није правилно подешен за рад са MySQLi екстензијом да би могао комуницирати са MySQL. Молимо проверите Вашу php.ini датотеку или поново компајлирајте PHP. MySQLi екстензија није на располагању за PHP 4.';
$string['name'] = 'Име';
$string['next'] = 'Следећи';
$string['oci8po'] = 'Oracle (oci8po)';
$string['ociextensionisnotpresentinphp'] = 'PHP није био прописно конфигурисан са OCI8 екстензијом тако да може комуницирати са Oracle-ом. Молимо Вас да проверите своју php.ini датотеку или опет компајлирате PHP.';
$string['odbcextensionisnotpresentinphp'] = 'PHP није био прописно конфигурисан са ODBC екстензијом тако да може комуницирати са SQL* Сервером. Молимо Вас да проверите своју php.ini датотеку или опет компајлирате PHP.';
$string['odbc_mssql'] = 'SQL* Сервер преко ODBCа (odbc_mssql)';
$string['ok'] = 'OK';
$string['opensslrecommended'] = 'Инсталирање опционе OpenSSL библиотеке је врло препоручљиво -- она омогућава коришћење функција за умрежавање.';
$string['parentlanguage'] = '<< ПРЕВОДИОЦИ: Ако Ваш језик има надређени језик који Moodle треба да користи када неки изрази недостају Вашем језичком пакету, специфицирајте његов код. Ако ово поље оставите празно биће коришћен енглески језик. Пример: nl >>';
$string['pass'] = 'Прошло';
$string['password'] = 'Лозинка';
$string['pgsqlextensionisnotpresentinphp'] = 'PHP није био прописно конфигурисан са  PGSQL екстензијом тако да може комуницирати са PostgreSQLом. Молимо Вас да проверите своју php.ini датотеку или опет компајлирате PHP.';
$string['php50restricted'] = 'PHP 5.0.x има више познатих проблема, молимо унапредите PHP на верзије 5.1.x или инсталирајте верзију 4.3.x односно 4.4.x';
$string['phpversion'] = 'PHP верзија';
$string['phpversionerror'] = 'PHP верзија мора бити бар 4.3.0 или 5.1.0 (5.0.x функционише уз бројне уочене проблеме)'; // ORPHANED
$string['phpversionhelp'] = '<p>Moodle захтева најмање PHP верзију 4.3.0 или 5.1.0 (5.0.x функционише уз бројне уочене проблеме).</p>
<p>Тренутно имате верзију $a</p>
<p>Морате надоградити PHP или преместити Moodle инсталацију на web сервер са новијом верзијом PHP-a!</br>
(У случају верзије 5.0.x било би добро да је снизите на 4.4.x верзију)</p>';
$string['postgres7'] = 'PostgreSQL (postgres7)';
$string['previous'] = 'Претходни';
$string['qtyperqpwillberemoved'] = 'Током надоградње, RQP типови питања биће уклоњени. Нећете користити овај тип питања, тако да не очекујте проблеме у вези с тим.';
$string['qtyperqpwillberemovedanyway'] = 'Током надоградње биће уклоњен RQP тип питања. Како имате нека RQP питања у својој бази, препоручује се да поново инсталирате додатак са http://moodle.org/mod/data/view.php?d=13&amp;rid=797 пре наставка надоградње да би она могла и даље несметано да се користе.';
$string['remotedownloaderror'] = 'Преузимање компоненте на Ваш сервер није успело. Проверите подешавања прокси серевера. PHP cURL екстензија се препоручује.<br /><br />Морате да преузмете <a href=\"$a->url\">$a->url</a> датотеку ручно, копирате је у директоријум \"$a->dest\" на свом сереверу тамо је распакујете.';
$string['remotedownloadnotallowed'] = 'Није дозвољено преузимање компоненти на Ваш сервер (опција allow_url_fopen је онемогућена).<br /><br />Морате ручно преузети датотеку <a href=\"$a->url\">$a->url</a>, копирати је у \"$a->dest\" на свом серверу и тамо је распаковати.';
$string['report'] = 'Извештај';
$string['restricted'] = 'Ограничено';
$string['safemode'] = 'Безбедан мод';
$string['safemodeerror'] = 'Moodle може имати проблема са укљученим безбедним модом рада';
$string['safemodehelp'] = '<p>Moodle може имати различите проблеме са укљученим безбедним модом рада, од којих је један од битнијих тај да највероватније неће имати дозволу да креира нове датотеке.</p>
   
<p>Безбедни мод рада је обично једино дозвољен на параноичним јавним веб серверима, тако да можете просто наћи web сервер код неке друге куће за Ваш Moodle сајт.</p>
   
<p>Можете покушати наставити са инсталацијом ако желите, али очекујте неколико проблема касније.</p>';
$string['serverchecks'] = 'Провере сервера';
$string['sessionautostart'] = 'Аутоматски почетак сесије';
$string['sessionautostarterror'] = 'Ова опција би требала бити искључена';
$string['sessionautostarthelp'] = '<p>Moodle захтева подршку за сесије и неће фунционисати без ње.</p>

<p>Рад са сесијама се може омогућити у php.ini датотеци... потражите session.auto_start параметар.</p>';
$string['skipdbencodingtest'] = 'Прескочити тест кодног распореда базе података';
$string['status'] = 'Статус';
$string['thischarset'] = 'UTF-8';
$string['thisdirection'] = 'ltr';
$string['thislanguage'] = 'Српски';
$string['unicoderecommended'] = 'Препоручљиво је смештање ваших података у Уникод (UTF-8) стандард. Нове инсталације биће извршене над базама који као подразумеван карактер-сет имају подешен Уникод. Уколико вршите надоградњу, потребно је покренути UTF-8 процес миграције (погледати Админ страну).';
$string['unicoderequired'] = 'Потребно је да све ваше податке смештате у Уникод формату (UTF-8).Нове инсталације морају бити примењене у базама података које имају основни карактерни сет намештен на Уникод. Уколико вршите надоградњу, потребно је покренути UTF-8 процес миграције (погледати Админ страну).';
$string['user'] = 'Корисник';
$string['welcomep10'] = '$a->installername ($a->installerversion)';
$string['welcomep20'] = 'Приказана Вам је ова страница јер сте успешно инсталирали и покренули <strong>$a->packname $a->packversion</strong> пакет на Вашем рачунару. Честитамо!';
$string['welcomep30'] = 'Ово издање <strong>$a->installername</strong> укључује апликације за креирање окружења у ком ће <strong>Moodle</strong> успешно функционисати, конкретно:';
$string['welcomep40'] = 'Овај пакет обухвата и <strong>Moodle $a->moodlerelease ($a->moodleversion)</strong>.';
$string['welcomep50'] = 'Коришћење апликација из овог пакета је условљено њховим лиценцама. Комплетан <strong>$a->installername</strong> пакет је <a href=\"http://www.opensource.org/docs/definition_plain.html\">отвореног кода</a> и дистрибуира се под <a href=\"http://www.gnu.org/copyleft/gpl.html\">GPL</a> лиценцом.';
$string['welcomep60'] = 'Наредне странице ће Вас провести кроз неколико једноставних корака током којих ћете конфигурисати <strong>Moodle</strong> на Вашем рачунару. Можете прихватити подразумевана подешавања или их, опционо, прилагодити сопственим потребама.';
$string['welcomep70'] = 'Кликните на дугме за наставак да бисте даље подешавали <strong>Moodle</strong>.';
$string['wrongdestpath'] = 'Погрешна одредишна путања.';
$string['wrongsourcebase'] = 'Погрешан изворни URL базе.';
$string['wrongzipfilename'] = 'Погрешан назив архиве.';
$string['wwwroot'] = 'Веб адреса';
$string['wwwrooterror'] = 'Наведена \'веб адреса\' се чини невалидном - ова Moodle инсталација изгледа није на њој. Вредност наведена испод је ресетована.';
$string['xmlrpcrecommended'] = 'Инсталирање опционог xmlrpc проширења је корисно за функционалност Moodle умрежавање.';
$string['ziprequired'] = 'PHP екстензија Zip сада је обавезна за Moodle, бинарне info-ZIP датотеке и библиотека PclZip више се не користе.';
?>