<nav class="navbar navbar-fixed-top" id="mainNav">
  <div class="container">
    <div class="navbar-header">
      <span class="helper"></span>
      <a href="/" class="navbar-brand"><img src="/images/logo.png"/></a>
    </div>
    <div>
      <ul class="nav">
        <li><a href=""><i class="far fa-social fa-envelope"></i></a></li>
        <li><a href=""><i class="fab fa-social fa-instagram"></i></a></li>
        <li class="bottom-hover {{ Request::is('/') ?"active" : "" }}"><a href="/">ABOUT ME</a></li>
        <li class="bottom-hover {{ Request::is('body-and-soul') ?"active" : "" }}"><a href="/body-and-soul">BODY& SOUL</a></li>
        <li class="bottom-hover {{ Request::is('mindfulness') ?"active" : "" }}"><a href="/mindfulness">MINDFULNESS</a></li>
        <li class="bottom-hover {{ Request::is('yogi') ?"active" : "" }}"><a href="/yogi">YOGI</a></li>
        <li class="bottom-hover {{ Request::is('travel') ?"active" : "" }}"><a href="/travel">TRAVEL</a></li>
        <li class="bottom-hover {{ Request::is('food') ?"active" : "" }}"><a href="/food">FOOD</a></li>
      </ul>
    </div>
  </div>
</nav>
