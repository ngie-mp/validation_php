$(document).on("ready",function(){
  $("article").on("click",".card-action>a",function(e){
    e.preventDefault();
    var $article = $(this).closest("article"),
        title = $article.find(".card-content>h3").html(),
        price = $article.data("price");

    var $li = $('<li data-price="'+price+'"></li>');
    $li.html(price+"€ - "+title).appendTo($("#cart>ul"));
  });
  $("#cart").on("click","li",function(){
    var $this = $(this);
		$this.addClass("removing").slideUp(function(){
      $this.remove();
    });
  });

  $("#pay").on("click", function(){
    var price = $(this).data("total");
    if (price == undefined){
      price=0.00;
    }
    alert("You have to pay "+price.toFixed(2)+"€ !");
  });


});
