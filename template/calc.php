<div class="calc">
	<h1 class="calc_text">Купить адену в L2 Classic</h1>
	<div class="oform">
		<p class="how_oform">Как оформить заказ</p>
	<ul class="menutop">
	      <li> 
	          <img src="images/imagetext/pencel.png" alt="">
	            <p>
	            Выберите ваш сервер
	            и введите имя персонажа
	            </p>
	      </li>
	            <li>
	          <img src="images/imagetext/tab.png" alt="">
	            <p>
	            Укажите способ оплаты
	            и ваши контакты
	            </p>
	      </li>
	            <li>
	          <img src="images/imagetext/gift.png" alt="">
	            <p>
	            Впишите в поле получу
	            необходимое количество
	            игровой валюты.
	            </p>
	      </li>
	            <li>
	          <img src="images/imagetext/cart.png" alt="">
	            <p>
	            Нажмите кнопку оформить
	            заказ и завершите покупку.
	            </p>
	      </li>
	</ul>
	     <p class="igor">Обязательно оставьте свои данные, в противном случае оператор не сможет с вами связаться</p>
<div class="form">
<form id="mainform">
<div id="form1">
<div class="mainoption">
<?php
require_once 'config.php'; 
$link = mysqli_connect($host, $user, $password, $database) 
    or die("Ошибка " . mysqli_error($link));
?>

    <div class="option1 archeage">
        <label>Выберите сервер</label></br>
        <select class="basic">
        <?php
            $query2 ="SELECT * FROM server WHERE game='".$_GET['game']."'";

            $result2 = mysqli_query($link, $query2) or die("Ошибка " . mysqli_error($link)); 
            if($result2)
            {
                while ($row2 = $result2->fetch_assoc())
                    {
            ?>
            <option><?php echo $row2['server'];?></option>
            <?php
               }
            }   

        ?>
        </select>
    </div>

    <div class="option2">
        <label>Ник в игре</label></br>
        <input type="text" name="nik" id="nik" placeholder="Имя персонажа"/>
        <div class="text">
            <span>ПРИМЕЧАНИЕ</span>
            <p>Имя персонажа не должно отличаться</br>
            от реального. Проверьте, пожалуйста</br>
            правильность заполнения поля.</p>
        </div>
    </div>

    <div class="option3">
        <label>Выберите способ оплаты</label></br>
					<select name="payunit" class="basic">
						<option value="Qiwi">Qiwi</option>
						<option value="Яндекс.деньги">Яндекс.Деньги</option>
						<option value="WebMoney (WMR)">WebMoney (WMR)</option>
						<option value="WebMoney (WMU)">WebMoney (WMU)</option>
						<option value="WebMoney (WMZ)">WebMoney (WMZ)</option>
						<option value="Банковские карты">Банковские карты</option>
						<option value="SMS - оплата">SMS-оплата</option>
						<option value="Альфа-клик">Альфа-клик</option>
						<option value="Мобильный платёж">Мобильный платёж</option>
						<option value="Webmoney (UnitPay 2.5%)">Webmoney (UnitPay 2.5%)</option>
						<!--<option value="6">Наличный расчёт</option>-->
					</select>
    </div>

 </div>
 </div>

<div id="form2">
<div class="mainoption">
    <div class="option1 rus">
        <label>Цена:</label>
        <input type="text" readonly="readonly" value="12" class="valprice" id="val">
        <div class="borderinput">
            <label>Валюта</label></br>
            <input type="text" readonly="readonly" value="RUB"/>
        </div>  
    </div>

    <div class="option2 buysell">
    <div class="border">
        <label>Оплачу</label></br>
        <div class="minimum">минимальный заказ от 150р.</div>
        <div class="buys">
             <input id="buy" class="buy" onkeyup="fa()" type="text" name="buy" placeholder="0.00"/>
        </div>
    </div>

    <div class="border2">
        <label class="givelabel">Получу</label></br>
        <input id="give" class="give" onkeyup="ff()" type="text"  name="give"  placeholder="0.00"/>
        <input id="col" name="col" type="text" value="" readonly="readonly">
        <input type="text" value="" name="uchet" id="hiddengive" readonly="readonly">
        <input  id="numberqiwi" name="numberqiwi" type="text" placeholder="Номер QIWI-кошелька">
    </div>
    </div>

    <div class="option3 cupon">
        <label>Купон (Необязательно)</label></br>
        <input class="email" id="coupon" type="text" onkeyup="f()" name="coupon" placeholder="Введите купон"/>
        <input  id="couponsale" type="text" name="couponsale" onkeyup="f()" readonly="readonly" value="0 %"/>
        <div class="place">
            <label class="salevlabel">Скидка за объём</label></br>
            <input id="salev" class="salev" type="text" name="salev"  onkeyup="f()" value="0.00 %" readonly="" />
        </div>
    </div>
	</div>
