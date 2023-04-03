<?php /* Template Name: Contact */ ?>

<?php get_header(); ?>

<?php $contact = get_field('contact') ?? []; ?>
<section class="pt-20 pb-20 lg:pb-32">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-12 gap-[30px]">
            <div class="col-span-12 lg:col-span-9">
                <h1 class="text-2xl lg:text-4xl font-bold m-0"><?php echo $contact['title']; ?></h1>
                <?php if (isset($contact['description'])): ?>
                <p class="font-light mt-6 mb-20"><?php echo $contact['description']; ?></p>
                <?php endif; ?>
            </div>
        </div>
        <div class="grid grid-cols-12 gap-[30px]">
            <div class="col-span-12 lg:col-span-6">
                <div class="border-l-2 border-l-blue pl-4">
                    <b><?php echo $contact['title']; ?></b><br>
                    <?php echo $contact['phone']; ?><br>
                    <?php echo $contact['email']; ?><br>
                    <?php echo $contact['postcode']; ?>, <?php echo $contact['city']; ?><br>
                    <?php echo $contact['street']; ?>
                </div>
            </div>
            <div class="col-span-12 lg:col-span-6">
                <?php echo do_shortcode('[contact-form-7 id="5" title="Form 1"]'); ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
