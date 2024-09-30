let currentPage = 1; // Başlangıç sayfası
const totalPages = 3; // Toplamda 3 sayfa var

// Sayfa içeriklerini belirleyin
const pageContents = {
    1: "Sayfa 1 içeriği",
    2: "Sayfa 2 içeriği",
    3: "Sayfa 3 içeriği"
};

// Sayfayı yükle
function loadPage(page) {
    document.getElementById('content').innerHTML = pageContents[page];

    // Butonları aktif/pasif yap
    document.getElementById('prevBtn').disabled = (page === 1);
    document.getElementById('nextBtn').disabled = (page === totalPages);
}

// İleri butonuna basıldığında
function nextPage() {
    if (currentPage < totalPages) {
        currentPage++;
        loadPage(currentPage);
    }
}

// Geri butonuna basıldığında
function prevPage() {
    if (currentPage > 1) {
        currentPage--;
        loadPage(currentPage);
    }
}

// İlk sayfayı başlangıçta yükle
loadPage(currentPage);
