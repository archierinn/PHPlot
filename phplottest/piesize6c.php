<?php
# $Id: piesize6c.php 1084 2011-12-30 17:03:15Z lbayuk $
# PHPlot test - Pie Chart Sizing and Label Variations - label margin check (c)
# This is a parameterized test. See the script named at the bottom for details.
$tp = array(
  'suffix' => 'Label margin check, width constrained, on pie edge',           # Title part 2
  'data_choice' => 2,          # Select data array: 1 or 2
  'n_slices' => 72,            # For data_choice==2, number of slices
  'label_pos' => 0.5,      # If set, label position SetLabelScalePosition()
  'pie_label_args' => array('index', 'printf', 'E[%02d]E'), # If set array of args to SetPieLabelType()
  'ttfonts' => TRUE,          # Use TrueType fonts?
  'font_size' => 14,         # If set, TrueType or GD font size
  'shading' => 0,           # If set, pie shading SetShading()
  'plot_border' => 'full',       # If set, plot border type SetPlotBorderType()
  'plot_margins' => array(50, 50, 100, 20),      # If set, array SetMarginsPixels(l,r,t,b)
  );
require 'piesize.php';
