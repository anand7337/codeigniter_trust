<!DOCTYPE html>
<html lang="en" class="form-screen">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login - Admin One Tailwind CSS Admin Dashboard</title>

  <!-- Tailwind is included -->
	<link rel="stylesheet" href="<?= base_url('dashboard_css/css/main.css')  ?>">

</head>
<body>

<div id="app">
  <section class="section main-section">
    <div class="card">
      <header class="card-header">
        <p class="card-header-title">
          <span class="icon"><i class="mdi mdi-lock"></i></span>
          Login
        </p>
      </header>
      <div class="card-content">
        <form   action="<?= base_url('main/user_admin')  ?>"  method="post">

          <div class="field spaced">
            <label class="label">Login</label>
            <div class="control icons-left">
              <input class="input" type="text" name="admin_email" placeholder="user@example.com" autocomplete="username">
              <span class="icon is-small left"><i class="mdi mdi-account"></i></span>
            </div>
            <p class="help">
              Please enter your login
            </p>
          </div>

          <div class="field spaced">
            <label class="label">Password</label>
            <p class="control icons-left">
              <input class="input" type="password" name="admin_password" placeholder="Password" autocomplete="current-password">
              <span class="icon is-small left"><i class="mdi mdi-asterisk"></i></span>
            </p>
            <p class="help">
              Please enter your password
            </p>
          </div>

          <div class="field spaced">
            <div class="control">
              <label class="checkbox"><input type="checkbox" name="remember" value="1" checked>
                <span class="check"></span>
                <span class="control-label">Remember</span>
              </label>
            </div>
          </div>

          <hr>

          <div class="field grouped">
            <div class="control">
              <button type="submit" class="button blue">
                Login
              </button>
            </div>
            <!-- <div class="control">
              <a href="index.html" class="button">
                Back
              </a>
            </div> -->
          </div>

        </form>
      </div>
    </div>

  </section>


</div>

<!-- Scripts below are for demo only -->

<script type="text/javascript" src="<?= base_url('dashboard_css/js/main.min.js') ?>"></script>
            

<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '658339141622648');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=658339141622648&ev=PageView&noscript=1"/></noscript>

<!-- Icons below are for demo only. Feel free to use any icon pack. Docs: https://bulma.io/documentation/elements/icon/ -->
<link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.9.95/css/materialdesignicons.min.css">

</body>
</html>
