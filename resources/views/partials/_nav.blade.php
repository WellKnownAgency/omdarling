<nav class="navbar navbar-fixed-top" id="mainNav">
  <div class="container">
    <div class="navbar-header">
      <span class="helper"></span>
      <a href="/" class="navbar-brand"><img src="/images/logoom.svg" width:/></a>
    </div>
    <div>
      <ul class="nav">
        <li><a href="mailto:om.darlings@gmail.com"><i class="far fa-social fa-envelope"></i></a></li>
        <li><a href="https://www.instagram.com/omdarlingyoga/" target="_blank"><i class="fab fa-social fa-instagram"></i></a></li>
        <li class="bottom-hover {{ Request::is('about-me') ?"active" : "" }}"><a href="/about-me">ABOUT ME</a></li>
        <li class="bottom-hover {{ Request::is('blog') ?"active" : "" }}"><a href="/blog">BLOG</a></li>
        <li class="bottom-hover {{ Request::is('/') ?"active" : "" }}"><a href="/">HOME</a></li>
      </ul>
    </div>
  </div>
</nav>
