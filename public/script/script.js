document.addEventListener("DOMContentLoaded", function() {
    const ctx = document.getElementById('pieChart').getContext('2d');
    const pieChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ['Informatika', 'Teknologi Informasi', 'Sistem Informasi'],
            datasets: [{
                data: [334, 333, 333],
                backgroundColor: ['#007bff', '#ffc107', '#28a745'],
            }],
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'top',
                },
            },
        },
    });
});

const images = document.querySelectorAll('.foto-berganti img');
let currentIndex = 0;

function changeImage() {
    images.forEach((img, index) => {
        img.style.display = index === currentIndex ? 'block' : 'none';
    });

    currentIndex = (currentIndex + 1) % images.length;
}

setInterval(changeImage, 2000); // Ganti gambar setiap  detik

function displayTime() {
    const timeElement = document.getElementById('time');
    const now = new Date();
    timeElement.innerHTML = now.toLocaleTimeString();
}
setInterval(displayTime, 1000);

// Jadwal untuk Semester 1
const scheduleSem1 = [
    { day: "Senin", time: "13:00", subject: "Arsitektur dan Organisasi Komputer", lecturer: " Junaidi, S,Kom., M.Kom.", place: "Ruang Kelas 1" },
    { day: "Senin", time: "17:00", subject: "Matematika Diskrit", lecturer: "Luthfia Saskia, S.Tr.Kom, M.Eng.", place: "ZOOM" },
    { day: "Senin", time: "19:00", subject: "Aljabar Linear", lecturer: "Devi Fatwanti, S.Par., S.Pd., M.Pd", place: "ZOOM" },
    { day: "Selasa", time: "08:00", subject: "Matematika Diskrit", lecturer: "Luthfia Saskia, S.Tr.Kom, M.Eng.", place: "Ruang Kelas 1" },
    { day: "Selasa", time: "10:00", subject: "Rekayasa Perangkat Lunak", lecturer: "Taufik Iqbal Ramdhani, S.Kom., M.Sc.", place: "Ruang Kelas 1" },
    { day: "Selasa", time: "13:00", subject: "Pemograman Berorientasi Objek", lecturer: " Anas Nasrulloh, S.Kom., M.Kom.", place: "Ruang Lab 2" },
    { day: "Selasa", time: "17:00", subject: "Arsitektur dan Organisasi Komputer", lecturer: "Junaidi, S,Kom., M.Kom.", place: "ZOOM" },
    { day: "Selasa", time: "19:00", subject: "Algoritma Pemograman", lecturer: " Anita Triana, S.Kom., M.Kom.", place: "ZOOM" },
    { day: "Rabu", time: "08:00", subject: "Aljabar Linear", lecturer: "Devi Fatwanti, S.Par., S.Pd., M.Pd", place: "Ruang Kelas 1" },
    { day: "Rabu", time: "17:00", subject: "Struktur Data", lecturer: "Anita Triana, S.Kom., M.Kom.", place: "ZOOM" },
    { day: "Rabu", time: "19:00", subject: "Rekayasa Perangkat Lunak", lecturer: "Taufik Iqbal Ramdhani, S.Kom., M.Sc.", place: "ZOOM" },
    { day: "Kamis", time: "08:00", subject: "Algoritma Pemograman", lecturer: " Anita Triana, S.Kom., M.Kom.", place: "Ruang Kelas 1" },
    { day: "Kamis", time: "10:00", subject: "Struktur Data", lecturer: "Anita Triana, S.Kom., M.Kom.", place: "Ruang Kelas 1" },
    { day: "Kamis", time: "17:00", subject: "Pemograman Berorientasi Objek", lecturer: " Anas Nasrulloh, S.Kom., M.Kom.", place: "ZOOM" },
];

