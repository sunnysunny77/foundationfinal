$("#scrollTo").ready(function () {
    window.scrollTo(0, $("#scrollTo").val())
});

$("#form").submit(function (event) {
    const scroll = window.scrollY;
    $(this).append('<input id="scrollTo" type="hidden" name="scroll" value="' + scroll + '" /> ');
    const form = $(this);
    $.ajax({
        type: "POST",
        data: form.serialize(),
    });
});



