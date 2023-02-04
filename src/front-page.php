<?php get_header(); ?>


<?php $header = get_field('header'); ?>
<section class="pt-20 lg:pt-0 pb-20 lg:pb-40">
    <div class="container">
        <div class="grid grid-cols-12 gap-[30px]">
            <div class="col-span-12 lg:col-span-5 flex flex-col justify-center">
                <div class="border-solid border-2 w-16 mb-6 border-primary"></div>
                <h1 class="text-primary text-3xl lg:text-5xl font-bold m-0"><?php echo $header['title']; ?></h1>
                <p class="lg:text-xl font-light lg:font-normal mt-6 mb-6"><?php echo $header['description']; ?></p>
                <?php $link = $header['link'];
                if($link):
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self';
                ?>
                <a class="button" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                <?php endif; ?>
            </div>
            <div class="col-span-12 lg:col-span-7">
                <img src="/wp-content/themes/centralvisa/img/hero.webp" alt="Central Visa" class="max-w-full">
            </div>
        </div>
    </div>
</section>


<?php $section_1 = get_field('section_1'); ?>
<section class="text-white bg-primary bg-bg-map bg-cover pt-20 lg:pt-40 pb-20 lg:pb-40">
    <div class="container">
        <div class="flex items-center mb-4">
            <div class="border-solid border-[1px] h-[1px] w-8 mr-4 border-white"></div>
            <?php echo $section_1['subtitle']; ?>
        </div>
        <h1 class="text-3xl lg:text-4xl font-bold mt-0 mb-20 lg:mb-28"><?php echo $section_1['title']; ?></h1>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-[30px]">
            <div class="text-center lg:text-left">
                <svg class="mb-6" width="69" height="67" fill="none" xmlns="http://www.w3.org/2000/svg"><mask id="a" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="9" y="6" width="49" height="55"><path fill-rule="evenodd" clip-rule="evenodd" d="M9.448 6.304h48.27v54.601H9.449V6.304Z" fill="#fff"/></mask><g mask="url(#a)"><path fill-rule="evenodd" clip-rule="evenodd" d="M22.126 10.429c-4.651 0-8.433 3.676-8.433 8.192v29.835c.014 2.23.926 4.331 2.565 5.907 1.636 1.57 3.892 2.472 6.117 2.417l.348-.003H45.04c4.649-.05 8.442-3.781 8.433-8.319V23.712L40.352 10.43H22.125Zm.181 50.476c-3.397 0-6.61-1.279-9.036-3.61-2.446-2.35-3.805-5.484-3.824-8.828V18.62c0-6.79 5.687-12.317 12.68-12.317h19.13c.578 0 1.13.228 1.532.632l14.338 14.517c.38.383.592.897.592 1.428v25.575c.014 6.79-5.665 12.375-12.657 12.446l-22.673.003h-.082Z" fill="#fff"/></g><path fill-rule="evenodd" clip-rule="evenodd" d="M55.583 25.479H47.78c-5.18-.014-9.39-4.117-9.39-9.144v-8c0-1.138.95-2.062 2.123-2.062 1.172 0 2.123.924 2.123 2.062v8c0 2.76 2.31 5.01 5.15 5.019h7.796c1.172 0 2.123.924 2.123 2.062 0 1.139-.951 2.063-2.123 2.063Z" fill="#fff"/></svg>
                <h2 class="text-xl font-extrabold mb-2 font-lato"><?php echo $section_1['col_1_title']; ?></h2>
                <p class="font-light font-lato"><?php echo $section_1['col_1_description']; ?></p>
            </div>
            <div class="text-center lg:text-left">
                <svg class="mb-6" width="69" height="67" viewBox="0 0 69 67" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M25.7914 18.1062C25.6995 18.1062 25.6076 18.1172 25.5157 18.1392C16.9879 20.1495 10.0508 28.999 10.0508 37.865C10.0508 49.019 19.5262 58.094 31.1751 58.094C41.6755 58.094 50.4503 50.9302 52.041 41.0577C52.0525 40.9752 52.0927 40.736 51.8573 40.4692C51.6333 40.219 51.2773 40.0705 50.904 40.0705C46.8525 40.0705 43.7601 40.1585 41.3453 40.2245C35.4993 40.3922 33.0817 40.4555 30.6927 38.7587C27.0921 36.204 26.7877 31.815 26.7877 18.9065C26.7877 18.6755 26.6844 18.483 26.4776 18.329C26.2853 18.1832 26.0412 18.1062 25.7914 18.1062M31.1751 62.219C17.1516 62.219 5.7438 51.2932 5.7438 37.865C5.7438 27.217 14.151 16.569 24.4849 14.1325C26.0986 13.7557 27.8329 14.1077 29.1365 15.0812C30.3798 16.0162 31.0947 17.4105 31.0947 18.9065C31.0947 30.9652 31.5197 34.2102 33.2568 35.445C34.3967 36.2507 35.9587 36.2425 41.2219 36.1022C43.6682 36.0335 46.8009 35.9455 50.904 35.9455C52.5406 35.9455 54.0825 36.6165 55.1277 37.7852C56.0982 38.8715 56.5232 40.2905 56.2992 41.6875C54.3812 53.5812 43.8147 62.219 31.1751 62.219" fill="white"/>
                    <mask id="mask0_1845_10284" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="35" y="3" width="31" height="29">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M35.817 3.52295H65.7332V31.8185H35.817V3.52295Z" fill="white"/>
                    </mask>
                    <g mask="url(#mask0_1845_10284)">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M40.2295 7.65152C39.9137 14.5788 40.3817 23.5273 40.5999 27.072C40.6114 27.2838 40.7722 27.4378 40.9904 27.4488C43.9422 27.611 54.1124 28.062 61.4257 27.0308C61.4429 23.1698 58.6835 17.9338 54.5287 13.9573C50.2677 9.88177 45.2256 7.65152 40.2927 7.65152H40.2295ZM49.7164 31.8185C45.955 31.8185 42.6443 31.6728 40.7406 31.5683C38.346 31.4335 36.4394 29.6048 36.3016 27.3113C36.0776 23.6758 35.5924 14.4385 35.9369 7.29402C36.0317 5.21777 37.7832 3.56502 39.9252 3.52927C46.0612 3.35877 52.3925 6.08677 57.5723 11.0395C62.6201 15.8713 65.8245 22.221 65.7326 27.2178C65.6982 29.1675 64.2195 30.7955 62.221 31.0843C58.3218 31.648 53.7564 31.8185 49.7164 31.8185V31.8185Z" fill="white"/>
                    </g>
                </svg>
                <h2 class="text-xl font-extrabold mb-2 font-lato"><?php echo $section_1['col_2_title']; ?></h2>
                <p class="font-light font-lato"><?php echo $section_1['col_2_description']; ?></p>
            </div>
            <div class="text-center lg:text-left">
                <svg class="mb-6" width="68" height="67" viewBox="0 0 68 67" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M50.6354 34.1743C49.5937 34.1743 48.6849 33.4291 48.5349 32.3978C48.3736 31.2676 49.1804 30.2253 50.3438 30.0686C53.288 29.6671 55.5102 27.1866 55.5159 24.2936C55.5159 21.4253 53.3984 18.9998 50.4797 18.5351C49.3247 18.3508 48.5406 17.2893 48.7302 16.1646C48.9227 15.0398 50.007 14.2863 51.1705 14.4651C56.1472 15.2598 59.7622 19.3958 59.7622 24.2991C59.7509 29.2353 55.9547 33.4703 50.9298 34.1551C50.8308 34.1688 50.7317 34.1743 50.6354 34.1743" fill="white"/>
                    <mask id="mask0_1845_10283" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="53" y="39" width="12" height="13">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M53.7249 39.276H64.4651V51.7323H53.7249V39.276Z" fill="white"/>
                    </mask>
                    <g mask="url(#mask0_1845_10283)">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M59.0562 51.7323C58.2012 51.7323 57.3944 51.2263 57.0717 50.4041C56.6528 49.3398 57.2048 48.1463 58.3003 47.7421C60.2197 47.0326 60.2197 46.2488 60.2197 45.8721C60.2197 44.6676 58.6429 43.8261 55.5346 43.3751C54.3767 43.2046 53.5756 42.1568 53.7483 41.0266C53.921 39.8991 54.9967 39.1483 56.1658 39.2941C63.0251 40.2923 64.466 43.4218 64.466 45.8721C64.466 47.3681 63.8602 50.0988 59.812 51.5976C59.5629 51.6883 59.3081 51.7323 59.0562 51.7323" fill="white"/>
                    </g>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M33.6498 44.535C26.9237 44.535 18.9038 45.338 18.9038 49.1605C18.9038 53.0133 26.9237 53.8218 33.6498 53.8218C40.376 53.8218 48.3931 53.0215 48.3931 49.2073C48.3931 45.3463 40.376 44.535 33.6498 44.535M33.6498 57.9468C28.9534 57.9468 14.6575 57.9468 14.6575 49.1605C14.6575 40.41 28.9534 40.41 33.6498 40.41C38.3463 40.41 52.6394 40.41 52.6394 49.2073C52.6394 57.9468 38.8445 57.9468 33.6498 57.9468" fill="white"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M33.6498 15.8965C28.86 15.8965 24.9647 19.6832 24.9647 24.3362C24.9562 26.5912 25.8451 28.7005 27.4729 30.2927C29.1006 31.885 31.2691 32.7677 33.5791 32.776L33.6498 34.8385V32.776C38.4397 32.776 42.3378 28.992 42.3378 24.3362C42.3378 19.6832 38.4397 15.8965 33.6498 15.8965M33.6498 36.901H33.5734C30.1197 36.89 26.884 35.5755 24.4608 33.1995C22.0319 30.8262 20.7042 27.6747 20.7184 24.328C20.7184 17.409 26.5189 11.7715 33.6498 11.7715C40.7837 11.7715 46.5841 17.409 46.5841 24.3362C46.5841 31.2635 40.7837 36.901 33.6498 36.901" fill="white"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M16.6617 34.1743C16.5655 34.1743 16.4664 34.1688 16.3673 34.1551C11.3425 33.4703 7.5491 29.2353 7.53778 24.3046C7.53778 19.3958 11.1528 15.2598 16.1295 14.4651C17.3213 14.2836 18.3772 15.0453 18.5697 16.1646C18.7594 17.2893 17.9752 18.3508 16.8202 18.5351C13.9016 18.9998 11.7841 21.4253 11.7841 24.2991C11.7898 27.1866 14.012 29.6698 16.9533 30.0686C18.1168 30.2253 18.9236 31.2676 18.7622 32.3978C18.6122 33.4291 17.7035 34.1743 16.6617 34.1743" fill="white"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M8.24381 51.7323C7.99186 51.7323 7.73708 51.6883 7.48796 51.5976C3.43697 50.0961 2.83116 47.3653 2.83116 45.8721C2.83116 43.4246 4.27208 40.2923 11.1341 39.2941C12.3033 39.1511 13.3734 39.8991 13.5489 41.0266C13.7216 42.1568 12.9204 43.2046 11.7626 43.3751C8.65429 43.8261 7.07749 44.6676 7.07749 45.8721C7.07749 46.2488 7.07748 47.0298 8.99965 47.7421C10.0952 48.1463 10.6472 49.3398 10.2283 50.4041C9.90554 51.2263 9.09874 51.7323 8.24381 51.7323" fill="white"/>
                </svg>
                <h2 class="text-xl font-extrabold mb-2 font-lato"><?php echo $section_1['col_3_title']; ?></h2>
                <p class="font-light font-lato"><?php echo $section_1['col_3_description']; ?></p>
            </div>
        </div>
    </div>
