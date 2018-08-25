<nav class="navbar navbar-fixed-top" id="mainNav">
  <div class="container">
    <div class="navbar-header">
      <span class="helper"></span>
      <a href="/" class="navbar-brand"><img src="/images/logo.svg" width:/></a>
    </div>
    <div>
      <ul class="nav">
        <li><a href="mailto:om.darlings@gmail.com"><i class="far fa-social fa-envelope"></i></a></li>
        <li><a href="https://www.instagram.com/anastasia_kulinich/"><i class="fab fa-social fa-instagram"></i></a></li>
        <li class="bottom-hover {{ Request::is('about-me') ?"active" : "" }}"><a href="/about-me">ABOUT ME</a></li>
        <li class="bottom-hover {{ Request::is('body-and-soul') ?"active" : "" }}"><a href="/body-and-soul">BODY& SOUL</a></li>
        <li class="bottom-hover {{ Request::is('mindfulness') ?"active" : "" }}"><a href="/mindfulness">MINDFULNESS</a></li>
        <li class="bottom-hover {{ Request::is('yoga') ?"active" : "" }}"><a href="/yoga">YOGA</a></li>
        <li class="bottom-hover {{ Request::is('travel') ?"active" : "" }}"><a href="/travel">TRAVEL</a></li>
        <li class="bottom-hover {{ Request::is('food') ?"active" : "" }}"><a href="/food">FOOD</a></li>
        <li class="bottom-hover {{ Request::is('/') ?"active" : "" }}"><a href="/">HOME</a></li>
      </ul>
    </div>
  </div>
</nav>
