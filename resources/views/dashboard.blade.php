<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Hero | Dashboard</title>
  <link rel="stylesheet" href="{{ asset('indexStyle.css') }}">
  <script src="{{ asset('script.js') }}" defer></script>
</head>

<body>
  <div class="dashboard">
    <!-- Sidebar -->
    <nav class="sidebar">
      <h2>Dashboard</h2>
      <ul>
        <li><a href="{{ url('/dashboard') }}" class="active">Hero</a></li>
        <li><a href="{{ url('/chatgpt') }}">what is chatgpt</a></li>
        <li><a href="{{ url('/future') }}" >The Future is Now</a></li>
        <li><a href="{{ url('/access') }}">request early access</a></li>
        <li><a href="{{ url('/happening') }}">A Lot is Happening</a></li>
      </ul>
    </nav>

    <!-- Content -->
    <main class="content">
      <h1>Modify Hero/Banner Section</h1>

      <div class="main-container">

        <div class="upload-banner">
          <label>Upload Banner Image</label>
          <input type="file" id="heroImageInput" accept="image/*">
          <img id="heroPreview" src="{{ asset('images/hero.png') }}" style="max-width:500px;">
        </div>

        <div class="banner-title">
          <label>Banner Title</label>
          <input type="text" value="Let's Build Something amazing with GPT-3 OpenAI">

          <label>Banner Description</label>
          <textarea
            rows="3">He preference connection astonished on of ye. Partiality on or continuing in particular principles as. Do believing oh disposing to supported allowance we.</textarea>
        </div>
      </div>
      <div class="button-cont">
        <button class="btn primary">Update</button>
      </div>
    </main>


  </div>


  <script>
    // Handle image preview
    const heroInput = document.getElementById("heroImageInput");
    const heroPreview = document.getElementById("heroPreview");

    heroInput.addEventListener("change", () => {
      const file = heroInput.files[0];
      if (file) {
        const reader = new FileReader();
        reader.onload = e => heroPreview.src = e.target.result;
        reader.readAsDataURL(file);
      }
    });
  </script>
  <style>
    /* 🔘 Table Action Buttons (reuse pastel styles) */
    table .btn {
      margin: 0 6px;
      padding: 8px 14px;
      font-size: 13px;
      border-radius: 8px;
    }

    /* Sidebar */
    .sidebar {
      width: 240px;
      background: #1c1f26;
      color: #fff;
      padding: 20px;
      display: flex;
      flex-direction: column;
    }

    .sidebar h2 {
      font-size: 22px;
      margin-bottom: 20px;
      color: #f5f5f5;
    }

    .sidebar ul {
      list-style: none;
    }

    .sidebar ul li {
      margin-bottom: 12px;
    }

    .sidebar ul li a {
      display: block;
      padding: 10px 15px;
      border-radius: 6px;
      color: #ccc;
      text-decoration: none;
      transition: all 0.25s ease;
    }

    /* Pastel hover + active */
    .sidebar ul li a:hover {
      background: #fdf6f0;
      /* cream hover */
      color: #a06f48;
      /* warm brown */
    }

    .sidebar ul li a.active {
      background: #ffe9d6;
      /* pastel peach active */
      color: #5a4634;
      font-weight: 600;
    }

    .content h1 {
      font-size: 40px;
      font-family: "Montserrat", sans-serif;
      padding-bottom: 100px;
    }

    .upload-banner label,
    .banner-title label {
      font-family: "Montserrat", sans-serif;
      font-size: 25px;

    }

    .upload-banner label:first-child {
      padding-bottom: 30px;
    }

    .banner-title label:first-child {
      padding-bottom: 30px;
    }

    .upload-banner input[type="file"] {
      font-size: 20px;
      font-family: "Montserrat", sans-serif;
    }

    .banner-title input[type="text"] {
      width: 100%;
      padding: 12px 14px;
      border: 1px solid #ddd;
      border-radius: 6px;
      transition: border 0.2s ease, box-shadow 0.2s ease;
      font-family: "Montserrat", sans-serif;
      font-size: 25px;
    }

    .banner-title label:nth-child(3) {
      padding-top: 50px;
    }

    .content {
      width: 100%;
    }

    .main-container {
      width: 100%;
    }

    .main-container .upload-banner {
      width: 30%;
    }

    .banner-title {
      width: 90%;
    }
  </style>
</body>

</html>