// Jadwal untuk Semester 3
const scheduleSem3 = [
    { day: "Senin", time: "13:00", subject: "Logika dan Sistem Digital", lecturer: "Aolia Ikhwanudin, S.Kom., M.Kom.", place: "Ruang Lab 1" },
    { day: "Senin", time: "17:00", subject: "Kalkulus", lecturer: "Devi Fatwanti, S.Par., S.Pd., M.Pd", place: "ZOOM" },
    { day: "Senin", time: "17:00", subject: "Bahasa Inggris", lecturer: "Eman Sulaeman, S.Pd., M.Pd.", place: "ZOOM" },
    { day: "Selasa", time: "13:00", subject: "Rekayasa Perangkat Lunak", lecturer: "Taufik Iqbal Ramdhani, S.Kom., M.Sc.", place: "Ruang Kelas 2" },
    { day: "Selasa", time: "20:00", subject: "Pemrograman Web", lecturer: "Dani Ramdani, S.Kom., M.T.", place: "ZOOM" },
    { day: "Rabu", time: "10:00", subject: "Kalkulus", lecturer: "Devi Fatwanti, S.Par., S.Pd., M.Pd", place: "Ruang Kelas 1" },
    { day: "Rabu", time: "15:00", subject: "Pemrograman Web", lecturer: "Dani Ramdani, S.Kom., M.T.", place: "Ruang Lab 1" },
    { day: "Rabu", time: "17:00", subject: "Logika Digital & Sistem Digital", lecturer: "Aolia Ikhwanudin, S.Kom., M.Kom", place: "ZOOM" },
    { day: "Rabu", time: "19:00", subject: "Rekayasa Perangkat Lunak", lecturer: "Taufik Iqbal Ramdhani, S.Kom., M.Sc.", place: "ZOOM" },
    { day: "Kamis", time: "10:30", subject: "Jaringan Komputer", lecturer: "Ir. Onno W. Purbo, M.Eng., Ph.D.", place: "Ruang Prof Onno" },
    { day: "Kamis", time: "17:00", subject: "Pemrograman Web", lecturer: "Dani Ramdani, S.Kom., M.T.", place: "ZOOM" },
    { day: "Kamis", time: "19:00", subject: "Jaringan Komputer", lecturer: "Dhika Rizki Anbiya, S.Kom., M.T.", place: "ZOOM" },
    { day: "Jumat", time: "13:40", subject: "Bahasa Inggris", lecturer: "Eman Sulaeman, S.Pd., M.Pd.", place: "Ruang Kelas 2" },
    { day: "Jumat", time: "15:00", subject: "Sistem Operasi", lecturer: "Samsul Bahri, S.Kom., M.Kom.", place: "Ruang Lab 1" },
    { day: "Jumat", time: "19:00", subject: "Sistem Operasi", lecturer: "Samsul Bahri, S.Kom., M.Kom.", place: "ZOOM" }
];
const scheduleSem5 = [
  { day: "Senin", time: "19:00", subject: "Visualisasi 3D", lecturer:" Luthfia Saskia, S.Tr.Kom, M.Eng.", place: "ZOOM" },
  { day: "Selasa", time: "19:00", subject: "Sistem Manajemen Basis Data", lecturer:" Anas Nasrulloh, S.Kom., M.Kom", place: "ZOOM" },
  { day: "Rabu", time: "17:00", subject: "Pemrosesan Bahasa Alami", lecturer: "Rizki Triyani Pusparini, S.Kom., M.Kom.", place: "ZOOM" },
  { day: "Rabu", time: "19:00", subject: "Etika Profesi", lecturer: "Tubagus Toifur, S.Kom., M.Kom.", place: "ZOOM" },
  { day: "Kamis", time: "17:00", subject: "Pemograman Net", lecturer: "Taufik Iqbal Ramdhani, S.Kom., M.Sc.", place: "ZOOM" },
  { day: "Kamis", time: "19:00", subject: "Pemograman Aplikasi Mobile", lecturer: "Taufik Iqbal Ramdhani, S.Kom., M.Sc", place: "ZOOM" },
  { day: "Jumat", time: "19:00", subject: "Keamanan Informasi & Jaringan", lecturer: " Ibnu Mas'ud, S.Kom., M.Kom.", place: "ZOOM" },
];
const scheduleSem7 = [
  { day: "Selasa", time: "19:00", subject: "Data Science", lecturer:" Rizki Triyani Pusparini, S.Kom., M.Kom.", place: "ZOOM" },
  { day: "Rabu", time: "17:00", subject: "Metodologi Penelitian", lecturer:"Muhamad Yusuf, S.Kom., M.Kom.", place: "ZOOM" },
  { day: "Kamis", time: "17:00", subject: "Teori Otomata", lecturer:"Junaidi, S,Kom., M.Kom.", place: "ZOOM" },
  { day: "Kamis", time: "19:00", subject: "Artificial Intelligence", lecturer:"Rizki Triyani Pusparini, S.Kom., M.Kom.", place: "ZOOM" },
  { day: "Jumat", time: "19:00", subject: "Temu Balik Informasi", lecturer:"Junaidi, S,Kom., M.Kom.", place: "ZOOM" },
];