</section>


<?php $section_2 = get_field('section_2'); ?>
<section class="text-white pt-20 lg:pt-40 pb-20 lg:pb-40">
    <div class="container">
        <div class="grid grid-cols-3 gap-[30px]">
            <div class="col-span-full lg:col-span-1">
                <img src="/wp-content/themes/centralvisa/img/woman.webp" alt="woman" class="max-w-full">
            </div>
            <div class="col-span-full lg:col-span-2 flex flex-col justify-center text-black">
                <div class="flex items-center mb-4">
                    <div class="border-solid border-[1px] h-[1px] w-8 mr-4 border-black"></div>
                    <?php echo $section_2['subtitle']; ?>
                </div>
                <h1 class="text-3xl lg:text-4xl font-bold mt-0 mb-0"><?php echo $section_2['title']; ?></h1>
                <?php $link = $section_2['link'];
                if($link):
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self';
                    ?>
                    <a class="button button--black mt-6" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                <?php endif; ?>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-[30px]">
            <div class="mt-20">
                <div class="flex items-center mb-4">
                    <div class="arrow-container blue mr-4">
                        <i class="arrow right"></i>
                    </div>
                    <h3 class="text-primary text-xl m-0 font-lato font-extrabold"><?php echo $section_2['block_1_title']; ?></h3>
                </div>
                <p class="text-black font-light text-lg m-0"><?php echo $section_2['block_1_description']; ?></p>
            </div>
            <div class="mt-10 lg:mt-20">
                <div class="flex items-center mb-4">
                    <div class="arrow-container blue mr-4">
                        <i class="arrow right"></i>
                    </div>
                    <h3 class="text-primary text-xl m-0 font-lato font-extrabold"><?php echo $section_2['block_2_title']; ?></h3>
                </div>
                <p class="text-black font-light text-lg m-0"><?php echo $section_2['block_2_description']; ?></p>
            </div>
            <div class="mt-10 lg:mt-20">
                <div class="flex items-center mb-4">
                    <div class="arrow-container blue mr-4">
                        <i class="arrow right"></i>
                    </div>
                    <h3 class="text-primary text-xl m-0 font-lato font-extrabold"><?php echo $section_2['block_3_title']; ?></h3>
                </div>
                <p class="text-black font-light text-lg m-0"><?php echo $section_2['block_3_description']; ?></p>
            </div>
            <div class="mt-10 lg:mt-20">
                <div class="flex items-center mb-4">
                    <div class="arrow-container blue mr-4">
                        <i class="arrow right"></i>
                    </div>
                    <h3 class="text-primary text-xl m-0 font-lato font-extrabold"><?php echo $section_2['block_4_title']; ?></h3>
                </div>
                <p class="text-black font-light text-lg m-0"><?php echo $section_2['block_4_description']; ?></p>
            </div>
        </div>
    </div>
