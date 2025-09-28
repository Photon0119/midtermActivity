<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>The Future is Now | Dashboard</title>
  <link rel="stylesheet" href="{{ asset('indexStyle.css') }}">
</head>

<body>
  <div class="dashboard">
    <nav class="sidebar">
      <h2>Dashboard</h2>
      <ul>
         <li><a href="index.html" >Hero</a></li>
        <li><a href="{{ url('/chatgpt') }}">what is chatgpt</a></li>
        <li><a href="{{ url('/future') }}" class="active">The Future is Now</a></li>
        <li><a href="{{ url('/access') }}">request early access</a></li>
        <li><a href="{{ url('/chatgpt') }}">A Lot is Happening</a></li>
      </ul>
      </ul>
    </nav>

    <main class="content">
      <h1>Modify "The Future is Now" Section</h1>


      <label>What is chatgpt?</label><br>
      <textarea
        rows="3">The Future is Now and You Just Need to Realize It. Step into Future Today & Make it Happen.</textarea>
      <div class="buttonTop">
        <button class="btn">Update</button>
      </div>

      <div class="inner-contList">
        <div class="list">
          <div class="firstInput">
            <span>1</span>
            <input type="text" value="Chatbots" class="Improved Tools">
          </div>

          <div class="input-button">
            <div class="secondInput">
              <input type="text" value="Far concluded not his something extremity.">
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
            <input type="text" value="Better AI">
          </div>

          <div class="input-button">
            <div class="secondInput">
              <input type="text" value="His defective nor convinced residence own.">
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
            <input type="text" value="Global Adoption">
          </div>

          <div class="input-button">
            <div class="secondInput">
              <input type="text" value="Friendly bachelor entrance to on by.">
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

    .content h1 {
      font-size: 40px;
      font-family: "Montserrat", sans-serif;
      padding-bottom: 100px;
    }

    .content label {
      font-size: 25px;
      font-family: "Montserrat", sans-serif;
    }

    .content textarea {
      height: 300px;
    }

    .buttonTop {
      display: flex;
      justify-content: end;
    }

    .buttonTop button {
      background-color: #28a745;
      color: white;
    }

    .list {
      display: flex;
      justify-content: center;
      align-items: center;
      justify-content: space-between;
      width: 100%;
    }

    .firstInput {
      width: 22%;
      height: 200px;
      display: flex;
      justify-content: space-around;
      padding-top: 10px;

    }

    .firstInput span {
      padding: 10px;
      font-family: "Montserrat", sans-serif;
      font-weight: 700;
      font-size: 25px;
    }


    .firstInput input[type="text"] {
      width: 80%;
      height: 60px;
      padding: 12px 14px;
      border: 1px solid #ddd;
      border-radius: 6px;
      transition: border 0.2s ease, box-shadow 0.2s ease;
      font-family: "Montserrat", sans-serif;
      font-size: 25px;

    }

    .secondInput {
      width: 80%;
      height: 200px;
      padding-top: 10px;
    }

    .secondInput input[type="text"] {
      width: 100%;
      padding: 12px 14px;
      border: 1px solid #ddd;
      border-radius: 6px;
      transition: border 0.2s ease, box-shadow 0.2s ease;
      font-family: "Montserrat", sans-serif;
      font-size: 25px;
      padding-bottom: 140px;

    }

    .listButton {
      width: 10%;
      display: flex;
      justify-content: flex-start;
      height: 200px;
    }

    .listButton button {
      background-color: #28a745;
      color: white;
      height: 48px;
    }

    .input-button {
      display: flex;
      width: 80%;
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
  </style>
</body>

</html>