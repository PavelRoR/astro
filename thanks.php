<?php
  $to = "627117@list.ru";
  $subject = "Заявка с сайта http://doctorefimov.com/";
$name = $_POST['name'];
$phone = $_POST['phone'];
	$day = $_POST['day'];
	$month = $_POST['month'];
	
  $comment = $_POST['textarea'];
$message = "Получена заявка:\nИмя: $name \nТелефон: $phone \nДень: $day \nМесяц: $month \nТекст сообщения: $comment";
  $headers = "From: doctorefimov.com <pochta@doctorefimov.com>\r\nContent-type: text/plain; charset=UTF-8 \r\n";
  mail($to, $subject, $message, $headers);
?>




<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0, minimum-scale=1, maximum-scale=1"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <meta name="description" content="Страница спасибо. Клиника доктора Ефимова"/>
    <meta http-equiv="refresh" content="5; url=/"/>
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon.ico"/>
    <link rel="shortcut icon" type="image/x-icon" href="../assets/img/favicon.png"/>
    <title>Спасибо за заявку | Клиника доктора Ефимова</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="../assets/css/styles.css"/>
  </head>
  <body id="thanks">
    <div id="first_screen">
      <header id="header">
        <div class="container"><a href="/" id="logo" target="_blank"><img src="../assets/img/logo.png" alt="Логотип"/></a>
          <div class="contact_info">
            <div class="schedule"><i class="fa fa-clock-o" aria-hidden="true"></i>
              <div class="content">
                <p><strong>Режим работы:</strong><span>Буд. 9:00 - 20:00</span><span>Сб 9:00 - 14:00</span><span>Вс - выходной</span></p>
              </div>
            </div>
            <div class="phones"><i class="fa fa-phone" aria-hidden="true"></i>
              <div class="content">
                <p><strong>Телефон:</strong><span> <a href="callto:83452627117">8 (3452) 62-71-17</a></span><span> <a href="callto:83452635080">8 (3452) 63-50-80</a></span></p>
              </div>
            </div>
            <div class="soc_groups"><i class="fa fa-vk" aria-hidden="true"></i>
              <div class="content">
                <p><strong>Задать вопрос:</strong><span>группа</span><span><a href="http://vk.com/klinikaefimova" target="_blank">ВКонтакте</a></span></p>
              </div>
            </div>
          </div>
          <div class="clearfix"></div>
        </div>
      </header>
      <section id="thanks_main">
        <h1>Мы получили Вашу заявку и скоро перезвоним Вам</h1>
      </section>
      <div class="clearfix"></div>
    </div>
    <footer id="footer">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h5>Клиника доктора Ефимова</h5><br/>
            <p>"ООО Западно-сибирский центр мануальной терапии"</p>
            <h5>Режим работы: </h5>
            <p>Будни 9:00 - 20:00; Сб 9:00 - 14:00; Вс - выходной</p>
          </div>
          <div class="col-md-4">
            <h5>адрес:</h5><br/>
            <p>г.Тюмень, ул. Холодильная 15 оф.3<br/>тел.: 8 (3452) 63-50-80<br/>г.Тюмень, ул. Луначарского 18,<br/>тел.: 8 (3452) 62-71-17</p>
          </div>
          <div class="col-md-4">
            <h5>мы в социальных сетях:</h5><br/>
            <div class="soc_buttons"><a href="http://vk.com/klinikaefimova" target="_blank"><i class="fa fa-vk" aria-hidden="true"></i></a><a href="https://instagram.com/KLINIKA_DOCTORA_EFIMOVA/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a><a href="https://www.facebook.com/groups/KlInIkAEfImOvA/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></div>
          </div>
        </div>
      </div>
    </footer>
    <a class="up" href="#first_screen"><i class="fa fa-arrow-circle-up" aria-hidden="true"></i></a>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <script src="https://yastatic.net/browser-updater/v1/script.js"></script>
    <script>var yaBrowserUpdater = new ya.browserUpdater.init({"lang": "ru", "browsers": {"yabrowser": "15.10", "chrome": "52", "ie": "10", "opera": "40", "safari": "8", "fx": "47", "iron": "35", "flock": "Infinity", "palemoon": "25", "camino": "Infinity", "maxthon": "4.5", "seamonkey": "2.3", "theme": "blue"}});</script>
  </body>
</html>