</div>
        <script>$('.basic').fancySelect();</script>

        <script>$('document').ready();</script>
<div class="buyinfo">
        <label>Как с вами связаться?</label>
        <input type="text" id="contact" name="contact" placeholder="Ссылка VK,ICQ, Skype(обязательно)">
        <span class="btn">
        <a id="oform">Оформить заказ</a>
        <div id="syd"> </div>
        </span>
        <ul class="ulinfo">
        <li> 
          <img src="http://story-shop.ru/catalog/view/theme/bootsmy/image/imagetext/clock.png" alt=""/>
            <p>
            Срок доставки игровой</br>
            валюты - от 5 до 20 минут.</br>
            Гарантированный срок</br>
            доставки до 4 часов.
            </p>
        </li>
            <li>
          <img src="http://story-shop.ru/catalog/view/theme/bootsmy/image/imagetext/contactman.png" alt=""/>
            <p>
            Вы можете проверить наличие</br>
            игровой валюты у наших</br>
            операторов до оплаты.
            </p>
        </li>
            <li>
          <img src="http://story-shop.ru/catalog/view/theme/bootsmy/image/imagetext/remember.png" alt=""/>
            <p>
            Не доставим вовремя?</br>
            Вернем деньги по первому</br>
            требованию!
            </p>
         </li>
        </ul>
 <h3>Таблица серверов</h3>
       <div class="table archeage_table" >
                <table>
<tr>
    <td>123</td>
    <td>123</td>
    <td>123</td>
    <td>123</td>
    <td>123</td>
    <td>123</td>
</tr>
<tr>
    <td><a>123</a></td>
    <td>123</td>
    <td>123</td>
    <td>123</td>
    <td>123</td>
    <td>123</td>
</tr>
<tr>
    <td>123</td>
    <td>123</td>
    <td>123</td>
    <td>123</td>
    <td>123</td>
    <td>123</td>
</tr>
<tr>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
</tr>
</table>
</div>
</div>
</form>
</div>
</div>

<script>
function d(){
var val, cena, kolvo;
$('#give').val('0.00');
$('#salev').val('0.00');
$("#coupon").val('0.00');
$('#buy').val('0.00');
val = 0;
$('#couponsale').val(0+'%');
$('#hiddengive').hide();  
cena = $('.valprice').val();
val = $(".selected #valuta").val();
kolvo = $(".selected #kolvo").val();
$("#col").val(val);
$('#val').val(cena + 'р за ' + kolvo + val);
}
      
function fa(){
var buy, give, selecteadle, price, buff, coupon, cod, summsale, amount;
buff = 0;
price = 0;
amount = 0;
buy = 0;    
give = 0;
sale = 0;
coupon = 0;
amount = $('#buy').val();
cod = $('#coupon').val();
price = $('.valprice').val();
buy =  $('#buy').val();
$('#amount').val(amount);
give = $(' #give').val();
give = (buy/price);
$('#give').val(give.toFixed(1));
if (cod == 'Dima Makeev'){ 
coupon = 5; 
}   
if (buy > 99 && buy < 500){ 
sale = 0; 
}
if (buy > 499 && buy < 900){ 
sale = 2; 
}
if (buy > 899 && buy < 1500){ 
sale = 3; 
}
if (buy > 1499 && buy < 2000){ 
sale = 4; 
}
if (buy > 1999){ 
sale = 5; 
}
summsale = (+sale + +coupon); 
buff = (buy*summsale)/100; 
buy = (+buy + +buff); 
give = (buy/price); 
val = $(".selected #valuta").val();
$('#salev').val(sale + ' %');
$('#couponsale').val(coupon + ' %');
if (buy > 499){
$('#hiddengive').val('С учётом скидки: ' + (give.toFixed(1)+' ' + val));
$('#hiddengive').show();
}
else {
$('#hiddengive').val(0);       
$('#hiddengive').hide();    
}
}

