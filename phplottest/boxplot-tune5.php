<?php
# $Id: boxplot-tune5.php 1615 2013-04-23 22:15:07Z lbayuk $
# PHPlot test: Box plot - tuning parameters
# This is a parameterized test. See the script named at the bottom for details.
$tp = array(
  'subtitle' => 'Decrease T-width to 25%',
  'n_points' => 10,            # Number of data points
  't_width' => 0.25,           # Tune: boxes_t_width
  );
require 'boxplot-tune.php';
