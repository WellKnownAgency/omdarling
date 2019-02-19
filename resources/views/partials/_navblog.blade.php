<nav class="navbar-blog navbar-fixed-top" id="mainNav">
  <div class="container">
    <div class="navbar-headerblog">
      <span class="helper"></span>
      <a href="/" class="navbar-brand"><img src="/images/logoomw.svg"/></a>
    </div>
    <div>
      <ul class="navblog">
        <li><a href="mailto:om.darlings@gmail.com"><i class="far fa-socialblog fa-envelope"></i></a></li>
        <li><a href="https://www.instagram.com/omdarlingyoga/" target="_blank"><i class="fab fa-socialblog fa-instagram"></i></a></li>
        <li class="bottom-hoverblog {{ Request::is('about-me') ?"active" : "" }}"><a href="/about-me">ABOUT ME</a></li>
        <li class="bottom-hoverblog {{ Request::is('blog') ?"active" : "" }}"><a href="/blog">BLOG</a></li>
        <li class="bottom-hover {{ Request::is('/') ?"active" : "" }}"><a href="/">HOME</a></li>
      </ul>
    </div>
  </div>
</nav>
