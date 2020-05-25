$("#categories").change(function() {
    var categories = $(this).val();
    $.post("data.php", { category: categories }, function(data) {
        $("#data").html(data);
    })
})