<div class="mainnav">
  <ul class="nav">
    <a href="/" class="logo"><img src="/images/logo.png"/></a>
    <i class="fas fa-bars fa-menu"></i>
    <li class="bottom-hover {{ Request::is('food') ?"active" : "" }}"><a href="/food">FOOD</a></li>
    <li class="bottom-hover {{ Request::is('travel') ?"active" : "" }}"><a href="/travel">TRAVEL</a></li>
    <li class="bottom-hover {{ Request::is('yogi') ?"active" : "" }}"><a href="/yogi">YOGI</a></li>
    <li class="bottom-hover {{ Request::is('mindfulness') ?"active" : "" }}"><a href="/mindfulness">MINDFULNESS</a></li>
    <li class="bottom-hover {{ Request::is('body-and-soul') ?"active" : "" }}"><a href="/body-and-soul">BODY& SOUL</a></li>
    <li class="bottom-hover {{ Request::is('/') ?"active" : "" }}"><a href="/">ABOUT ME</a></li>
    <li><a href=""><i class="fab fa-social fa-instagram"></i></a></li>
    <li><a href=""><i class="far fa-social fa-envelope"></i></a></li>
  </ul>
</div>
