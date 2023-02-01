<?php /* Template Name: Contact */ ?>

<?php get_header(); ?>

<section class="pt-20 pb-20 lg:pb-40">
    <div class="container">
        <div class="grid grid-cols-12 gap-[30px]">
            <div class="col-span-12 lg:col-span-9">
                <h1 class="text-2xl lg:text-4xl font-bold m-0">Contact</h1>
                <p class="font-light mt-6 mb-20">Lorem ipsum</p>
            </div>
        </div>
        <div class="grid grid-cols-12 gap-[30px]">
            <div class="col-span-12 lg:col-span-6">
                <div class="">
                    <b>Contact</b><br>
                    00 000 000 000<br>
                    centralvisa@gmail.com<br>
                    London, Street name, numer, code
                </div>
            </div>
            <div class="col-span-12 lg:col-span-6">
                <?php echo do_shortcode('[contact-form-7 id="5" title="Form 1"]'); ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
