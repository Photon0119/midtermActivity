<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>A Lot is Happening | Dashboard</title>
  <link rel="stylesheet" href="{{ asset('indexStyle.css') }}">
  <style>
    /* Popup modal styles */
    .modal {
      display: none;
      position: fixed;
      z-index: 1000;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.6);
      justify-content: center;
      align-items: center;
    }

    .modal-content {
      background: #fff;
      padding: 20px;
      border-radius: 8px;
      width: 400px;
      max-width: 90%;
    }

    .modal-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .modal-header h2 {
      margin: 0;
    }

    .close-btn {
      cursor: pointer;
      font-size: 20px;
      font-weight: bold;
    }

    #preview {
      max-width: 100px;
      margin-top: 10px;
      display: none;
    }

    .btn {
      padding: 6px 12px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      margin: 2px;
    }

    .btn.primary {
      background: #28a745;
      color: white;
    }

    .btn.danger {
      background: #dc3545;
      color: white;
    }

    .btn.secondary {
      background: #6c757d;
      color: white;
    }
  </style>
</head>

<body>
  <div class="dashboard">
    <nav class="sidebar">
      <h2>Dashboard</h2>
      <ul>
        <li><a href="{{ url('/dashboard') }}" >Hero</a></li>
        <li><a href="{{ url('/chatgpt') }}">what is chatgpt</a></li>
        <li><a href="{{ url('/future') }}" >The Future is Now</a></li>
        <li><a href="{{ url('/access') }}">request early access</a></li>
        <li><a href="{{ url('/happening') }}" class="active">A Lot is Happening</a></li>
      </ul>
    </nav>

    <main class="content">
      <h1>View All Doctors</h1>
      <div class="input-cont">
        <button id="addBlogBtn" class="btn primary">Add New Blog</button>
      </div>
      <div class="table-controls"
        style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 12px;">
        <!-- Left side: Show entries -->
        <div>
          <label>
            Show
            <select id="entriesSelect" style="padding: 6px 10px; border-radius: 6px; border: 1px solid #ccc;">
              <option value="5">5</option>
              <option value="10" selected>10</option>
              <option value="25">25</option>
              <option value="50">50</option>
            </select>
            entries
          </label>
        </div>

        <!-- Right side: Search -->
        <div>
          <input type="text" id="searchInput" placeholder="Search blogs..."
            style="padding: 8px 12px; border-radius: 6px; border: 1px solid #ccc; width: 220px;">
        </div>
      </div>

      <table id="blogTable">
        <thead>
          <tr>
            <th>ID</th>
            <th>Image</th>
            <th>Blog Title</th>
            <th>Date Created</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td><img src="{{ asset('images/blog1.png') }}" width="80"></td>
            <td>New AI Tools Launched</td>
            <td>2025-09-19</td>
            <td>
              <button class="btn secondary">Edit</button>
              <button class="btn danger">Delete</button>
            </td>
          </tr>
          <tr>
            <td>2</td>
            <td><img src="{{ asset('images/blog2.png') }}" width="80"></td>
            <td>OpenAI Future Plans</td>
            <td>2025-09-10</td>
            <td>
              <button class="btn secondary">Edit</button>
              <button class="btn danger">Delete</button>
            </td>
          </tr>
        </tbody>
      </table>
    </main>
  </div>

  <!-- Modal -->
  <div id="blogModal" class="modal">
    <div class="modal-content">
      <div class="modal-header">
        <h2>Add New Blog</h2>
        <span class="close-btn" id="closeModal">&times;</span>
      </div>
      <label>Upload Image:</label><br>
      <input type="file" id="imageInput" accept="image/*"><br>
      <img id="preview"><br><br>

      <label>Blog Title:</label><br>
      <input type="text" id="blogTitle" style="width:100%"><br><br>

      <label>Date Created:</label><br>
      <input type="date" id="blogDate" style="width:100%"><br><br>

      <button id="saveBlog" class="btn primary">Add Blog</button>
    </div>
  </div>
  <script>
    const entriesSelect = document.getElementById("entriesSelect");
    const rows = blogTable.getElementsByTagName("tr");

    function updateEntries() {
      const value = parseInt(entriesSelect.value);
      for (let i = 0; i < rows.length; i++) {
        rows[i].style.display = (i < value) ? "" : "none";
      }
    }

    // Default load
    updateEntries();

    // Update when dropdown changes
    entriesSelect.addEventListener("change", updateEntries);
  </script>
  <script>
    const modal = document.getElementById("blogModal");
    const addBtn = document.getElementById("addBlogBtn");
    const closeBtn = document.getElementById("closeModal");
    const saveBtn = document.getElementById("saveBlog");
    const blogTable = document.getElementById("blogTable").getElementsByTagName("tbody")[0];
    const imageInput = document.getElementById("imageInput");
    const preview = document.getElementById("preview");

    // Open modal
    addBtn.onclick = () => modal.style.display = "flex";
    closeBtn.onclick = () => modal.style.display = "none";
    window.onclick = (e) => { if (e.target == modal) modal.style.display = "none"; }

    // Preview image
    imageInput.addEventListener("change", () => {
      const file = imageInput.files[0];
      if (file) {
        const reader = new FileReader();
        reader.onload = e => {
          preview.src = e.target.result;
          preview.style.display = "block";
        };
        reader.readAsDataURL(file);
      }
    });

    // Add new blog
    saveBtn.addEventListener("click", () => {
      const title = document.getElementById("blogTitle").value;
      const date = document.getElementById("blogDate").value;
      const file = imageInput.files[0];

      if (!title || !date || !file) {
        alert("Please fill all fields!");
        return;
      }

      const newRow = blogTable.insertRow();
      const rowCount = blogTable.rows.length;

      const idCell = newRow.insertCell(0);
      const imgCell = newRow.insertCell(1);
      const titleCell = newRow.insertCell(2);
      const dateCell = newRow.insertCell(3);
      const actionCell = newRow.insertCell(4);

      idCell.innerText = rowCount;
      const img = document.createElement("img");
      img.width = 80;
      const reader = new FileReader();
      reader.onload = e => img.src = e.target.result;
      reader.readAsDataURL(file);
      imgCell.appendChild(img);

      titleCell.innerText = title;
      dateCell.innerText = date;
      actionCell.innerHTML = `
      <button class="btn secondary">Edit</button>
      <button class="btn danger">Delete</button>
    `;

      // Reset modal
      document.getElementById("blogTitle").value = "";
      document.getElementById("blogDate").value = "";
      imageInput.value = "";
      preview.style.display = "none";

      modal.style.display = "none";
    });
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

    .content h1 {
      font-family: "Montserrat", sans-serif;
      font-size: 40px;
    }
  </style>
</body>

</html>