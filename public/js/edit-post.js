$(function () {
    $(document).on("click", "#btn_save_post", function () {
        let post_id = $(this).attr("data-value");
        let form = $("#form_post")[0];
        let data = new FormData(form);
        data.append("post_id", post_id);

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            },
        });

        $.ajax({
            url: "/update",
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
