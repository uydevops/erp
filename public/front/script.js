$(document).ready(function () {
    $("#forgotPasswordLink").click(function () {
        $("#username").parent().toggle();
        $("#password").parent().toggle();
        $("#emailGroup").toggle(); // Burada "emailGroup" kullanıyoruz
        $("#forgotPasswordLink").text(function (i, text) {
            return text === "Şifremi Unuttum" ? "Geri Dön" : "Şifremi Unuttum";
        });
        $("#login").text(function (i, text) {
            return text === "Giriş Yap" ? "Gönder" : "Giriş Yap";
        });
        return false;
    });
});
