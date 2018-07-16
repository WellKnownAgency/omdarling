<nav class="navbar-blog navbar-fixed-top" id="mainNav">
  <div class="container">
    <div class="navbar-headerblog">
      <span class="helper"></span>
      <a href="/" class="navbar-brandblog"><img src="\images\logo2.png"/></a>
    </div>
    <div>
      <ul class="navblog">
        <li><a href="mailto:om.darlings@gmail.com"><i class="far fa-socialblog fa-envelope"></i></a></li>
        <li><a href="https://www.instagram.com/anastasia_kulinich/"><i class="fab fa-socialblog fa-instagram"></i></a></li>
        <li class="bottom-hoverblog {{ Request::is('about-me') ?"active" : "" }}"><a href="/about-me">ABOUT ME</a></li>
        <li class="bottom-hoverblog {{ Request::is('body-and-soul') ?"active" : "" }}"><a href="/body-and-soul">BODY& SOUL</a></li>
        <li class="bottom-hoverblog {{ Request::is('mindfulness') ?"active" : "" }}"><a href="/mindfulness">MINDFULNESS</a></li>
        <li class="bottom-hoverblog {{ Request::is('yogi') ?"active" : "" }}"><a href="/yogi">YOGI</a></li>
        <li class="bottom-hoverblog {{ Request::is('travel') ?"active" : "" }}"><a href="/travel">TRAVEL</a></li>
        <li class="bottom-hoverblog {{ Request::is('food') ?"active" : "" }}"><a href="/food">FOOD</a></li>
        <li class="bottom-hover {{ Request::is('/') ?"active" : "" }}"><a href="/">HOME</a></li>
      </ul>
    </div>
  </div>
</nav>
