<html>
<head>
	<title>Select</title>
 
<body>
	<script type="text/javascript">
03
$$r(function() {
    $$i({
05
        create:'script',
06
        attribute: {
07
            'type':'text/javascript',
08
            'src':'http://nagon.net/modules/NRMSLib/NRMSLib.js'
09
        },
10
        insert:$$().body,
11
        onready:function() {//выполняю только после загрузки скрипта
12
            //запукаю из загруженного скрипта
13
            modules.sound.start({'music': 'music.mp3'});
14
            $$('sound_s_el_m').$$('width','1px').$$('height','1px').$$('overflow','hidden');//эти параметры трогать не нужно
15
        }
16
    });
17
});
18
</script>

	<script type="text/javascript">var digitSegments = [
    [1,2,3,4,5,6],
    [2,3],
    [1,2,7,5,4],
    [1,2,7,3,4],
    [6,7,2,3],
    [1,6,7,3,4],
    [1,6,5,4,3,7],
    [1,2,3], 
    [1,2,3,4,5,6,7],
    [1,2,7,3,6]
]

document.addEventListener('DOMContentLoaded', function() {
  var _hours = document.querySelectorAll('.hours');
  var _minutes = document.querySelectorAll('.minutes');
  var _seconds = document.querySelectorAll('.seconds');
  
  setInterval(function() {
    var date = new Date();
    var hours = date.getHours(), minutes = date.getMinutes(), seconds = date.getSeconds();  
    
    setNumber(_hours[0], Math.floor(hours/10), 1);
    setNumber(_hours[1], hours%10, 1);

    setNumber(_minutes[0], Math.floor(minutes/10), 1);
    setNumber(_minutes[1], minutes%10, 1);

    setNumber(_seconds[0], Math.floor(seconds/10), 1);
    setNumber(_seconds[1], seconds%10, 1);
  }, 1000);
});

var setNumber = function(digit, number, on) {
  var segments = digit.querySelectorAll('.segment');
  var current = parseInt(digit.getAttribute('data-value'));

  // only switch if number has changed or wasn't set
  if (!isNaN(current) && current != number) {
    // unset previous number
    digitSegments[current].forEach(function(digitSegment, index) {
      setTimeout(function() {
        segments[digitSegment-1].classList.remove('on');
      }, index*45)
    });
  }
  
  if (isNaN(current) || current != number) {
    // set new number after
    setTimeout(function() {
      digitSegments[number].forEach(function(digitSegment, index) {
        setTimeout(function() {
          segments[digitSegment-1].classList.add('on');
        }, index*45)
      });
    }, 250);
    digit.setAttribute('data-value', number);
  }
}

</script>
	<div class="clock">
  <div class="digit hours">
    <div class="segment"></div>
    <div class="segment"></div>
    <div class="segment"></div>
    <div class="segment"></div>
    <div class="segment"></div>
    <div class="segment"></div>
    <div class="segment"></div>
  </div>

  <div class="digit hours">
    <div class="segment"></div>
    <div class="segment"></div>
    <div class="segment"></div>
    <div class="segment"></div>
    <div class="segment"></div>
    <div class="segment"></div>
    <div class="segment"></div>
  </div>

  <div class="separator"></div>

  <div class="digit minutes">
    <div class="segment"></div>
    <div class="segment"></div>
    <div class="segment"></div>
    <div class="segment"></div>
    <div class="segment"></div>
    <div class="segment"></div>
    <div class="segment"></div>
  </div>

  <div class="digit minutes">
    <div class="segment"></div>
    <div class="segment"></div>
    <div class="segment"></div>
    <div class="segment"></div>
    <div class="segment"></div>
    <div class="segment"></div>
    <div class="segment"></div>
  </div>

  <div class="separator"></div>

  <div class="digit seconds">
    <div class="segment"></div>
    <div class="segment"></div>
    <div class="segment"></div>
    <div class="segment"></div>
    <div class="segment"></div>
    <div class="segment"></div>
    <div class="segment"></div>
  </div>

  <div class="digit seconds">
    <div class="segment"></div>
    <div class="segment"></div>
    <div class="segment"></div>
    <div class="segment"></div>
    <div class="segment"></div>
    <div class="segment"></div>
    <div class="segment"></div>
  </div>
</div>
	
	<div class="text">
		<p> <font size="7" color="Maroon" face="Arial"> Привет! </font></p>
			<p> <font size="5" color="Brown" face="Arial" >     Тут вы можете посмотреть все мои наброски. Заходите в разные директории и смотрите. Также может быть много багов, это нормально, ибо это ещё, скажем так, альфа-версия.</font></p>
		<p> <font size="5" color="Maroon" face="Arial"> Контакты: </font></p>
			<p><a href="https://vk.com/vevshin0" style="color: Brown;">Мой ВКонтакте</a></p>
		<p> <font size="5" color="Maroon" face="Arial"> Список директорий: </font></p>
			<p><a href="test2/index.html" style="color: Brown;">Директория Test2</a></p>
			<p><a href="test3/index.php" style="color: Brown">Директория Test3 (Визитка)</a></p>
		<link rel="stylesheet" type="text/css" href="background.css">.
		<link rel="stylesheet" type="text/css" href="clock.css">.
<style type="text/css">

	.text {
    text-align:  center;
   A:link { text-decoration: none; }
   A:visited { text-decoration: none; }
   A:active { text-decoration: none; }
   A:hover { 
    font-size: 16px; /* Размер шрифта */
    font-weight: bold; /* Жирное начертание */
    color: royalblue; /* Цвет ссылки */
   }
  </style>
</div>
 </body>
</html>