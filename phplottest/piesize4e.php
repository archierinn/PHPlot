<?php
# $Id: piesize4e.php 1068 2011-12-30 17:02:02Z lbayuk $
# PHPlot test - Pie Chart Sizing and Label Variations - Label Type (e)
# This is a parameterized test. See the script named at the bottom for details.
$tp = array(
  'suffix' => 'Label Formatting',    # Title part 2
  'data_choice' => 1,          # Select data array: 1 or 2
  'pie_label_args' => array('index'),
  'ttfonts' => TRUE,           # Use TrueType fonts?
  'font_size' => 10,           # If set, TrueType or GD font size
  );
require 'piesize.php';
