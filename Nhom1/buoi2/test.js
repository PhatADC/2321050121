let listFilm = [
    { 
        id: 1, 
        name: "Mưa đỏ", 
        banner: "muado.jpg", 
        trailer: "https://www.youtube.com/embed/BD6PoZJdt_M" 
    },

    {
        id: 2, 
        name: "Doraemon", 
        banner: "doraemon1.jpg", 
        trailer: "https://www.youtube.com/embed/SYXdVvZnTzM" 
    },

    {
        id: 3, 
        name: "Conan", 
        banner: "conan.jpg", 
        trailer: "https://www.youtube.com/embed/8aRor905cCw" 
    },

    {
        id: 4, 
        name: "Queen of Tears", 
        banner: "queenoftears.jpg", 
        trailer: "https://www.youtube.com/embed/somequeenoftears" 
    },

    { 
        id: 5, 
        name: "Tom and Jerry", 
        banner: "tomandjerry.jpg", 
        trailer: "https://www.youtube.com/embed/sometomandjerry" 
    }
];

let filmDetails = { 
    1: {
         year: "2025", 
         duration: "120 phút", 
         country: "Việt Nam" 
    },

    2: { 
        year: "2016", 
        duration: "117 phút", 
        country: "Nhật Bản" 
    },

    3: { 
        year: "2025", 
        duration: "108 phút", 
        country: "Nhật Bản" 
    },

    4: { 
        year: "2024", 
        duration: "16 tập (mỗi tập ~90')",
        country: "Hàn Quốc" 
    },

    5: { 
        year: "2021", 
        duration: "nhiều tập", 
        country: "Mỹ" 
    }
};

let lastFilm = null;
let currentFilm = null;

// TẠO overlay nếu chưa có, đè lên banner lớn
window.addEventListener("DOMContentLoaded", function() {
    let bannerDiv = document.querySelector(".container .banner").parentElement;
    if (bannerDiv && !document.getElementById("banner-info-overlay")) {
        let infoDiv = document.createElement("div");
        infoDiv.id = "banner-info-overlay";
        bannerDiv.style.position = "relative"; 
        bannerDiv.appendChild(infoDiv);
    }
});

function viewTrailer(id){
    // Nếu chưa từng chọn phim hoặc lần đầu sử dụng, banner gồm chính phim click hiện tại
    if (!currentFilm) {
        currentFilm = listFilm.find(f => f.id === id);
        lastFilm = currentFilm;
    } else {
        // Nếu đã có rồi: cập nhật lastFilm, rồi chọn phim mới
        lastFilm = currentFilm;
        currentFilm = listFilm.find(f => f.id === id);
    }

    let filmToShow = lastFilm;

    // Đổi banner và info
    document.querySelector('.banner').src = filmToShow.banner;
    let overlay = document.getElementById("banner-info-overlay");
    let info = filmDetails[filmToShow.id];
    if (overlay && info) {
        overlay.innerHTML =
            "<span><strong>Năm:</strong> " + info.year + "</span>" +
            "<span><strong>Thời lượng:</strong> " + info.duration + "</span>" +
            "<span><strong>Quốc gia:</strong> " + info.country + "</span>";
            overlay.style.display = "flex";
    }
}

const xemNgay = document.querySelector(".quangcao .btn button");
const videoBox = document.getElementById("videoInBanner");
const bannerContainer = document.querySelector(".container .banner").parentElement;

xemNgay.addEventListener("click", () => {
    if (!currentFilm) return;
    videoBox.innerHTML = `
        <iframe width="100%" height="100%"
        src="${currentFilm.trailer}?autoplay=1"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
        allowfullscreen></iframe>
    `;
    if (bannerContainer) {
        bannerContainer.appendChild(videoBox);
        videoBox.style.display = "block";
    }
});
