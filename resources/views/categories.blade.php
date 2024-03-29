<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Categories</title>
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

  <!-- Categories Section  -->
  <section class="categories">
    <header> Select a Category</header>
    <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer tempor <br> euismod elit id sodales. Quisque dictum blandit
    arcu, quis lobortis. </p>
    <div class="container">
      <div class="row">
        <div class="row-col">
          <i class="fa-solid fa-heart"></i>
          <h5>Love+Relationships</h5>
          <a href="#"> <button class="btn btn-border">Select</button></a>
        </div>
        <div class="row-col">
          <i class="fa-solid fa-book-skull"></i>
          <h5>Confession+Secrets</h5>
          <a href="#"> <button class="btn btn-border">Select</button></a>
        </div>
        <div class="row-col">
          <i class="fa-solid fa-face-angry"></i>
          <h5>Hate </h5>
          <a href="#"> <button class="btn btn-border">Select</button></a>
        </div>
      </div>
      <div class="row">
        <div class="row-col">
          <i class="fa-solid fa-microphone"></i>
          <h5>Opinion</h5>
          <a href="#"> <button class="btn btn-border">Select</button></a>
        </div>
        <div class="row-col">
          <i class="fa-solid fa-landmark"></i>
          <h5>Political</h5>
          <a href="#"> <button class="btn btn-border">Select</button></a>
        </div>
        <div class="row-col">
          <i class="fa-solid fa-ghost"></i>
          <h5>Scary</h5>
          <a href="#"> <button class="btn btn-border">Select</button></a>
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