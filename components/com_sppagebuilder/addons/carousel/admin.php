<?php
/**
* @package SP Page Builder
* @author JoomShaper http: //www.joomshaper.com
* @copyright Copyright (c) 2010 - 2022 JoomShaper
* @license http: //www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
*/
//no direct access
defined ('_JEXEC') or die ('Restricted access');

use Joomla\CMS\Language\Text;

SpAddonsConfig::addonConfig(
	[
		'type'       => 'repeatable',
		'addon_name' => 'carousel',
		'category'   => 'Slider',
		'title'      => Text::_('COM_SPPAGEBUILDER_ADDON_CAROUSEL'),
		'desc'       => Text::_('COM_SPPAGEBUILDER_ADDON_CAROUSEL_DESC'),
		'icon'       => '<svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M23 5H9v22h14V5zM9 3c-1.1 0-2 .9-2 2v22c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2H9z" fill="currentColor"/><path d="M27.9 19.5v-6.9c0-.5.5-.7.8-.4l3.1 3.5c.2.2.2.6 0 .8L28.7 20c-.2.2-.8-.1-.8-.5zM4.1 12.5v6.9c0 .5-.5.7-.8.4L.2 16.3c-.2-.2-.2-.6 0-.8L3.3 12c.3-.2.8.1.8.5z" fill="currentColor"/><g opacity=".5" fill-rule="evenodd" clip-rule="evenodd" fill="currentColor"><path d="M25 16.2L20.9 20c-1.8 1.7-5 1.5-6.5-.4-.8-1-2.4-1.1-3.4-.2L8.6 22 7 20.8l2.5-2.5c1.8-1.8 5.1-1.7 6.6.3.8 1 2.4 1.1 3.3.2l4.1-3.8 1.5 1.2zM17.5 9c-.8 0-1.5.7-1.5 1.5s.7 1.5 1.5 1.5 1.5-.7 1.5-1.5S18.3 9 17.5 9zM14 10.5C14 8.6 15.6 7 17.5 7S21 8.6 21 10.5 19.4 14 17.5 14 14 12.4 14 10.5z"/></g></svg>',
		'inline'     => [
			'buttons' => [
				'carousel_general_options' => [
					'action'   => 'dropdown',
					'icon'     => 'addon::carousel',
					'tooltip'  => Text::_('COM_SPPAGEBUILDER_ADDON_CAROUSEL'),
					'fieldset' => [
						'animation' => [
							'autoplay'=> [
								'type'   => 'checkbox',
								'title'  => Text::_('COM_SPPAGEBUILDER_ADDON_CAROUSEL_AUTOPLAY'),
								'desc'   => Text::_('COM_SPPAGEBUILDER_ADDON_CAROUSEL_AUTOPLAY_DESC'),
								'values' => [
									1 => Text::_('JYES'),
									0 => Text::_('JNO'),
								],
								'std' => 1
							],
			
							'interval'=> [
								'type'    => 'slider',
								'title'   => Text::_('COM_SPPAGEBUILDER_ADDON_CAROUSEL_INTERVAL'),
								'desc'    => Text::_('COM_SPPAGEBUILDER_ADDON_CAROUSEL_INTERVAL_DESC'),
								'std'     => 5,
								'depends' => [['autoplay', '=', 1]]
							],

							'speed'=> [
								'type'  => 'slider',
								'title' => Text::_('COM_SPPAGEBUILDER_ADDON_CAROUSEL_SPEED'),
								'desc'  => Text::_('COM_SPPAGEBUILDER_ADDON_CAROUSEL_SPEED_DESC'),
								'std'   => 600,
							],

							'controllers'=> [
								'type'   => 'checkbox',
								'title'  => Text::_('COM_SPPAGEBUILDER_ADDON_CAROUSEL_SHOW_CONTROLLERS'),
								'values' => [
									1 => Text::_('JYES'),
									0 => Text::_('JNO'),
								],
								'std' => 1,
							],
			
							'arrows'=> [
								'type'   => 'checkbox',
								'title'  => Text::_('COM_SPPAGEBUILDER_ADDON_CAROUSEL_SHOW_ARROWS'),
								'values' => [
									1 => Text::_('JYES'),
									0 => Text::_('JNO'),
								],
								'std' => 1,
							],

							'advanced_settings' => [
                                'type'   => 'advancedsettings',
                                'title'  => Text::_('Items'),
                                'buttonText' => Text::_('COM_SPPAGEBUILDER_ADDON_ITEM_ADD_EDIT'),
                                'buttonIcon' => 'ul',
                            ],

							'alignment'=> [
								'type'   => 'alignment',
								'title'  => Text::_('COM_SPPAGEBUILDER_ADDON_CAROUSEL_CONTENT_ALIGNMENT'),
								'desc'   => Text::_('COM_SPPAGEBUILDER_ADDON_CAROUSEL_CONTENT_ALIGNMENT_DESC'),
								'std' 	 => 'center',
								'layout' => 'horizontal',
							],
						],
					],
				],

				'carousel_add_new_item' => [
                    'action' => 'click',
                    'type' => 'plus',
                    'icon' => 'plusCircle',
                    'tooltip' => Text::_('COM_SPPAGEBUILDER_GLOBAL_ADD_NEW'),
                    'meta' => [
                        'key' => 'sp_carousel_item',
                        'title' => "Where Art and Technology Collide",
						'content' => 'You might remember the Dell computer commercials in which a youth reports this exciting news to his friends.<br />That they are about to get their new computer.',
						'bg' =>  [
							'src' => 'https://sppagebuilder.com/addons/carousel/carousel-bg.jpg',
						],
						
                    ]
                ],

				'carousel_typography_options' => [
					'action'   => 'dropdown',
					'icon'     => 'typography',
					'tooltip'  => Text::_('COM_SPPAGEBUILDER_GLOBAL_TYPOGRAPHY'),
					'fieldset' => [
						'tab_groups' => [
							'title' => [
								'fields' => [
									[
										'item_title_typography' => [
											'type'     => 'typography',
										],
									],
								],
							],

							'content' => [
								'fields' => [
									[
										'item_content_typography' => [
											'type'     => 'typography',
										],
									],
								],
							],
						],
					],
				],

				'carousel_color_options' => [
                    'action'  => 'dropdown',
                    'type'    => 'placeholder',
					'tooltip'     => Text::_('COM_SPPAGEBUILDER_GLOBAL_COLOR'),
                    'placeholder' => [
                        'type'      => 'HTMLElement',
                        'element'   => 'div',
                        'selector'  => '.builder-color-picker',
                        'attribute' => [
                            'type'     => 'style',
                            'property' => 'background'
                        ],
                        'display_field' => 'item_title_color',
                    ],
                    'fieldset' => [
						[
							'item_title_color' => [
								'type'   => 'color',
								'title'	 => Text::_('COM_SPPAGEBUILDER_GLOBAL_TITLE'),
							],

							'item_content_color' => [
								'type'   => 'color',
								'title'	 => Text::_('COM_SPPAGEBUILDER_GLOBAL_CONTENT'),
							]
						],
                    ],
                ],
			],
		],
		
		'attr'       => [
			'general' => [
				'sp_carousel_item'=> [
					'title' => Text::_('COM_SPPAGEBUILDER_ADDON_CAROUSEL_ITEMS'),
					'attr'  => [
						'title'=> [
							'type'  => 'text',
							'title' => Text::_('COM_SPPAGEBUILDER_GLOBAL_TITLE'),
							'std'   => 'Where Art and Technology Collide',
                        ],

						'title_padding'=> [
							'type'       => 'padding',
							'title'      => Text::_('COM_SPPAGEBUILDER_ADDON_CAROUSEL_ITEM_TITLE_PADDING'),
							'std'        => ['xxl'=>'0px 0px 0px 0px', 'xl'=>'0px 0px 0px 0px', 'lg'=>'0px 0px 0px 0px', 'md'=>'0px 0px 0px 0px', 'sm'=>'0px 0px 0px 0px', 'xs'=>'0px 0px 0px 0px'],
							'responsive' => true
                        ],

						'title_margin'=> [
							'type'       => 'margin',
							'title'      => Text::_('COM_SPPAGEBUILDER_ADDON_CAROUSEL_ITEM_TITLE_MARGIN'),
							'std'        => ['xxl'=>'0px 0px 0px 0px', 'xl'=>'0px 0px 0px 0px', 'lg'=>'0px 0px 0px 0px', 'md'=>'0px 0px 0px 0px', 'sm'=>'0px 0px 0px 0px', 'xs'=>'0px 0px 0px 0px'],
							'responsive' => true
                        ],

						'content'=> [
							'type'  => 'editor',
							'title' => Text::_('COM_SPPAGEBUILDER_GLOBAL_CONTENT'),
							'desc'  => Text::_('COM_SPPAGEBUILDER_ADDON_CAROUSEL_ITEM_CONTENT_DESC'),
							'std'   => 'You might remember the Dell computer commercials in which a youth reports this exciting news to his friends.<br />That they are about to get their new computer.'
                        ],

						'content_padding'=> [
							'type'       => 'padding',
							'title'      => Text::_('COM_SPPAGEBUILDER_ADDON_CAROUSEL_ITEM_CONTENT_PADDING'),
							'std'        => ['xxl'=>'20px 0px 30px 0px', 'xl'=>'20px 0px 30px 0px', 'lg'=>'20px 0px 30px 0px', 'md'=>'20px 0px 30px 0px', 'sm'=>'15px 0px 20px 0px', 'xs'=>'10px 0px 10px 0px'],
							'responsive' => true
                        ],

						'content_margin'=> [
							'type'       => 'margin',
							'title'      => Text::_('COM_SPPAGEBUILDER_ADDON_CONTENT_MARGIN'),
							'std'        => ['xxl'=>'0px 0px 0px 0px', 'xl'=>'0px 0px 0px 0px', 'lg'=>'0px 0px 0px 0px', 'md'=>'0px 0px 0px 0px', 'sm'=>'0px 0px 0px 0px', 'xs'=>'0px 0px 0px 0px'],
							'responsive' => true
                        ],

						'bg'=> [
							'type'   => 'media',
							'title'  => Text::_('COM_SPPAGEBUILDER_GLOBAL_IMAGE'),
							'desc'   => Text::_('COM_SPPAGEBUILDER_ADDON_CAROUSEL_ITEM_IMAGE_DESC'),
							'format' => 'image',
							'std'    => [
								'src' => 'https://sppagebuilder.com/addons/carousel/carousel-bg.jpg',
                            ]
                        ],

						//Button
						'button_text'=> [
							'type'  => 'text',
							'title' => Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_TEXT'),
							'desc'  => Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_TEXT_DESC'),
							'std'   => 'Learn More',
                        ],

						'button_url'=> [
							'type'         => 'link',
							'title'        => Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_URL'),
							'desc'         => Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_URL_DESC'),
							'depends'=> [['button_text', '!=', '']]
                        ],

						'button_icon'=> [
							'type'    => 'icon',
							'title'   => Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_ICON'),
							'desc'    => Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_ICON_DESC'),
							'depends'=> [['button_text', '!=', '']]
                        ],

						'button_icon_position'=> [
							'type'   => 'radio',
							'title'  => Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_ICON_POSITION'),
							'values' => [
								'left'  => Text::_('COM_SPPAGEBUILDER_GLOBAL_LEFT'),
								'right' => Text::_('COM_SPPAGEBUILDER_GLOBAL_RIGHT'),
                            ],
							'depends'=> [['button_text', '!=', '']]
                        ],
                    ],
                ],

				// button
				'toggle_btn'	=> [
					'type'	=> 'header',
					'style'	=> 'toggle',
					'uuid'  => 'toggle_btn',
					'title'	=> Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON'),
					'group'	=> [
						'button_tab',
						'button_type',
						'button_appearance',
						'button_shape',
						'button_size',
						'button_padding',
						'button_block',

						'button_typography',

						'button_status',
						'button_color',
						'button_background_color',
						'button_background_gradient',
						'button_color_hover',
						'button_background_color_hover',
						'button_background_gradient_hover',

						'link_button_color',
						'link_button_border_width',
						'link_button_border_color',
						'link_button_padding_bottom',
						'link_button_hover_color',
						'link_button_border_hover_color',
					],
				],

				'button_tab' => [
					'type'   => 'buttons',
					'std'    => 'normal',
					'values' => [
						['label' => 'Basic', 'value' => 'basic'],
						['label' => 'Typography', 'value' => 'typography'],
						['label' => 'Color', 'value' => 'color', 'depends' => [['button_type', '=', 'custom']]],
					],
					'std'   => 'basic',
					'tabs'    => true,
				],

				'button_type' => [
					'type'   => 'select',
					'title'  => Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_STYLE'),
					'desc'   => Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_STYLE_DESC'),
					'values' => [
						'default'   => Text::_('COM_SPPAGEBUILDER_GLOBAL_DEFAULT'),
						'primary'   => Text::_('COM_SPPAGEBUILDER_GLOBAL_PRIMARY'),
						'secondary' => Text::_('COM_SPPAGEBUILDER_GLOBAL_SECONDARY'),
						'success'   => Text::_('COM_SPPAGEBUILDER_GLOBAL_SUCCESS'),
						'info'      => Text::_('COM_SPPAGEBUILDER_GLOBAL_INFO'),
						'warning'   => Text::_('COM_SPPAGEBUILDER_GLOBAL_WARNING'),
						'danger'    => Text::_('COM_SPPAGEBUILDER_GLOBAL_DANGER'),
						'dark'      => Text::_('COM_SPPAGEBUILDER_GLOBAL_DARK'),
						'link'      => Text::_('COM_SPPAGEBUILDER_GLOBAL_LINK'),
						'custom'    => Text::_('COM_SPPAGEBUILDER_GLOBAL_CUSTOM'),
					],
					'std'   => 'custom',
					'inline' => true,
					'depends' => [['button_tab', '=', 'basic']]
				],

				'button_appearance' => [
					'type'   => 'select',
					'title'  => Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_APPEARANCE'),
					'desc'   => Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_APPEARANCE_DESC'),
					'values' => [
						''         => Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_APPEARANCE_FLAT'),
						'gradient' => Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_APPEARANCE_GRADIENT'),
						'outline'  => Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_APPEARANCE_OUTLINE'),
					],
					'std'   => '',
					'inline' => true,
					'depends' => [['button_tab', '=', 'basic']]
				],

				'button_shape' => [
					'type'   => 'radio',
					'title'  => Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_SHAPE'),
					'desc'   => Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_SHAPE_DESC'),
					'values' => [
						'rounded' => Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_SHAPE_ROUNDED'),
						'square'  => Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_SHAPE_SQUARE'),
						'round'   => Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_SHAPE_ROUND'),
					],
					'std'   => 'square',
					'depends' => [['button_tab', '=', 'basic']]
				],

				'button_size' => [
					'type'   => 'select',
					'title'  => Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_SIZE'),
					'desc'   => Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_SIZE_DESC'),
					'values' => [
						''    => Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_SIZE_DEFAULT'),
						'lg'  => Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_SIZE_LARGE'),
						'xlg' => Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_SIZE_XLARGE'),
						'sm'  => Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_SIZE_SMALL'),
						'xs'  => Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_SIZE_EXTRA_SAMLL'),
						'custom' => Text::_('COM_SPPAGEBUILDER_GLOBAL_CUSTOM'),
					],
					'inline' => true,
					'std'   => '',
					'depends' => [['button_tab', '=', 'basic']]
				],

				'button_padding' => [
					'type'    => 'padding',
					'title'   => Text::_('COM_SPPAGEBUILDER_GLOBAL_PADDING'),
					'responsive' => true,
					'std' => ['xxl' => '8px 22px 10px 22px', 'xl' => '8px 22px 10px 22px', 'lg' => '8px 22px 10px 22px', 'md' => '8px 22px 10px 22px', 'sm' => '8px 22px 10px 22px', 'xs' => '8px 22px 10px 22px'],
					'depends' => [
						['button_tab', '=', 'basic'],
						['button_size', '=', 'custom']
					]
				],

				'button_block' => [
					'type'   => 'radio',
					'title'  => Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_BLOCK'),
					'values' => [
						''               => Text::_('JNO'),
						'sppb-btn-block' => Text::_('JYES'),
					],
					'std'     => '',
					'depends' => [
						['button_tab', '=', 'basic'],
						['button_type', '!=', 'link']
					]
				],

				'button_typography' => [
					'type'     => 'typography',
					'depends' => [['button_tab', '=', 'typography']]
				],

				'button_status' => [
					'type'   => 'buttons',
					'std'    => 'normal',
					'values' => [
						['label' => 'Normal', 'value' => 'normal'],
						['label' => 'Hover', 'value' => 'hover']
					],
					'tabs'    => true,
					'depends' => [['button_tab', '=', 'color']]
				],

				'button_color' => [
					'type' => 'color',
					'title' => Text::_('COM_SPPAGEBUILDER_GLOBAL_TEXT_COLOR'),
					'std' => '#FFFFFF',
					'depends' => [
						['button_tab', '=', 'color'],
						['button_type', '=', 'custom'],
						['button_status', '=', 'normal'],
					],
				],

				'button_background_color' => [
					'type'    => 'color',
					'title'   => Text::_('COM_SPPAGEBUILDER_GLOBAL_BACKGROUND_COLOR'),
					'std'     => '#3366FF',
					'depends' => [
						['button_tab', '=', 'color'],
						['button_appearance', '!=', 'gradient'],
						['button_type', '=', 'custom'],
						['button_status', '=', 'normal'],
					],
				],

				'button_background_gradient' => [
					'type' => 'gradient',
					'title' => Text::_('COM_SPPAGEBUILDER_GLOBAL_BACKGROUND_COLOR'),
					'std' => [
						"color"  => "#3366FF",
						"color2" => "#0037DD",
						"deg" => "45",
						"type" => "linear"
					],
					'depends' => [
						['button_tab', '=', 'color'],
						['button_appearance', '=', 'gradient'],
						['button_type', '=', 'custom'],
						['button_status', '=', 'normal'],
					],
				],

				'button_color_hover' => [
					'type' => 'color',
					'title' => Text::_('COM_SPPAGEBUILDER_GLOBAL_TEXT_COLOR'),
					'std' => '#FFFFFF',
					'depends' => [
						['button_tab', '=', 'color'],
						['button_type', '=', 'custom'],
						['button_status', '=', 'hover'],
					],
				],

				'button_background_color_hover' => [
					'type'    => 'color',
					'title'   => Text::_('COM_SPPAGEBUILDER_GLOBAL_BACKGROUND_COLOR'),
					'std'     => '#0037DD',
					'depends' => [
						['button_tab', '=', 'color'],
						['button_appearance', '!=', 'gradient'],
						['button_type', '=', 'custom'],
						['button_status', '=', 'hover'],
					],
				],

				'button_background_gradient_hover' => [
					'type' => 'gradient',
					'title' => Text::_('COM_SPPAGEBUILDER_GLOBAL_BACKGROUND_COLOR'),
					'std' => [
						"color"  => "#0037DD",
						"color2" => "#3366FF",
						"deg" => "45",
						"type" => "linear"
					],
					'depends' => [
						['button_tab', '=', 'color'],
						['button_appearance', '=', 'gradient'],
						['button_type', '=', 'custom'],
						['button_status', '=', 'hover'],
					],
				],

				// link button
				'link_button_color' => [
					'type'    => 'color',
					'title'   => Text::_('COM_SPPAGEBUILDER_GLOBAL_TEXT_COLOR'),
					'depends' => [
						['button_tab', '=', 'color'],
						['button_type', '=', 'link'],
						['button_status', '=', 'normal'],
					]
				],

				'link_button_border_width' => [
					'type'    => 'slider',
					'title'   => Text::_('COM_SPPAGEBUILDER_GLOBAL_BORDER_WIDTH'),
					'max'     => 30,
					'depends' => [
						['button_tab', '=', 'color'],
						['button_type', '=', 'link'],
						['button_status', '=', 'normal'],
					]
				],

				'link_button_border_color' => [
					'type'    => 'color',
					'title'   => Text::_('COM_SPPAGEBUILDER_GLOBAL_BORDER_COLOR'),
					'std'     => '',
					'depends' => [
						['button_tab', '=', 'color'],
						['button_type', '=', 'link'],
						['button_status', '=', 'normal'],
					]
				],

				'link_button_padding_bottom' => [
					'type'    => 'slider',
					'title'   => Text::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_PADDING_BOTTOM'),
					'max'     => 100,
					'std'     => '',
					'depends' => [
						['button_tab', '=', 'color'],
						['button_type', '=', 'link'],
						['button_status', '=', 'normal'],
					]
				],

				//Link Hover
				'link_button_hover_color' => [
					'type'    => 'color',
					'title'   => Text::_('COM_SPPAGEBUILDER_GLOBAL_TEXT_COLOR'),
					'std'     => '',
					'depends' => [
						['button_tab', '=', 'color'],
						['button_type', '=', 'link'],
						['button_status', '=', 'hover'],
					]
				],

				'link_button_border_hover_color' => [
					'type'    => 'color',
					'title'   => Text::_('COM_SPPAGEBUILDER_GLOBAL_BORDER_COLOR'),
					'std'     => '',
					'depends' => [
						['button_tab', '=', 'color'],
						['button_type', '=', 'link'],
						['button_status', '=', 'hover'],
					]
				],
            ],
        ],
    ],
);
