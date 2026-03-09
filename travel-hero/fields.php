<?php
/**
 * ACF Hero Section.
 *
 * @link https://github.com/StoutLogic/acf-builder/wiki
 *
 * @package greydientlab
 */
$travel_hero = new StoutLogic\AcfBuilder\FieldsBuilder('travel_hero');

$travel_hero
    ->addText('heading', [
        'label' => 'Heading',
        'required' => 1,
    ])
	->addText('heading_highlight', [
    'label' => 'Heading Highlighted Text',
    'required' => 0,
	])
	->addColorPicker('heading_color', [
		'label' => 'Highlight Color',
	])
    ->addTextarea('subheading', [
        'label' => 'Subheading',
        'rows' => 3,
    ])
    // Top single button (Explore the World)
    ->addGroup('button_1', [
        'label' => 'Button 1 (Top)',
    ])
        ->addText('text', ['label' => 'Button Text'])
        ->addUrl('url', ['label' => 'Button URL'])
    ->endGroup()
    // Bottom buttons row (Get Started + Watch Demo)
    ->addGroup('button_2', [
        'label' => 'Buttons Row (Bottom)',
    ])
        ->addText('text', ['label' => 'Button Text'])
        ->addUrl('url', ['label' => 'Button URL'])
    ->endGroup()
    // Repeater for Top 3 Places boxes
    ->addRepeater('images', [
        'label' => 'Top 3 Places',
        'min' => 3,
        'layout' => 'row',
    ])
        ->addImage('image', [
            'label' => 'Image',
            'return_format' => 'array',
        ])
        ->addText('label', [
            'label' => 'Place Label',
        ])
        ->addTrueFalse('icon', [
            'label' => 'Show Floating Icon?',
            'ui' => 1,
        ])
    ->endRepeater()
    // Top background image
    ->addImage('background_icon', [
        'label' => 'Top Background Image',
        'return_format' => 'array',
    ])
	  ->addImage('side_icon', [
        'label' => 'side icon',
        'return_format' => 'array',
    ])

    ->addRepeater('brand_images', [
        'label' => 'Icon Branding',
        'min' => 1,
        'layout' => 'row',
    ])
        ->addImage('branding_image', [
            'label' => 'Image',
            'return_format' => 'array',
        ])
    ->endRepeater()

      ->addRepeater('top_value', [
        'label' => 'Top Value Categories',
        'min' => 1,
        'layout' => 'row',
    ])
        ->addImage('top_value_icon', [
            'label' => 'Image',
            'return_format' => 'array',
        ])

        ->addText('Title', [
            'label' => 'Value Label',
        ])

        ->addTextArea('Description', [
            'label' => 'Value Description',
            'rows' => 3,
        ])

    ->endRepeater()

    ->setLocation('block', '==', 'acf/travel-hero');

return $travel_hero;
