// public/js/live-search.js
document.addEventListener("DOMContentLoaded", function () {
    const zipCodeInput = document.getElementById("zipCodeInput");
    const searchResults = document.getElementById("searchResults");

    zipCodeInput.addEventListener("input", function () {
        const query = zipCodeInput.value.trim();
        if (query.length === 0) {
            searchResults.innerHTML = ""; // ลบผลลัพธ์ที่แสดงออก
            return;
        }

        // ส่งคำขอค้นหาผ่าน Ajax
        fetch(`/search?query=${query}`)
            .then((response) => response.json())
            .then((data) => {
                // แสดงผลลัพธ์
                let html = "";
                data.forEach((result) => {
                    html += `<div>${result.name_th} (${result.province_name})</div>`;
                });
                searchResults.innerHTML = html;
            });
    });
});
