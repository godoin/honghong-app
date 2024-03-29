<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
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
      </div>
    </div>
    </ul>
  </section>

  <!-- Home Introduction Banner Section -->
  <section class="home-intro-banner">
    <h2> Anonymous Confession Vault</h2>
    <p> Post your darkest secrets, your untold confessions, or your unrevealed thoughts</p>
    <button type="submit" class="btn btn-border-md" id="openPost">Post</button>

    <!-- Post Pop-Up Section  -->
    <section class="pstp-container" id="post">
      <div class="content-pop" id="popup">
        <form action="#">
          <div class="header">
            <h2>Post Your Content</h2>
            <label for="click" class="fas fa-times" id="closePost"></label>
          </div>
  
          <div class="content-row">
            <div class="content-title">
              <h3>Confession Title</h3>
            </div>
            <textarea required="required" class="title"></textarea>
          </div>
  
          <div class="content-row">
            <div class="content-title">
              <h3>Confession Message</h3>
            </div>
            <textarea required="required" class="message"></textarea>
          </div>
          <div class="content-btn">
            <button type="button" class="btn btn-border">Post Content</button>
          </div>
        </form>
      </div>
    </section>
  </section>

  <!-- Standard Search Bar Section  -->
  <section class="search-container">
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
  </section>

  <!-- Content Post Section  -->
  <section class="post-container">
      <div class="row">
        <div class="row-col">
          <div class="user-details">
            <h2>From:</h3>
            <h5>username</h5>
          </div>
          <div class="content">
            <h3>Lorem ipsum dolor sit amet, cosectetur adipiscing elit. Duis at tincidunt ex, nonn malesuada orci Proin ipsum tellus, mollis quis ipsum imperdiet, scelerisque laoreet nulla.</h3>
          </div>
      
          <div class="actions">
            <div class="left-content">
                <button class="btn btn-border">
                  <i class="fa-solid fa-eye"></i>
                  <h5>View Post</h5>
                </button>
            </div>
            <div class="right-content">
              <div class="icon"><i class="fa-solid fa-heart"></i></div>
              <div class="icon"><i class="fa-solid fa-comment"></i></i></div>
            </div>
          </div>
        </div>
        <div class="row-col">
          <div class="user-details">
            <h2>From:</h3>
              <h5>username</h5>
          </div>
          <div class="content">
            <h3>Lorem ipsum dolor sit amet, cosectetur adipiscing elit. Duis at tincidunt ex, nonn malesuada orci Proin ipsum
              tellus, mollis quis ipsum imperdiet, scelerisque laoreet nulla.</h3>
          </div>
          
          <div class="actions">
            <div class="left-content">
              <button class="btn btn-border">
                <i class="fa-solid fa-eye"></i>
                <h5>View Post</h5>
              </button>
            </div>
            <div class="right-content">
              <div class="icon"><i class="fa-solid fa-heart"></i></div>
              <div class="icon"><i class="fa-solid fa-comment"></i></i></div>
            </div>
          </div>
        </div>
        <div class="row-col">
          <div class="user-details">
            <h2>From:</h3>
              <h5>username</h5>
          </div>
          <div class="content">
            <h3>Lorem ipsum dolor sit amet, cosectetur adipiscing elit. Duis at tincidunt ex, nonn malesuada orci Proin ipsum
              tellus, mollis quis ipsum imperdiet, scelerisque laoreet nulla.</h3>
          </div>
          
          <div class="actions">
            <div class="left-content">
              <button class="btn btn-border">
                <i class="fa-solid fa-eye"></i>
                <h5>View Post</h5>
              </button>
            </div>
            <div class="right-content">
              <div class="icon"><i class="fa-solid fa-heart"></i></div>
              <div class="icon"><i class="fa-solid fa-comment"></i></i></div>
            </div>
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
  
  <!-- Footer Section -->
  <section class="footer">
    <div class="row">
      <div class="content-col">
        <ul>
          <li class="title">Categories</li>
          <li>Category Name 1</li>
          <li>Category Name 2</li>
          <li>Category Name 3</li>
          <li>Category Name 4</li>
          <li>Category Name 5</li>
        </ul>
      </div>
      <div class="content-col">
        <ul>
          <li class="title">Link Group 1</li>
          <li>Link Name 1</li>
          <li>Link Name 2</li>
          <li>Link Name 3</li>
        </ul>
      </div>
      <div class="content-col">
        <ul>
          <li class="title">Link Group 1</li>
          <li>Link Name 1</li>
          <li>Link Name 2</li>
          <li>Link Name 3</li>
        </ul>
      </div>
      <div class="content-col">
        <ul>
          <li class="title">Contact</li>
          <li>Address</li>
          <li>Email</li>
          <li>Number</li>
        </ul>
      </div>
    </div>
    <div class="horizontal-line"></div>
    <div class="footer-details">
      <h5>@2022 Honghong Confession Vault</h5>
      <h5>Follows Us</h5>
    </div>
  </section>
  <script src="/js/app.js"></script>
</body>
</html>