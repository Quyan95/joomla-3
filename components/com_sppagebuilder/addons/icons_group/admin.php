<?php

/**
 * @package SP Page Builder
 * @author JoomShaper http: //www.joomshaper.com
 * @copyright Copyright (c) 2010 - 2022 JoomShaper
 * @license http: //www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
 */
//no direct access
defined('_JEXEC') or die('resticted aceess');

use Joomla\CMS\Language\Text;

SpAddonsConfig::addonConfig([
    'type'       => 'repeatable',
    'addon_name' => 'icons_group',
    'title'      => Text::_('COM_SPPAGEBUILDER_ADDON_ICONS_GROUP'),
    'desc'       => Text::_('COM_SPPAGEBUILDER_ADDON_ICONS_GROUP_DESC'),
    'category'   => 'Media',
    'icon'       => '<svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><path d="M30.992 7.064c0 1.33-.02 2.66.007 3.99.02.931-.351 1.634-1.068 2.186-1.49 1.15-4.02 1.095-5.44-.131-1.276-1.096-1.193-2.82.2-3.777 1.282-.882 2.675-.986 4.137-.538.4.124.413.124.413-.275 0-1.765-.007-3.53.007-5.293 0-.345-.117-.414-.42-.359-1.283.22-2.572.427-3.854.648-1 .165-2 .358-3.006.503-.31.041-.359.172-.359.441.007 2.833 0 5.659.007 8.491 0 .958-.393 1.696-1.165 2.247-1.469 1.047-3.875.992-5.295-.124-1.31-1.034-1.317-2.784.02-3.79 1.283-.966 2.71-1.076 4.213-.628.434.131.434.138.434-.31V4.501c0-1.49.49-2.034 1.945-2.268 2.427-.386 4.853-.792 7.273-1.206 1.014-.172 1.91.496 1.93 1.53.028 1.502.008 3.005.008 4.5 0 .007.006.007.013.007zM17.9 12.22c-.559-.035-1.096.082-1.572.427s-.483.737-.014 1.082c.828.613 2.31.606 3.144-.007.469-.345.476-.696.014-1.054-.455-.359-.986-.483-1.572-.448zm9.5.069a2.325 2.325 0 001.517-.497c.393-.303.4-.606.041-.937-.772-.717-2.53-.717-3.316-.007-.365.33-.358.62.035.937.469.373 1.013.504 1.723.504z" fill="currentColor"/><path opacity=".5" d="M9.413 30.993h-6.64c-1.15 0-1.757-.585-1.764-1.75-.014-1.882-.007-3.756-.007-5.638 0-1.413-.007-2.819.02-4.225.014-.827.69-1.447 1.524-1.454.8-.007 1.606-.014 2.406.007.331.007.552-.069.648-.407.035-.13.124-.24.18-.372.324-.806.923-1.13 1.785-1.11 1.33.028 2.661.014 3.992.014.627 0 1.144.297 1.33.855.297.875.821 1.137 1.697 1.02.537-.076 1.096-.014 1.647-.014.91.007 1.593.683 1.593 1.585v9.904c0 .896-.69 1.578-1.6 1.578-2.268.007-4.543.007-6.811.007zm.007-1.792c2.089 0 4.17-.006 6.26.007.262 0 .358-.069.358-.344-.006-2.936-.006-5.872 0-8.801 0-.27-.075-.352-.344-.352-1.02.014-2.041 0-3.062.014-.227 0-.358-.076-.454-.276-.207-.448-.442-.882-.649-1.33-.096-.213-.227-.31-.475-.31-1.103.007-2.2.007-3.303 0-.227 0-.358.09-.448.29-.2.434-.434.861-.627 1.295-.11.241-.255.338-.531.331-.986-.014-1.972.007-2.958-.014-.324-.007-.434.083-.434.42.014 2.875.014 5.755 0 8.63 0 .337.09.454.441.454 2.075-.02 4.15-.014 6.226-.014z" fill="currentColor"/><path d="M1.016 5.486C.982 2.916 2.988.924 5.498 1.006A4.367 4.367 0 018.152 2c.228.186.38.207.634.007 2.682-2.088 6.474-.758 7.088 2.653.276 1.537-.22 2.867-1.31 3.97A1554.577 1554.577 0 019.8 13.44c-.848.855-1.806.855-2.654.008a620.546 620.546 0 01-4.744-4.783c-.882-.896-1.42-1.95-1.386-3.178zm4.296-2.694c-.559 0-1.014.144-1.448.455-1.365.978-1.476 2.867-.228 4.142 1.538 1.57 3.096 3.128 4.64 4.7.214.214.345.22.552 0 .834-.896 1.689-1.778 2.53-2.667.752-.793 1.537-1.551 2.234-2.385.972-1.165.696-2.929-.524-3.797-.986-.703-2.393-.58-3.358.296-.344.317-.675.655-.993 1-.172.185-.29.234-.482.013-.297-.338-.62-.64-.945-.951-.551-.53-1.206-.813-1.978-.806zM26.566 22.599c1 0 1.993.007 2.992 0 .242 0 .324.034.173.282-1.49 2.53-2.965 5.06-4.447 7.589-.304.517-.807.668-1.248.4-.462-.276-.572-.807-.269-1.317.938-1.585 1.882-3.17 2.82-4.756.214-.358.193-.4-.214-.4H20.7c-.372 0-.372 0-.207-.337 1.22-2.447 2.448-4.893 3.668-7.34.172-.345.38-.634.807-.655.737-.048 1.192.607.861 1.29-.523 1.095-1.075 2.17-1.62 3.259-.275.551-.544 1.11-.834 1.654-.131.248-.103.338.2.338 1-.014 2-.007 2.992-.007z" fill="currentColor"/><path opacity=".5" d="M5.71 24.46c0-2.054 1.662-3.729 3.71-3.715 1.985.014 3.716 1.53 3.702 3.722-.014 2.219-1.744 3.673-3.695 3.7-2.048.028-3.716-1.654-3.716-3.707zm3.73-1.923c-1.082-.007-1.895.806-1.95 1.84-.063 1.185.965 2.026 1.888 2.013 1.083-.014 1.965-.855 1.965-1.916a1.918 1.918 0 00-1.903-1.937z" fill="currentColor"/></svg>',
    'inline'     => [
        'buttons' => [
            'icons_group_general_options' => [
                'action'   => 'dropdown',
                'icon'     => 'addon::icons_group',
                'tooltip'  => Text::_('COM_SPPAGEBUILDER_ADDON_ICONS_GROUP'),
                'fieldset' => [
                    'tab_groups' => [
                        'icons' => [
                            'fields' => [
                                [
                                    'size' => [
                                        'type'       => 'slider',
                                        'title'      => Text::_('COM_SPPAGEBUILDER_GLOBAL_SIZE'),
                                        'std'        => ['xxl' => 34, 'xl' => 34, 'lg' => 34, 'md' => 34, 'sm' => 34, 'xs' => 34],
                                        'max'        => 400,
                                        'responsive' => true
                                    ],

                                    'margin' => [
                                        'type'       => 'slider',
                                        'title'      => Text::_('COM_SPPAGEBUILDER_GLOBAL_GAP'),
                                        'responsive' => true,
                                        'max'        => 100,
                                        'std'        => ['xxl' => 5, 'xl' => 5, 'lg' => 5, 'md' => 5, 'sm' => 5, 'xs' => 5],
                                    ],

                                    'item_display' => [
                                        'type'   => 'radio',
                                        'title'  => Text::_('COM_SPPAGEBUILDER_ADDON_ICON_DISPLAY'),
                                        'desc'   => Text::_('COM_SPPAGEBUILDER_ADDON_ICON_DISPLAY_DESC'),
                                        'values' => [
                                            'inline-block' => Text::_('COM_SPPAGEBUILDER_ADDON_ICON_DISPLAY_INLINE'),
                                            'block'        => Text::_('COM_SPPAGEBUILDER_ADDON_ICON_DISPLAY_BLOCK'),
                                        ],
                                        'std' => 'inline-block',
                                    ],

                                    'advanced_settings' => [
                                        'type'   => 'advancedsettings',
                                        'title'  => Text::_('Icons'),
                                        'buttonText' => Text::_('COM_SPPAGEBUILDER_ADDON_ITEM_ADD_EDIT'),
                                        'buttonIcon' => 'ul',
                                    ],
                                ],
                            ],
                        ],

                        'title' => [
                            'fields' => [
                                'title' => [
                                    'title' => [
                                        'type'  => 'text',
                                        'title' => Text::_('COM_SPPAGEBUILDER_ADDON_TITLE'),
                                        'desc'  => Text::_('COM_SPPAGEBUILDER_ADDON_TITLE_DESC'),
                                    ],

                                    'heading_selector' => [
                                        'type'   => 'headings',
                                        'title'  => Text::_('COM_SPPAGEBUILDER_ADDON_HEADINGS'),
                                        'desc'   => Text::_('COM_SPPAGEBUILDER_ADDON_HEADINGS_DESC'),
                                        'std'   => 'h3',
                                    ],

                                    'title_position' => [
                                        'type'   => 'radio',
                                        'title'  => Text::_('COM_SPPAGEBUILDER_GLOBAL_POSITION'),
                                        'values' => [
                                            'top'   => Text::_('COM_SPPAGEBUILDER_GLOBAL_TOP'),
                                            'left'  => Text::_('COM_SPPAGEBUILDER_GLOBAL_LEFT'),
                                            'right' => Text::_('COM_SPPAGEBUILDER_GLOBAL_RIGHT'),
                                        ],
                                        'std'   => 'top',
                                    ],

                                    'title_margin' => [
                                        'type'       => 'margin',
                                        'title'      => Text::_('COM_SPPAGEBUILDER_GLOBAL_MARGIN'),
                                        'responsive' => true,
                                    ],

                                    'title_padding' => [
                                        'type'       => 'padding',
                                        'title'      => Text::_('COM_SPPAGEBUILDER_GLOBAL_PADDING'),
                                        'responsive' => true,
                                    ],
                                ],

                                'color' => [
                                    'title_text_color' => [
                                        'type'   => 'color',
                                        'inline' => true,
                                    ],
                                ],

                                'typography' => [
                                    'title_typography' => [
                                        'type'      => 'typography',
                                        'fallbacks' => [
                                            'font'           => 'title_font_family',
                                            'size'           => 'title_fontsize',
                                            'line_height'    => 'title_lineheight',
                                            'letter_spacing' => 'title_letterspace',
                                            'uppercase'      => 'title_font_style.uppercase',
                                            'italic'         => 'title_font_style.italic',
                                            'underline'      => 'title_font_style.underline',
                                            'weight'         => 'title_font_style.weight',
                                        ],
                                    ],
                                ],

                                'icon' => [
                                    'title_icon' => [
                                        'type'  => 'icon',
                                        'title' => Text::_('COM_SPPAGEBUILDER_ADDON_TITLE_ICON'),
                                    ],

                                    'title_icon_position' => [
                                        'type'   => 'radio',
                                        'title'  => Text::_('COM_SPPAGEBUILDER_ADDON_TITLE_ICON_POSITION'),
                                        'values' => [
                                            'before' => Text::_('COM_SPPAGEBUILDER_ADDON_TITLE_ICON_POSITION_BEFORE'),
                                            'after'  => Text::_('COM_SPPAGEBUILDER_ADDON_TITLE_ICON_POSITION_AFTER'),
                                        ],
                                        'std' => 'before'
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],

            'icons_group_add_new_item' => [
				'action' => 'click',
				'type' => 'plus',
				'icon' => 'plusCircle',
				'tooltip' => Text::_('COM_SPPAGEBUILDER_GLOBAL_ADD_NEW'),
				'meta' => [
					'key' => 'sp_icons_group_item',
					'title' => 'Icon Item',
					'icon_name' => 'fa-cogs',
					'border_style' => 'solid',
					'icon_class' => '',
					'label_position' => 'top',
					'show_label' => 0,
					'use_hover' => 0,
					'padding' => ['xxl' => '20px 20px 20px 20px', 'xl' => '20px 20px 20px 20px', 'lg' => '20px 20px 20px 20px', 'md' => '20px 20px 20px 20px', 'sm' => '20px 20px 20px 20px', 'xs' => '20px 20px 20px 20px'],
					'width' => ['xxl' => 80, 'xl' => 80, 'lg' => 80, 'md' => 80, 'sm' => 50, 'xs' => 50],
					'height' => ['xxl' => 80, 'xl' => 80, 'lg' => 80, 'md' => 80, 'sm' => 50, 'xs' => 50],
				]
			],

            'icons_group_alignment_separator' => [
                'action' => 'separator',
            ],

            'icons_group_alignment_options' => [
                'action'      => 'dropdown',
                'type'        => 'placeholder',
                'tooltip'  => Text::_('COM_SPPAGEBUILDER_GLOBAL_ALIGNMENT'),
                'style'       => 'inline',
                'showCaret'   => true,
                'placeholder' => [
                    'type'    => 'list',
                    'options' => [
                        'left'   => ['icon' => 'textAlignLeft'],
                        'center' => ['icon' => 'textAlignCenter'],
                        'right'  => ['icon' => 'textAlignRight'],
                    ],
                    'display_field' => 'icon_alignment'
                ],
                'fieldset' => [
                    'basic' => [
                        'icon_alignment' => [
                            'type'              => 'alignment',
                            'inline'            => true,
                            'responsive'        => true,
                            'available_options' => ['left', 'center', 'right'],
                            'std'				=> ['xxl' => '', 'xl' => 'center', 'lg' => '', 'md' => '', 'sm' => '', 'xs' => ''],
                        ]
                    ]
                ]
            ],
        ],
    ],

    'attr' => [
        'general' => [
            'sp_icons_group_item' => [
                'title' => Text::_('COM_SPPAGEBUILDER_ADDON_ICONS_GROUP_ITEM'),
                'attr'  => [
                    'title' => [
                        'type'  => 'text',
                        'title' => Text::_('COM_SPPAGEBUILDER_ADDON_TITLE'),
                    ],

                    'icon_name' => [
                        'type'  => 'icon',
                        'title' => Text::_('COM_SPPAGEBUILDER_GLOBAL_ICON_NAME'),
                        'std'   => 'fa-cogs'
                    ],

                    'icon_link' => [
                        'type'  => 'link',
                        'title' => Text::_('COM_SPPAGEBUILDER_GLOBAL_LINK'),
                    ],

                    'color' => [
                        'type'  => 'color',
                        'title' => Text::_('COM_SPPAGEBUILDER_GLOBAL_COLOR'),
                    ],

                    'background' => [
                        'type'  => 'color',
                        'title' => Text::_('COM_SPPAGEBUILDER_GLOBAL_BACKGROUND_COLOR'),
                    ],

                    'width' => [
                        'type'       => 'slider',
                        'title'      => Text::_('COM_SPPAGEBUILDER_GLOBAL_WIDTH'),
                        'std'        => ['xxl' => 80, 'xl' => 80, 'lg' => 80, 'md' => 80, 'sm' => 50, 'xs' => 50],
                        'max'        => 500,
                        'responsive' => true
                    ],

                    'height' => [
                        'type'       => 'slider',
                        'title'      => Text::_('COM_SPPAGEBUILDER_GLOBAL_HEIGHT'),
                        'std'        => ['xxl' => 80, 'xl' => 80, 'lg' => 80, 'md' => 80, 'sm' => 50, 'xs' => 50],
                        'max'        => 500,
                        'responsive' => true
                    ],

                    'border_width' => [
                        'type'        => 'slider',
                        'title'       => Text::_('COM_SPPAGEBUILDER_GLOBAL_BORDER_WIDTH'),
                        'placeholder' => '3',
                        'responsive'  => true
                    ],

                    'border_style' => [
                        'type'   => 'select',
                        'title'  => Text::_('COM_SPPAGEBUILDER_GLOBAL_BORDER_STYLE'),
                        'desc'   => Text::_('COM_SPPAGEBUILDER_GLOBAL_BORDER_STYLE_DESC'),
                        'values' => [
                            'solid'  => Text::_('COM_SPPAGEBUILDER_GLOBAL_BORDER_STYLE_SOLID'),
                            'dotted' => Text::_('COM_SPPAGEBUILDER_GLOBAL_BORDER_STYLE_DOTTED'),
                            'dashed' => Text::_('COM_SPPAGEBUILDER_GLOBAL_BORDER_STYLE_DASHED'),
                            'double' => Text::_('COM_SPPAGEBUILDER_GLOBAL_BORDER_STYLE_DOUBLE'),
                            'none'   => Text::_('COM_SPPAGEBUILDER_GLOBAL_BORDER_STYLE_NONE'),
                        ],
                        'std'     => 'solid',
                        'depends' => [['border_width', '!==', 0]]
                    ],

                    'border_radius' => [
                        'type'        => 'slider',
                        'title'       => Text::_('COM_SPPAGEBUILDER_GLOBAL_BORDER_RADIUS'),
                        'placeholder' => '5',
                        'max'         => 500,
                        'responsive'  => true,
                        'depends'     => [['border_width', '!==', 0]]
                    ],

                    'border_color' => [
                        'type'  => 'color',
                        'title' => Text::_('COM_SPPAGEBUILDER_GLOBAL_BORDER_COLOR')
                    ],

                    'padding' => [
                        'type'        => 'padding',
                        'title'       => Text::_('COM_SPPAGEBUILDER_GLOBAL_PADDING'),
                        'desc'        => Text::_('COM_SPPAGEBUILDER_GLOBAL_PADDING_DESC'),
                        'placeholder' => '10px',
                        'responsive'  => true,
                        'std'         => ['xxl' => '20px 20px 20px 20px', 'xl' => '20px 20px 20px 20px', 'lg' => '20px 20px 20px 20px', 'md' => '20px 20px 20px 20px', 'sm' => '20px 20px 20px 20px', 'xs' => '20px 20px 20px 20px'],
                    ],

                    'label_separator' => [
                        'type'  => 'separator',
                        'title' => Text::_('COM_SPPAGEBUILDER_ADDON_ICON_SHOW_LABEL_OPTIONS')
                    ],

                    'show_label' => [
                        'type'  => 'checkbox',
                        'title' => Text::_('COM_SPPAGEBUILDER_ADDON_ICON_SHOW_LABEL'),
                        'std'   => 0,
                    ],

                    'label_position' => [
                        'type'   => 'select',
                        'title'  => Text::_('COM_SPPAGEBUILDER_ADDON_ICON_LABEL_POSITION'),
                        'values' => [
                            'top'    => Text::_('COM_SPPAGEBUILDER_GLOBAL_TOP'),
                            'right'  => Text::_('COM_SPPAGEBUILDER_GLOBAL_RIGHT'),
                            'bottom' => Text::_('COM_SPPAGEBUILDER_GLOBAL_BOTTOM'),
                        ],
                        'std'     => 'top',
                        'depends' => [['show_label', '=', 1]]
                    ],

                    'label_text' => [
                        'type'        => 'text',
                        'title'       => Text::_('COM_SPPAGEBUILDER_ADDON_ICON_LABEL_TEXT'),
                        'placeholder' => 'Facebook',
                        'depends'     => [['show_label', '=', 1]]
                    ],

                    'label_typography' => [
                        'type'      => 'typography',
                        'fallbacks' => [
                            'size'           => 'label_size',
                            'line_height'    => 'label_lineheight',
                            'letter_spacing' => 'label_letterspace',
                            'uppercase'      => 'label_font_style.uppercase',
                            'italic'         => 'label_font_style.italic',
                            'underline'      => 'label_font_style.underline',
                            'weight'         => 'label_font_style.weight',
                        ],
                        'depends' => [['show_label', '=', 1]]
                    ],

                    // 'label_size' => [
                    //     'type'       => 'slider',
                    //     'title'      => Text::_('COM_SPPAGEBUILDER_GLOBAL_LABEL_FONT_SIZE'),
                    //     'max'        => 400,
                    //     'std'        => ['md' => 16],
                    //     'responsive' => true,
                    //     'depends'    => [['show_label', '=', 1]]
                    // ],

                    // 'label_lineheight' => [
                    //     'type'       => 'slider',
                    //     'title'      => Text::_('COM_SPPAGEBUILDER_GLOBAL_LINE_HEIGHT'),
                    //     'max'        => 400,
                    //     'responsive' => true,
                    //     'std'        => '',
                    //     'depends'    => [['show_label', '=', 1]]
                    // ],

                    // 'label_letterspace' => [
                    //     'type'    => 'text',
                    //     'title'   => Text::_('COM_SPPAGEBUILDER_GLOBAL_LETTER_SPACING'),
                    //     'depends' => [['show_label', '=', 1]]
                    // ],

                    // 'label_font_style' => [
                    //     'type'    => 'fontstyle',
                    //     'title'   => Text::_('COM_SPPAGEBUILDER_GLOBAL_FONT_STYLE'),
                    //     'depends' => [['show_label', '=', 1]]
                    // ],

                    'label_margin' => [
                        'type'        => 'margin',
                        'title'       => Text::_('COM_SPPAGEBUILDER_ADDON_ICONS_GROUP_MARGIN'),
                        'placeholder' => '10',
                        'responsive'  => true,
                        'depends'     => [['show_label', '=', 1]]
                    ],

                    'separator' => [
                        'type'  => 'separator',
                        'title' => Text::_('COM_SPPAGEBUILDER_GLOBAL_MOUSE_HOVER_OPTIONS')
                    ],

                    'use_hover' => [
                        'type'  => 'checkbox',
                        'title' => Text::_('COM_SPPAGEBUILDER_ADDON_ICON_USE_HOVER'),
                        'std'   => 0,
                    ],

                    'hover_background' => [
                        'type'    => 'color',
                        'title'   => Text::_('COM_SPPAGEBUILDER_GLOBAL_BACKGROUND_COLOR_HOVER'),
                        'depends' => [['use_hover', '=', 1]]
                    ],

                    'hover_color' => [
                        'type'    => 'color',
                        'title'   => Text::_('COM_SPPAGEBUILDER_GLOBAL_COLOR_HOVER'),
                        'depends' => [['use_hover', '=', 1]]
                    ],

                    'hover_border_color' => [
                        'type'    => 'color',
                        'title'   => Text::_('COM_SPPAGEBUILDER_GLOBAL_BORDER_COLOR_HOVER'),
                        'depends' => [['use_hover', '=', 1]]
                    ],

                    'icon_class' => [
                        'type'  => 'text',
                        'title' => Text::_('COM_SPPAGEBUILDER_ADDON_CLASS'),
                        'std'   => '',
                    ],
                ],
            ],
        ]
    ]
]);
