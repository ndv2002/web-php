
<nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto" href="/">Home</a></li>
          <li><a class="nav-link scrollto" href="/course">Courses</a></li>
          <li><a class="nav-link scrollto" href="/aboutus">About</a></li>
          <li><a class="nav-link scrollto" href="/news">News</a></li>
          <!-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li> -->
          <li><a class="nav-link scrollto" href=".#footer">Contact</a></li>
          <?php if (isset($_SESSION['auth'])) : ?>
            <li><a class="nav-link scrollto" href="/user/profile">Profile</a></li>
            <li><a class="nav-link scrollto" href="/authorize/logout">Logout</a></li>
          <?php else : ?>
          <li><a class="nav-link scrollto" href="/authorize/login">Login</a></li>
          <?php endif; ?>
        
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
