<?php
/**
 * Hero Section Template.
 *
 * @package circles_x
 */

$style      = $block['className'] ?? '';
$hero_style = get_field( 'hero_style' );
$align      = $block['align'];
?>


<section class="relative max-w-full bg-gray-50 mx-auto py-[64px] overflow-hidden ">

<div class="max-w-[1184px] mx-auto flex flex-col md:flex-col lg:flex-row justify-between items-center lg:items-start h-auto lg:h-[713px] py-16">

  <!-- Image for tablet/mobile -->
  <div class="w-full lg:w-[772px] h-auto lg:h-[713px] mb-8 lg:mb-0 order-1 lg:order-2 flex justify-center">
    <?php if($bg = get_field('background_icon')): ?>
      <img src="<?php echo esc_url($bg['url']); ?>" 
           alt="<?php echo esc_attr($bg['alt']); ?>" 
           class="w-full max-w-[772px] object-contain rounded-t-lg" />
    <?php endif; ?>
  </div>

  <!-- Text Content -->
  <div class="w-full lg:w-[412px] h-auto flex flex-col justify-center gap-[43px] order-2 lg:order-1 lg:py-16">

    <!-- Top Button -->
    <button class="bg-white text-[#F85E9F] rounded-3xl px-[32px] py-[16px] mb-4 lg:mb-0 w-max hover:bg-[#4b3eb0] transition sm:mx-auto lg:mx-0 md:mx-auto mx-auto">
      Explore the World!
    </button>

    <!-- Heading -->
    <?php 
    $heading = get_field('heading');
    $highlight = get_field('heading_highlight'); 
    $color = get_field('heading_color') ?: '#000';
    if($heading):
        if($highlight) {
            $highlighted_text = '<span style="color:' . esc_attr($color) . ';">' . esc_html($highlight) . '</span>';
            $heading = preg_replace('/' . preg_quote($highlight, '/') . '/', $highlighted_text, $heading, 1);
        }
    ?>
    <h1 class="text-5xl md:text-6xl lg:text-[69px] font-bold text-black text-center lg:text-left leading-tight">
      <?php echo $heading;?>
    </h1>
    <?php endif; ?>

    <!-- Subheading -->
    <?php if($subheading = get_field('subheading')): ?>
      <p class="text-[18px] text-[#19182580] leading-tight tracking-wider text-center lg:text-left mb-6">
        <?php echo nl2br(esc_html($subheading)); ?>
      </p>
    <?php endif; ?>

    <!-- Bottom Buttons Row -->
    <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
      <button class="bg-[#5D50C6] text-white rounded-3xl px-8 py-3 hover:bg-[#4b3eb0] transition">Get Started</button>
      <button class="bg-white text-black rounded-3xl px-8 py-3 hover:bg-[#4b3eb0] transition">Watch Demo</button>
    </div>

  </div>

</div>

<!-- Bottom Radial Circle -->
<div class="absolute -bottom-[-430px] -right-80 w-[700px] h-[700px] rounded-full overflow-hidden pointer-events-none">
  <div class="w-full h-full bg-[radial-gradient(circle,#FEF5DC,transparent_70%)]"></div>
</div>


  
 <div class="absolute -bottom-[-430px] -right-80 w-[700px] h-[700px] rounded-full overflow-hidden pointer-events-none">
  
  <div class="w-full h-full 
  bg-[radial-gradient(circle,#FEF5DC,transparent_70%)]">
  </div>

</div>

















        <?php if($side_icon = get_field('side_icon')): ?>
        <img src="<?php echo esc_url($side_icon['url']); ?>" 
            alt="<?php echo esc_attr($side_icon['alt']); ?>" 
            class="absolute top-[740px] left-10 w-16 h-18 " />
        <?php endif; ?> 



        
<div class="max-w-[1184px] mx-auto py-[64px] mt-[64px]">

  <?php if( have_rows('brand_images') ): ?>
    <div class="flex flex-wrap justify-center gap-6 md:gap-12 items-center">

      <?php while( have_rows('brand_images') ): the_row(); 
        $image = get_sub_field('branding_image');
      ?>

        <?php if( $image ): ?>
          <!-- Responsive width for 5/3/3 logos -->
          <div class="w-1/3 sm:w-1/3 md:w-1/4 lg:w-1/6 flex justify-center">
            <img src="<?php echo esc_url($image['url']); ?>" 
                 alt="<?php echo esc_attr($image['alt']); ?>" 
                 class="h-[32px] object-contain" />
          </div>
        <?php endif; ?>

      <?php endwhile; ?>

    </div>
  <?php endif; ?>

</div>


  <div class="h-auto max-w-[1536px] mx-auto bg-gray-50 py-16 overflow-hidden flex flex-row gap-12 ">

  <!-- Title -->
  <div class="w-full flex flex-col gap-6  justify-center ml-32">
      <h2 class="text-[#F85E9F] text-left">Services</h2>
      <h1 class="text-5xl font-bold text-center">
        Our top value <br> categories for you
      </h1>
  </div>
  
  <!-- Carousel Wrapper -->
<div class="overflow-hidden px-6">
  
  <div class="flex gap-6 slider-track">

    <?php if( have_rows('top_value') ): ?>
        <?php while( have_rows('top_value') ): the_row(); 
            $image = get_sub_field('top_value_icon');
            $title = get_sub_field('Title');
            $description = get_sub_field('Description');
        ?>

        <!-- Single Card -->
        <div class="slide flex-shrink-0 w-[calc(44.44%-18px)] h-[400px] bg-white rounded-2xl shadow-lg flex flex-col gap-16 hover:shadow-xl transition p-16 z-10">

            <?php if( $image ): ?>
                <img src="<?php echo esc_url($image['url']); ?>" 
                     alt="<?php echo esc_attr($image['alt']); ?>" 
                     class="w-16 h-16 object-contain mx-auto" />
            <?php endif; ?>
            
            <div class="flex flex-col gap-4">
                <?php if( $title ): ?>
                    <p class="text-2xl font-bold text-black text-center">
                        <?php echo esc_html($title); ?>
                    </p>
                <?php endif; ?>

                <?php if( $description ): ?>
                    <p class="text-lg text-gray-600 text-center">
                        <?php echo esc_html($description); ?>
                    </p>
                <?php endif; ?>
            </div>

        </div>

        <?php endwhile; ?>
    <?php endif; ?>

  </div>

</div>

</div>


</section>