</section>


<?php $section_3 = get_field('section_3'); ?>
<section class="text-white bg-bg1 bg-cover bg-[position:58%] pt-20 lg:pt-40 pb-20 lg:pb-40">
    <div class="container">
        <div class="flex items-center mb-4">
            <div class="border-solid border-[1px] h-[1px] w-8 mr-4 border-white"></div>
            <?php echo $section_3['subtitle']; ?>
        </div>
        <h1 class="text-3xl lg:text-4xl font-bold mt-0 mb-20"><?php echo $section_3['title']; ?></h1>

        <div class="grid lg:grid-cols-4 gap-[30px] mb-10">
            <div>
                <div id="b-1" class="text-xl font-light border-solid border-white border-0 border-b-2 pb-2 px-2 w-fit cursor-pointer"><?php echo $section_3['tab_1_title']; ?></div>
            </div>
            <div>
                <div id="b-2" class="text-xl font-light border-solid border-white border-0 pb-2 px-2 w-fit cursor-pointer"><?php echo $section_3['tab_2_title']; ?></div>
            </div>
            <div>
                <div id="b-3" class="text-xl font-light border-solid border-white border-0 pb-2 px-2 w-fit cursor-pointer"><?php echo $section_3['tab_3_title']; ?></div>
            </div>
            <div>
                <div id="b-4" class="text-xl font-light border-solid border-white border-0 pb-2 px-2 w-fit cursor-pointer"><?php echo $section_3['tab_4_title']; ?></div>
            </div>
        </div>

        <div id="tabs" class="grid grid-cols-12 relative">
            <div id="tab-1" class="col-span-12 lg:col-span-8 transition-all duration-500">
                <h2 class="font-lato font-bold"><?php echo $section_3['tab_1_title']; ?></h2>
                <div class="text-md"><?php echo $section_3['tab_1_description']; ?></div>
                <?php $link = $section_3['tab_1_link'];
                if($link):
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self';
                    ?>
                    <a class="button button--white mt-6" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                <?php endif; ?>
            </div>
            <div id="tab-2" class="col-span-12 lg:col-span-8 absolute opacity-0 transition-all duration-500 -z-10">
                <h2 class="font-lato font-bold"><?php echo $section_3['tab_2_title']; ?></h2>
                <div class="text-md"><?php echo $section_3['tab_2_description']; ?></div>
                <?php $link = $section_3['tab_2_link'];
                if($link):
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self';
                    ?>
                    <a class="button button--white mt-6" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                <?php endif; ?>
            </div>
            <div id="tab-3" class="col-span-12 lg:col-span-8 absolute opacity-0 transition-all duration-500 -z-10">
                <h2 class="font-lato font-bold"><?php echo $section_3['tab_3_title']; ?></h2>
                <div class="text-md"><?php echo $section_3['tab_3_description']; ?></div>
                <?php $link = $section_3['tab_3_link'];
                if($link):
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self';
                    ?>
                    <a class="button button--white mt-6" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                <?php endif; ?>
            </div>
            <div id="tab-4" class="col-span-12 lg:col-span-8 absolute opacity-0 transition-all duration-500 -z-10">
                <h2 class="font-lato font-bold"><?php echo $section_3['tab_4_title']; ?></h2>
                <div class="text-md"><?php echo $section_3['tab_4_description']; ?></div>
                <?php $link = $section_3['tab_4_link'];
                if($link):
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self';
                    ?>
                    <a class="button button--white mt-6" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>


