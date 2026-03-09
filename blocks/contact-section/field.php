<?php
/**
 * ACF Contact Section Fields.
 *
 * @link https://github.com/StoutLogic/acf-builder/wiki
 */

$contact_section = new StoutLogic\AcfBuilder\FieldsBuilder('contact_section');

$contact_section
    ->addText('contact_kicker', [
        'label' => 'Kicker',
        'default_value' => 'Contact us',
        'required' => 0,
    ])
    ->addText('contact_title', [
        'label' => 'Title',
        'default_value' => 'Lets start working',
        'required' => 0,
    ])
    ->addTextarea('contact_subtitle', [
        'label' => 'Subtitle',
        'default_value' => "Fill the form and we’ll call you as soon as possible.",
        'rows' => 3,
        'required' => 0,
    ])
    ->addText('button_label', [
        'label' => 'Button Label',
        'default_value' => 'Send form',
        'required' => 0,
    ])
    ->setLocation('block', '==', 'acf/contact-section');

return $contact_section;
