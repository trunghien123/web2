$(".search_sp").keyup(function(){
    var key = $("#search").val();
    var minPrice = $("#minPrice").val();
    var maxPrice = $("#maxPrice").val();
    var category = location.search.split('category=')[1];
    $.post("data.php", { minPrice: minPrice, maxPrice: maxPrice, products : key, category : category }, function(data) {
        $("#data").html(data);
    })
})
$(".search_sp").change(function(){
    var minPrice = $("#minPrice").val();
    var maxPrice = $("#maxPrice").val();
    $.post("data.php", { minPrice: minPrice, maxPrice: maxPrice }, function(data) {
        $("#data").html(data);
    })
})
$(".phantrang").click(function(){
    var value = $(this).attr("data-index");
    const urlParams = new URLSearchParams(window.location.search);
    urlParams.set('page', value);
    // window.location.search = urlParams;
})