<?php $section_4 = get_field('section_4'); ?>
<section class="pt-20 lg:pt-40 pb-20 lg:pb-40 bg-bg-map bg-cover bg-right">
    <div class="container">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-[30px]">
            <div>
                <div class="flex items-center mb-4">
                    <div class="border-solid border-[1px] h-[1px] w-8 mr-4 border-black"></div>
                    <?php echo $section_4['subtitle']; ?>
                </div>
                <h1 class="text-3xl lg:text-4xl font-bold mt-0 mb-4"><?php echo $section_4['title']; ?>s</h1>
                <div class="font-light lg:text-xl">
                    <?php echo $section_4['description']; ?>
                </div>
                <?php $link = $section_4['link'];
                if($link):
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self';
                    ?>
                    <a class="button button--black mt-6" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                <?php endif; ?>
            </div>
            <div>
                <div class="font-light font-lato rounded-xl pt-10 pb-10 pl-6 pr-6 bg-white shadow-[5px_5px_5px_rgba(0,0,0,0.3)]">
                    <h3 class="text-2xl text-primary text-center font-lato leading-none m-0"><?php echo get_field('product_1', 28)['title'] ?><br><span class="text-2xl text-black"><?php echo get_field('product_1', 28)['price'] ?></span></h3>
                    <div class="font-bold text-center mb-8"><?php echo get_field('product_1', 28)['subtitle'] ?></div>
                    
                    <?php for($i=1; $i<=6; $i++): ?>
                    <?php if(get_field('product_1', 28)['point_'.$i]): ?>
                    <div class="flex items-center mt-4">
                        <svg width="32" height="33" fill="none" class="min-w-[32px]" xmlns="http://www.w3.org/2000/svg"><path d="M31 16.86c0 8.285-6.716 15-15 15-8.284 0-15-6.715-15-15 0-8.284 6.716-15 15-15 8.284 0 15 6.716 15 15Z" stroke="#FDC10B" stroke-width="2"/><path d="m7 16.134 7.361 7.36L24.686 13.17" stroke="#fff" stroke-width="2" stroke-linecap="round"/><path d="m7 16.134 7.361 7.36L24.686 13.17" stroke="#FDC10B" stroke-width="2" stroke-linecap="round"/></svg>
                        <div class="ml-2"><?php echo get_field('product_1', 28)['point_'.$i]; ?></div>
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
            </div>
            <div>
                <div class="font-light font-lato rounded-xl pt-10 pb-10 pl-6 pr-6 bg-white shadow-[5px_5px_5px_rgba(0,0,0,0.3)]">
                    <h3 class="text-2xl text-primary text-center leading-none m-0 font-lato"><?php echo get_field('product_2', 28)['title'] ?><br><span class="text-2xl text-black"><?php echo get_field('product_2', 28)['price'] ?></span></h3>
                    <div class="font-bold text-center mb-8"><?php echo get_field('product_2', 28)['subtitle'] ?></div>

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
    </div>
