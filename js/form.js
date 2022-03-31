$(document).ready(function () {
    $('#form').submit(function (e) {
        e.preventDefault();
        const form = $(this);
        const url = form.attr('action');
        const sub = $("#sub");
        const pre =  $('#form-msg');
        if (form[0][1].value || form[0][2].value || form[0][3].value || form[0][4].value || form[0][5].value ) {
            $.ajax({
                type: "POST",
                url: url,
                data: form.serialize(),
                success: function (response) {
                    $("#response").html(response);
                    $('#form').submit(function (e) {
                        e.preventDefault();
                        const form = $(this);
                        const url = form.attr('action');
                        $.ajax({
                            type: "POST",
                            url: url,
                            data: form.serialize(),
                            success: function (response) {
                                $("#response").html(response);
                                window.scrollTo(0, 0);
                            }
                        });
                    });
                }
            });
        } else {
            const text = pre.text();
            window.scrollTo(0, 0);
            pre.html("<b>Please select an option</b>")
                sub.prop("disabled", true);
                setTimeout(function () {
                    pre.html(text);
                    sub.prop("disabled", false);
                }, 2000);   
        }
    });
});


