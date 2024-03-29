<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile Page</title>
  <link rel="stylesheet" href="/css/styles.css">
  <script src="https://kit.fontawesome.com/426c14851d.js" crossorigin="anonymous"></script>
</head>
<body>
  <!-- Header Section  -->
  <section class="header">
    <div class="left-content">
      <a href=" {{ url('home') }} ">
        <h3 class="logo">Honghong</h3>
      </a>
      <ul class="nav-links">
        <li><a href=" {{ url('about') }}">About</a></li>
        <li><a href=" {{ url('contact') }} ">Contact</a></li>
        <li><a href=" {{ url('categories') }} ">Categories</a></li>
        <li><a href=" {{ url('faq') }} ">FAQs</a></li>
      </ul>
    </div>
    <div class="right-content">
      <h3>username</h3>
    </div>
  </section>

  <!-- Sub-header Section  -->
  <section class="sub-header">
    <div class="left-content">
      <div class="content-col">
        <button>
          <i class="fa-solid fa-heart"></i>
          <a href="#">Love+Relationships</a>
        </button>
      </div>
      <div class="content-col">
        <button>
          <i class="fa-solid fa-book-skull"></i>
          <a href="#">Confession+Secrets</a>
        </button>
      </div>
      <div class="content-col">
        <button>
          <i class="fa-solid fa-face-angry"></i>
          <a href="#">Hate </a>
        </button>
    </div>
      <div class="content-col">
        <button>
          <i class="fa-solid fa-microphone"></i>
          <a href="#">Opinion</a>
        </button>
      </div>
      <div class="content-col">
        <button>
          <i class="fa-solid fa-landmark"></i>
          <a href="#">Political </a>
        </button>
      </div>
      <div class="content-col">
        <button>
          <i class="fa-solid fa-ghost"></i>
          <a href="#">Scary</a>
        </button>
      </div>
    </div>
    <div class="right-content">
      <div class="breadcrumbs">
        <a href=" {{ url('home') }} ">Home</a>
        <i class="fa-solid fa-angle-right"></i>
        <a href="#">Profile</a>
      </div>
    </div>
    </ul>
  </section>

  <!-- Profile View Section  -->
  <section class="pv-container">
    <header>Profile Page</header>
    <div class="icon"><i class="fa-solid fa-user"></i></div>
    <div class="user-details">
      <h3>Username placeholder</h3>
      <h3>Date account created</h3> 
    </div>
  </section>

    <!-- Tab Selectors Section  -->
  <section class="tabs-container">
    <div class="tabs">
      <div class="tabs-actions">
        <span class="tabs-toggle is-active">Selector 1</span>
        <span class="tabs-toggle">Selector 2</span>
      </div>
      <div class="tabs-body">
        <div class="tabs-content is-active">
          <h2 class="tabs-title"> Title One</h2>
          <p class="tabs-text">1 Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequuntur dolorem deleniti
            iste corrupti et aliquam aliquid reiciendis tenetur minima culpa?</p>
        </div>
        <div class="tabs-content">
          <h2 class="tabs-title"> Title Two</h2>
          <p class="tabs-text">2 Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequuntur dolorem deleniti
            iste corrupti et aliquam aliquid reiciendis tenetur minima culpa?</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Chat Pop Up Section  -->
  <button class="chat-btn" id="openChat">
    <i class="fa-solid fa-comments"></i>
  </button>
  
  <section class="chat-container" id="chat">
    <div class="wrapper">
      <div class="chat-header">
        <i class="fa-solid fa-arrow-left" id="closeChat"></i>
        <div class="user-details">
          <img src="/images/knight.png" alt="">
          <h2>Username placeholder</h2>
        </div>
      </div>
  
      <div class="users-container">
        <div class="chat-search">
          <form action="#">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search by Name" name="Search">
              <div class="input-btn">
                <button class="btn btn-no-border-md" type="submit">
                  <i class="fa-solid fa-magnifying-glass"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
  
        <div class="row">
          <img src="/images/knight.png" alt="">
          <div class="person-details">
            <h2>name placeholder</h2>
            <h3>last chat placeholder</h3>
          </div>
          <span class="circle"></span>
        </div>
        <div class="row">
          <img src="/images/knight.png" alt="">
          <div class="person-details">
            <h2>name placeholder</h2>
            <h3>last chat placeholder</h3>
          </div>
          <span class="circle"></span>
        </div>
        <div class="row">
          <img src="/images/knight.png" alt="">
          <div class="person-details">
            <h2>name placeholder</h2>
            <h3>last chat placeholder</h3>
          </div>
          <span class="circle"></span>
        </div>
      </div>
    </div>
  </section>
  
  <!-- Footer Section  -->
  <section class="footer-st">
    <h3>@Honghong Confessions</h3>
    <h3>Web Application Development</h3>
  </section>
  <script src="app.js"></script>
</body>
</html>