</section>


<?php $section_5 = get_field('section_5'); ?>
<section class="pt-20 lg:pt-40 pb-20 lg:pb-40 bg-bg2 bg-cover bg-left-top">
    <div class="container">
        <div class="grid grid-cols-12 gap-[30px]">
            <div class="lg:col-span-5"></div>
            <div class="col-span-12 lg:col-span-7">
                <div class="flex items-center mb-4">
                    <div class="border-solid border-[1px] h-[1px] w-8 mr-4 border-black"></div>
                    <?php echo $section_5['subtitle']; ?>
                </div>
                <h1 class="text-3xl font-bold mt-0 mb-4"><?php echo $section_5['title']; ?></h1>
                <p class="font-light lg:font-bold"><?php echo $section_5['description']; ?></p>
                <?php $link = $section_5['link'];
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
</section>


<?php
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'posts_per_page' => 3,
    'paged' => $paged,
);
$posts = new WP_Query($args);
?>

<?php $section_6 = get_field('section_6'); ?>
<section class="pt-20 lg:pt-40 pb-20 lg:pb-40">
    <div class="container">
        <div class="flex items-center mb-4">
            <div class="border-solid border-[1px] h-[1px] w-8 mr-4 border-black"></div>
            <?php echo $section_6['subtitle']; ?>
        </div>
        <h1 class="text-3xl font-bold mt-0 mb-10 lg:mb-20"><?php echo $section_6['title']; ?></h1>
        <?php if ($section_6['description']): ?>
        <p class="font-light lg:font-bold"><?php echo $section_6['description']; ?></p>
        <? endif ?>
        <div class="grid grid-cols-12 gap-[30px]">
            <?php while ($posts->have_posts()) : $posts->the_post(); ?>
                <article class="col-span-12 lg:col-span-4 flex flex-col">
                    <?php the_post_thumbnail(array(465, 250), array('class' => 'border-radius-5 object-cover w-full')); ?>
                    <h2 class="text-lg font-bold mt-4 mb-2"><?php the_title(); ?></h2>
                    <div class="flex-grow font-light"><?php echo wp_trim_words(get_the_content(), 30, '...' ); ?></div>
                    <a class="mt-4 font-bold text-black flex" href="<?php the_permalink(); ?>">Read more <svg class="ml-1 mt-[3px]" width="22" height="22" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.79 16.605a.75.75 0 0 1-.067-.984l.067-.077L15.397 4.938a.75.75 0 0 1 1.128.984l-.067.077L5.85 16.605a.75.75 0 0 1-1.06 0Z" fill="#2A2A2A"/><path d="M7.391 6.236a.75.75 0 0 1-.114-1.492l.11-.008 8.538-.018a.75.75 0 0 1 .744.64l.008.111-.018 8.538a.75.75 0 0 1-1.492.108l-.008-.11.016-7.786-7.784.017Z" fill="#2A2A2A"/></svg></a>
                </article>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        </div>
    </div>
