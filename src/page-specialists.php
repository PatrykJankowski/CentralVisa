<?php /* Template Name: Specialists */ ?>

<?php get_header(); ?>

<?php $section_1 = get_field('section_1'); ?>
<section class="pt-20 pb-20 lg:pb-40">
    <div class="container">
        <div class="grid grid-cols-12 gap-[30px]">
            <div class="col-span-12 lg:col-span-9">
                <h1 class="text-3xl lg:text-4xl font-bold m-0"><?php echo $section_1['title']; ?></h1>
                <p class="font-light mt-6 mb-20"><?php echo $section_1['description']; ?></p>
            </div>
        </div>
        <div class="grid grid-cols-12 gap-[30px] mb-20">
            <div class="col-span-12 lg:col-span-5">
                <img class="rounded-2xl w-full h-[230px] sm:h-[300px] md:h-[400px] object-cover" src="/wp-content/themes/centralvisa/img/s1.webp">
            </div>
            <div class="col-span-12 lg:col-span-1"></div>
            <div class="col-span-12 lg:col-span-6 flex flex-col justify-center">
                <div class="text-[84px] text-[#EEEEEE]"><?php echo $section_1['number_1']; ?></div>
                <h2 class="text-xl lg:text-2xl font-bold mb-4"><?php echo $section_1['title_1']; ?></h2>
                <div>
                    <?php echo $section_1['description_1']; ?>
                    <?php $link = $section_1['link_1'];
                    if($link):
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
                    ?>
                    <a class="button button--black mt-8" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-12 gap-[30px] mb-20">
            <div class="col-span-12 lg:col-span-5 lg:order-3">
                <img class="rounded-2xl w-full h-[230px] sm:h-[300px] md:h-[400px] object-cover" src="/wp-content/themes/centralvisa/img/s2.webp">
            </div>
            <div class="col-span-12 lg:col-span-1 lg:order-2"></div>
            <div class="col-span-12 lg:col-span-6 flex flex-col justify-center lg:order-1">
                <div class="text-[84px] text-[#EEEEEE]"><?php echo $section_1['number_2']; ?></div>
                <h2 class="text-xl lg:text-2xl font-bold mb-4"><?php echo $section_1['title_2']; ?></h2>
                <div>
                    <?php echo $section_1['description_2']; ?>
                    <?php $link = $section_1['link_2'];
                    if($link):
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
                    ?>
                    <a class="button button--black mt-8" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-12 gap-[30px] mb-20">
            <div class="col-span-12 lg:col-span-5">
                <img class="rounded-2xl w-full h-[230px] sm:h-[300px] md:h-[400px] object-cover" src="/wp-content/themes/centralvisa/img/s3.webp">
            </div>
            <div class="col-span-12 lg:col-span-1"></div>
            <div class="col-span-12 lg:col-span-6 flex flex-col justify-center">
                <div class="text-[84px] text-[#EEEEEE]"><?php echo $section_1['number_3']; ?></div>
                <h2 class="text-xl lg:text-2xl font-bold mb-4"><?php echo $section_1['title_3']; ?></h2>
                <div>
                    <?php echo $section_1['description_3']; ?>
                    <?php $link = $section_1['link_3'];
                    if($link):
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
                    ?>
                    <a class="button button--black mt-8" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-12 gap-[30px]">
            <div class="col-span-12 lg:col-span-5 lg:order-3">
                <img class="rounded-2xl w-full h-[230px] sm:h-[300px] md:h-[400px] object-cover" src="/wp-content/themes/centralvisa/img/s4.webp">
            </div>
            <div class="col-span-12 lg:col-span-1 lg:order-2"></div>
            <div class="col-span-12 lg:col-span-6 flex flex-col justify-center lg:order-1">
                <div class="text-[84px] text-[#EEEEEE]"><?php echo $section_1['number_4']; ?></div>
                <h2 class="text-xl lg:text-2xl font-bold mb-4"><?php echo $section_1['title_4']; ?></h2>
                <div>
                    <?php echo $section_1['description_4']; ?>
                    <?php $link = $section_1['link_4'];
                    if($link):
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
                    ?>
                    <a class="button button--black mt-8" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-12 gap-[30px] mb-20">
            <div class="col-span-12 lg:col-span-5">
                <img class="rounded-2xl w-full h-[230px] sm:h-[300px] md:h-[400px] object-cover" src="/wp-content/themes/centralvisa/img/s5.webp">
            </div>
            <div class="col-span-12 lg:col-span-1"></div>
            <div class="col-span-12 lg:col-span-6 flex flex-col justify-center">
            <div class="text-[84px] text-[#EEEEEE]"><?php echo $section_1['number_5']; ?></div>
                <h2 class="text-xl lg:text-2xl font-bold mb-4"><?php echo $section_1['title_5']; ?></h2>
                <div>
                    <?php echo $section_1['description_5']; ?>
                    <?php $link = $section_1['link_5'];
                    if($link):
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
                    ?>
                    <a class="button button--black mt-8" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-12 gap-[30px]">
            <div class="col-span-12 lg:col-span-5 lg:order-3">
                <img class="rounded-2xl w-full h-[230px] sm:h-[300px] md:h-[400px] object-cover" src="/wp-content/themes/centralvisa/img/s6.webp">
            </div>
            <div class="col-span-12 lg:col-span-1 lg:order-2"></div>
            <div class="col-span-12 lg:col-span-6 flex flex-col justify-center lg:order-1">
            <div class="text-[84px] text-[#EEEEEE]"><?php echo $section_1['number_6']; ?></div>
                <h2 class="text-xl lg:text-2xl font-bold mb-4"><?php echo $section_1['title_6']; ?></h2>
                <div>
                    <?php echo $section_1['description_6']; ?>
                    <?php $link = $section_1['link_6'];
                    if($link):
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
                    ?>
                    <a class="button button--black mt-8" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>


<?php $section_2 = get_field('section_2'); ?>
<section class="pt-20 lg:pt-40 pb-20 lg:pb-40 bg-grey">
    <div class="container">
        <div class="grid grid-cols-12 gap-[30px]">
            <div class="col-span-full">
                <h1 class="text-2xl lg:text-3xl text-primary"><?php echo $section_2['title']; ?></h1>
                <div>
                    <?php echo $section_2['description']; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
