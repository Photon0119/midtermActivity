// Universal Image Preview
function setupImagePreview(inputId, previewId) {
  const input = document.getElementById(inputId);
  const preview = document.getElementById(previewId);

  if (!input || !preview) return;

  input.addEventListener("change", () => {
    const file = input.files[0];
    if (file) {
      const reader = new FileReader();
      reader.onload = e => {
        preview.src = e.target.result;
        preview.style.display = "block";
      };
      reader.readAsDataURL(file);
    }
  });
}

// Modal handling
function setupModal(openBtnId, modalId, closeBtnId) {
  const modal = document.getElementById(modalId);
  const openBtn = document.getElementById(openBtnId);
  const closeBtn = document.getElementById(closeBtnId);

  if (!modal || !openBtn || !closeBtn) return;

  openBtn.onclick = () => {
    resetModal();
    modal.style.display = "flex";
  };
  closeBtn.onclick = () => modal.style.display = "none";

  window.onclick = (e) => {
    if (e.target === modal) modal.style.display = "none";
  };
}

// Reset modal fields
function resetModal() {
  const preview = document.getElementById("preview");
  document.getElementById("blogTitle").value = "";
  document.getElementById("blogDate").value = "";
  document.getElementById("imageInput").value = "";
  if (preview) preview.style.display = "none";
}

// Run setup for each page
document.addEventListener("DOMContentLoaded", () => {
  // Hero & Access image previews
  setupImagePreview("heroImageInput", "heroPreview");
  setupImagePreview("accessImageInput", "accessPreview");

  // Happening page modal
  setupModal("addBlogBtn", "blogModal", "closeModal");
  setupImagePreview("imageInput", "preview");

  let editRow = null; // Track the row being edited

  const saveBtn = document.getElementById("saveBlog");
  if (saveBtn) {
    saveBtn.addEventListener("click", () => {
      const title = document.getElementById("blogTitle").value;
      const date = document.getElementById("blogDate").value;
      const fileInput = document.getElementById("imageInput");
      const file = fileInput.files[0];
      const preview = document.getElementById("preview");
      const blogTable = document
        .getElementById("blogTable")
        .getElementsByTagName("tbody")[0];

      if (!title || !date || (!file && !editRow)) {
        alert("Please fill all fields!");
        return;
      }

      if (editRow) {
        // --- Update existing row ---
        editRow.cells[2].innerText = title;
        editRow.cells[3].innerText = date;

        if (file) {
          const reader = new FileReader();
          reader.onload = e => editRow.cells[1].querySelector("img").src = e.target.result;
          reader.readAsDataURL(file);
        }
        editRow = null;
      } else {
        // --- Add new row ---
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
          <button class="btn secondary editBtn">Edit</button>
          <button class="btn danger deleteBtn">Delete</button>
        `;
      }

      // Reset modal
      resetModal();
      document.getElementById("blogModal").style.display = "none";
      setupRowActions();
    });
  }

  // Setup Edit/Delete button actions
  function setupRowActions() {
    const blogTable = document.getElementById("blogTable");
    if (!blogTable) return;

    blogTable.querySelectorAll(".editBtn").forEach(btn => {
      btn.onclick = (e) => {
        const row = e.target.closest("tr");
        editRow = row;

        // Pre-fill modal with row values
        document.getElementById("blogTitle").value = row.cells[2].innerText;
        document.getElementById("blogDate").value = row.cells[3].innerText;
        document.getElementById("preview").src = row.cells[1].querySelector("img").src;
        document.getElementById("preview").style.display = "block";

        document.getElementById("blogModal").style.display = "flex";
      };
    });

    blogTable.querySelectorAll(".deleteBtn").forEach(btn => {
      btn.onclick = (e) => {
        const row = e.target.closest("tr");
        row.remove();

        // Reorder IDs
        const rows = blogTable.querySelectorAll("tbody tr");
        rows.forEach((r, idx) => r.cells[0].innerText = idx + 1);
      };
    });
  }

  setupRowActions();
});
