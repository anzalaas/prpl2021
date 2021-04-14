<!DOCTYPE html>
<html>
 <head>
  <title>Sign Up</title>
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
  <style>
    body{
      background-image: url('bg2.jpg');
      background-repeat: no-repeat;
      background-size:cover
    }
    #card 
    {
        background: #fbfbfb;
        border-radius: 8px;
        box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);
        height: 700px;
        margin: 6rem auto 8.1rem auto;
        width: 329px;
    }
    
    #card-content 
    {
      padding: 12px 44px;
    }
    #card-title {
      font-family: "Raleway Thin", sans-serif;
      letter-spacing: 4px;
      padding-bottom: 23px;
      padding-top: 13px;
      text-align: center;
    }
    .underline-title {
      background: -webkit-linear-gradient(right, #6E2C00, #935116);
      height: 2px;
      margin: -1.1rem auto 0 auto;
      width: 89px;
  }
    a{
    text-decoration: none;
    }
    label 
    {
    font-family: "Raleway", sans-serif;
    font-size: 11pt;
    }
    .form
    {
    align-items: left;
    display: flex;
    flex-direction: column;
    }
    .form-content
    {
    background: #fbfbfb;
    border: none;
    outline: none;
    padding-top: 14px;
    }  
    #signup 
    {
    color: #2dbd6e;
    font-family: "Raleway", sans-serif;
    font-size: 10pt;
    margin-top: 16px;
    text-align: center;
   }
   #submit-btn 
   {
    background: -webkit-linear-gradient(right, #6E2C00, #935116);
    border: none;
    border-radius: 21px;
    box-shadow: 0px 1px 8px #24c64f;
    cursor: pointer;
    color: white;
    font-family: "Raleway SemiBold", sans-serif;
    height: 42.3px;
    margin: 0 auto;
    margin-top: 50px;
    transition: 0.25s;
    width: 153px;
    }
    #submit-btn:hover 
    {
    box-shadow: 0px 1px 18px #E9977A;
    }  
</style>
 </head>
 <body> <div id="card"> <div id="card-content">
  <div id="card-title">
    <h2>SIGN UP</h2>
    <div class="underline-title"></div>
    <form method="post" class="form">
<label for="first name" style="padding-top: 22px">&nbsp;First Name</label>
 <input
  id="first name"
  class="form-content"
  type="name"
  name="first name"
  required />
  <div class="from-border"></div>
<label for="last name" style="padding-top: 22px">&nbsp;Last Name</label>
  <input
   id="last name"
   class="form-content"
   type="name"
   name="last name"
   required />
   <div class="from-border"></div> 
<label for="user-email" style="padding-top:13px">&nbsp;Email</label>
  <input
   id="user-email"
   class="form-content"
   type="email"
   name="email"
   autocomplete="on"
   required />
  <div class="form-border"></div>
<label for="user-password" style="padding-top:22px">&nbsp;Password</label>
  <input
   id="user-password"
   class="form-content"
   type="password"
   name="password"
   required />
  <div class="form-border"></div> 
<label for="user-password" style="padding-top:22px">&nbsp;Confirm Password</label>
  <input
   id="user-password"
   class="form-content"
   type="password"
   name="confirm password"
   required />
  <div class="form-border"></div> 
<label for="phone" style="padding-top:22px">&nbsp;Phone</label>
  <input
   id="phone"
   class="form-content"
   type="phone"
   name="phone"
   required />
  <div class="form-border"></div> 
<label for="id" style="padding-top:22px">&nbsp;Id</label>
  <input
   id="id"
   class="form-content"
   type="id"
   name="id"
   required />
  <div class="form-border"></div> 
<input id="submit-btn" type="submit" name="submit" value="SIMPAN" />
</form>


  </div>
 </div> </body>
</html>