<?php
/*
Template Name: Projects
*/
get_header(); ?>

<section class="banner pt-56 pb-56">
    <div class="w-2/5 m-auto">
        <h1 class="text-slate-300 font-extrabold text-8xl">Projects</h1>
    </div>
</section>

<section id="projects" class="mt-10">
    <div class="w-2/5 m-auto flex flex-wrap justify-between">
        <div class="project">
            <div class="cover">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/800x800.png" alt="">
            </div>
            <div class="project-info">
                <p>Title</p>
                <a class="btn flex justify-around" href="#">Read</a>
            </div>
        </div>
        <div class="project">
            <div class="cover">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/800x800.png" alt="">
            </div>
            <div class="project-info">
                <p>Title</p>
                <a class="btn flex justify-around" href="#">Read</a>
            </div>
        </div>
        <div class="project">
            <div class="cover">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/800x800.png" alt="">
            </div>
            <div class="project-info">
                <p>Title</p>
                <a class="btn flex justify-around" href="#">Read</a>
            </div>
        </div>
        <div class="project">
            <div class="cover">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/800x800.png" alt="">
            </div>
            <div class="project-info">
                <p>Title</p>
                <a class="btn flex justify-around" href="#">Read</a>
            </div>
        </div>
        <div class="project">
            <div class="cover">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/800x800.png" alt="">
            </div>
            <div class="project-info">
                <p>Title</p>
                <a class="btn flex justify-around" href="#">Read</a>
            </div>
        </div>
        <div class="project">
            <div class="cover">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/800x800.png" alt="">
            </div>
            <div class="project-info">
                <p>Title</p>
                <a class="btn flex justify-around" href="#">Read</a>
            </div>
        </div>
    </div>

    <div class="w-4/5 m-auto">
        <div class="flex w-1/3 m-auto mt-10">
            <div class="border-2 w-1/5 text-center"><a href="#" class="text-xl"><-</a></div>
            <div class="border-2 w-1/5 text-center"><a href="#" class="text-xl">1</a></div>
            <div class="border-2 w-1/5 text-center"><a href="#" class="text-xl">2</a></div>
            <div class="border-2 w-1/5 text-center"><a href="#" class="text-xl">3</a></div>
            <div class="border-2 w-1/5 text-center"><a href="#" class="text-xl">...</a></div>
            <div class="border-2 w-1/5 text-center"><a href="#" class="text-xl">10</a></div>
            <div class="border-2 w-1/5 text-center"><a href="#" class="text-xl">11</a></div>
            <div class="border-2 w-1/5 text-center"><a href="#" class="text-xl">12</a></div>
            <div class="border-2 w-1/5 text-center"><a href="#" class="text-xl">-></a></div>
        </div>
    </div>
</section>
<?php get_footer(); ?>