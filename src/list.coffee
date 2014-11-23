$("tr").on "click", (e) ->
  percentage = $(this).attr("percentage")
  unless isNaN percentage
    $("#percentage").html (percentage + "%")
    $("#station").html $(this).attr("name")
    img = $('img')
    body = $('body')

    type = "sun"
    type = "rainy" if percentage >= 0 and percentage < 34
    type = "cloud" if percentage >= 34 and percentage < 67
    img.attr "src", "/img/sm_"+type+".png"

    body.removeClass("rainy")
    body.removeClass("cloud")
    body.removeClass("sun")
    body.addClass(type)

$('tr').eq(1).click()

