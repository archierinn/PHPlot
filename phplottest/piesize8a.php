<?php
# $Id: piesize8a.php 1090 2011-12-30 17:03:44Z lbayuk $
# PHPlot test - Pie Chart Sizing and Label Variations - Custom multi-part label
# This is a parameterized test. See the script named at the bottom for details.
$tp = array(
  'suffix' => 'Multi-field labels',          # Title part 2
  'data_choice' => 1,          # Select data array: 1, 2 or 3
  'pie_label_args' => array(array('percent', 'label'), 'custom', 'mylabels'),
  'image_aspect' => 'L',       # Image aspect: S=square, P=portrait, L=landscape
  );

# Custom label format:
function mylabels($label)
{
    // Extract label parameters. Use 3rd arg $limit to handle spaces in labels.
    list($percent, $label) = explode(' ', $label, 2);
    // Format the label values
    return sprintf("%s (%.1f%%)", $label, $percent);
}

require 'piesize.php';
