<?php get_header(); ?>

    <!-- SLIDER -->
    <section id="slider">
        <div id="home-carousel" class="carousel slide" data-ride="carousel">            
            <div class="carousel-inner">
            <div class="item active" style="background-image: url(<?php bloginfo('template_url'); ?>/img/slider/01.jpg)">
                    <div class="carousel-caption container">
                        <div class="row">
                            <div class="col-sm-8">
                                <h1>Welcome to</h1><br>
                                <h2><span class="colortext1">Inter </span><span class="colortext2">Schimb</span> World</h2>
                            </div>
                        </div>
                    </div>                  
                </div>
                <div class="item" style="background-image: url(<?php bloginfo('template_url'); ?>/img/slider/02.jpg)">
                    <div class="carousel-caption container">
                        <div class="row">
                            <div class="col-sm-12">
                                <h2>Work and Travel USA</h2>
                                <p>
                                    Daca doriti sa aplicati la programul Work and Travel 2017, Compania IS Inter-Schimb va anunta inceputul inscrierii studentilor la programul Work and Travel 2017!<br>
                                    Calatoreste si traieste o vacanta de vis în SUA! Programa Work and Travel 2017 te asteapta pe tine! <br>
                                    Contacteaza la nr:<br>
                                    +(373 22) 21-02-89 <br>
                                    +(373) 68-406-388 <br> <br>
                                </p>
                            </div>
                        </div>
                    </div>                  
                </div>
                <div class="item" style="background-image: url(<?php bloginfo('template_url'); ?>/img/slider/03.jpg)">
                    <div class="carousel-caption container">
                        <div class="row">
                            <div class="col-sm-12">
                                <h1><b>J1 Internship / Trainee Program</b></h1>
                                <p>Daca doresti sa obtii experienta de munca in SUA, aplica la programele care vor deschide usa in viitorul tau. Creeaza-ti cariera profesionala cu ajutorul nostru. Noi oferim diverse programe de munca in SUA
                                - J1 Internship/Trainee (Stagiere in domeniu) <br>
                                - H1b (Contract de munca profesional) <br>
                                - H2b ( Contract de munca necalificat) <br>
                                - Studii in SUA. <br><br>
                                 </p>
                            </div>
                        </div>
                    </div>                  
                </div>
                <a class="home-carousel-left" href="#home-carousel" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                <a class="home-carousel-right" href="#home-carousel" data-slide="next"><i class="fa fa-angle-right"></i></a>
            </div>      
        </div> <!--/#home-carousel--> 
    </section>
    <!-- /SLIDER --> 
   

   <!-- SERVICES -->
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <h1>Наши Услуги</h1>
                        <span class="st-border"></span>
                    </div>
                </div>

                <div class="col-md-4 st-service">
                    <div class="single_service text-center">
                        <i class="fa fa-desktop"></i>
                        <h2>Work & Travel Program</h2>
                        <p><b>Work and Travel USA</b> - одна из самых популярных программ студенческого обмена в мире, которая предоставляет студенту возможность легально работать в США на срок от одного до четырех месяцев во время летних каникул.</p>
                        <a href="work-and-travel">Узнать больше</a>
                    </div>
                </div>

                <div class="col-md-4 st-service">
                    <div class="single_service text-center">
                        <i class="fa fa-graduation-cap"></i>
                        <h2>J1 Internship/Trainee Program</h2>
                        <p><b>J1 Internship/Training</b> – это отличная возможность для получения опыта работы в американской компании по специальности или опыту работы.</p>
                        <a href="internship">Узнать больше</a>
                    </div>
                </div>

                <div class="col-md-4 st-service">
                    <div class="single_service text-center">
                        <i class="fa fa-file-text-o"></i>
                        <h2>Новости</h2>
                        <p>Следите за нашими новостями и предложениями: </p>
                            <?php
                            $id=5; // ID заданной рубрики
                            $n=3;   // количество выводимых записей
                            $recent = new WP_Query("cat=$id&showposts=$n"); 
                            while($recent->have_posts()) : $recent->the_post();
                            ?>
                            <p>- <?php the_title(); ?></p>
                            <?php endwhile; ?>
                        <a href="news">Узнать больше</a>
                    </div>
                </div>

                <div class="col-md-4 st-service">
                    <div class="single_service text-center">
                        <i class="fa fa-users"></i>
                        <h2>Наши участники</h2>
                        <p>Фотоотчет наших участников Work & Travel и J1 Internship/Trainee.</p>
                        <a href="photogallery">Узнать больше</a>
                    </div>
                </div>

                <div class="col-md-4 st-service">
                    <div class="single_service text-center">
                        <i class="fa fa-briefcase"></i>
                        <h2>Рабочие контракты</h2>
                        <p>У нас имеется большой выбор рабочих контрактов на программы Work & Travel и J1 Internship/Trainee.</p><br>
                            <div class="work-contracts">
                                <a href="job-offers">Узнать больше<br></a>
                            </div>
                    </div>
                </div>

                <div class="col-md-4 st-service">
                    <div class="single_service text-center">
                        <i class="fa fa-weixin"></i>
                        <h2>Online Support</h2>
                        <p>У Вас есть дополнительные вопросы? Задавайте их нам! У нас работает онлайн поддержка, где Вам ответят в короткий срок времени.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- /SERVICES -->
    

    <!-- STUDENTS -->
    <section id="testimonial">
        <div class="container">
            <div class="row">
                <div class="overlay"></div>
                <div class="col-md-8 col-md-offset-2 col-sm-12">
                    <div class="st-testimonials">

						<div class="item active text-center">
                            <img src="<?php bloginfo('template_url'); ?>/img/students/com-6.png" alt="student">
                            <p><b>"Thank You for wonderful summer and great memories"</b></p>
                            <div class="st-border"></div>
                            <div class="client-info">
                                <h4><b>Alina Mihai</b></h4>
                                <span><b>Ocean City, NJ 2016</b></span>
                            </div>
                        </div>
						
                        <div class="item text-center">
                            <img src="<?php bloginfo('template_url'); ?>/img/students/com-1.png" alt="student">
                            <p><b>"As vreau sa multumesc foarte mult companiei <b>Inter-Schimb</b> pentru ca mi-a oferit oportunitatea de a pleca in SUA pentru perioada de 1 an. Sunt foarte recunoscatoare pentru ajutorul acordat pe parcursul perioadei."</b></p>
                            <div class="st-border"></div>
                            <div class="client-info">
                                <h4><b>Doina Prutel</b></h4>
                                <span><b></b></span>
                            </div>
                        </div>

                        <div class="item text-center">
                             <img src="<?php bloginfo('template_url'); ?>/img/students/com-2.png" alt="student">
                            <p><b>"Multumesc pentru atmosfera prietenoasa, preturile accesibile, atitudinea fata de fiecare student in parte, si de seriozitate. Cu ajutorul vostru am reusit si eu sa primesc viza pe o perioada de un an in SUA."</b></p>
                            <div class="st-border"></div>
                            <div class="client-info">
                                <h4><b>Andrei Beiu</b></h4>
                                <span><b>Chicago, Illinois 2015</b></span>
                            </div>
                        </div>

                        <div class="item text-center">
                            <img src="<?php bloginfo('template_url'); ?>/img/students/com-3.png" alt="student">
                            <p><b>"Am avut o vara plina de emotii pozitive, totul datorita Inter-Schimb !
                            Recomandam cu cea mai mare incredere :)
                            Serviciul calitativ si cu succes!"</b></p>
                            <div class="st-border"></div>
                            <div class="client-info">
                                <h4><b>Irina</b></h4>
                                <span><b>USA 2015</b></span>
                            </div>
                        </div>

                        <div class="item text-center">
                            <img src="<?php bloginfo('template_url'); ?>/img/students/com-4.png" alt="student">
                            <p><b>"Cea mai frumoasa vara-petrecuta in SUA....Datorita celei mai sigure, ieftine si prietenoase companii Work & Travel >> InterSchimb!!"</b></p>
                            <div class="st-border"></div>
                            <div class="client-info">
                                <h4><b>Tudor Postica</b></h4>
                                <span><b>Washington DC 2015</b></span>
                            </div>
                        </div>

                        <div class="item text-center">
                            <img src="<?php bloginfo('template_url'); ?>/img/students/com-5.png" alt="student">
                            <p><b>"Thank You for wonderful summer and great memories"</b></p>
                            <div class="st-border"></div>
                            <div class="client-info">
                                <h4><b>Юлия Киоса</b></h4>
                                <span><b>Arizona 2015</b></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /STUDENTS -->

