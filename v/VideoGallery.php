<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript" src="https://unpkg.com/nanogallery2/dist/jquery.nanogallery2.min.js"></script>
<link href="https://unpkg.com/nanogallery2/dist/css/nanogallery2.min.css" rel="stylesheet" type="text/css">

</head>
<body>
<h3>
  אנגלית
</h3>
<div id="my_nanogallery2"></div>
<script>
jQuery(document).ready(function () {
  jQuery("#my_nanogallery2").nanogallery2({
  	items:[
      {
        src:          'https://vimeo.com/32875422',                           // media url
        srct:         'https://i.vimeocdn.com/video/222726041_1280x720.jpg',  // media thumbnail url
        title:        'Vimeo video',                                          // media title
        description:  'Video'                                                 // media description
      },
      { src: 'https://www.youtube.com/watch?v=Ir098VWCv8Q', title: 'Youtube video' },
      { src: 'https://www.dailymotion.com/video/x4wtyl6',   title: 'Dailymotion video' },
      { src: 'berlin1.jpg',      srct: 'berlin1t.jpg',   title: 'Title Image' }
		],
    thumbnailWidth:  'auto',
  	thumbnailHeight: 170,
    itemsBaseURL:    'https://nanogallery2.nanostudio.org/samples/',
		locationHash:    false
  });
});
</script>
</body>
</html>
