<?php
/**
 * Contact Section Block template (Tailwind).
 *
 * Block: acf/contact-section
 */

$kicker   = get_field('contact_kicker') ?: 'Contact us';
$title    = get_field('contact_title') ?: "Lets start working";
$subtitle = get_field('contact_subtitle') ?: "Fill the form and we’ll call you as soon as possible.";
$button   = get_field('button_label') ?: 'Send form';

// Download these icons from Figma and adjust paths as needed in your theme.
$icon_user  = get_theme_file_uri('assets/icons/icon-user.svg');
$icon_mail  = get_theme_file_uri('assets/icons/icon-envelope.svg');
$icon_phone = get_theme_file_uri('assets/icons/icon-phone.svg');
?>

<section <?php echo get_block_wrapper_attributes(['class' => 'relative bg-neutral-100 py-16 sm:py-24']); ?>>
  <div class="mx-auto flex max-w-6xl flex-col items-center gap-10 px-4 py-0 sm:px-6 lg:px-8">
    <header class="mx-auto max-w-2xl text-center">
      <p class="text-base font-semibold text-emerald-600">
        <?php echo esc_html($kicker); ?>
      </p>
      <h2 class="mt-2 text-4xl font-semibold tracking-tight text-neutral-900 sm:text-5xl">
        <?php echo esc_html($title); ?>
      </h2>
      <p class="mt-3 text-lg text-neutral-500">
        <?php echo esc_html($subtitle); ?>
      </p>
    </header>

    <div class="flex w-full justify-center">
      <form
        class="w-full max-w-md space-y-5 rounded-2xl border border-neutral-200 bg-neutral-50/80 p-7 shadow-xl backdrop-blur-sm"
        method="post"
        action=""
      >
        <div class="grid grid-cols-1 gap-5 sm:grid-cols-2">
          <div class="space-y-1.5">
            <label class="block text-sm text-neutral-900" for="<?php echo esc_attr($block['id']); ?>-first-name">
              <?php esc_html_e('Name', 'textdomain'); ?>
            </label>
            <div class="flex items-center gap-2 rounded-md border border-neutral-300 bg-white px-3 py-2 shadow-sm">
              <span class="flex h-5 w-5 items-center justify-center">
                <img src="<?php echo esc_url($icon_user); ?>" alt="" class="h-5 w-5" loading="lazy">
              </span>
              <input
                id="<?php echo esc_attr($block['id']); ?>-first-name"
                class="block w-full border-0 bg-transparent text-sm text-neutral-700 placeholder-neutral-400 focus:outline-none focus:ring-0"
                type="text"
                name="first_name"
                placeholder="<?php esc_attr_e('Mayoral', 'textdomain'); ?>"
              >
            </div>
          </div>

          <div class="space-y-1.5">
            <label class="block text-sm text-neutral-900" for="<?php echo esc_attr($block['id']); ?>-last-name">
              <?php esc_html_e('Last name', 'textdomain'); ?>
            </label>
            <div class="flex items-center gap-2 rounded-md border border-neutral-300 bg-white px-3 py-2 shadow-sm">
              <span class="flex h-5 w-5 items-center justify-center">
                <img src="<?php echo esc_url($icon_user); ?>" alt="" class="h-5 w-5" loading="lazy">
              </span>
              <input
                id="<?php echo esc_attr($block['id']); ?>-last-name"
                class="block w-full border-0 bg-transparent text-sm text-neutral-700 placeholder-neutral-400 focus:outline-none focus:ring-0"
                type="text"
                name="last_name"
                placeholder="<?php esc_attr_e('Ven', 'textdomain'); ?>"
              >
            </div>
          </div>
        </div>

        <div class="space-y-1.5">
          <label class="block text-sm text-neutral-900" for="<?php echo esc_attr($block['id']); ?>-mail">
            <?php esc_html_e('Mail', 'textdomain'); ?>
          </label>
          <div class="flex items-center gap-2 rounded-md border border-neutral-300 bg-white px-3 py-2 shadow-sm">
            <span class="flex h-5 w-5 items-center justify-center">
              <img src="<?php echo esc_url($icon_mail); ?>" alt="" class="h-5 w-5" loading="lazy">
            </span>
            <input
              id="<?php echo esc_attr($block['id']); ?>-mail"
              class="block w-full border-0 bg-transparent text-sm text-neutral-700 placeholder-neutral-400 focus:outline-none focus:ring-0"
              type="email"
              name="email"
              placeholder="<?php esc_attr_e('info@mayoralven.com', 'textdomain'); ?>"
            >
          </div>
        </div>

        <div class="space-y-1.5">
          <label class="block text-sm text-neutral-900" for="<?php echo esc_attr($block['id']); ?>-phone">
            <?php esc_html_e('Phone number', 'textdomain'); ?>
          </label>
          <div class="flex items-center gap-2 rounded-md border border-neutral-300 bg-white px-3 py-2 shadow-sm">
            <span class="flex h-5 w-5 items-center justify-center">
              <img src="<?php echo esc_url($icon_phone); ?>" alt="" class="h-5 w-5" loading="lazy">
            </span>
            <input
              id="<?php echo esc_attr($block['id']); ?>-phone"
              class="block w-full border-0 bg-transparent text-sm text-neutral-700 placeholder-neutral-400 focus:outline-none focus:ring-0"
              type="tel"
              name="phone"
              placeholder="<?php esc_attr_e('123 456 789', 'textdomain'); ?>"
            >
          </div>
        </div>

        <div class="space-y-1.5">
          <label class="block text-sm text-neutral-900" for="<?php echo esc_attr($block['id']); ?>-message">
            <?php esc_html_e('Label', 'textdomain'); ?>
          </label>
          <div class="rounded-md border border-neutral-300 bg-white px-3 py-2 shadow-sm">
            <textarea
              id="<?php echo esc_attr($block['id']); ?>-message"
              class="block h-28 w-full resize-none border-0 bg-transparent text-sm text-neutral-700 placeholder-neutral-400 focus:outline-none focus:ring-0"
              name="message"
              placeholder="<?php esc_attr_e('Enter a description...', 'textdomain'); ?>"
            ></textarea>
          </div>
        </div>

        <div class="flex justify-end pt-1">
          <button
            type="submit"
            class="inline-flex items-center justify-center rounded-md bg-neutral-900 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-neutral-800 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-neutral-900"
          >
            <?php echo esc_html($button); ?>
          </button>
        </div>
      </form>
    </div>
  </div>
</section>