// Fungsi untuk menghitung waktu mundur
function countdownToNextClass(schedule, countdownElement) {
    const daysOfWeek = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];

    // Dapatkan waktu sekarang
    const now = new Date();

    // Cari jadwal kuliah yang berikutnya
    let nextClass = null;
    let minTimeDiff = Number.MAX_SAFE_INTEGER;

    for (let i = 0; i < schedule.length; i++) {
        const scheduleDay = schedule[i].day;
        const scheduleTime = schedule[i].time;

        // Tentukan index hari
        const scheduleDayIndex = daysOfWeek.indexOf(scheduleDay);
        if (scheduleDayIndex === -1) continue;

        // Buat tanggal dari jadwal kuliah
        const classDate = new Date(now);
        classDate.setDate(now.getDate() + ((scheduleDayIndex - now.getDay() + 7) % 7)); // Tentukan hari yang sesuai
        const [hours, minutes] = scheduleTime.split(':');
        classDate.setHours(parseInt(hours), parseInt(minutes), 0, 0); // Tentukan waktu kuliah

        // Hitung selisih waktu
        const timeDiff = classDate - now;

        if (timeDiff > 0 && timeDiff < minTimeDiff) {
            minTimeDiff = timeDiff;
            nextClass = schedule[i];
        }
    }

    if (nextClass) {
        // Hitung jam, menit, detik tersisa
        const hoursLeft = Math.floor(minTimeDiff / (1000 * 60 * 60));
        const minutesLeft = Math.floor((minTimeDiff % (1000 * 60 * 60)) / (1000 * 60));
        const secondsLeft = Math.floor((minTimeDiff % (1000 * 60)) / 1000);

        countdownElement.innerHTML = `Waktu sampai kuliah berikutnya: ${hoursLeft} jam ${minutesLeft} menit ${secondsLeft} detik`;
    } else {
        countdownElement.innerHTML = "Tidak ada kuliah berikutnya.";
    }
}

const countdownElementSem1 = document.getElementById('countdownSem1');
const countdownElementSem3 = document.getElementById('countdownSem3');
const countdownElementSem5 = document.getElementById('countdownSem5');
const countdownElementSem7 = document.getElementById('countdownSem7');

// Perbarui countdown setiap detik
setInterval(() => countdownToNextClass(scheduleSem1, countdownElementSem1), 1000);
setInterval(() => countdownToNextClass(scheduleSem3, countdownElementSem3), 1000);
setInterval(() => countdownToNextClass(scheduleSem5, countdownElementSem5), 1000);
setInterval(() => countdownToNextClass(scheduleSem7, countdownElementSem7), 1000);

gsap.registerPlugin(TextPlugin);
document.addEventListener("DOMContentLoaded", (event) => {
    gsap.to('#sambutan',{
        duration: 30,
        delay: 2,
        text:"Assalamu'alaikum wr.wb. \n Puji syukur developer panjatkan kepada Allah SWT, Tuhan Yang Maha Esa, atas segala rahmat dan anugerah-Nya, yang telah memungkinkan developer untuk meluncurkan website HIMA ini. Dengan adanya platform ini, developer berkomitmen untuk menyediakan akses informasi yang berkualitas dan relevan bagi masyarakat, terutama dalam bidang pendidikan dan ilmu pengetahuan. \n Website ini dirancang untuk berfungsi sebagai sumber informasi yang dapat diakses secara online selama 24 jam, sehingga diharapkan dapat memenuhi kebutuhan informasi Anda. Developer berharap website ini dapat menjadi alat bantu yang bermanfaat, khususnya bagi para pelajar, pendidik, dan seluruh stakeholder yang terlibat dalam dunia pendidikan. Developer sangat menghargai masukan dan saran dari berbagai pihak untuk pengembangan website ini. Melalui umpan balik yang konstruktif, developer bertekad untuk terus meningkatkan tampilan, konten, dan mutu website, agar dapat lebih baik dan lebih bermanfaat bagi semua pengunjung. Terima kasih atas perhatian dan kerjasama Anda. Mari kita bersama-sama berupaya mencapai cita-cita yang lebih baik. \n Wassalamu'alaikum wr.wb."
    })
});