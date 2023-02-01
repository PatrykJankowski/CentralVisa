<?php /* Template Name: FAQ */ ?>

<?php get_header(); ?>

<section class="pt-20 pb-20 lg:pb-40">
    <div class="container">
        <div class="grid grid-cols-12 gap-[30px]">
            <div class="col-span-12 lg:col-span-9">
                <h1 class="text-2xl lg:text-4xl font-bold m-0"><?php echo get_field('title'); ?></h1>
                <p class="font-light mt-6 mb-20"><?php echo get_field('description') ?></p>
            </div>
        </div>
        <div class="grid grid-cols-12 gap-[30px]">
            <div class="col-span-12 lg:col-span-9">
                <?php for($i=1; $i<=12; $i++): ?>
                <?php if(get_field('qa_'.$i)['question']): ?>
                    <button class="accordion accordion-<?php echo $i; ?>"><?php echo get_field('qa_' . $i)['question']; ?></button>
                    <div class="panel">
                        <?php echo get_field('qa_'.$i)['answer'] ?>
                    </div>
                <?php endif ?>
                <?php endfor ?>
            </div>
        </div>
    </div>
</section>



<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    }
  });
}
</script>

<?php get_footer(); ?>
