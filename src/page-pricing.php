<?php /* Template Name: Pricing */ ?>

<?php get_header(); ?>

<section class="pt-20 pb-20 lg:pb-32">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-12 gap-[30px]">
            <div class="col-span-12 lg:col-span-9">
                <h1 class="text-2xl lg:text-4xl font-bold m-0"><?php echo get_field('title'); ?></h1>
                <p class="font-light mt-6 mb-20"><?php echo get_field('description'); ?></p>
            </div>
        </div>
        <div class="grid grid-cols-12 gap-[30px]">
            <div class="col-span-12 lg:col-span-5">
                <img class="rounded-2xl w-full h-[230px] sm:h-[300px] md:h-[400px] object-cover" src="/wp-content/themes/centralvisa/img/p1.webp">
                <div class="border-0 border-b-[1px] border-solid border-primary my-10"></div>
                <h2 class="text-2xl text-primary text-center font-lato leading-none m-0"><?php echo get_field('product_1')['title'] ?><br><span class="text-2xl text-black"><?php echo get_field('product_1')['price'] ?></span></h2>
                <div class="font-bold text-center mb-8"><?php echo get_field('product_1')['subtitle'] ?></div>
                
                <?php for($i=1; $i<=6; $i++): ?>
                <?php if(get_field('product_1')['point_'.$i]): ?>
                    <div class="flex items-center mt-4">
                        <svg width="32" height="33" fill="none" class="min-w-[32px]" xmlns="http://www.w3.org/2000/svg"><path d="M31 16.86c0 8.285-6.716 15-15 15-8.284 0-15-6.715-15-15 0-8.284 6.716-15 15-15 8.284 0 15 6.716 15 15Z" stroke="#FDC10B" stroke-width="2"/><path d="m7 16.134 7.361 7.36L24.686 13.17" stroke="#fff" stroke-width="2" stroke-linecap="round"/><path d="m7 16.134 7.361 7.36L24.686 13.17" stroke="#FDC10B" stroke-width="2" stroke-linecap="round"/></svg>
                        <div class="ml-2"><?php echo get_field('product_1')['point_'.$i]; ?></div>
                    </div>
                <?php endif ?>
                <?php endfor ?>

                <?php $link = get_field('product_1', 28)['link'];
                    if($link):
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
                    ?>
                <a class="button button--blue mt-8 ml-auto mr-auto" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                <?php endif; ?>
            </div>
            <div class="col-span-12 lg:col-span-5">
                <img class="rounded-2xl w-full h-[230px] sm:h-[300px] md:h-[400px] object-cover" src="/wp-content/themes/centralvisa/img/p2.webp">
                <div class="border-0 border-b-[1px] border-solid border-primary my-10"></div>
                <h2 class="text-2xl text-primary text-center font-lato leading-none m-0"><?php echo get_field('product_2')['title'] ?><br><span class="text-2xl text-black"><?php echo get_field('product_2')['price'] ?></span></h2>
                <div class="font-bold text-center mb-8"><?php echo get_field('product_2')['subtitle'] ?></div>

                <?php for($i=1; $i<=6; $i++): ?>
                <?php if(get_field('product_2', 28)['point_'.$i]): ?>
                    <div class="flex items-center mt-4">
                        <svg width="32" height="33" fill="none" class="min-w-[32px]" xmlns="http://www.w3.org/2000/svg"><path d="M31 16.86c0 8.285-6.716 15-15 15-8.284 0-15-6.715-15-15 0-8.284 6.716-15 15-15 8.284 0 15 6.716 15 15Z" stroke="#FDC10B" stroke-width="2"/><path d="m7 16.134 7.361 7.36L24.686 13.17" stroke="#fff" stroke-width="2" stroke-linecap="round"/><path d="m7 16.134 7.361 7.36L24.686 13.17" stroke="#FDC10B" stroke-width="2" stroke-linecap="round"/></svg>
                        <div class="ml-2"><?php echo get_field('product_2', 28)['point_'.$i]; ?></div>
                    </div>
                <?php endif ?>
                <?php endfor ?>

                <?php $link = get_field('product_2', 28)['link'];
                    if($link):
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
                    ?>
                <a class="button button--blue mt-8 ml-auto mr-auto" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