</section>

<script>
    // Function to add event listener to table
    const b1 = document.getElementById("b-1");
    const b2 = document.getElementById("b-2");
    const b3 = document.getElementById("b-3");
    const b4 = document.getElementById("b-4");
    const t1 = document.getElementById("tab-1");
    const t2 = document.getElementById("tab-2");
    const t3 = document.getElementById("tab-3");
    const t4 = document.getElementById("tab-4");

    b1.addEventListener("click", function(event) { changeDescription(event, t1); } , false);
    b2.addEventListener("click", function(event) { changeDescription(event, t2); } , false);
    b3.addEventListener("click", function(event) { changeDescription(event, t3); } , false);
    b4.addEventListener("click", function(event) { changeDescription(event, t4); } , false);

    function changeDescription(e, el) {
        b1.classList.remove("border-b-2");
        b2.classList.remove("border-b-2");
        b3.classList.remove("border-b-2");
        b4.classList.remove("border-b-2");
        e.target.classList.add("border-b-2");

        t1.classList.add("opacity-0", "-z-10");
        t2.classList.add("opacity-0", "-z-10");
        t3.classList.add("opacity-0", "-z-10");
        t4.classList.add("opacity-0", "-z-10");
        el.classList.remove("opacity-0", "-z-10");
    }
</script>

<?php get_footer(); ?>
