<!-- Created by Morpheus -->

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Error 404</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="author" content="Morpheus">
    <meta name="copyright" content="2018, Morpheus">
    <meta name="keywords" content="404, page">
    <meta name="description" content="error 404 page">
    <style media="screen">
    @import url('https://fonts.googleapis.com/css?family=Shrikhand');
      *{
        margin:0;
        padding:0;
      }
      body{
        text-align: center;
        font-family: 'Shrikhand', cursive;
      }
      .container{
        background: linear-gradient(225deg,  rgb(114, 155, 243), rgb(115, 14, 209));
        height:100vh;
        width: 100vw;
      }
      h1{
        background: rgba(31, 2, 48, 0.7);
        background: url('https://i.imgur.com/8ZCVIk9.jpg');
        background-attachment: fixed;
        border-bottom: 20px inset #314;
        border-radius: 50%;
        margin-left: 30px;
        margin-right: 30px;
        font-size: 80px;
        font-weight: bolder;
        letter-spacing: 10px;
        padding-top: 20vh;
      }
      .heading{
        color: rgba(1, 4, 34, 0.3);
        background-clip:text;
        -webkit-background-clip: text;
      }
      .brokenHinge{
        display: inline-block;
        transform-origin: 0% 100%;
        color: #214;
        animation: brokenHinge 1.5s linear 1s forwards;
      }
      .textMessage{
        margin-top: 20vh;
        font-weight: lighter;
        padding: 20px;
      }
      .tryAgain{
        margin-top: 10px;
      }



      @keyframes brokenHinge {
        0%{transform: rotate(0deg);}
        25%{transform: rotate(90deg);}
        40%{transform: rotate(180deg);}
        50%{transform: rotate(230deg);}
        60%{transform: rotate(180deg);}
        70%{transform: rotate(120deg);}
        80%{transform: rotate(180deg);}
        90%{transform: rotate(200deg);}
        100%{transform: rotate(170deg);}
      }
    </style>
  </head>
  <body>
    <div class="container">
      <h1 class="heading">40<span class="brokenHinge">4</span></h1>
      <div class="textMessage">
        Ooops Sorry! This page does not exist or something went wrong
        <div class="tryAgain">
          Try again!
        </div>
        <div class="col text-center" style="center">
            <a class="btn btn-info" href="{{ route('tasks.index')}}" role="button">BACK !!  </a>

        </div>
      </div>

    </div>
  </body>
</html>