<!-- CONTACT -->
<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h1>Наши Контакты</h1>
                </div>
            </div>
            <div class="col-sm-4 contact-info">
                <p class="contact-content"><b>График работы: <br>
                    Понедельник - Пятница <br>  
                    С 9:00 до 18:00</b>
                </p>
                <p class="st-address"><i class="fa fa-map-marker"></i> <strong>str. B.Bodoni 22A 2, Chisinau, Moldova</strong></p>
                <p class="st-phone"><i class="fa fa-mobile"></i><strong>+ (373) 68 406 388</strong></p>
                <p class="st-phone"><i class="fa fa-phone"></i><strong>+ (373 22) 21 02 89</strong></p>
                <p class="st-email"><i class="fa fa-envelope-o"></i> <strong>interschimb@hotmail.com</strong></p>
                <p class="st-email"><i class="fa fa-envelope-o"></i> <strong>swt@intershimb.md</strong></p>
                <p class="st-website"><i class="fa fa-facebook"></i> <strong><a class="facebook-contact" href="https://www.facebook.com/summer.usa/home">facebook.com/summer.usa</a></strong></p>
            </div>
            <div class="col-sm-7 col-sm-offset-1">
                <form action="php/send-contact.php" class="contact-form" name="contact-form" method="post">
                    <div class="row">
                        <div class="col-sm-6">
                            <input type="text" class="form-control form-control-lg" name="name" required="required" placeholder="Имя*">   
                        </div>   
                        <div class="col-sm-6">
                            <input type="email" class="form-control" name="email" required="required" placeholder="Email*">
                        </div>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="subject" placeholder="Программа*">
                        </div>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="phone" placeholder="Телефон">
                        </div>  
                        <div class="col-sm-12">
                            <textarea name="message" class="form-control" required="required" cols="30" rows="7" placeholder="Сообщение*"></textarea>
                        </div>   
                        <div class="col-sm-4 bat">
                            <input type="submit" name="submit" value="Отправить сообщение" class="">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- /CONTACT -->


<?php get_footer(); ?>