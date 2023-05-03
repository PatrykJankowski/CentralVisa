<?php /* Template Name: Contact */ ?>

<?php get_header(); ?>

<?php $contact = get_field('contact') ?? []; ?>
<?php $contact_2 = get_field('contact_2') ?? []; ?>
<?php $contact_3 = get_field('contact_3') ?? []; ?>

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
                <div class="border-l-2 border-l-blue pl-4 mt-4">
                    <b><?php echo $contact['title']; ?></b><br>
                    <?php if($contact['phone']) : ?>
                    <?php echo $contact['phone']; ?><br>
                    <?php endif ?>
                    <?php if($contact['email']) : ?>
                    <?php echo $contact['email']; ?><br>
                    <?php endif ?>
                    <?php if($contact['street']) : ?>
                    <?php echo $contact['street']; ?><br>
                    <?php endif ?>
                    <?php if($contact['apartment']) : ?>
                    <?php echo $contact['apartment']; ?><br>
                    <?php endif ?>
                    <?php if($contact['city']) : ?>
                    <?php echo $contact['city']; ?><br>
                    <?php endif ?>
                    <?php if($contact['postcode']) : ?>
                    <?php echo $contact['postcode']; ?><br>
                    <?php endif ?>
                </div>

                <?php if ($contact_2) : ?>
                <div class="border-l-2 border-l-blue pl-4 mt-4">
                    <b><?php echo $contact_2['title']; ?></b><br>
                    <?php if($contact_2['phone']) : ?>
                    <?php echo $contact_2['phone']; ?><br>
                    <?php endif ?>
                    <?php if($contact_2['email']) : ?>
                    <?php echo $contact_2['email']; ?><br>
                    <?php endif ?>
                    <?php if($contact_2['street']) : ?>
                    <?php echo $contact_2['street']; ?><br>
                    <?php endif ?>
                    <?php if($contact_2['apartment']) : ?>
                    <?php echo $contact_2['apartment']; ?><br>
                    <?php endif ?>
                    <?php if($contact_2['city']) : ?>
                    <?php echo $contact_2['city']; ?><br>
                    <?php endif ?>
                    <?php if($contact_2['postcode']) : ?>
                    <?php echo $contact_2['postcode']; ?><br>
                    <?php endif ?>
                </div>
                <?php endif ?>

                <?php if ($contact_3) : ?>
                <div class="border-l-2 border-l-blue pl-4 mt-4">
                    <b><?php echo $contact_3['title']; ?></b><br>
                    <?php if($contact_3['phone']) : ?>
                    <?php echo $contact_3['phone']; ?><br>
                    <?php endif ?>
                    <?php if($contact_3['email']) : ?>
                    <?php echo $contact_3['email']; ?><br>
                    <?php endif ?>
                    <?php if($contact_3['street']) : ?>
                    <?php echo $contact_3['street']; ?><br>
                    <?php endif ?>
                    <?php if($contact_3['apartment']) : ?>
                    <?php echo $contact_3['apartment']; ?><br>
                    <?php endif ?>
                    <?php if($contact_3['city']) : ?>
                    <?php echo $contact_3['city']; ?><br>
                    <?php endif ?>
                    <?php if($contact_3['postcode']) : ?>
                    <?php echo $contact_3['postcode']; ?><br>
                    <?php endif ?>
                </div>
                <?php endif ?>
            </div>
            <div class="col-span-12 lg:col-span-6">
                <?php echo do_shortcode('[contact-form-7 id="5" title="Form 1"]'); ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
