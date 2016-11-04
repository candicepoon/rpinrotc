<?php
  $files = array(
    "co_bio.html",
    "scholarships.html",
#    "contact.html",
#    "history.html",
   "index.html",
#    "whatisnrotc.html",
#    "xo_bio.html"
   "whattoexpect.html",
  );

  foreach ($files as $file) {
    echo "Found file: $file";
    # Replace Header
    $replaced_text = preg_replace("/<!-- Header -->.*<!-- End Header -->/ms",
                                  file_get_contents("index_header.html"),
                                  file_get_contents($file));
    echo $replaced_text;
    file_put_contents($file, $replaced_text);

    # Replace Footer
    $replaced_text = preg_replace("/<!-- Footer -->.*<!-- End Footer -->/ms",
                                  file_get_contents("index_footer.html"),
                                  file_get_contents($file));
    echo $replaced_text;
    file_put_contents($file, $replaced_text);
  }

?>
