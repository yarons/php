
    <center>

<?php

if ($hideLogo != true) {

    // Login logo link URL start
    if (!empty($loginLogoLinkUrl)) {
      echo '<a href="' . urlencode($loginLogoLinkUrl) . '">';
    }

    // Login logo image URL
    if (!empty($loginLogoImageUrl)) {
      echo '<img src="' . urlencode($loginLogoImageUrl) . '" alt="' . 
      htmlentities($productName) .
      '" width="' . strip_tags($loginLogoImageWidth) .
      '" height="' . strip_tags($loginLogoImageHeight) . '">';
    }

    // Login logo link URL end
    if (!empty($loginLogoLinkUrl)) {
      echo "</a>";
    }

}

?>
        <br /><br />

<?php
// <table width="80%" border="0" margin="0" padding="0">
?>

        <table>
            <tr>
                <td align="left">
                    <h1>
                        <?php echo htmlentities($translate["sign-up"]); ?>
                    </h1>

                    <section class="auth-dialog">
    <div class="at-form">
        <div class="at-title">
    <h3><?php echo htmlentities($translate["signupPopup-title"]); ?></h3>
  </div>
      
  <div class="at-pwd-form"><div class="at-form-authentication" style="display: none;">
  <label><?php echo htmlentities($translate["authentication-method"]); ?></label>
  <br>

