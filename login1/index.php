<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Welcome Back</title>
	<link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon/favicon.ico">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400' rel='stylesheet' type='text/css'>
    <link href='css/font-awesome.min.css' rel='stylesheet' type='text/css'>
    <link href='assets/darkui-6528eccac3f45fc2e23786a4e734f16bf0ee24f7cf80c8075c5a5a31260b26e8.css' rel='stylesheet' type='text/css'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <style>
      html, body { padding: 0; margin: 0; height: 100%; min-height: 100%;}
      /* -- Force Overwrite of some styling START -- */
      /* ---- Container */
      #a0-lock.a0-theme-default .a0-panel *{font-family: 'Open Sans', sans-serif !important;}
       #a0-lock.a0-theme-default .a0-panel{-webkit-box-shadow: 0 0 2px rgba(17,17,24,0) !important; width: auto !important; box-shadow: 0 0 2px rgba(17,17,24,0) !important;}

      #a0-lock.a0-theme-default .a0-panel .a0-mode {
        background-color: initial !important;
      }

      #a0-lock.a0-theme-default .a0-panel .a0-mode form .a0-body-content {
        background-color: initial !important;
      }

      .a0-mode-container{
        width: 340px !important;
        margin:0 auto;
        background-color: transparent !important;
      }

      .a0-notloggedin {
        background-color: transparent !important;
      }

      .a0-notloggedin form {
        background-color: transparent !important;
      }
      /* ---- Header */

      #a0-lock.a0-theme-default .a0-panel .a0-top-header,
      #a0-lock.a0-theme-default .a0-panel .a0-bg-gradient{
        background: none !important;
      }

      #a0-lock.a0-theme-default .a0-panel .a0-top-header,
      #a0-lock.a0-theme-default .a0-panel .a0-icon-container{
        min-height: 50px !important;
        font-weight: 300;
      }

      #a0-lock.a0-theme-default .a0-panel .a0-top-header h1{
        color: white;
        font-family: 'Gilroy-Bold', sans-serif !important;
        letter-spacing: 0.35px;
      }

      /* ---Error Message */
      #a0-lock.a0-theme-default .a0-panel .a0-error{
        color: red !important;
        background: none !important;
        border: 1px solid #f04848 !important;
        padding: 20px !important;
      }

      /* ---- Button */
      #a0-lock.a0-theme-default .a0-panel .a0-action button{text-indent: 0 !important;}
      #a0-lock.a0-theme-default .a0-panel .a0-action button:after{background:none !important;}
      .a0-action button{height: auto !important}
      button{height: 52px !important; border-radius: 35px !important;font-weight: normal !important;letter-spacing:0 !important; line-height: 12px !important; background-color:#2A8CFE !important;}
      #a0-lock.a0-theme-default .a0-panel button.a0-primary{position: relative !important; max-width: 250px !important; margin: 0 auto !important; color: white !important; background-color: #2A8CFE !important; padding: 20px 10px !important; text-transform: capitalize !important; font-family: 'Gilroy-Medium', sans-serif !important; font-size: 16px !important; letter-spacing: 0.2px;}
      #a0-lock.a0-theme-default .a0-panel button.a0-primary:hover {
        box-shadow: none !important;
      }

      /* -- Input */
      input{ font-size: 16px !important; font-weight: 300 !important;}
      .a0-input-box{padding: 0 !important; border: 0 !important;-webkit-appearance: none; border-radius:0 !important; background: initial !important; }
      .a0-icon-budicon-5,.a0-icon-budicon{display:none !important}
      input:-webkit-autofill, textarea:-webkit-autofill, select:-webkit-autofill{
        background: none !important;
        box-shadow: 0 0 0 1000px white inset !important;
      }
      .a0-input-box.a0-error-input input{
        border: 1px solid #DC4E41 !important
      }
      .a0-input-box input{
        border-radius: 4px;
        background: initial !important;
        background-color: white !important;
      }
       .a0-input-box input:focus{
        color: #333 !important;
        background: initial !important;
        background-color: white !important;
      }
      .a0-input-box input:-webkit-autofill {
        color: #333 !important;
        background: initial !important;
        background-color: white !important;
        background-image: none !important;
      }
      .a0-input-box input::-webkit-input-placeholder {
        color: rgba(51,51,51,0.3) !important;
      }
      .a0-input-box input::-moz-placeholder {
        color: rgba(51,51,51,0.3) !important;
      }

      .a0-input-box input:-ms-input-placeholder {
        color: rgba(51,51,51,0.3) !important;
      }

      .a0-input-box input:-moz-placeholder {
        color: rgba(51,51,51,0.3) !important;
      }

      #a0-lock.a0-theme-default .a0-panel .a0-email input,
      #a0-lock.a0-theme-default .a0-panel .a0-password input {
        height: 50px !important;
        border-radius: 4px !important;
        font-family: 'Gilroy-Medium', sans-serif !important;
        font-size: 16px !important;
        letter-spacing: 0.11px;
      }

      .a0-input-box input:focus{
        border-bottom: 1px solid #37b4e8 !important;
        -webkit-transition : border-bottom 500ms ease-out;
        -moz-transition : border-bottom 500ms ease-out;
        -o-transition : border-bottom 500ms ease-out;
        transition : border-bottom 500ms ease-out;
      }

      #a0-lock.a0-theme-default .a0-panel .a0-inputs>div {
        margin-top: 15px !important;
      }

      /*-- Forget Password Link */
      #a0-lock.a0-theme-default .a0-panel .a0-all, #a0-lock.a0-theme-default .a0-panel .a0-forgot-pass{position: absolute !important; bottom: -55px !important; width: 100% !important; left: 0; font-family: 'Gilroy-Medium', sans-serif !important; font-size: 16px !important; letter-spacing: 0.11px;}
      #a0-lock.a0-theme-default .a0-panel .a0-all, #a0-lock.a0-theme-default .a0-panel .a0-forgot-pass:hover {color:#37b4e8}

      .a0-input-box input:-webkit-autofill,.a0-input-box input:-webkit-autofill:hover,.a0-input-box input:-webkit-autofill:focus,.a0-input-box input:-webkit-autofill:active {transition: background-color 5000s ease-in-out 0s !important;}

      .a0-forgot-pass,.signup-link{font-size: 16px !important;}
      h1{font-size: 3rem !important; margin-top: 20% !important;}

       /* --Force Overwrite of some styling END -- */

      .table {
        display: table;
        width: 100%;
      }

      .cell {
        display: table-cell;
        vertical-align: top; /* modify from middle to top */
      }

      .content {
        padding: 150px 0 0 0;
        margin-left: auto;
        margin-right: auto;
        width: 340px; /* login widget width */
        position:relative;
      }

      @media only screen and (max-width: 540px) { /* to include the iphone 6s size */
        .a0-mode-container {
          width: 300px !important;
        }

        .content {
            width:100%;
            padding: 2em 0em 2em 0em;
        }
        h1 {
          font-size: 1.8rem !important;
        }
        input {
          font-size: 14px !important;
        }
        .a0-forgot-pass,.signup-link {
          font-size: 14px !important;
        }

        #a0-lock.a0-theme-default .a0-panel .a0-inputs>div {
          margin-top: 15px !important;
        }

        .signup-link {
          bottom: -60px !important;
        }
      }

      .signup-link{
        position: absolute;
        left: 0;
        bottom: 0;
        padding-left: 1em;
        padding-right: 1em;
        text-align:center;
        display:block;
        width: 100%;
        box-sizing: border-box;
        font-weight: 300;
        color: rgba(0,0,0,.86);
        text-decoration: none;
        font-family: 'Open Sans', sans-serif !important;
        color: white;
      }

      /* --- Custom Styling */

      .content-wrapper {
        width: 100%;
        height: 100%;
        background: #3284D8 url('media/images/mv-login-bg-2.jpg') no-repeat;
        background-size: cover;
        background-position: center;
        overflow: auto;
      }

      .logo {
        position: absolute;
        top: 20px;
        left: 50px;
        width: 220px;
      }
      .logo img {width: 100%;}

      .a0-image{display:none} /*Hide default image*/

      #a0-lock.a0-theme-default .a0-panel .a0-forgot-pass {
        font-weight: 300 !important;
        color: white !important;
      }

      input[type='email'], input[type='email']:focus {
        background-color: white !important;
      }

      #a0-lock.a0-theme-default .a0-panel .a0-mode form .a0-body-content {
        padding: 5px 0 15px 0 !important;
        background-color: transparent !important;
      }

      #a0-lock.a0-theme-default .a0-panel .a0-action {
        height: auto !important;
      }

      #a0-lock.a0-theme-default .a0-panel #a0-change_password .a0-collapse-reset .a0-instructions {
        color: white !important;
        font-family: 'Gilroy-Regular', sans-serif !important;
      }

      .auth0-lock-input-password .auth0-lock-input-wrap i {
        top: 18px !important;
      }

      .auth0-lock-input-password .auth0-lock-input-wrap i.fa {
        position: absolute;
        cursor: pointer;
        left: auto !important;
        right: 10px !important;
      }

      .auth0-lock-input-password .auth0-lock-input-wrap i.fa-eye-slash {
        display: none;
      }

      .auth0-lock-input-password .auth0-lock-input-wrap i.fa:before {
        font-family: FontAwesome;
        color: black;
      }

      /* New styles after updating to v11*/
      #a0-lock * {
        -webkit-animation: none !important;
        animation: none !important;
        -webkit-transition: none !important;
        transition: none !important;
      }

      body .auth0-lock.auth0-lock .auth0-lock-header {
        background-color: transparent;
        height: 90px;
        margin-bottom: 20px;
        padding: 40px 0;
      }

      body .auth0-lock.auth0-lock .auth0-lock-header-bg {
        display: none;
      }

      body .auth0-lock.auth0-lock .auth0-lock-header-welcome img{
        display: none;
      }

       body .auth0-lock.auth0-lock .auth0-lock-header-welcome:before {
        /*content: "Welcome Back";*/
        color: white;
        font-family: 'Gilroy-Bold', sans-serif;
        font-size: 40px;
      }

      body .auth0-lock.auth0-lock .auth0-lock-header-welcome:after {
        color: white;
        font-family: 'Gilroy-Regular', sans-serif;
        font-size: 20px;
      }

      body .auth0-lock.auth0-lock .auth0-lock-cred-pane {
        background-color: transparent;
      }

      body .auth0-lock.auth0-lock .auth0-lock-content {
        padding: 0;
      }

      body .auth0-lock.auth0-lock .auth0-lock-content p {
        color: white;
        font-family: 'Gilroy-Regular', sans-serif;
        font-size: 14px;
      }

      body .auth0-lock.auth0-lock .auth0-lock-input-wrap .auth0-lock-input {
        height: 50px;
        border-radius: 4px;
        font-family: 'Gilroy-Medium', sans-serif;
        font-size: 16px;
        letter-spacing: 0.11px;
      }

      body .auth0-lock.auth0-lock .auth0-lock-input-wrap.auth0-lock-input-wrap-with-icon {
        padding-left: 0;
      }

      body .auth0-lock-input-wrap .auth0-lock-input-wrap-with-icon span {
        display: none;
      }

      body .auth0-lock.auth0-lock .auth0-lock-input-block {
        margin-bottom: 20px;
      }

      body .auth0-lock.auth0-lock .auth0-lock-form .auth0-lock-alternative {
        margin-top: 10px;
        margin-bottom: 20px;
      }

       body .auth0-lock.auth0-lock .auth0-lock-form .auth0-lock-alternative .auth0-lock-alternative-link {
        color: white;
        font-family: 'Gilroy-Regular', sans-serif;
        font-size: 14px;
      }

      body .auth0-lock.auth0-lock .auth0-lock-submit {
        padding: 0;
        text-transform: initial;
        font-family: 'Gilroy-Medium', sans-serif;
        font-size: 16px;
        margin-top: 20px;
      }

      body .auth0-lock.auth0-lock .auth0-lock-submit span svg {
        display: none;
      }

      body .auth0-lock.auth0-lock .auth0-lock-submit span {
        display: initial;
      }

      body .auth0-lock-social-button[data-provider^=facebook] .auth0-lock-social-button-icon {
        background: url("media/images/ico_facebook_login.svg") no-repeat;
        background-size: 69%;
        top: 11px !important;
        left: 12px !important;
      }

      body .auth0-lock.auth0-lock .auth0-lock-social-button {
        transition: none;
      }

      body .auth0-lock.auth0-lock .auth0-lock-social-button.auth0-lock-social-big-button .auth0-lock-social-button-icon {
        background-color: transparent !important;
      }

      body .auth0-lock.auth0-lock .auth0-lock-social-button .auth0-lock-social-button-icon {
        transition: none;
      }

      body .auth0-lock.auth0-lock .auth0-lock-social-button.auth0-lock-social-big-button .auth0-lock-social-button-text {
        transition: none;
        text-transform: initial;
        font-family: 'Gilroy-Regular', sans-serif;
        font-size: 16px;
      }

      body .auth0-lock-social-button[data-provider="facebook"] {
        background-color: #3B5998 !important;
      }

      body .auth0-lock.auth0-lock .auth0-lock-social-button.auth0-lock-social-big-button:hover:not([disabled]) .auth0-lock-social-button-text, body .auth0-lock.auth0-lock .auth0-lock-social-button.auth0-lock-social-big-button:focus:not([disabled]) .auth0-lock-social-button-text {
        background-color: transparent;
      }

      body .auth0-lock.auth0-lock .auth0-global-message.auth0-global-message-error {
        background: transparent;
        margin-bottom: 15px;
      }

      body .auth0-lock.auth0-lock .auth0-global-message {
        text-transform: initial;
        font-family: 'Gilroy-Regular', sans-serif;
        font-size: 16px;
        color: #EF2B2E;
      }

      body .auth0-lock.auth0-lock .auth0-lock-close-button, body .auth0-lock.auth0-lock .auth0-lock-back-button {
        top: 0;
      }

      body .auth0-lock.auth0-lock .auth0-lock-social-button {
        border-radius: 5px !important;
      }

      body .auth0-lock-header-avatar {
        display: none !important;
      }

      body .auth0-lock.auth0-lock .auth0-lock-name {
        color: white;
        font-family: 'Gilroy-Bold', sans-serif;
        font-size: 39px;
        line-height: inherit;
        padding: 0;
      }

      body .auth0-lock.auth0-lock .auth0-global-message.auth0-global-message-success {
        background-color: transparent;
      }


    </style>
  </head>
  <body>
  <div class="content-wrapper">

    <a class="logo">
      <img src="media/images/mv-logo-n.svg" alt="mindvalley logo">
    </a>

    <div class="table">

      <div class="cell">
        <div class="content">
          <!-- WIDGET -->
          <div id="widget-container"></div>
        </div>
      </div>
    </div>
    </div>

    <!--[if IE 8]>
    <script src="//cdnjs.cloudflare.com/ajax/libs/ie8/0.2.5/ie8.js"></script>
    <![endif]-->

    <!--[if lte IE 9]>
    <script src="https://cdn.auth0.com/js/base64.js"></script>
    <script src="https://cdn.auth0.com/js/es5-shim.min.js"></script>
    <![endif]-->
    <script>
      window.auth0AnalyticsOptions = {
        'google-analytics': {
          id: 'UA-61453208-1'
        }
      }
    </script>
    
    <script src="ajax/libs/lodash.min.js"></script>
    <script src="ajax/libs/lock.min.js"></script>
    <script src="ajax/libs/analytics.min.js"></script>

    <script>
      // Decode utf8 characters properly
      var config = JSON.parse(decodeURIComponent(escape(window.atob('eyJhc3NldHNVcmwiOiIiLCJhdXRoMERvbWFpbiI6Im1pbmR2YWxsZXkuYXV0aDAuY29tIiwiYXV0aDBUZW5hbnQiOiJtaW5kdmFsbGV5IiwiY2xpZW50Q29uZmlndXJhdGlvbkJhc2VVcmwiOiJodHRwczovL2Nkbi5hdXRoMC5jb20vIiwiY2FsbGJhY2tPbkxvY2F0aW9uSGFzaCI6ZmFsc2UsImNhbGxiYWNrVVJMIjoiaHR0cHM6Ly9ob21lLm1pbmR2YWxsZXkuY29tL2F1dGgvbWluZHZhbGxleS9jYWxsYmFjaz9vcmlnaW49aHR0cHMlM0ElMkYlMkZob21lLm1pbmR2YWxsZXkuY29tJTJGJTNGX2dhJTNEMi43NDYzNDMyNS42MTMxNTAzMTcuMTU0MDkwODU5Ny0xMjI5NzQ2ODU1LjE1NDA5MDg1OTciLCJjZG4iOiJodHRwczovL3Nkay5hdXRoMC5jb20vIiwiY2xpZW50SUQiOiJLUmFGbUNla3RBdFhSNnNkMmd1bVdWRlFhNkFuWG53RiIsImRpY3QiOnsic2lnbmluIjp7InRpdGxlIjoiRWx1bGEifX0sImV4dHJhUGFyYW1zIjp7InByb3RvY29sIjoib2F1dGgyIiwiYXV0aDBDbGllbnQiOiJleUp1WVcxbElqb2liMjF1YVdGMWRHZ3RZWFYwYURBaUxDSjJaWEp6YVc5dUlqb2lNUzQwTGpFaWZRPT0iLCJyZXNwb25zZV90eXBlIjoiY29kZSIsInNjb3BlIjoib3BlbmlkIGVtYWlsIiwiX2NzcmYiOiJlUGJhc2xuRS1OOS1HZHg4YXVnRUo1SUJKRVJBWkxYaXR0TjgiLCJfaW50c3RhdGUiOiJkZXByZWNhdGVkIiwic3RhdGUiOiJXWk03R1ZBX3dUT05zUF9lQk5idExpNFpCOVZjNGYxaSJ9LCJpbnRlcm5hbE9wdGlvbnMiOnsicHJvdG9jb2wiOiJvYXV0aDIiLCJhdXRoMENsaWVudCI6ImV5SnVZVzFsSWpvaWIyMXVhV0YxZEdndFlYVjBhREFpTENKMlpYSnphVzl1SWpvaU1TNDBMakVpZlE9PSIsInJlc3BvbnNlX3R5cGUiOiJjb2RlIiwic2NvcGUiOiJvcGVuaWQgZW1haWwiLCJfY3NyZiI6ImVQYmFzbG5FLU45LUdkeDhhdWdFSjVJQkpFUkFaTFhpdHROOCIsIl9pbnRzdGF0ZSI6ImRlcHJlY2F0ZWQiLCJzdGF0ZSI6IldaTTdHVkFfd1RPTnNQX2VCTmJ0TGk0WkI5VmM0ZjFpIn0sIndpZGdldFVybCI6Imh0dHBzOi8vY2RuLmF1dGgwLmNvbS93Mi9hdXRoMC13aWRnZXQtNS4xLm1pbi5qcyIsImlzVGhpcmRQYXJ0eUNsaWVudCI6ZmFsc2UsImF1dGhvcml6YXRpb25TZXJ2ZXIiOnsidXJsIjoiaHR0cHM6Ly9taW5kdmFsbGV5LmF1dGgwLmNvbSIsImlzc3VlciI6Imh0dHBzOi8vbWluZHZhbGxleS5hdXRoMC5jb20vIn19'))));
      config.extraParams = config.extraParams || {};

      var connection = ['Username-Password-Authentication', 'facebook'];
      var prompt     = config.prompt;
      var languageDictionary;
      var language;

      if (config.dict && config.dict.signin && config.dict.signin.title) {
        languageDictionary = { title: config.dict.signin.title };
      } else if (typeof config.dict === 'string') {
        language = config.dict;
      }

      var mindvalleyDictionary = {
        loginSubmitLabel: 'Iniciar sesión',
        loginWithLabel: 'Continua con %s',
        emailInputPlaceholder: 'Email',
        passwordInputPlaceholder: 'Contraseña',
        forgotPasswordAction: "¿Olvidaste tu contraseña?",
        title: "BIO 5D",
        forgotPasswordTitle: "Olvido clave"
      }
      var mergedDictionary = _.merge(languageDictionary, mindvalleyDictionary);

      var loginHint = config.extraParams.login_hint;

      var initializationOptions = {
        auth: {
          redirectUrl:  config.callbackURL,
          responseType: (config.internalOptions || {}).response_type || (config.callbackOnLocationHash ? 'token' : 'code'),
          params:       config.internalOptions,
          redirect: false,
          sso: true
        },
        container:          'widget-container',
        assetsUrl:          config.assetsUrl,
        allowedConnections: connection ? connection : null,
        rememberLastLogin:  !prompt,
        language:           language,
        languageDictionary: mergedDictionary,
        prefill:            loginHint ? { email: loginHint, username: loginHint } : null,
        closable:           false,
        socialButtonStyle:  'big',
        allowSignUp:        false
      }

      var lock = new Auth0Lock(config.clientID, config.auth0Domain, initializationOptions);

      if (getErrorFromCallbackURL() == '') {
        lock.show();
      } else {
        lock.show({
          flashMessage:{
            type: 'error',
            text: getErrorFromCallbackURL()
          }
        });
      }

      function getQueryParameter(url, name) {
        name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
        var regex = new RegExp("[\\?&]" + name + "=([^&]*)"),
            results = regex.exec(url);
        return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
      }

      function getErrorFromCallbackURL() {
        return getQueryParameter(config.callbackURL, 'error_description');
      }

      window.onload = function() {
        setTimeout(togglePassword, 1000);
      }

      function togglePassword(){
        var iEye = document.createElement('i');
        iEye.className = 'fa fa-eye';
        var iEyeSlash = document.createElement('i');
        iEyeSlash.className = 'fa fa-eye-slash';
        var inputFieldWrapper = document.querySelector('.auth0-lock-input-password .auth0-lock-input-wrap');
        inputFieldWrapper.appendChild(iEye);
        inputFieldWrapper.appendChild(iEyeSlash);
        var inputField = inputFieldWrapper.querySelector('input');

        var eyeEl = document.querySelector('.auth0-lock-input-password .auth0-lock-input-wrap .fa-eye');
        var eyeSlashEl = document.querySelector('.auth0-lock-input-password .auth0-lock-input-wrap .fa-eye-slash');
        eyeEl.addEventListener('click', function() {
          this.style.display = 'none';
          eyeSlashEl.style.display = 'inline-block';
          inputField.type = 'text';
        });
        eyeSlashEl.addEventListener('click', function(){
          this.style.display = 'none';
          eyeEl.style.display = 'inline-block';
          inputField.type = 'password';
        });
      };
    </script>
  </body>
</html>