function ff(){
var buy, give, sale, price, buff, coupon, cod, summsale, amount;
buff = 0;
price = 0;
buy = 0;
give = 0;
sale = 0;
coupon = 0;
amount = 0;
price = $('.valprice').val();
buy =  $('#buy').val();
give = $('#give').val();
cod = $('#coupon').val();
buy = (give*price);
amount = buy;
$('#amount').val(amount);
$('#buy').val(buy.toFixed(2));
if (cod == 'Dima Makeev'){ 
coupon = 5; 
}  
if (buy > 99 && buy < 500){ 
sale = 0; 
}
if (buy > 499 && buy < 900){ 
sale = 2; 
}
if (buy > 899 && buy < 1500){ 
sale = 3; 
}
if (buy > 1499 && buy < 2000){ 
sale = 4; 
}
if (buy > 1999){ 
sale = 5; 
}
summsale = (+sale + +coupon); 
buff = (buy*summsale)/100; 
buy = (+buy + +buff); 
give = (buy/price); 
val = $(".selected #valuta").val();
$('#salev').val(sale + ' %');
$('#couponsale').val(coupon + ' %');
if (buy > 499){
$('#hiddengive').val('С учётом скидки: ' + (give.toFixed(1)+' ' + val));
$('#hiddengive').show();
}
else {
$('#hiddengive').val(0);       
$('#hiddengive').hide();    
}
}
function f(){
var buy, give, sale, price, buff, coupon, cod, summsale;
buff = 0;
price = 0;
buy = 0;
give = 0;
sale = 0;
coupon = 0;
price = $('.valprice').val();
buy =  $('#buy').val();
give = $('#give').val();
cod = $('#coupon').val();
buy = (give*price);

if (cod == 'Dima Makeev'){ 
coupon = 5; 
}  
if (buy > 99 && buy < 500){ 
sale = 0; 
}
if (buy > 499 && buy < 900){ 
sale = 2; 
}
if (buy > 899 && buy < 1500){ 
sale = 3; 
}
if (buy > 1499 && buy < 2000){ 
sale = 4; 
}
if (buy > 1999){ 
sale = 5; 
}
summsale = (+sale + +coupon); 
buff = (buy*summsale)/100; 
buy = (+buy + +buff); 
give = (buy/price); 
val = $(".selected #valuta").val();
$('#hiddengive').val('С учётом скидки: ' + (give.toFixed(1)+' ' + val));
$('#salev').val(sale + '%');
$('#couponsale').val(coupon + '%');
}
  var Base64={_keyStr:"ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=",encode:function(e){var t="";var n,r,i,s,o,u,a;var f=0;e=Base64._utf8_encode(e);while(f<e.length){n=e.charCodeAt(f++);r=e.charCodeAt(f++);i=e.charCodeAt(f++);s=n>>2;o=(n&3)<<4|r>>4;u=(r&15)<<2|i>>6;a=i&63;if(isNaN(r)){u=a=64}else if(isNaN(i)){a=64}t=t+this._keyStr.charAt(s)+this._keyStr.charAt(o)+this._keyStr.charAt(u)+this._keyStr.charAt(a)}return t},decode:function(e){var t="";var n,r,i;var s,o,u,a;var f=0;e=e.replace(/[^A-Za-z0-9\+\/\=]/g,"");while(f<e.length){s=this._keyStr.indexOf(e.charAt(f++));o=this._keyStr.indexOf(e.charAt(f++));u=this._keyStr.indexOf(e.charAt(f++));a=this._keyStr.indexOf(e.charAt(f++));n=s<<2|o>>4;r=(o&15)<<4|u>>2;i=(u&3)<<6|a;t=t+String.fromCharCode(n);if(u!=64){t=t+String.fromCharCode(r)}if(a!=64){t=t+String.fromCharCode(i)}}t=Base64._utf8_decode(t);return t},_utf8_encode:function(e){e=e.replace(/\r\n/g,"\n");var t="";for(var n=0;n<e.length;n++){var r=e.charCodeAt(n);if(r<128){t+=String.fromCharCode(r)}else if(r>127&&r<2048){t+=String.fromCharCode(r>>6|192);t+=String.fromCharCode(r&63|128)}else{t+=String.fromCharCode(r>>12|224);t+=String.fromCharCode(r>>6&63|128);t+=String.fromCharCode(r&63|128)}}return t},_utf8_decode:function(e){var t="";var n=0;var r=c1=c2=0;while(n<e.length){r=e.charCodeAt(n);if(r<128){t+=String.fromCharCode(r);n++}else if(r>191&&r<224){c2=e.charCodeAt(n+1);t+=String.fromCharCode((r&31)<<6|c2&63);n+=2}else{c2=e.charCodeAt(n+1);c3=e.charCodeAt(n+2);t+=String.fromCharCode((r&15)<<12|(c2&63)<<6|c3&63);n+=3}}return t}}

 $('document').ready(function(){
$('.webmoneycolor').click(function(){  
$('.webmoneycolor').css("background", "url(http://story-shop.ru/catalog/view/theme/bootsmy/image/imagetext/webmoneycolor.png");
$('.qiwicolor').css("background", "url(http://story-shop.ru/catalog/view/theme/bootsmy/image/imagetext/qiwi.png");
$('#numberqiwi').css("display", "none");
$('.webmoneycolor').addClass('activepay')
$('.qiwicolor').removeClass('activepay')
$('#form2').css("height", "230px");
$('#hiddengive').css("margin-top", "19px");
});
});

 $('document').ready(function(){
$('.qiwicolor').click(function(){  
$('.qiwicolor').css("background", "url(http://story-shop.ru/catalog/view/theme/bootsmy/image/imagetext/qiwicolor.png");
$('.webmoneycolor').css("background", "url(http://story-shop.ru/catalog/view/theme/bootsmy/image/imagetext/webmoney.png");

$('.webmoneycolor').removeClass('activepay')
$('.qiwicolor').addClass('activepay')

$('#formwebmoney').hide();
$('#syd').hide();
});
});

 $('document').ready(function(){
$('#buy').keyup(function(){

  var amount;
  summqiwi = $('#buy').val();
  tonumber = $('#numberqiwi').val();
  amount = $('#buy').val();
  giveframe = $('#give').val();
  col = $('#col').val();
  $('#amount').val(amount); https://unitpay.ru/pay/46331-5748a?sum='+summqiwi+'&account=46331&desc=Покупка+игровой+валюты
  nik = $('#nik').val();
  servertitle = $('.trigger').html();
  $('#descwm').val(Base64.encode('Order#' + Math.floor((Math.random() * 100000) + 10000) + ' ' + giveframe + col + ' ' + nik));
  $('#buyqiwi').attr('href', 'https://unitpay.ru/pay/46331-5748a?sum='+summqiwi+'&account=46331&desc=Покупка+игровой+валюты');
});
});
 $('document').ready(function(){
$('#give').keyup(function(){
  var amount;
  tonumber = $('#numberqiwi').val();
 summqiwi = $('#buy').val();
  amount = $('#buy').val();
  giveframe = $('#give').val();
  col = $('#col').val();
  $('#amount').val(amount); 
  nik = $('#nik').val();
  servertitle = $('.trigger').html();
  $('#descwm').val(Base64.encode('Order#' + Math.floor((Math.random() * 100000) + 10000) + ' ' + giveframe + col + ' ' + nik));
  $('#buyqiwi').attr('href', 'https://unitpay.ru/pay/46331-5748a?sum='+summqiwi+'&account=46331&desc=Покупка+игровой+валюты');
});
});
 $('document').ready(function(){
$('#numberqiwi').keyup(function(){
  summqiwi = $('#buy').val();
  tonumber = $('#numberqiwi').val();
  $('#buyqiwi').attr('href', 'https://unitpay.ru/pay/46331-5748a?sum='+summqiwi+'&account=46331&desc=Покупка+игровой+валюты');
});
});
 $('document').ready(function(){
  $('#descwm').val($('.trigger').html());
  servertitle = $('.trigger').html();
$('.triggerli').click(function (){
  servertitle = $('.trigger').html();
  $('#descwm').val($('.trigger').html());
});
});
 $('document').ready(function(){
$('#nik').keyup(function(){
  tonumber = $('#numberqiwi').val();
 summqiwi = $('#buy').val();
  giveframe = $('#give').val();
  col = $('#col').val();
  nik = $('#nik').val();
  servertitle = $('.trigger').html();
  $('#descwm').val(Base64.encode('Order#' + Math.floor((Math.random() * 100000) + 10000) + ' ' + giveframe + col + ' ' + nik));
  $('#buyqiwi').attr('href', 'https://unitpay.ru/pay/46331-5748a?sum='+summqiwi+'&account=46331&desc=Покупка+игровой+валюты');
});
});
 $('document').ready(function(){
$('#oform').click(function(){  
if ($('.webmoneycolor').hasClass('activepay') || $('.qiwicolor').hasClass('activepay')) {
$('#form1 .option3 label').css('border', '1px solid transparent');
$('#form1 .option3 label').css('padding', '0');
if ($('#contact').val() == ""){
    $('#contact').css("border", "1px solid red") 
} else{

if ($('.qiwicolor').hasClass('activepay')){
var valbuy;

valbuy = $('#buy').val();
if (valbuy < 150){
$('#buy').css("border", "1px solid #cc2020");
$('#buy').css("box-shadow", "none");
$('.minimum').show();
}else{
$.ajax({ 
type: 'post', 
url: 'http://story-shop.ru/catalog/view/theme/bootsmy/template/product/sendorder.php', 
data: $('#mainform').serialize(), 
success: function(data){ 
$('#syd').html(data); 
}, 
});

$('.minimum').hide();
$('#buyqiwi').show();
}
}
}
} else{
$('#form1 .option3 label').css('border', '1px solid crimson');
$('#form1 .option3 label').css('padding', '4px 12px');
}
});
});
 $('document').ready(function(){
$('#oform').click(function(){  
if ($('.webmoneycolor').hasClass('activepay') || $('.qiwicolor').hasClass('activepay')) {
    $('#form1 .option3 label').css('border', '1px solid transparent');
$('#form1 .option3 label').css('padding', '0');
if ($('#contact').val() == ""){
    $('#contact').css("border", "1px solid crimson") 
} else{

if ($('.webmoneycolor').hasClass('activepay')){
var valbuy;

valbuy = $('#buy').val();

if (valbuy < 150){
$('#buy').css("border", "1px solid #cc2020");
$('#buy').css("box-shadow", "none");
$('.minimum').show();
}else{
$.ajax({ 
type: 'post', 
url: 'http://story-shop.ru/catalog/view/theme/bootsmy/template/product/sendorder.php', 
data: $('#mainform').serialize(), 
success: function(data){ 
$('#syd').html(data); 
}, 
});

$('.minimum').hide();
$('#formwebmoney').show();
}
}
}
} else{
$('#form1 .option3 label').css('border', '1px solid crimson');
$('#form1 .option3 label').css('padding', '4px 12px');
}
});
});

 $('document').ready(function(){
$('#oform').click(function(){  
if ($('.webmoneycolor').hasClass('activepay') || $('.qiwicolor').hasClass('activepay')) {
    $('#form1 .option3 label').css('border', '1px solid transparent');
$('#form1 .option3 label').css('padding', '0');
if ($('#contact').val() == ""){
    $('#contact').css("border", "1px solid red") 
} else{

if ($('.webmoneycolor').hasClass('activepay')){
var valbuy;

valbuy = $('#buy').val();

if (valbuy < 150){
$('#buy').css("border", "1px solid #cc2020");
$('#buy').css("box-shadow", "none");
$('.minimum').show();
}else{
$.ajax({ 
type: 'post', 
url: 'http://story-shop.ru/catalog/view/theme/bootsmy/template/product/sendorder.php', 
data: $('#mainform').serialize(), 
success: function(data){ 
$('#syd').html(data); 
}, 
});

$('.minimum').hide();
$('#formwebmoney').show();
}
}
}
} else{
$('#form1 .option3 label').css('border', '1px solid crimson');
$('#form1 .option3 label').css('padding', '4px 12px');
}
});
});
</script>