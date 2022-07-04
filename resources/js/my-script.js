$('input[type="file"]').on("change", function () {
    let filenames = [];
    let files = document.getElementById("gambar_profil").files;
    for (let i in files) {
        if (files.hasOwnProperty(i)) {
            filenames.push(files[i].name);
        }
    }
    $(this)
        .next(".custom-file-label")
        .addClass("selected")
        .html(filenames.join(", "));
});
$(".pilihan-background-profil").click(function () {
    let nomorGambar = this.children[0].innerHTML;
    $("#background_profil").val(nomorGambar);
});

$(".btn-hapus").click(function () {
    let idHapus = $(this).attr("data-id");
    $("#deleteForm").attr("action", "/users/" + idHapus);
});
// Jika tombol "Ya, Hapus" di klik, submit form
$('#deleteForm [type="submit"]').click(function () {
    $("#deleteForm").submit();
});
