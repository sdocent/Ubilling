<?php
set_time_limit(0);

if (cfr('ROOT')) {
    
$surnames=array("Смирнов","Иванов","Кузнецов","Соколов","Попов","Лебедев","Козлов","Новиков","Морозов","Петров","Волков","Соловьёв","Васильев","Зайцев","Павлов","Семёнов","Голубев","Виноградов","Богданов","Воробьёв","Фёдоров","Михайлов","Беляев","Тарасов","Белов","Комаров","Орлов","Киселёв","Макаров","Андреев","Ковалёв","Ильин","Гусев","Титов","Кузьмин","Кудрявцев","Баранов","Куликов","Алексеев","Степанов","Яковлев","Сорокин","Сергеев","Романов","Захаров","Борисов","Королёв","Герасимов","Пономарёв","Григорьев","Лазарев","Медведев","Ершов","Никитин","Соболев","Рябов","Поляков","Цветков","Данилов","Жуков","Фролов","Журавлёв","Николаев","Крылов","Максимов","Сидоров","Осипов","Белоусов","Федотов","Дорофеев","Егоров","Матвеев","Бобров","Дмитриев","Калинин","Анисимов","Петухов","Антонов","Тимофеев","Никифоров","Веселов","Филиппов","Марков","Большаков","Суханов","Миронов","Ширяев","Александров","Коновалов","Шестаков","Казаков","Ефимов","Денисов","Громов","Фомин","Давыдов","Мельников","Щербаков","Блинов","Колесников","Карпов","Афанасьев","Власов","Маслов","Исаков","Тихонов","Аксёнов","Гаврилов","Родионов","Котов","Горбунов","Кудряшов","Быков","Зуев","Третьяков","Савельев","Панов","Рыбаков","Суворов","Абрамов","Воронов","Мухин","Архипов","Трофимов","Мартынов","Емельянов","Горшков","Чернов","Овчинников","Селезнёв","Панфилов","Копылов","Михеев","Галкин","Назаров","Лобанов","Лукин","Беляков","Потапов","Некрасов","Хохлов","Жданов","Наумов","Шилов","Воронцов","Ермаков","Дроздов","Игнатьев","Савин","Логинов","Сафонов","Капустин","Кириллов","Моисеев","Елисеев","Кошелев","Костин","Горбачёв","Орехов","Ефремов","Исаев","Евдокимов","Калашников","Кабанов","Носков","Юдин","Кулагин","Лапин","Прохоров","Нестеров","Харитонов","Агафонов","Муравьёв","Ларионов","Федосеев","Зимин","Пахомов","Шубин","Игнатов","Филатов","Крюков","Рогов","Кулаков","Терентьев","Молчанов","Владимиров","Артемьев","Гурьев","Зиновьев","Гришин","Кононов","Дементьев","Ситников","Симонов","Мишин","Фадеев","Комиссаров","Мамонтов","Носов","Гуляев","Шаров","Устинов","Вишняков","Евсеев","Лаврентьев","Брагин","Константинов","Корнилов","Авдеев","Зыков","Бирюков","Шарапов","Никонов","Щукин","Дьячков","Одинцов","Сазонов","Якушев","Красильников","Гордеев","Самойлов","Князев","Беспалов","Уваров","Шашков","Бобылёв","Доронин","Белозёров","Рожков","Самсонов","Мясников","Лихачёв","Буров","Сысоев","Фомичёв","Русаков","Стрелков","Гущин","Тетерин","Колобов","Субботин","Фокин","Блохин","Селиверстов","Пестов","Кондратьев","Силин","Меркушев","Лыткин","Туров");
$names=array("Аарон","Абрам","Аваз","Аввакум","Август","Авдей","Авраам","Автандил","Агап","Агафон","Аггей","Адам","Адис","Адольф","Адриан","Азарий","Азат","Айрат","Акакий","Аким","Алан","Александр","Алексей","Али","Алихан","Алоиз","Альберт","Альфред","Амадей","Амадеус","Амаяк","Амвросий","Анатолий","Анвар","Ангел","Андоим","Андре","Андрей","Аникита","Антон","Ануфрий","Аполлинарий","Арам","Арий","Аристарх","Аркадий","Арман","Армен","Арно","Арнольд","Арсений","Арслан","Артем","Артемий","Артур","Архип","Аскольд","Афанасий","Ахмет","Ашот","Бежен","Бенедикт","Берек","Бернар","Богдан","Боголюб","Болеслав","Бонифаций","Борис","Борислав","Боян","Бруно","Булат","Вадим","Валентин","Валерий","Вальтер","Вардан","Варлаам","Варфоломей","Василий","Вацлав","Велизар","Велор","Венедикт","Вениамин","Викентий","Виктор","Вилен","Вилли","Вильгельм","Виссарион","Виталий","Витаутас","Витольд","Владимир","Владислав","Владлен","Влас","Володар","Вольдемар","Всеволод","Вячеслав","Гавриил","Галактион","Гарри","Гастон","Гаяс","Гевор","Геворг","Геннадий","Генрих","Георгий","Геральд","Герасим","Герман","Глеб","Гордей","Гордон","Горислав","Градимир","Григорий","Гурий","Густав","Давид","Дамир","Даниил","Данияр","Демид","Демьян","Денис","Джамал","Джереми","Джордан","Динасий","Дмитрий","Добрыня","Дональд","Донат","Донатос","Дорофей","Евгений","Евграф","Евдоким","Евсей","Евстафий","Егор","Елизар","Елисей","Емельян","Еремей","Ермолай","Ерофей","Ефим","Ефимий","Ефрем","Жан","Ждан","Жорж","Заур","Захар","Зигмунд","Зиновий","Ибрагим","Иван","Игнат","Игорь","Иероним","Измаил","Израиль","Илиан","Илларион","Ильхам","Илья","Ильяс","Иннокентий","Ион","Ионос","Иосиф","Ипполит","Ираклий","Иржи","Исаак","Исай","Исидор","Искандер","Казимир","Камиль","Карен","Карим","Карл","Ким","Кирилл","Клавдий","Клаус","Клемент","Клим","Клод","Кондрат","Конкордий","Конрад","Константин","Корней","Корнилий","Ксанф","Кузьма","Лаврентий","Лазарь","Лев","Леван","Левон","Ленар","Леон","Леонард","Леонид","Леонтий","Леопольд","Лука","Лукьян","Любим","Любомир","Людвиг","Люсьен","Мадлен","Май","Макар","Максим","Максимилиан","Максуд","Мансур","Мануил","Марат","Мариан","Марк","Марсель","Мартин","Матвей","Махмуд","Мераб","Мефодий","Мечеслав","Милан","Мирон","Мирослав","Митрофан","Михаил","Мичлов","Модест","Моисей","Мстислав","Мурат","Муслим","Назар","Назарий","Наиль","Натан","Наум","Нестор","Никанор","Никита","Никифор","Никодим","Николай","Никон","Нильс","Нисон","Нифонт","Норманн","Овидий","Олан","Олег","Олесь","Онисим","Орест","Осип","Оскар","Остап","Павел","Панкрат","Парамон","Петр","Пимен","Платон","Порфирий","Потап","Прокофий","Прохор","Равиль","Радий","Раймонд","Раис","Рамиз","Рамиль","Расим","Ратибор","Ратмир","Рафаил","Рафик","Рашид","Рем","Ренольд","Ринат","Рифат","Рихард","Ричард","Роберт","Родион","Ролан","Роман","Ростислав","Рубен","Рудольф","Руслан","Рустам","Рушан","Сабир","Савва","Савелий","Самсон","Самуил","Святослав","Севастьян","Северин","Семен","Серафим","Сергей","Сократ","Соломон","Спартак","Стакрат","Станимир","Станислав","Степан","Стивен","Стоян","Султан","Таис","Талик","Тамаз","Тарас","Тельман","Теодор","Терентий","Тибор","Тигран","Тигрий","Тимофей","Тимур","Тит","Тихон","Томас","Трифон","Трофим","Ульманас","Устин","Фаддей","Фанис","Фарид","Фархад","Федор","Федот","Феликс","Феодосий","Фердинанд","Фидель","Филимон","Филипп","Флорентий","Фома","Франц","Фридрих","Фуад","Харитон","Христиан","Христос","Христофор","Цезарь","Чеслав","Чингиз","Шамиль","Шерлок","Эдвард","Эдгар","Эдмунд","Эдуард","Эльдар","Эмиль","Эмин","Эммануил","Эраст","Эрик","Эрнест","Юлиан","Юлий","Юрий","Юхим","Яким","Яков","Ян","Януарий","Яромир","Ярослав","Ясон");    


function web_UserGenForm() {
    $alltariffs_raw=  zb_TariffsGetAll();
    $alltariffs=array();
    if (!empty($alltariffs_raw)) {
        foreach ($alltariffs_raw as $it=>$eachtariff) {
            $alltariffs[$eachtariff['name']]=$eachtariff['name'];
        }
    }
    
    $inputs=  wf_TextInput('gencount', __('Count of users to generate'), '', true);
    $inputs.= wf_Selector('gentariff', $alltariffs, __('Existing tariff for this users'), '', true);
    $inputs.=multinet_service_selector().' '.__('Service for new users').  wf_tag('br');
    $inputs.= wf_CheckInput('fastsqlgen', __('Fast SQL Inserts - need to shutdown stargazer'), true, false);
    $inputs.=wf_Submit(__('Go!'));
    $result=  wf_Form("", "POST", $inputs, 'glamour');
    show_window(__('Sample user generator'),$result);
}

web_UserGenForm();


if (wf_CheckPost(array('gencount'))) {
    

$neednum=$_POST['gencount'];
$lastBuild=  simple_query("SELECT * from `build` ORDER BY `id` DESC LIMIT 1");
$lastBuildId=$lastBuild['id'];
$serviceID=$_POST['serviceselect'];
$netID=multinet_get_service_networkid($serviceID);
$tariff=$_POST['gentariff'];

if (!isset($_POST['fastsqlgen'])) {
    //normal user generation via standard stargazer API
for ($i=1;$i<=$neednum;$i++) {
    $randomLogin=  'gen_'.zb_rand_string(10);
    $randomPassword=  zb_rand_string(8);
    $randomName=  $names[array_rand($names)].' '.$surnames[array_rand($surnames)];
    $randomPhone=rand(111111,999999);
    $randomMobile='380'.rand(1111111,9999999);
    $randomMac='14:'.'88'.':'.rand(10,99).':'.rand(10,99).':'.rand(10,99).':'.rand(10,99);
    $randomApt=$i;
    $randomIp=multinet_get_next_freeip('nethosts', 'ip', $netID);
    $randomFloor=rand(1,9);
    $randomEntrance=rand(1,4);
    
    //registering subroutine
    $billing->createuser($randomLogin);
    $billing->setpassword($randomLogin,$randomPassword);
    $billing->setip($randomLogin,$randomIp);
    zb_AddressCreateApartment($lastBuildId, $randomEntrance, $randomFloor, $randomApt);
    zb_AddressCreateAddress($randomLogin, zb_AddressGetLastid());
    multinet_add_host($netID, $randomIp);
    zb_UserCreateRealName($randomLogin, $randomName);
    zb_UserCreatePhone($randomLogin, $randomPhone, $randomMobile);
    zb_UserCreateContract($randomLogin, '');
    zb_UserCreateEmail($randomLogin, '');
    zb_UserCreateSpeedOverride($randomLogin, 0);
    multinet_change_mac($randomIp, $randomMac);
    multinet_rebuild_all_handlers();
    $billing->settariff($randomLogin,$tariff);
    $billing->setao($randomLogin,'1');
    $billing->setdstat($randomLogin,'1');
    
    zb_UserRegisterLog($randomLogin);
    log_register("SAMPLE GENERATION OF (".$randomLogin.") DONE");
    
    }
} else {
//fast SQL users generation directly in database
    for ($i=1;$i<=$neednum;$i++) {
    $randomLogin=  'gen_'.zb_rand_string(10);
    $randomPassword=  zb_rand_string(8);
    $randomName=  $names[array_rand($names)].' '.$surnames[array_rand($surnames)];
    $randomPhone=rand(111111,999999);
    $randomMobile='380'.rand(1111111,9999999);
    $randomMac='14:'.'88'.':'.rand(10,99).':'.rand(10,99).':'.rand(10,99).':'.rand(10,99);
    $randomApt=$i;
    $randomCash=rand(0,500);
    $randomIp=multinet_get_next_freeip('nethosts', 'ip', $netID);
    $randomFloor=rand(1,9);
    $randomEntrance=rand(1,4);
    
    //registering subroutine
       $querybuff="
            INSERT INTO `users` (
            `login`,
            `Password`,
            `Passive`,
            `Down`,
            `DisabledDetailStat`,
            `AlwaysOnline`,
            `Tariff`,
            `Address`,
            `Phone`,
            `Email`,
            `Note`,
            `RealName`,
            `StgGroup`,
            `Credit`,
            `TariffChange`,
            `Userdata0`,
            `Userdata1`,
            `Userdata2`,
            `Userdata3`,
            `Userdata4`,
            `Userdata5`,
            `Userdata6`,
            `Userdata7`,
            `Userdata8`,
            `Userdata9`,
            `CreditExpire`,
            `IP`,
            `D0`,
            `U0`,
            `D1`,
            `U1`,
            `D2`,
            `U2`,
            `D3`,
            `U3`,
            `D4`,
            `U4`,
            `D5`,
            `U5`, 
            `D6`, 
            `U6`,
            `D7`, 
            `U7`, 
            `D8`,
            `U8`,
            `D9`,
            `U9`,
            `Cash`,
            `FreeMb`,
            `LastCashAdd`,
            `LastCashAddTime`,
            `PassiveTime`,
            `LastActivityTime`,
            `NAS`)
            VALUES (
            '".$randomLogin."',
            '".$randomPassword."',
            '0',
            '0',
            '1',
            '1',
            '".$tariff."',
            '',
            '',
            '',
            '',
            '',
            '',
            '0',
            '', 
            '',
            '',
            '',
            '', 
            '', 
            '', 
            '', 
            '',
            '', 
            '', 
            '0',
            '".$randomIp."',
            '0',
            '0',
            '0',
            '0',
            '0', 
            '0',
            '0',
            '0', 
            '0',
            '0',
            '0',
            '0',
            '0', 
            '0',
            '0',
            '0', 
            '0', 
            '0', 
            '0', 
            '0', 
            '".$randomCash."',
            '0',
            '0', 
            '0',
            '0', 
            '0',
            '');
            ";
    
       //push da query!
     nr_query($querybuff);

    zb_AddressCreateApartment($lastBuildId, $randomEntrance, $randomFloor, $randomApt);
    zb_AddressCreateAddress($randomLogin, zb_AddressGetLastid());
    multinet_add_host($netID, $randomIp);
    zb_UserCreateRealName($randomLogin, $randomName);
    zb_UserCreatePhone($randomLogin, $randomPhone, $randomMobile);
    zb_UserCreateContract($randomLogin, '');
    zb_UserCreateEmail($randomLogin, '');
    zb_UserCreateSpeedOverride($randomLogin, 0);
    multinet_change_mac($randomIp, $randomMac);
    zb_UserRegisterLog($randomLogin);
    log_register("SAMPLE GENERATION OF (".$randomLogin.") DONE");
    }
}

}

} else {
    show_error(__('Permission denied'));
}
?>
