for individual upload + rotate more files and directories are needed.
check index_01_uploading_pics.php at 1000ish.com

Generally, we have 2 options:
In index_01_uploading_pics.php we fill a form and get to upload_preview.php. There we can go to upload.php,  currently commented out, that works  with ../_uploads directory, with no progressbar, with option to rotate. 

Or we fill the current progressbar form, that works with file_upload_parser.php and file_upload_parser_01.php (no need for both files, one is for the original upload example on the bottom of upload_preview.php), with progress bar, that uploads files to test_uploads directory with no need to rotate.

Both forms aren't working together at the moment, so the form for upload.php is commented out in index_01_uploading_pics.php.

Love you