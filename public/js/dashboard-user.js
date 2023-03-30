var dataDiri2 = document.getElementById("data-diri-2");
var dataDiri = document.getElementById("data-diri");
var dokumen = document.getElementById("dokumen");
var dokumen2 = document.getElementById("dokumen-2");
var pembayaran = document.getElementById("pembayaran");
var pembayaran2 = document.getElementById("pembayaran-2");
var cetak = document.getElementById("cetak");
var cetak2 = document.getElementById("cetak-2");

var pribadi = document.getElementById("pribadi");
var pribadi2 = document.getElementById("pribadi-2");
var kontak = document.getElementById("kontak");
var kontak2 = document.getElementById("kontak-2");
var kependudukan = document.getElementById("kependudukan");
var kependudukan2 = document.getElementById("kependudukan-2");
var pendidikan = document.getElementById("pendidikan");
var pendidikan2 = document.getElementById("pendidikan-2");
var orangTua = document.getElementById("orang-tua");
var orangTua2 = document.getElementById("orang-tua-2");
var kembali = document.querySelector("#kembali");
var kembali2 = document.querySelector("#kembali-edit-foto");
var profileMenu = document.getElementById("profile-menu");
var editPhoto = document.getElementById("edit-button");
var editPhoto2 = document.getElementById("edit-photo");
var mutasi = document.getElementById("mutasi");
var mutasi2 = document.getElementById("mutasi-2");

dataDiri.onclick = function () {
    dataDiri2.style.display = "block";
    dokumen2.style.display = "none";
    pembayaran2.style.display = "none";
    cetak2.style.display = "none";
    kembali.style.display = "none";
    editPhoto2.style.display = "none";

    profileMenu.style.display = "block";
    pribadi2.style.display = "none";
    kontak2.style.display = "none";
    kependudukan2.style.display = "none";
    pendidikan2.style.display = "none";
    orangTua2.style.display = "none";
    mutasi2.style.display = "none";
};
dokumen.onclick = function () {
    dataDiri2.style.display = "none";
    dokumen2.style.display = "block";
    pembayaran2.style.display = "none";
    cetak2.style.display = "none";
    editPhoto2.style.display = "none";
    mutasi2.style.display = "none";
};
mutasi.onclick = function () {
    dataDiri2.style.display = "none";
    dokumen2.style.display = "none";
    mutasi2.style.display = "block";
    pembayaran2.style.display = "none";
    cetak2.style.display = "none";
    editPhoto2.style.display = "none";
};
pembayaran.onclick = function () {
    dataDiri2.style.display = "none";
    dokumen2.style.display = "none";
    pembayaran2.style.display = "block";
    cetak2.style.display = "none";
    editPhoto2.style.display = "none";
    mutasi2.style.display = "none";
};
cetak.onclick = function () {
    dataDiri2.style.display = "none";
    dokumen2.style.display = "none";
    pembayaran2.style.display = "none";
    cetak2.style.display = "block";
    dataDiri2.style.display = "none";
    editPhoto2.style.display = "none";
    mutasi2.style.display = "none";
};

pribadi.onclick = function () {
    pribadi2.style.display = "block";
    kontak2.style.display = "none";
    kependudukan2.style.display = "none";
    pendidikan2.style.display = "none";
    orangTua2.style.display = "none";
    profileMenu.style.display = "none";
    kembali.style.display = "inline-block";
};
kontak.onclick = function () {
    pribadi2.style.display = "none";
    kontak2.style.display = "block";
    kependudukan2.style.display = "none";
    pendidikan2.style.display = "none";
    orangTua2.style.display = "none";
    profileMenu.style.display = "none";
    kembali.style.display = "inline-block";
};
kependudukan.onclick = function () {
    pribadi2.style.display = "none";
    kontak2.style.display = "none";
    kependudukan2.style.display = "block";
    pendidikan2.style.display = "none";
    orangTua2.style.display = "none";
    profileMenu.style.display = "none";
    kembali.style.display = "inline-block";
};
pendidikan.onclick = function () {
    pribadi2.style.display = "none";
    kontak2.style.display = "none";
    kependudukan2.style.display = "none";
    pendidikan2.style.display = "block";
    orangTua2.style.display = "none";
    profileMenu.style.display = "none";
    kembali.style.display = "inline-block";
};
orangTua.onclick = function () {
    pribadi2.style.display = "none";
    kontak2.style.display = "none";
    kependudukan2.style.display = "none";
    pendidikan2.style.display = "none";
    orangTua2.style.display = "block";
    profileMenu.style.display = "none";
    kembali.style.display = "inline-block";
};
kembali.onclick = function () {
    pribadi2.style.display = "none";
    kontak2.style.display = "none";
    kependudukan2.style.display = "none";
    pendidikan2.style.display = "none";
    orangTua2.style.display = "none";
    profileMenu.style.display = "block";
    kembali.style.display = "none";
    editPhoto2.style.display = "none";
};
editPhoto.onclick = function () {
    editPhoto2.style.display = "block";
    dataDiri2.style.display = "none";
    dokumen2.style.display = "none";
    pembayaran2.style.display = "none";
    cetak2.style.display = "none";
    mutasi2.style.display = "none";
};

kembali2.onclick = function () {
    editPhoto2.style.display = "none";
    dataDiri2.style.display = "block";
    dokumen2.style.display = "none";
    pembayaran2.style.display = "none";
    cetak2.style.display = "none";
    mutasi2.style.display = "none";

    profileMenu.style.display = "block";
    pribadi2.style.display = "none";
    kontak2.style.display = "none";
    kependudukan2.style.display = "none";
    pendidikan2.style.display = "none";
    orangTua2.style.display = "none";
};
