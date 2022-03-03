<?php
require_once "blocks/header.php";

?>
<style>
   body{
    background-color: #f6f7f9;
   }
</style>
<main >
    <div class="container">
        <div class="payment__inner">
            <div class="payment__form">
                <div class="data-form">
                    <label for="">Откуда</label><br>
                    <input type="text" name="frominp" id="frominp" placeholder="Город отправки" oninput="checkpref()">
                </div>
                <div class="data-form">
                    <label for="">Куда</label><br>
                    <input type="text" name="toinp" id="toinp" placeholder="Город назначения" oninput="checkpref()">
                </div>
                <div class="data-form">
                    <select name="" id="">
                        <option value="">
                            
                            конверт
                        </option>
                        <option value="">Коробка</option>
                        <option value="">Палет</option>
                    </select>
                </div>
                <input type="button" value="Рассчитать" id="paymentbtn" class="btnform">
                
            </div>
            <div class="payment__block">
                <div class="choice">
                    <div class="payment_choice">
                        <h1 class="title">Как отправить</h1>
                        <label for="howtosend1"><input type="radio" name="howtosend" id="howtosend1">В пункте</label>
                        <label for="howtosend2"><input type="radio" name="howtosend" id="howtosend2">Курьером</label>
                    </div>
                    <div class="payment_choice">
                        <h1 class="title">Как получить</h1>
                        <label for="howtoget1"> <input type="radio" name="howtoget" id="howtoget1">В пункте</label>
                        <label for="howtoget2"> <input type="radio" name="howtoget" id="howtoget2">Курьером</label>
                    

                    </div>
                </div>
                <div class="total">
                    <h1 class="title">Ваш расчет</h1>
                </div>
            </div>
            
            
        </div>
    </div>
</main>
<?php

require_once "blocks/footer.php"
?>
