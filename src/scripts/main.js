$(document).ready(function () {
  bsCustomFileInput.init();

  $('[href="#video-institucional"]')
    .attr('data-video-id', ltco_acf.video_id)
    .modalVideo();
});

{
	$('[data-modal-video]').modalVideo();
}
