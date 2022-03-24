$(function () {
    $(document).on("click", "#btn_create_post", function () {
        let form = $("#form_post")[0];
        let data = new FormData(form);

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            },
        });

        $.ajax({
            url: "/",
            type: 'POST',
            data: data,
            dataType: 'json',
            processData: false,
            contentType: false,
            cache: false,
            success: function (response) {
                if (response.status === "success") {
                    window.location.href = response.url;
                } else {
                    alert("hata oluştu")
                }


            }
        })

    })
})
