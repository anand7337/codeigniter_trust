<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Model-Website</title>
    <link rel="icon" href="<?= base_url() ?>assets/images/logo/Jayson Trust Logo-01.png" >
    
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Prata|Rubik:300,400,500,700&amp;display=swap" rel="stylesheet">

	<!-- <link rel="icon" href="<?= base_url() ?>assets/images/logo/Jayson Trust Logo-01.png" type="image/x-icon"> -->
    <style>

        *{
            margin: 0;
            padding: 0;
            box-sizing: 0;
            font-family: sans-serif;
        }

     nav{
        display: flex;
        align-items: center;
        justify-content: space-around;
     }

     .navbar{
        background-color: red;
     }

     .lists ul li{
        list-style-type: none;
        display: inline-block;
        /* background-color: red; */
        color:#fff;
        margin: 15px;
        padding: 10px;
        cursor: pointer;
        transition: 0.5s;
     }

     .lists ul li:hover{
        color:white;
        background-color: black;
        border-radius: 5px;
        transition: 0.5s;
     }

     .logo h2{
        color:white;
        cursor: pointer;
     }

    .conent{
        display:flex ;
        margin: 50px; 
       
    } 
    .left{
        order: 3;
        background-color: blueviolet;
        color:white;
        padding: 30px;
        /* margin: 5px; */
       
        
    }
    .center{
        order:2;
        background-color: lightblue;
        color:white;
        padding: 30px;
        /* margin: 5px; */
    }
    .right{
        order:1;
        background-color: lightcoral;
        color:white;
        padding: 30px;
        /* margin: 5px; */
    }
    @media screen and (max-width:600px){
    .conent{
        display: block;
        margin: 50px; 
        flex-direction:column;
    } 
    .left {
        margin-bottom: 40px;   
             
    }
    .center{
        margin-bottom: 40px;
    }
    .left{
        order: 3;
        background-color: blueviolet;
        color:white;
        padding: 30px;
        
    }
    .center{
        order:2;
        background-color: lightblue;
        color:white;
        padding: 30px;
    }
    .right{
        order:1;
        background-color: lightcoral;
        color:white;
        padding: 30px;
    }
  }
  .footer{
    background-color: brown;
    /* padding: 0px 0px 90px 0px;  */
    padding-bottom: 30px;
  }
  footer{
      width: 95%;
	 margin: auto;
	 /* padding: 30px 10px; */
     padding: 80px;
	 display: flex;
	 flex-wrap: wrap;
	 box-sizing: border-box;
	 justify-content: center;
     margin-top: 250px
  }
  .foot-items{
    width: 23.33%;
	padding: 10px 10px;
	box-sizing: border-box;
	color: black;
  }
  .foot-items ul li{
    list-style-type: none;
  }
  .foot-itemss{
    width: 30%;
	padding: 10px 10px;
	box-sizing: border-box;
	color: black;
  }

  .contact{
    display: flex;
   align-items:center ;
   width: 80%;
  margin: auto;
  justify-content: space-around;
  }
  
  input[type="text"]{
      padding: 15px;
      width: 150%;
      font-size: 15px;
  }

  input[type='text']:focus{
    /* background-color: yellow; */
    border: 1px solid brown;
    outline: none;
  }

  input[type="submit"]{
    padding: 5px;
    width: 167%;
    background-color: black;
    color:#fff;
    padding: 10px;
    font-family: sans-serif;
    font-weight: 600;
    cursor: pointer;
    border: 2px solid #fff;
    transition: 0.5s;
  }

  input[type="submit"]:hover{
    background-color: brown;
    color: white;
    border: 2px solid #fff;
    transition: 0.5s;
  }

 .head{
    margin-bottom: 10px;
 }

 .yakobu{
    display: flex;
   justify-content: space-around;
 }

 .yakobu a{
    text-decoration:none ;
    color:black;
 }

 .yakobu a:hover{
    color:blue; 
    text-decoration: underline;
 }

 .line{
    width: 20%;
    height: 5%;
    background-color: white;
    padding: 1px;
    display:none;
    cursor: pointer;
 }


