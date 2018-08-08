<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,700" rel="stylesheet">
  <style>
  body, html {
      height: 100%;
      margin: 0;
  }

  .bgimg {
      background-image: url("/images/1.jpg");
      height: 100%;
      background-position: center;
      background-size: cover;
      position: relative;
      color: black;
      font-family: "Nunito Sans", "Helvetica Neue", Helvetica, Arial, sans-serif;
      font-size: 25px;
  }

  .topleft {
      position: absolute;
      top: 0;
      left: 16px;
  }

  .bottomleft {
      position: absolute;
      bottom: 0;
      left: 16px;
  }

  .middle {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      text-align: center;
  }

  hr {
      margin: auto;
      width: 40%;
  }

  input[type=text], select {
    width: 30%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
.subscribe {
  background-color: #568395;
  color: #fff;
 font-size: 25px;
 font-weight: 300;
 padding:5px 25px 8px 25px;
  border: 1px;
  border-radius: 4px;
  margin-left: 10px;
  transition: 0.5s;
}
button.subscribe:hover {
  background-color: #fff;
  color: #568395;
  border: 1px solid #568395;
  border-radius: 4px;
  cursor: pointer;
}
  </style>
</head>
<body>

<div class="bgimg">
  <div class="middle">
    <img src="/images/logo.png" />
    <p>Something exciting coming this way</p>
    <p id="demo" style="font-size:30px"></p>
    <hr>
    <p>Stay in the know:</p>
    <div class="input">
      <form method="POST" action="/subscription">
        {{csrf_field()}}
        <input style="width: 100%; color:black;" type="text" placeholder="your email" name="email" required>
        <button class="subscribe" type="submit">subscribe</button>
      </form>
    </div>
  </div>
  <div class="bottomleft">
  </div>
</div>

<script>
// Set the date we're counting down to
var countDownDate = new Date("Aug 14, 2018 12:00:00").getTime();

// Update the count down every 1 second
var countdownfunction = setInterval(function() {

    // Get todays date and time
    var now = new Date().getTime();

    // Find the distance between now an the count down date
    var distance = countDownDate - now;

    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    // Output the result in an element with id="demo"
    document.getElementById("demo").innerHTML = days + "d " + hours + "h "
    + minutes + "m " + seconds + "s ";

    // If the count down is over, write some text
    if (distance < 0) {
        clearInterval(countdownfunction);
        document.getElementById("demo").innerHTML = "EXPIRED";
    }
}, 1000);
</script>

</body>
</html>
