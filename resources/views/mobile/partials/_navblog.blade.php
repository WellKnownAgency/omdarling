<div class="mainnavblog">
  <ul class="nav">
    <a href="/" class="logo"><img src="/images/logo2.svg"/></a>
    <i id="clicko" class="fas fa-bars fa-menublog"></i>
    <li class="bottom-hoverblog {{ Request::is('/') ?"active" : "" }}"><a href="/">HOME</a></li>
    <li class="bottom-hoverblog {{ Request::is('food') ?"active" : "" }}"><a href="/food">FOOD</a></li>
    <li class="bottom-hoverblog {{ Request::is('travel') ?"active" : "" }}"><a href="/travel">TRAVEL</a></li>
    <li class="bottom-hoverblog {{ Request::is('yoga') ?"active" : "" }}"><a href="/yoga">YOGA</a></li>
    <li class="bottom-hoverblog {{ Request::is('mindfulness') ?"active" : "" }}"><a href="/mindfulness">MINDFULNESS</a></li>
    <li class="bottom-hoverblog {{ Request::is('body-and-soul') ?"active" : "" }}"><a href="/body-and-soul">BODY&SOUL</a></li>
    <li class="bottom-hoverblog {{ Request::is('/about-me') ?"active" : "" }}"><a href="/about-me">ABOUT ME</a></li>
    <li><a href=""><i class="fab fa-social fa-instagram"></i></a></li>
    <li><a href=""><i class="far fa-social fa-envelope"></i></a></li>
  </ul>
</div>
