<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Request Early Access | Dashboard</title>
   <link rel="stylesheet" href="{{ asset('indexStyle.css') }}">
   <script src="{{ asset('script.js') }}" defer></script>
</head>

<body>
  <div class="dashboard">
    <nav class="sidebar">
      <h2>Dashboard</h2>
      <ul>
         <li><a href="{{ url('/dashboard') }}">Hero</a></li>
        <li><a href="{{ url('/chatgpt') }}" >what is chatgpt</a></li>
        <li><a href="{{ url('/future') }}">The Future is Now</a></li>
        <li><a href="{{ url('/access') }}" class="active">request early access</a></li>
        <li><a href="{{ url('/happening') }}">A Lot is Happening</a></li>
      </ul>
    </nav>

    <main class="content">
      <h1>Modify Request Early Access</h1>

      <div class="main-container">

        <div class="upload-banner">
          <label>Upload Section Image</label>
          <input type="file" id="heroImageInput" accept="image/*">
          <img id="heroPreview" src="{{ asset('images/hero.png') }}" style="max-width:500px;">
        </div>

        <div class="banner-title">
          <label>Section H2</label>
          <input type="text" value="Let's Build Something amazing with GPT-3 OpenAI">

          <label>Section Description</label>
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
    // Attach preview functionality (specific for access.html)
    function setupImagePreview(inputId, previewId) {
      const input = document.getElementById(inputId);
      const preview = document.getElementById(previewId);

      if (input && preview) {
        input.addEventListener("change", (event) => {
          const file = event.target.files[0];
          if (file) {
            preview.src = URL.createObjectURL(file);
            preview.style.display = "block";
          } else {
            preview.style.display = "none";
          }
        });
      }
    }

    // Run for this page
    setupImagePreview("accessImageInput", "accessPreview");
  </script>

  <style>
    .btn {
      display: inline-block;
      padding: 12px 22px;
      border: none;
      border-radius: 10px;
      cursor: pointer;
      font-size: 15px;
      font-weight: 600;
      margin: 10px 12px 18px 0;
      transition: all 0.25s ease;
      background: #fdfdfd;
      color: #333;
      box-shadow: 0 3px 6px rgba(0, 0, 0, 0.08),
        0 1px 2px rgba(0, 0, 0, 0.04);

    }

    .btn:hover {
      transform: translateY(-2px);
      box-shadow: 0 6px 14px rgba(0, 0, 0, 0.12),
        0 2px 6px rgba(0, 0, 0, 0.08);
    }



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

    .content{
      width: 100%;
    }
    .main-container{
      width: 100%;
    }

    .main-container .upload-banner{
      width: 30%;
    }

    .banner-title{
      width: 90%;
    }
  </style>
</body>

</html>