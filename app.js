$(document).ready(function () {
    $(".list-reset a").on("click", function () {
        $(".list-reset").find(".selected").removeClass("selected");
        $(this).parent().addClass("selected");
    });
});
