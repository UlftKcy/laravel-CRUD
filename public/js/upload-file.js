$(function () {
    let form_file = $("#form_file");
    let btn_outer = $(".button_outer");
    let uploaded_file_view = $(".uploaded_file_view");
    form_file.on("change", function (e) {
        let fileType = form_file.val().split(".").pop().toLowerCase();
        const validTypes = ['png', 'jpg', 'jpeg', 'doc', 'docx', 'xls', 'xlsx', 'pdf'];
        const ImageTypes = ['png', 'jpg', 'jpeg'];
        const FileTypes = ['doc', 'docx', 'xls', 'xlsx', 'pdf'];
        if ($.inArray(fileType, validTypes) < 0) {
            $(".error_msg").text("Geçerli bir dosya ekleyin...");
        } else {
            $(".error_msg").text("");
            btn_outer.addClass("file_uploading");
            setTimeout(function () {
                btn_outer.addClass("file_uploaded");
            }, 3000);
            if (FileTypes.includes(fileType)) {
                let uploadedFile = e.target.files[0].name;
                uploaded_file_view.css("max-width", "100%");
                setTimeout(function () {
                    uploaded_file_view.append(`<div>${uploadedFile}</div>`).addClass("show");
                }, 3500);
            }
            if (ImageTypes.includes(fileType)) {
                let uploadedImage = URL.createObjectURL(e.target.files[0]);
                uploaded_file_view.css("max-width", "120px");
                setTimeout(function () {
                    uploaded_file_view.append('<img src="' + uploadedImage + '"/>').addClass("show");
                }, 3500);
            }
            setTimeout(function () {
                $(".button_outer,.file_uploading ,.file_uploaded").fadeOut("fast");
            }, 4000);
        }
    })
    $(".file_remove").on("click", function () {
        uploaded_file_view.removeClass("show");
        uploaded_file_view.find("img").remove();
        uploaded_file_view.find("div").remove();
        btn_outer.removeClass("file_uploading");
        btn_outer.removeClass("file_uploaded");
        btn_outer.css('display', 'block');
    })
})
