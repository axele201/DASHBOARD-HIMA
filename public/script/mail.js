      //create mail
      const createMailButton = document.getElementById("create-mail-button");
      const correctPassword = "admin123"; // Ganti dengan password yang benar
      
      createMailButton.addEventListener("click", function (event) {
          event.preventDefault();
      
          // Minta password
          const userPassword = prompt("Masukkan password untuk mengakses fitur ini:");
      
          // Periksa apakah password benar
          if (userPassword === correctPassword) {
              // Buat elemen kartu baru
               const card = document.createElement("div");
              card.className = "card card-primary card-outline";
              card.style.flexGrow = "1";
      
              // Buat header kartu
              const cardHeader = document.createElement("div");
              cardHeader.className = "card-header";
              const cardTitle = document.createElement("h3");
              cardTitle.className = "card-title";
              cardTitle.innerText = "Read Mail";
              cardHeader.appendChild(cardTitle);
              card.appendChild(cardHeader);
      
              // Buat body kartu
              const cardBody = document.createElement("div");
              cardBody.className = "card-body p-0";
      
              const mailboxReadInfo = document.createElement("div");
              mailboxReadInfo.className = "mailbox-read-info";
              mailboxReadInfo.innerHTML = `
                  <h5>Kepada Mahasiswa INFORMATIKA</h5>
                  <h6>From: <input type="text" placeholder="Masukkan email pengirim" /> 
                  <span class="mailbox-read-time float-right">${new Date().toLocaleString()}</span></h6>
              `;
      
              const mailboxReadMessage = document.createElement("div");
              mailboxReadMessage.className = "mailbox-read-message";
              mailboxReadMessage.innerHTML = `
                  <p><textarea placeholder="Tulis pesan di sini..." rows="5" cols="40"></textarea></p>
                  <p style="font-weight: bold;">Selamat belajar dan berkarya!</p>
                  <p>Thanks,<br>developer</p>
              `;
      
              // Tambahkan tombol Save
              const saveButton = document.createElement("button");
              saveButton.innerText = "Save";
              saveButton.className = "btn btn-success"; // Gaya bisa disesuaikan
              saveButton.addEventListener("click", function() {
                  const senderEmail = mailboxReadInfo.querySelector("input").value;
                  const messageContent = mailboxReadMessage.querySelector("textarea").value;
      
                  // Simpan data ke localStorage
                  const mailData = {
                      email: senderEmail,
                      message: messageContent,
                      timestamp: new Date().toLocaleString()
                  };
      
                  const savedMails = JSON.parse(localStorage.getItem("mails")) || [];
                  savedMails.push(mailData);
                  localStorage.setItem("mails", JSON.stringify(savedMails));
      
                  // Tampilkan data yang disimpan di console
                  console.log("Email Pengirim:", senderEmail);
                  console.log("Pesan:", messageContent);
                  console.log("Data Tersimpan:", savedMails);
      
                  // Menampilkan ulang semua email setelah menyimpan
                  displayMails();
              });
      
              cardBody.appendChild(mailboxReadInfo);
              cardBody.appendChild(mailboxReadMessage);
              cardBody.appendChild(saveButton); // Tambahkan tombol Save ke body
              card.appendChild(cardBody);
      
              // Tambahkan kartu baru ke kolom yang sesuai
              document.querySelector(".col-md-9").appendChild(card);
          } else {
              alert("Password salah! Anda tidak memiliki akses untuk membuat mail.");
          }
      });
      
      // Fungsi untuk menampilkan semua email yang disimpan ketika halaman dimuat
      function displayMails() {
          // Hapus semua elemen sebelumnya
          document.querySelector(".col-md-9").innerHTML = "";
      
          const savedMails = JSON.parse(localStorage.getItem("mails")) || [];
          savedMails.forEach((mail, index) => {
              // Buat elemen kartu untuk setiap email yang disimpan
              const card = document.createElement("div");
              card.className = "card card-primary card-outline";
              card.style.flexGrow = "1";
      
              const cardHeader = document.createElement("div");
              cardHeader.className = "card-header";
              const cardTitle = document.createElement("h3");
              cardTitle.className = "card-title";
              cardTitle.innerText = "Read Mail";
              cardHeader.appendChild(cardTitle);
              card.appendChild(cardHeader);
      
              const cardBody = document.createElement("div");
              cardBody.className = "card-body p-0";
      
              const mailboxReadInfo = document.createElement("div");
              mailboxReadInfo.className = "mailbox-read-info";
              mailboxReadInfo.innerHTML = `
                  <h5>Kepada Mahasiswa INFORMATIKA</h5>
                  <h6>From: ${mail.email} 
                  <span class="mailbox-read-time float-right">${mail.timestamp}</span></h6>
              `;
      
              const mailboxReadMessage = document.createElement("div");
              mailboxReadMessage.className = "mailbox-read-message";
              mailboxReadMessage.innerHTML = `
                  <p>${mail.message}</p>
                  <p style="font-weight: bold;">Selamat belajar dan berkarya!</p>
                  <p>Thanks,<br>developer</p>
              `;
      
              // Tambahkan tombol Delete
              const deleteButton = document.createElement("button");
              deleteButton.innerText = "Delete";
              deleteButton.className = "btn btn-danger"; // Gaya bisa disesuaikan
              deleteButton.addEventListener("click", function() {
                  // Minta password untuk menghapus email
                  const userPassword = prompt("Masukkan password untuk menghapus email:");
      
                  // Periksa apakah password benar
                  if (userPassword === correctPassword) {
                      // Hapus email dari localStorage
                      const updatedMails = savedMails.filter((_, i) => i !== index);
                      localStorage.setItem("mails", JSON.stringify(updatedMails));
                      // Tampilkan ulang semua email setelah penghapusan
                      displayMails();
                  } else {
                      alert("Password salah! Anda tidak memiliki akses untuk menghapus email.");
                  }
              });
      
              cardBody.appendChild(mailboxReadInfo);
              cardBody.appendChild(mailboxReadMessage);
              cardBody.appendChild(deleteButton); // Tambahkan tombol Delete ke body
              card.appendChild(cardBody);
      
              // Tambahkan kartu ke kolom yang sesuai
              document.querySelector(".col-md-9").appendChild(card);
          });
      }
      
      // Panggil displayMails saat halaman dimuat
      window.onload = displayMails;