<select class="select-authentication"><option value="password"><?php echo htmlentities($translate["password"]); ?></option></select></div>
    <form role="form" id="at-pwd-form" novalidate="" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">

    <div class="at-input">
      <label for="at-field-username">
        <?php echo htmlentities($translate["username"]); ?>
      </label>
      <br>
    <input type="text" id="at-field-username" name="at-field-username" placeholder="<?php echo htmlentities($translate["username"]); ?>" autocapitalize="none" autocorrect="off">
  </div>
  <br>
    <div class="at-input">
      <label for="at-field-email">
        <?php echo htmlentities($translate["email"]); ?>
      </label>
      <br>
    <input type="text" id="at-field-email" name="at-field-email" placeholder="<?php echo htmlentities($translate["email"]); ?>" autocapitalize="none" autocorrect="off">
  </div>
  <br>
    <div class="at-input">
      <label for="at-field-password">
      <?php echo htmlentities($translate["password"]); ?>
      </label>
      <br>
    <input type="password" id="at-field-password" name="at-field-password" placeholder="<?php echo htmlentities($translate["password"]); ?>" autocapitalize="none" autocorrect="off">
  </div>
  <br>
    <div class="at-input">
      <label for="at-field-password_again">
        <?php echo htmlentities($translate["password-again"]); ?>
      </label>
      <br>
    <input type="password" id="at-field-password_again" name="at-field-password_again" placeholder="<?php echo htmlentities($translate["password-again"]); ?>" autocapitalize="none" autocorrect="off">
  </div>
  <br>
    <div class="at-input" id="invitationcode" style="display: none;">
    <label for="at-field-code">
        <?php echo htmlentities($translate["invitation-code"]); ?>
    </label>
    <br>
   <input id="at-field-invitationcode" type="text" name="at-field-invitationcode" placeholder="<?php echo htmlentities($translate["invitation-code"]); ?>">
   </div>

    <br />
                        <div class="at-select-lang">
                            <p>
                                <select class="select-lang">
                                    <option <?php if ($lang=="ar" ) {echo 'selected="selected"' ;}; ?> value="ar">Arabic / العربية</option>
                                    <option <?php if ($lang=="ar-EG" ) {echo 'selected="selected"' ;}; ?> value="ar-EG">Arabic (Egypt) /مَصرى</option>
                                    <option <?php if ($lang=="hy" ) {echo 'selected="selected"' ;}; ?> value="hy">Armenian / Հայերեն</option>
                                    <option <?php if ($lang=="eu" ) {echo 'selected="selected"' ;}; ?> value="eu">Basque / Euskara</option>
                                    <option <?php if ($lang=="br" ) {echo 'selected="selected"' ;}; ?> value="br">Breton / Brezhoneg</option>
                                    <option <?php if ($lang=="bg" ) {echo 'selected="selected"' ;}; ?> value="bg">Bulgarian / Български</option>
                                    <option <?php if ($lang=="ca" ) {echo 'selected="selected"' ;}; ?> value="ca">Catalan / Català</option>
                                    <option <?php if ($lang=="zh-CN" ) {echo 'selected="selected"' ;}; ?> value="zh-CN">Chinese (China) / 简体中文</option>
                                    <option <?php if ($lang=="zh-HK" ) {echo 'selected="selected"' ;}; ?> value="zh-HK">Chinese (Hong Kong) / 繁体中文（香港)</option>
                                    <option <?php if ($lang=="zh-TW" ) {echo 'selected="selected"' ;}; ?> value="zh-TW">Chinese (Taiwan) / 繁體中文（台灣)</option>
                                    <option <?php if ($lang=="hr" ) {echo 'selected="selected"' ;}; ?> value="hr">Croatian / Hrvatski</option>
                                    <option <?php if ($lang=="cs" ) {echo 'selected="selected"' ;}; ?> value="cs">Czech / čeština‎</option>
                                    <option <?php if ($lang=="da" ) {echo 'selected="selected"' ;}; ?> value="da">Danish / Dansk</option>
                                    <option <?php if ($lang=="nl" ) {echo 'selected="selected"' ;}; ?> value="nl">Dutch / Nederlands</option>
                                    <option <?php if ($lang=="en" ) {echo 'selected="selected"' ;}; ?> value="en">English</option>
                                    <option <?php if ($lang=="en-GB" ) {echo 'selected="selected"' ;}; ?> value="en-GB">English (UK)</option>
                                    <option <?php if ($lang=="eo" ) {echo 'selected="selected"' ;}; ?> value="eo">Esperanto</option>
                                    <option <?php if ($lang=="fi" ) {echo 'selected="selected"' ;}; ?> value="fi">Finnish / Suomi</option>
                                    <option <?php if ($lang=="fr" ) {echo 'selected="selected"' ;}; ?> value="fr">French / Français</option>
                                    <option <?php if ($lang=="gl" ) {echo 'selected="selected"' ;}; ?> value="gl">Galician / Galego</option>
                                    <option <?php if ($lang=="ka" ) {echo 'selected="selected"' ;}; ?> value="ka">Georgian / ქართული</option>
                                    <option <?php if ($lang=="de" ) {echo 'selected="selected"' ;}; ?> value="de">German (Germany) / Deutsch</option>
                                    <option <?php if ($lang=="de-CH" ) {echo 'selected="selected"' ;}; ?> value="de-CH">German (Switzerland) / Deutsch (Schweiz)</option>
                                    <option <?php if ($lang=="el" ) {echo 'selected="selected"' ;}; ?> value="el">Greek / Ελληνικά</option>
                                    <option <?php if ($lang=="he" ) {echo 'selected="selected"' ;}; ?> value="he">Hebrew / עברית</option>
                                    <option <?php if ($lang=="hu" ) {echo 'selected="selected"' ;}; ?> value="hu">Hungarian / Magyar</option>
                                    <option <?php if ($lang=="hi" ) {echo 'selected="selected"' ;}; ?> value="hi">Hindi / हिन्दी</option>
                                    <option <?php if ($lang=="ig" ) {echo 'selected="selected"' ;}; ?> value="ig">Igbo</option>
                                    <option <?php if ($lang=="id" ) {echo 'selected="selected"' ;}; ?> value="id">Indonesian / Bahasa Indonesia</option>
                                    <option <?php if ($lang=="it" ) {echo 'selected="selected"' ;}; ?> value="it">Italian / Italiano</option>
                                    <option <?php if ($lang=="ja" ) {echo 'selected="selected"' ;}; ?> value="ja">Japanese / 日本語</option>
                                    <option <?php if ($lang=="km" ) {echo 'selected="selected"' ;}; ?> value="km">Khmer / ភាសាខ្មែរ</option>
                                    <option <?php if ($lang=="ko" ) {echo 'selected="selected"' ;}; ?> value="ko">Korean / 한국어</option>
                                    <option <?php if ($lang=="lv" ) {echo 'selected="selected"' ;}; ?> value="lv">Latvian / Latviešu</option>
                                    <option <?php if ($lang=="lt" ) {echo 'selected="selected"' ;}; ?> value="lt">Lithuanian / Lietuvių kalba</option>
                                    <option <?php if ($lang=="mk" ) {echo 'selected="selected"' ;}; ?> value="mk">Macedonian / македонски јазик</option>
                                    <option <?php if ($lang=="mn" ) {echo 'selected="selected"' ;}; ?> value="mn">Mongolian / Монгол</option>
                                    <option <?php if ($lang=="nb" ) {echo 'selected="selected"' ;}; ?> value="nb">Norwegian Bokmål / Norsk bokmål</option>
                                    <option <?php if ($lang=="oc" ) {echo 'selected="selected"' ;}; ?> value="oc">Occitan (post 1500)</option>
                                    <option <?php if ($lang=="fa" ) {echo 'selected="selected"' ;}; ?> value="fa">Persian / فارسی</option>
                                    <option <?php if ($lang=="fa-IR" ) {echo 'selected="selected"' ;}; ?> value="fa-IR">Persian (Iran) / فارسی/پارسی (ایران‎)</option>
                                    <option <?php if ($lang=="pa" ) {echo 'selected="selected"' ;}; ?> value="pa">Panjabi (Punjabi) /  ਪੰਜਾਬੀ</option>
                                    <option <?php if ($lang=="pl" ) {echo 'selected="selected"' ;}; ?> value="pl">Polish / Polski</option>
                                    <option <?php if ($lang=="pt" ) {echo 'selected="selected"' ;}; ?> value="pt">Portuguese (Portugal) / Português</option>
                                    <option <?php if ($lang=="pt-BR" ) {echo 'selected="selected"' ;}; ?> value="pt-BR">Portuguese (Brazil) / Português do Brasil</option>
                                    <option <?php if ($lang=="ro" ) {echo 'selected="selected"' ;}; ?> value="ro">Romanian / Română</option>
                                    <option <?php if ($lang=="ru" ) {echo 'selected="selected"' ;}; ?> value="ru">Russian / Русский</option>
                                    <option <?php if ($lang=="sr" ) {echo 'selected="selected"' ;}; ?> value="sr">Serbian / Српски језик</option>
                                    <option <?php if ($lang=="sk" ) {echo 'selected="selected"' ;}; ?> value="sk">Slovak / Slovenčina</option>
                                    <option <?php if ($lang=="sl" ) {echo 'selected="selected"' ;}; ?> value="sl">Slovenian / slovenščina</option>
                                    <option <?php if ($lang=="es" ) {echo 'selected="selected"' ;}; ?> value="es">Spanish (Spain) / español</option>
                                    <option <?php if ($lang=="es-LA" ) {echo 'selected="selected"' ;}; ?> value="es-LA">Spanish (Latin America) / español de América Latina</option>
                                    <option <?php if ($lang=="es-AR" ) {echo 'selected="selected"' ;}; ?> value="es-AR">Spanish (Argentina) / español de Argentina</option>
                                    <option <?php if ($lang=="es-CL" ) {echo 'selected="selected"' ;}; ?> value="es-CL">Spanish (Chile) / español de Chile</option>
                                    <option <?php if ($lang=="es-MX" ) {echo 'selected="selected"' ;}; ?> value="es-MX">Spanish (Mexico) / español de México</option>
                                    <option <?php if ($lang=="es-PY" ) {echo 'selected="selected"' ;}; ?> value="es-PY">Spanish (Paraguay) / español de Paraguayo</option>
                                    <option <?php if ($lang=="es-PE" ) {echo 'selected="selected"' ;}; ?> value="es-PE">Spanish (Peru) / español de Perú</option>
                                    <option <?php if ($lang=="sv" ) {echo 'selected="selected"' ;}; ?> value="sv">Swedish / Svenska</option>
                                    <option <?php if ($lang=="sw" ) {echo 'selected="selected"' ;}; ?> value="sw">Swahili / Kiswahili</option>
                                    <option <?php if ($lang=="ta" ) {echo 'selected="selected"' ;}; ?> value="ta">Tamil / தமிழ்</option>
                                    <option <?php if ($lang=="th" ) {echo 'selected="selected"' ;}; ?> value="th">Thai / ไทย</option>
                                    <option <?php if ($lang=="tr" ) {echo 'selected="selected"' ;}; ?> value="tr">Turkish / Türkçe</option>
                                    <option <?php if ($lang=="uk" ) {echo 'selected="selected"' ;}; ?> value="uk">Ukrainian / Українська</option>
                                    <option <?php if ($lang=="vi" ) {echo 'selected="selected"' ;}; ?> value="vi">Vietnamese / Tiếng Việt</option>
                                </select>
                            </p>
                        </div>
                        <input type="submit" name="register" class="at-btn submit" id="at-btn" value="<?php echo htmlentities($translate["register"]); ?>">
                    </form>

                    <br>
        <div class="at-signin-link">
    <p>

    <br>

    <?php echo htmlentities($translate["if-you-already-have-an-account"]); ?>
      <a href="/sign-in" id="at-signIn" class="at-link at-signin">
        <?php echo htmlentities($translate["log-in"]); ?></a>
    </p>

    <div class="at-pwd-link">
      <p><a href="/forgot-password" id="at-forgotPwd" class="at-link at-pwd"><?php echo htmlentities($translate["forgot-password"]); ?></a></p>
    </div>

  </div>
    </div>
                           

                </td>
            </tr>
        </table>
    </center>


