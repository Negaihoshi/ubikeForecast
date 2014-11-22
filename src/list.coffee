$("tr").on "click", (e) ->
  # if $("#show").hasClass("in")
  $("#percentage").html ($(this).attr("key") + "%")
  $("#station").html $(this).attr("name")
  # else
    # $("#show").addClass "in"
