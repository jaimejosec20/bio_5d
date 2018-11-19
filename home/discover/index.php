<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" media="all" href="../assets/mindvalley-fonts-d194fc728fda6349d9f58184ba290add9ab10d11d496aff23cacbbbd49d96987.css" />
  <script>
  (function(){
    // hide content till load (or 3 seconds) to prevent FOUT
    var d = document, e = d.documentElement, s = d.createElement('style');
    s.textContent = 'body{visibility:hidden}';
    var r = document.getElementsByTagName('script')[0];
    r.parentNode.insertBefore(s, r);
    function f(){ s.parentNode && s.parentNode.removeChild(s); }
    addEventListener('load',f,false);
    setTimeout(f,3000);
  })();
  </script>

  <link
    type="text/plain"
    rel="author"
    href="../humans.txt"
  />
  <!-- Google Tag Manager -->
  <script>
    (function (w, d, s, l, i) {
      w[l] = w[l] || []; w[l].push(
        { 'gtm.start': new Date().getTime(), event: 'gtm.js' }
      ); var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
          'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-M4ZRBSN');
  </script>
  <!-- End Google Tag Manager -->

  <title>Mindvalley Academy</title>

  <link rel='icon' type='image/ico' href='../favicon.ico' />
  <link rel='mask-icon' href='one-wing.svg' color='#2b75b4' />

  <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, minimal-ui' />
  <meta name='application-name' content='Mindvalley Academy' />
  <meta name='description' content='Log in to your Mindvalley Account to access your course library, discover other courses, apps and trainings, and manage your profile, billing, and email settings.' />

  <link href='https://fonts.googleapis.com/css?family=Roboto:300,400,400italic,500,700' rel='stylesheet' type='text/css' />
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400italic,400,600,700' rel='stylesheet' type='text/css' />

    <script src="../assets/darkui-8fc23c3360beac547bae5ddd931a22903e1ec70ccc4588b45f0f0d1ddd16ae8b.js"></script>
    <link rel="stylesheet" media="all" href="../assets/darkui-f4a87149f7b31af10314debe07ef4456ea4c90ec67fb565dfb735461e10881bc.css" />

    <meta name="csrf-param" content="authenticity_token" />
<meta name="csrf-token" content="EGx9nysabUcxNn/jjNbnb/lLrDHbwNX/WHwEBqkIKLG+ptj/lE2zUXE2Zh2+8lIQBLNJ3CMJ0cjwVpOVB73L8A==" />

    <script src="../packs/manifest-1f99d25fe3442a066ea8.js"></script>
    <script src="../packs/vendor-c7f84c68cf9c94c52ef4.js"></script>
    <script src="../packs/app-2db183de31168f7fe751.js"></script>
    <link rel="stylesheet" media="screen" href="../packs/vendor-f6d0f15cfb84e1d67d94841208f3db89.css" />
    <link rel="stylesheet" media="screen" href="../packs/app-c9d750c62a213c7c870f4181edef93af.css" />

    <script
      type="text/javascript"
      src="../packs/zuora-min.js"
    /></script>

</head>

<body
  class='darkui '
  data-uid='auth0|3606400'
  data-bearer='eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJodHRwczovL2hvbWUubWluZHZhbGxleS5jb20vbG9naW5Qcm92aWRlciI6ImZhY2Vib29rIiwiZW1haWwiOiJqYWltZWpvc2VjQGhvdG1haWwuY29tIiwiZW1haWxfdmVyaWZpZWQiOnRydWUsImlzcyI6Imh0dHBzOi8vbWluZHZhbGxleS5hdXRoMC5jb20vIiwic3ViIjoiYXV0aDB8MzYwNjQwMCIsImF1ZCI6IktSYUZtQ2VrdEF0WFI2c2QyZ3VtV1ZGUWE2QW5YbndGIiwiaWF0IjoxNTQxMDIwMjQ1LCJleHAiOjE1NDIyMjk4NDV9.SelGPnjEphkcsWZbuEcdyLIMVnET-g711v5uFL3qD5w'
  data-locale='es'
  data-user-info-token='v_K93Xkie4bch10YL7tc1AXSsKNi2WQh'
  data-user-first-name='Jaime'
  data-avatar='https://platform-lookaside.fbsbx.com/platform/profilepic/?asid=10155871247267960&amp;width=999999&amp;ext=1543534140&amp;hash=AeTzH8GT40VgZg3K'
  data-login-provider = ''
  data-is-social-signup = ''
  data-is-social-merge = ''
>

  <!-- Google Tag Manager (noscript) -->
  <noscript>
    <iframe
      src="../ns.html?id=GTM-PTCF63"
      height="0"
      width="0"
      style="display:none;visibility:hidden"
    ></iframe>
  </noscript>
  <!-- End Google Tag Manager (noscript) -->

  <div id="app" :class="[{'events' : this.$store.getters['events/isEventsPage']}, {'masterclasses': this.$store.getters['masterclasses/isMasterclassPage']}]">
    <div class="full-width-container">
      <nav-bar
        logo-src="../assets/logo-e6af9bdf79039f7149fd75e83101205f38bc4b9fe05f4711ee5a25a3d0b43d47.svg"
        current-page="discover"
        :username="this.$store.getters.firstName"
        :profile-page="this.$settings.profile.url"
        :catalogue-page="this.$settings.catalogue.url"
        :billing-page="this.$settings.billing.url"
        :email-settings-page="this.$settings.emailSettings.url"
      >
      </nav-bar>
      <keep-alive>
        <router-view></router-view>
      </keep-alive>
      
      <div class="app-version" id="application-version">
        

      </div>
      <event-tracker></event-tracker>
      <elula-fetcher></elula-fetcher>
      <video-modal/>
    </div>
  </div>
</body>
</html>
