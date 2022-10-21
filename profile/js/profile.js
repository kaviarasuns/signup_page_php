function add_bio(bio) {
  var bio = $.trim(bio);
  if (bio.length == "") {
    $(".bio-error").html("Bio is required");
  } else {
    $.ajax({
      type: "POST",
      url: "ajax/profile.php?bio=true",
      data: { bio: bio },
      dataType: "JSON",
      success: function (feedback) {
        if (feedback["error"] == "success") {
          location = "index.php";
        }
      },
    });
  }
}
