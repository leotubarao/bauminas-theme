$(document).ready(function () {
  bsCustomFileInput.init();

  $('[href="#video-institucional"]')
    .attr('data-video-id', ltco_acf.video_id)
    .modalVideo();
});

{
	$('[data-modal-video]').modalVideo();
}

{
  $(".ltco_scroll_top").click(function() {
    $("html, body").animate({ scrollTop: 0 }, "slow");
    return false;
  });
}
