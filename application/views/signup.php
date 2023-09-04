<style>
	@import url("https://fonts.googleapis.com/css2?family=Nunito:wght@400;800&display=swap");

:root {
  --main-color: #6dd5ed;
  --secondary-color: #2193b0;
  --gradient: linear-gradient(
    135deg,
    var(--main-color),
    var(--secondary-color)
  );
}

.login-form .social-container {
  margin: 20px 0;
}
.social-container a {
  border: 1px solid #dddddd;
  border-radius: 50%;
  display: inline-flex;
  justify-content: center;
  align-items: center;
  margin: 0 5px;
  height: 40px;
  width: 40px;
} 

.login-form .form-container span {
  font-size: 12px;
}

.login-form a {
  color: #333;
  font-size: 14px;
  text-decoration: none;
  margin: 15px 0;
}
.login-form {
	padding:80px 0;
  }
button.log-btn,
button.ghost {
  cursor: pointer;
  border-radius: 20px;
  border: 1px solid var(--main-color);
  background: var(--main-color);
  color: #fff;
  font-size: 12px;
  font-weight: bold;
  padding: 12px 45px;
  letter-spacing: 1px;
  text-transform: uppercase;
  transition: transform 80ms ease-out;
}

button.log-btn:hover {
  background: var(--secondary-color);
}

button.log-btn:active {
  transform: scale(0.95);
}

button.log-btn:focus {
  outline: none;
}

button.ghost {
  background-color: transparent;
  border-color: #fff;
}

button.ghost:hover {
  background: #fff;
  color: var(--secondary-color);
}

.form-container form {
  background-color: #fff;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  padding: 0px 50px;
  height: 100%;
  text-align: center;
}

.form-container form  input {
  background-color: #eee;
  border: none;
  padding: 12px 15px;
  margin: 8px 0;
  width: 100%;
  font-family: inherit;
}

.login-form .container {
  background-color: #fff;
  width:786px;
}

.login-form .form-container {
  width: 100%;
  box-shadow: rgba(14, 30, 37, 0.12) 0px 2px 4px 0px, rgba(14, 30, 37, 0.32) 0px 2px 16px 0px;
  border-radius: 10px;
  padding:30px;
}
@media (max-width: 768px) {
  .login-form .container {
    width: 100%;
  }
  .login-form .form-container {
    top: 0;
    height: 100%;
    width: 100%;
  }
  .login-form .sign-up-container {
    left: 0;
    width: 100%;
    height: 100%;
	
	
  }
}
</style>
<body>
<section class="login-form">
<div class="container" id="container">
      <div class="form-container sign-up-container">
        <form action="<?=base_url('main/create')?>" method="post">
          <h1>Sign Up</h1>
          <div class="social-container">
            <a href="#" class="social"><i class="fa fa-facebook"></i></a>
            <a href="#" class="social"><i class="fa fa-google"></i></a>
            <a href="#" class="social"><i class="fa fa-envelope"></i></a>
          </div>
          <span>or use your email for registration</span>
          <input type="text" name="username" placeholder="Name" />
          <input type="email" name="usermail" placeholder="Email" />
          <input type="password" name="userpassword" placeholder="Password" />
		  <p>Already Have An Account ? <a href="<?=base_url('main/login');?>" class="text-primary">signin here</a></p>
          <button type="submit" name="submit" value="create"  class="log-btn">Sign Up</button>
        </form>
      </div>
    </div>
</section>	
</body>

