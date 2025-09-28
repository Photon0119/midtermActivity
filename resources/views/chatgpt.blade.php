<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>What is ChatGPT | Dashboard</title>
  <link rel="stylesheet" href="{{ asset('indexStyle.css') }}">
</head>

<body>
  <div class="dashboard">
    <nav class="sidebar">
      <h2>Dashboard</h2>
      <ul>
         <li><a href="{{ url('/dashboard') }}">Hero</a></li>
        <li><a href="{{ url('/chatgpt') }}" class="active">what is chatgpt</a></li>
        <li><a href="{{ url('/future') }}">The Future is Now</a></li>
        <li><a href="{{ url('/access') }}">request early access</a></li>
        <li><a href="{{ url('/chatgpt') }}">A Lot is Happening</a></li>
      </ul>
      </ul>
    </nav>

    <main class="content">
      <h1>Modify "What is ChatGPT" Section</h1>

      <label>What is chatgpt?</label><br>
      <textarea
        rows="3">We so opinion friends me message as delight. Whole front do of plate heard oh ought. His defective nor convinced residence own. Connection has put impossible own apartments boisterous. At jointure ladyship an insisted so humanity he. Friendly bachelor entrance to on by.</textarea>
      <div class="buttonTop">
        <button class="btn">Update</button>
      </div>

      <div class="inner-contList">
        <div class="list">
          <div class="firstInput">
            <span>1</span>
            <input type="text" value="Chatbots" class="firstInput">

          </div>

          <div class="input-button">
            <div class="secondInput">
              <input type="text" value="We so opinion friends me message as delight.">
            </div>
            <div class="listButton">
              <button class="btn">Update</button>
            </div>

          </div>

        </div>

      </div>

      <div class="inner-contList">
        <div class="list">

          <div class="firstInput">
            <span>2</span>
            <input type="text" value="Knowledgebase">

          </div>
          <div class="input-button">
            <div class="secondInput">
              <input type="text" value="At jointure ladyship an insisted so humanity he.">
            </div>
            <div class="listButton">
              <button class="btn">Update</button>
            </div>

          </div>

        </div>

      </div>

      <div class="inner-contList">
        <div class="list">

          <div class="firstInput">
            <span>3</span>
            <input type="text" value="Education" class="firstInput">

          </div>
          <div class="input-button">
            <div class="secondInput">
              <input type="text" value="At jointure ladyship an insisted so humanity he.">
            </div>
            <div class="listButton">
              <button class="btn">Update</button>
            </div>

          </div>

        </div>




      </div>

    </main>
  </div>

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

    /* 🟠 Primary Button – Pastel Peach */
    .btn.primary {
      background: #ffe9d6;
      color: #5a4634;
    }

    .btn.primary:hover {
      background: #fff3eb;
      /* lighter peach */
    }

    /* 🌱 Success Button – Mint Green */
    .btn.success {
      background: #d6f7e1;
      color: #2f5d47;
    }

    .btn.success:hover {
      background: #e8fbf0;
      /* lighter mint */
    }

    /* 💜 Secondary Button – Lavender */
    .btn.secondary {
      background: #e6e6fa;
      color: #3d3d5c;
    }

    .btn.secondary:hover {
      background: #f2f2fb;
      /* lighter lavender */
    }

    /* ❤️ Danger Button – Blush Pink */
    .btn.danger {
      background: #ffd6d9;
      color: #5a2a2e;
    }

    .btn.danger:hover {
      background: #ffe6e8;
      /* lighter blush */
    }

    /* 🤍 Ghost / Outline Button */
    .btn.ghost {
      background: transparent;
      border: 2px solid #ddd;
      color: #666;
    }

    .btn.ghost:hover {
      background: #fafafa;
      border-color: #bbb;
      color: #444;
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

    .list {
      display: flex;
      justify-content: center;
      align-items: center;
      justify-content: space-between;
      width: 100%;
    }

    .firstInput {
      width: 20%;
      display: flex;

    }

    .firstInput span {
      padding: 10px;
      font-family: "Montserrat", sans-serif;
      font-weight: 700;
      font-size: 25px;
    }


    .firstInput input[type="text"] {
      width: 80%;
      padding: 12px 14px;
      border: 1px solid #ddd;
      border-radius: 6px;
      transition: border 0.2s ease, box-shadow 0.2s ease;
      font-family: "Montserrat", sans-serif;
      font-size: 25px;

    }

    .secondInput {
      width: 92%;
    }

    .secondInput input[type="text"] {
      width: 100%;
      padding: 12px 14px;
      border: 1px solid #ddd;
      border-radius: 6px;
      transition: border 0.2s ease, box-shadow 0.2s ease;
      font-family: "Montserrat", sans-serif;
      font-size: 25px;


    }

    .listButton {
      width: 100%;
      display: flex;
      justify-content: flex-end;
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

    .content h1 {
      font-size: 40px;
      font-family: "Montserrat", sans-serif;
      font-weight: 700;
      padding-bottom: 100px;
    }

    .content label {
      font-size: 25px;
      font-family: "Montserrat", sans-serif;
    }

    .listButton {
      width: 10%;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .listButton button {
      background-color: #28a745;
      color: white;
    }

    .input-button {
      display: flex;
      width: 90%;
      align-items: center;
      justify-content: space-around;
    }

    .buttonTop {
      display: flex;
      justify-content: end;
    }

    .buttonTop button {
        background-color: #28a745;
        color: white;
    }

    .content textarea {
      height: 300px;
    }
  </style>
</body>

</html>