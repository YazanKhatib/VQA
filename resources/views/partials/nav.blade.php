<style>
  .view {
      background: url("https://mdbootstrap.com/img/Photos/Others/img (40).jpg")no-repeat center center;
      background-size: cover;
  }

  .navbar {
      background-color: transparent;
  }

  .top-nav-collapse {
      background-color: #4285F4;
  }

  @media only screen and (max-width: 768px) {
      .navbar {
          background-color: #4285F4;
      }
  }

  html,
  body,
  header,
  .view {
  height: 100%;
  }
</style>

<html lang="en" class="full-height">

<!--Main Navigation-->
<header>

  <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
    <a class="navbar-brand" href=""><strong>VQA</strong></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item {{ Request::is('/') ? "active" : "" }}">
          <a class="nav-link" href="{{route('home')}}">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item {{ Request::is('demo') ? "active" : "" }}">
          <a class="nav-link" href="{{route('demo')}}">Demo</a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="view intro-2" style="">
    <div class="full-bg-img">
      <div class="mask flex-center">
        <div class="container text-center white-text wow fadeInUp">
          <h2 class="display-4 rgba-black-light px-3 py-2">VISUAL QUESTION ANSWERING</h2>
          <br>
          <h3 class="px-3 py-2" >Computer vision task where a system is
                given a text-based question about an image, and it must infer the answer.</h5>
          <br>

        </div>
      </div>
    </div>
  </div>

</header>
<!--Main Navigation-->
