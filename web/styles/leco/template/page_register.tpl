<div class="fbar">
  <div class="ftitle">Создание нового аккаунта</div>
  <div class="clear"></div>
</div>
<div id="fbody" class="fbody">
  <div style="">
    <div class="fdesc">Вы должны использовать действующий адрес электронной почты и записать свой ​​защитный код, в противном случае вы не сможете: <br/> * Измененить или извлечь любую информацию о вашей учетной записи <br/> * Получить помощь от наших GM мов по поводу своего аккаунта</div>
    <form name="registro" id="registro">
    <div class="flabel" style="">
      <div class="fitem" style=""><label for="rusername">ЛОГИН</label></div>
      <div id="husername" class="fwhat">?</div>
      <script type="text/javascript" language="javascript">
        new Tip('husername',"<ul style='padding:0px 5px 0px 15px;'><li>Ваше имя пользователя должны быть между 6 и 15 символов. </Li> <литий> Ваше имя пользователя должно быть буквенно-цифровым. (Это означает, что вы можете использовать только символы от А до Я и / или цифры от 0 до 9)</li></ul>", { title: "Введите Ваше имя пользователя", width: '400px', delay: 0.1, className: 'darkgrey' });
      </script>
      <div class="finput" style=""><input class="ffield" type="text" value="" placeholder="имя пользователя" required name="rusername" id="rusername" maxlength="15" /></div>
      <div class="clear"></div>
    </div>
    <div class="flabel">
      <div class="fitem"><label for="rpassword1">ПАРОЛЬ</label></div>
      <div id="hpassword1" class="fwhat">?</div>
      <script type="text/javascript" language="javascript">
        new Tip('hpassword1',"<ul style='padding:0px 5px 0px 15px;'><li>Ваш пароль должен иметь от 6 до 15 символов. </ Li> <литий> Ваш пароль должен быть буквенно-цифровым. (Это означает, что вы можете использовать только символы от А до Я и / или цифры от 0 до 9)</li></ul>", { title: "Введите свой пароль", width: '400px', delay: 0.1, className: 'darkgrey' });
      </script>
      <div class="finput"><input class="ffield" type="password" value="" placeholder="пароль" required name="rpassword1" id="rpassword1" maxlength="15" /></div>
      <div class="clear"></div>
    </div>
    <div class="flabel">
      <div class="fitem"><label for="rpassword2">ПОВТОР ПАРОЛЯ</label></div>
      <div id="hpassword2" class="fwhat">?</div>
      <script type="text/javascript" language="javascript">
        new Tip('hpassword2',"<ul style='padding:0px 5px 0px 15px;'><li>Ваш пароль должны быть между 6 и 15 символов. </ li> <литий> Ваш пароль должен быть буквенно-цифровым. (Это означает, что вы можете использовать только символы от А до Я или / и цифрами от 0 до 9) </ li> <LI> Будьте так же, как выше.</li></ul>", { title: "Введите свой пароль снова", width: '400px', delay: 0.1, className: 'darkgrey' });
      </script>
      <div class="finput"><input class="ffield" type="password" value="" placeholder="повтор пароля" required name="rpassword2" id="rpassword2" maxlength="15" /></div>
      <div class="clear"></div>
    </div>
    <div class="flabel">
      <div class="fitem"><label for="remail">EMAIL</label></div>
      <div id="hemail" class="fwhat">?</div>
      <script type="text/javascript" language="javascript">
        new Tip('hemail',"<ul style='padding:0px 5px 0px 15px;'><li>Ваш адрес электронной почты должен быть действительным адресом электронной почты. </ Li> <литий> Ваш электронный адрес должен выглядеть «myname@domain.com '.</li></ul>", { title: "Введите ваш адрес электронной почты", width: '400px', delay: 0.1, className: 'darkgrey' });
      </script>
      <div class="finput"><input class="ffield" type="text" value="" placeholder="почтовый адресс" required name="remail" id="remail" /></div>
      <div class="clear"></div>
    </div>
    <div class="flabel">
      <div class="fitem"><label for="seccode">КОД БЕЗОПАСНОСТИ</label></div>
      <div id="hseccode" class="fwhat">?</div>
      <script type="text/javascript" language="javascript">
        new Tip('hseccode',"<ul style='padding:0px 5px 0px 15px;'><li>Ваш код безопасности должны быть 8 цифр </ li> <литий> <б> Примечание </ B>:.. Помните свой ​​защитный код, потому что он будет использоваться для будущих изменений в вашей учетной записи <br/> Такие, как смены пароля, электронная почта изменение, и т.д.. </ li> <литий> Если это первый раз, когда вы используете это, ваш код безопасности будет определяться этой форме. (пожалуйста, запишите его, чтобы вы могли вспомнить его позже).</li></ul>", { title: "Введите код безопасности", width: '400px', delay: 0.1, className: 'darkgrey' });
      </script>
      <div class="finput"><input class="ffield" type="password" value="" placeholder="код безопасности" required name="seccode" id="seccode" maxlength="8" /></div>
      <div class="clear"></div>
    </div>
    <div class="flabel">
      <div class="fitem"><label for="seccode2">ПОВТОР КОДА БЕЗОПАСНОСТИ</label></div>
      <div id="hseccode2" class="fwhat">?</div>
      <script type="text/javascript" language="javascript">
        new Tip('hseccode2',"<ul style='padding:0px 5px 0px 15px;'><li>Ваш код безопасности должны быть 8 цифр </ li> <литий> <б> Примечание </ B>:.. Помните свой ​​защитный код, потому что он будет использоваться для будущих изменений в вашей учетной записи <br/> Такие, как смены пароля, электронная почта изменение, и т.д.. </ li> <литий> Если это первый раз, когда вы используете это, ваш код безопасности будет определяться этой форме. (пожалуйста, запишите его, чтобы вы могли вспомнить его позже).</li></ul>", { title: "Введите еще раз код безопасности", width: '400px', delay: 0.1, className: 'darkgrey' });
      </script>
      <div class="finput"><input class="ffield" type="password" value="" placeholder="повтор код безопасности" required name="seccode2" id="seccode2" maxlength="8" /></div>
      <div class="clear"></div>
    </div>
    <div class="flabel" style="text-align: center;"><input class="fsubmit" type="submit" value="Отправить" onclick="new Ajax.Updater('errors', 'includes/f.acc.register.php?op=process', {method: 'post', asynchronous:true, parameters:Form.serialize(document.registro)}); esperar('errors'); return false;"></div>
    <div style="height: 5px;"></div>
    </form>
  </div>
</div>
<div id="errors" name="errors" class="errors"></div>
