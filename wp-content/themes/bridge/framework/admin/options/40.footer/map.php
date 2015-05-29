<?php

$footerPage = new QodeAdminPage("_footer", "Footer", "fa fa-sort-amount-asc");
$qodeFramework->qodeOptions->addAdminPage("footer",$footerPage);


$panel10 = new QodePanel("Footer","footer_panel");
$footerPage->addChild("panel10",$panel10);
$uncovering_footer = new QodeField("yesno","uncovering_footer","no","Uncovering Footer","Enabling this option will make Footer gradually appear on scroll");
$panel10->addChild("uncovering_footer",$uncovering_footer);

$footer_main_image_background = new QodeField("image","footer_main_image_background","","Footer Background Image","Choose footer background image");
$panel10->addChild("footer_main_image_background",$footer_main_image_background);
$show_footer_top = new QodeField("yesno","show_footer_top","yes","Show Footer Top","Enabling this option will show Footer Top area", array(), array("dependence" => true, "dependence_hide_on_yes" => "", "dependence_show_on_yes" => "#qodef_show_footer_top_container"));
$panel10->addChild("show_footer_top",$show_footer_top);
$show_footer_top_container = new QodeContainer("show_footer_top_container","show_footer_top","no");
$panel10->addChild("show_footer_top_container",$show_footer_top_container);
$footer_in_grid = new QodeField("yesno","footer_in_grid","yes","Footer in Grid","Enabling this option will place Footer Top content in grid");
$show_footer_top_container->addChild("footer_in_grid",$footer_in_grid);
$footer_top_columns = new QodeField("select","footer_top_columns","4","Footer Top Columns","Choose number of columns for Footer Top area", array( "1" => "1",
       "2" => "2",
       "3" => "3",
       "5" => "3(25%+25%+50%)",
       "6" => "3(50%+25%+25%)",
       "4" => "4"
      ));
$show_footer_top_container->addChild("footer_top_columns",$footer_top_columns);

$group1 = new QodeGroup("Footer Top Colors","Configure colors for Footer Top area");
$show_footer_top_container->addChild("group1",$group1);
$row1 = new QodeRow();
$group1->addChild("row1",$row1);
$footer_top_background_color = new QodeField("colorsimple","footer_top_background_color","","Background Color","This is some description");
$row1->addChild("footer_top_background_color",$footer_top_background_color);
$footer_top_title_color = new QodeField("colorsimple","footer_top_title_color","","Title Color","This is some description");
$row1->addChild("footer_top_title_color",$footer_top_title_color);
$footer_top_text_color = new QodeField("colorsimple","footer_top_text_color","","Text Color","This is some description");
$row1->addChild("footer_top_text_color",$footer_top_text_color);
$row2 = new QodeRow(true);
$group1->addChild("row2",$row2);
$footer_link_color = new QodeField("colorsimple","footer_link_color","","Link Color","This is some description");
$row2->addChild("footer_link_color",$footer_link_color);
$footer_link_hover_color = new QodeField("colorsimple","footer_link_hover_color","","Link Hover Color","This is some description");
$row2->addChild("footer_link_hover_color",$footer_link_hover_color);
$footer_image_background = new QodeField("image","footer_image_background","","Footer Top Background Image","Choose footer top background image");
$show_footer_top_container->addChild("footer_image_background",$footer_image_background);

//Footer top border section
$footer_top_border_group = new QodeGroup('Footer Top Border', 'Set footer top section borders');
$show_footer_top_container->addChild('footer_top_border_group', $footer_top_border_group);

$row_ft_border = new QodeRow(true);
$footer_top_border_group->addChild('row_ft_border', $row_ft_border);

$footer_top_border_color = new QodeField('colorsimple', 'footer_top_border_color', '', 'Top Border Color');
$row_ft_border->addChild('footer_top_border_color', $footer_top_border_color);

$footer_top_border_width = new QodeField('textsimple', 'footer_top_border_width', '', 'Top Border Width (px)');
$row_ft_border->addChild('footer_top_border_width', $footer_top_border_width);

$footer_top_border_in_grid = new QodeField('yesnosimple', 'footer_top_border_in_grid', 'no', 'Top Border In Grid');
$row_ft_border->addChild('footer_top_border_in_grid', $footer_top_border_in_grid);

$footer_top_padding_group = new QodeGroup('Footer Top Padding', 'Set padding for footer top section');
$show_footer_top_container->addChild('footer_top_padding_group', $footer_top_padding_group);

$footer_top_padding_row = new QodeRow(true);
$footer_top_padding_group->addChild('footer_top_padding_row', $footer_top_padding_row);

$footer_top_padding_top = new QodeField('textsimple', 'footer_top_padding_top', '', 'Padding Top (px)');
$footer_top_padding_row->addChild('footer_top_padding_top', $footer_top_padding_top);

