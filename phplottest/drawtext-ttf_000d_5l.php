<?php
# $Id: drawtext-ttf_000d_5l.php 1001 2011-08-08 02:22:55Z lbayuk $
# Unit test: PHPlot DrawText function - TrueType at 0 degrees, multiple lines
# This is a parameterized test. See the script named at the bottom for details.
$tp = array(
  'use_ttf' => True,        # True to use TTF text, False for GD text
  'textangle' => 0,   # Text angle. GD fonts only allow 0 and 90.
  'nlines' => 5,      # Number of lines of text
  );
require 'drawtext.php';