</style>
</head>
<body>
    <di class="container">
<div class="navbar">
    <nav>
     <div class="logo">
        <h2>Logo</h2>
     </div>
        <div class="lists">
            <ul>
                <li class="drop_down">
                 Home
                </li>
                <li>About</li>
                <li>Services</li>
                <li>Team Member</li>
                <li>Contact</li>
            </ul>
        </div>
    </nav>
</div>



<section class="home">
    <div class="conent">
    <div class="left">
            <p>
               1. JAYSON Charitable Trust, located in the heart of Chennai, India is a 
               charitable foundation dedicated to helping those in need. With the dedication of our volunteers, 
               staff members, and partners, we strive to improve the lives of everyone who needs help within the community. 
               Contact us to see what you can do to bring about positive change.
            
            </p>
    </div>


    <div class="center">
        <p>
        2. “Always give without remembering and always receive without forgetting. ...
     JAYSON Charitable Trust, located in the heart of Chennai, India is a charitable foundation dedicated to helping those in need. With the dedication of our volunteers, staff members, and partners, we strive to improve the lives of everyone who needs help within the community. Contact us to see what you can do to bring about positive change.
        </p>
         </div>

    <div class="right">
   <p>
   3. “Always give without remembering and always receive without forgetting. ...
JAYSON Charitable Trust, located in the heart of Chennai, India is a charitable foundation dedicated to helping those in need. With the dedication of our volunteers, staff members, and partners, we strive to improve the lives of everyone who needs help within the community. Contact us to see what you can do to bring about positive change.
   </p>
    </div>
    </div>
</section>


<section class="contact">
    <div class="contact_notes">
        <div class="con">
            <h1>contact</h1>
        </div>
        <p>ADDRESS</p>
    </div>
    <div class="form">
           <form action="">
            <table cellspacing="40">
                <tr>
                    <td><input type="text" placeholder="Name..."></td>
                </tr>
                <tr>
                    <td><input type="text" placeholder="Email..."></td>
                </tr>
                <tr>
                    <td><input type="text" placeholder="Password..."></td>
                </tr>
                <tr>
                    <td><input type="text" placeholder="Contact..."></td>
                </tr>
                <tr class="submit">
                    <td><input type="submit" value="submit"></td>
                </tr>
            </table>
           </form>
    </div>
</section>


<section class="footer">
<footer>
   
    <div class="foot-itemss">
        <div class="head">
            <h1>About</h1>
            <div class="line"></div>
        </div>
        <p>“Always give without remembering and always receive without forgetting.
            Charitable Trust, located in the heart of Chennai, India is a charitable foundation dedicated
        </p>
    </div>
    <div class="foot-items">
        <div class="head">
            <h1>Links</h1>
            <div class="line"></div>

        </div>
    <ul>
        <li>Home</li>
        <li>About</li>
        <li>Services</li>
        <li>Team Members</li>
        <li>Contacts</li>
    </ul>
    </div>
    <div class="foot-items">
        <div class="head">
            <h1>Contact</h1>
            <div class="line"></div>
        </div>
        <ul>
            <li>Address: No.5*******</li>
            <li>+91999999999</li>
            <li>Chennai</li>
        </ul>
    </div>
    <div class="foot-items">
        <div class="head">
            <h1>Member</h1>
            <div class="line"></div>
        </div>
        <ul>
            <li>Membership</li>
            <li>Travels</li>
            <li>Sports</li>
            <li>Support</li>
        </ul>
    </div>
</footer>
<div class="icon">
<li><a href="#"><span class="fa fa-instagram"></span></a></li>
<li><a href="#"><span class="fa fa-linkedin"></span></a></li>
</div>
<div class="yakobu">
    <div class="devlop1">
        <a href=""> © All Right Reserved - 2023 </a>
    </div>
   <div class="develop2">
    <a href="">Developed By Anand Web Developer</a>
   </div>
</div>
</section>
</div>

</body>
</html>