$footer_top_padding_bottom = new QodeField('textsimple', 'footer_top_padding_bottom', '', 'Padding Bottom (px)');
$footer_top_padding_row->addChild('footer_top_padding_bottom', $footer_top_padding_bottom);

//Footer angled sections
$footer_angled_section = new QodeField("yesno","footer_angled_section","no","Enable Angled Footer","Enabling this option will show angled shape in footer background", array(), array("dependence" => true, "dependence_hide_on_yes" => "", "dependence_show_on_yes" => "#qodef_footer_angled_section_holder"));
$show_footer_top_container->addChild("footer_angled_section",$footer_angled_section);

$footer_angled_section_holder = new QodeContainer("footer_angled_section_holder","footer_angled_section","no");
$show_footer_top_container->addChild("footer_angled_section_holder",$footer_angled_section_holder);

$footer_angled_section_direction = new QodeField("select","footer_angled_section_direction","","Angled Shape Direction","Choose a direction for footer angled shape", array(
	"from_left_to_right" => "From Left To Right",
	"from_right_to_left" => "From Right To Left"
));
$footer_angled_section_holder->addChild("footer_angled_section_direction",$footer_angled_section_direction);

$footer_angled_section_background_color = new QodeField("color","footer_angled_section_background_color","","Background Color","Choose a background color for angled shape");
$footer_angled_section_holder->addChild("footer_angled_section_background_color",$footer_angled_section_background_color);




$footer_text = new QodeField("yesno","footer_text","yes","Show Footer Bottom","Enabling this option will show Footer Bottom area", array(), array("dependence" => true, "dependence_hide_on_yes" => "", "dependence_show_on_yes" => "#qodef_footer_text_container"));
$panel10->addChild("footer_text",$footer_text);
$footer_text_container = new QodeContainer("footer_text_container","footer_text","no");
$panel10->addChild("footer_text_container",$footer_text_container);

$footer_bottom_in_grid = new QodeField("yesno","footer_bottom_in_grid","no","Footer Bottom in Grid","Enabling this option will place Footer bottom content in grid");
$footer_text_container->addChild("footer_bottom_in_grid",$footer_bottom_in_grid);

$footer_bottom_columns = new QodeField("select","footer_bottom_columns","1","Footer Bottom Columns","Choose number of columns for Footer Bottom area", array( "1" => "1",
	"2" => "2",
	"3" => "3"
));
$footer_text_container->addChild("footer_bottom_columns",$footer_bottom_columns);

$group2 = new QodeGroup("Footer Bottom Colors","Configure colors for Footer Bottom area");
$footer_text_container->addChild("group2",$group2);
$row1 = new QodeRow();
$group2->addChild("row1",$row1);
$footer_bottom_background_color = new QodeField("colorsimple","footer_bottom_background_color","","Background Color","This is some description");
$row1->addChild("footer_bottom_background_color",$footer_bottom_background_color);
$footer_bottom_text_color = new QodeField("colorsimple","footer_bottom_text_color","","Text Color","This is some description");
$row1->addChild("footer_bottom_text_color",$footer_bottom_text_color);
$footer_bottom_link_hover_color = new QodeField("colorsimple","footer_bottom_link_hover_color","","Link Hover Color","This is some description");
$row1->addChild("footer_bottom_link_hover_color",$footer_bottom_link_hover_color);

$footer_bottom_border_group = new QodeGroup('Footer Bottom Border', 'Set footer bottom section borders');
$footer_text_container->addChild('footer_bottom_border_group', $footer_bottom_border_group);
$footer_bottom_border_row = new QodeRow(true);
$footer_bottom_border_group->addChild('footer_bottom_border_row', $footer_bottom_border_row);

$footer_bottom_border_color = new QodeField('colorsimple', 'footer_bottom_border_color', '', 'Border Top Color');
$footer_bottom_border_row->addChild('footer_bottom_border_color', $footer_bottom_border_color);

$footer_bottom_border_width = new QodeField('textsimple', 'footer_bottom_border_width', '', 'Border Top Width (px)');
$footer_bottom_border_row->addChild('footer_bottom_border_width', $footer_bottom_border_width);

$footer_bottom_border_in_grid = new QodeField('yesnosimple', 'footer_bottom_border_in_grid', 'no', 'Border Top In Grid');
$footer_bottom_border_row->addChild('footer_bottom_border_in_grid', $footer_bottom_border_in_grid);

$footer_bottom_image_background = new QodeField("image","footer_bottom_image_background","","Footer Bottom Background Image","Choose footer bottom background image");
$footer_text_container->addChild("footer_bottom_image_background",$footer_bottom_image_background);
