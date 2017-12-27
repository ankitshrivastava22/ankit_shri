<!-- start preloader -->

<header class="main_menu_sec navbar navbar-default navbar-fixed-top">
<div class="pista">
    <div class="container">
            <div class="row" id='world'> 
                <div class="col-lg-3 col-md-3 col-sm-12">
                    <div class="lft_hd">
                        <a><?php echo $this->Html->image('logo.png', array('alt' => '')) ?></a>
                    </div>
                </div>			
                <div class="col-lg-9 col-md-9 col-sm-12">
                    <div class="rgt_hd">					
                        <div class="main_menu">
                            <nav id="nav_menu">

                                <button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>	
                                <div id="navbar">
                                    <ul>
                                        <li><a href="<?= $this->Url->build(['controller' => 'Pages', 'action' => 'index']); ?>"><?= __('Home') ?></a></li>
<!--                                        <li><a href="#"><?= __('Static Page') ?><i class="fa fa-angle-down"></i></a>
                                            <ul>

                                                <li><a class='page-scroll' href="<?= $this->Url->build(['controller' => 'Pages', 'action' => 'single']); ?>">     
                                                        <?= __('Single Blog Page') ?></a></li>
                                            </ul>
                                        </li> -->

                                        <li><a class="page-scroll" href="#tm_sec"><?= __('Our Category') ?><i class="fa fa-angle-down"></i></a>
                                            <ul>
                                                <li><a class='page-scroll' href="">     
                                                        <?= __('Shoping') ?><i class="fa fa-angle-right"></i></a>
                                                    <ul>
                                                        <li>
                                                            <a target='_blank' href="https://www.amazon.com/"><?= __('Amazon') ?></a>
                                                        </li>
                                                        <li>
                                                            <a target='_blank' href="https://www.flipkart.com/"><?= __('Flipkart') ?></a>
                                                        </li>
                                                    </ul>
                                                </li>

                                                <li><a class='page-scroll' href="">     
                                                        <?= __('Tour & Travails') ?><i class="fa fa-angle-right"></i></a>
                                                    <ul>
                                                        <li>
                                                            <a target='_blank' href="https://book.olacabs.com/"><?= __('Olacab') ?></a>
                                                        </li>
                                                        <li>
                                                            <a target='_blank' href="https://get.uber.com/"><?= __('Uber') ?></a>
                                                        </li>
                                                    </ul>

                                                </li>

                                                <li><a class='page-scroll' href="">     
                                                        <?= __('Service Provider') ?><i class="fa fa-angle-right"></i></a>

                                                    <ul>
                                                        <li>
                                                            <a target='_blank' href="https://www.urbanclap.com/"><?= __('Urbanclap') ?></a>
                                                        </li>

                                                    </ul>
                                                </li>

                                                <li><a  class='page-scroll' href="">     
                                                        <?= __('News') ?><i class="fa fa-angle-right"></i> </a>
                                                    <ul>
                                                        <li>
                                                            <a target='_blank' href="http://aajtak.intoday.in/"><?= __('Aajtak') ?></a>
                                                        </li>
                                                        <li>
                                                            <a target='_blank' href="http://zeenews.india.com/"><?= __('Zee News') ?></a>
                                                        </li>
                                                        <li>
                                                            <a target='_blank' href="http://edition.cnn.com/"><?= __('CNN News') ?></a>
                                                        </li>
                                                    </ul>
                                                </li>

                                                <li><a class='page-scroll' href="">     
                                                        <?= __('Newspaper') ?><i class="fa fa-angle-right"></i></a>
                                                    <ul>
                                                        <li>
                                                            <a target='_blank' href="https://timesofindia.indiatimes.com/"><?= __('Timesofindia') ?></a>
                                                        </li>
                                                        <li>
                                                            <a target='_blank' href="http://www.amarujala.com/"><?= __('Amarujala') ?></a>
                                                        </li>

                                                        <li>
                                                            <a target='_blank' href="https://www.bhaskar.com/"><?= __('Danik Bhaskar') ?></a>
                                                        </li>
                                                    </ul> 
                                                </li>

                                                <li><a class='page-scroll' href="">     
                                                        <?= __('Earning') ?><i class="fa fa-angle-right"></i></a>
                                                    <ul>
                                                        <li>
                                                            <a target='_blank' href="https://affiliate.flipkart.com/?otracker=undefined_footer_navlinks"><?= __('Flipkart') ?></a>
                                                        </li>
                                                        <li>
                                                            <a target='_blank' href="https://affiliate-program.amazon.in/"><?= __('Amazon') ?></a>
                                                        </li>

                                                    </ul>
                                                </li>

                                                <li><a class='page-scroll' href="">     
                                                        <?= __('Songs') ?><i class="fa fa-angle-right"></i></a>
                                                    <ul>
                                                        <li>
                                                            <a target='_blank' href="https://gaana.com/"><?= __('Gaana') ?></a>
                                                        </li>
                                                        <li>
                                                            <a target='_blank' href="https://songs.pk/"><?= __('Songs') ?></a>
                                                        </li>
                                                        <li>
                                                            <a target='_blank' href="http://videoming.com/"><?= __('Videoming') ?></a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li><a class='page-scroll' href="">     
                                                        <?= __('Movies') ?><i class="fa fa-angle-right"></i></a>
                                                    <ul>
                                                        <li>
                                                            <a target='_blank' href="http://hdmovies300.org/"><?= __('Movies300') ?></a>
                                                        </li>
                                                        <li>
                                                            <a target='_blank' href="https://9xmovies.info/"><?= __('9xmovies') ?></a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li><a class='page-scroll' href="">     
                                                        <?= __('Games') ?><i class="fa fa-angle-right"></i></a>
                                                    <ul>
                                                        <li>
                                                            <a target='_blank' href="http://www.download-free-games.com/"><?= __('Download Games') ?></a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li><a class='page-scroll' href="">     
                                                        <?= __('Software') ?><i class="fa fa-angle-right"></i></a>
                                                    <ul>
                                                        <li>
                                                            <a target='_blank' href="http://filehippo.com/"><?= __('Filehippo') ?></a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li><a class='page-scroll' href="">     
                                                        <?= __('Study') ?><i class="fa fa-angle-right"></i></a>
                                                    <ul>
                                                        <li>
                                                            <a target='_blank' href="https://www.w3schools.com/"><?= __('W3schools') ?></a>
                                                        </li>
                                                        <li>
                                                            <a target='_blank' href="http://study.com/"><?= __('study') ?></a>
                                                        </li>
                                                        <li>
                                                            <a target='_blank' href="http://www.besthinditutorials.com/"><?= __('Besthinditutorials') ?></a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li><a class='page-scroll' href="">     
                                                        <?= __('Book Hotels') ?><i class="fa fa-angle-right"></i></a>
                                                    <ul>
                                                        <li>
                                                            <a target='_blank' href="https://www.trivago.in/"><?= __('Trivago') ?></a>
                                                        </li>
                                                        <li>
                                                            <a target='_blank' href="https://www.makemytrip.com/"><?= __('Makemytrip') ?></a>
                                                        </li>
                                                        <li>
                                                            <a target='_blank' href="https://www.hotelscombined.com/"><?= __('Hotelscombined') ?></a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li><a class='page-scroll' href="">     
                                                        <?= __('Social Media') ?><i class="fa fa-angle-right"></i></a>
                                                    <ul>
                                                        <li>
                                                            <a target='_blank' href="https://www.facebook.com/"><?= __('Facebook') ?></a>
                                                        </li>
                                                        <li>
                                                            <a target='_blank' href="https://www.linkedin.com/"><?= __('Linkedin') ?></a>
                                                        </li>
                                                        <li>
                                                            <a target='_blank' href="https://twitter.com/"><?= __('Twitter') ?></a>
                                                        </li>
                                                    </ul>
                                                </li>

                                                <li><a class='page-scroll' href="">     
                                                        <?= __('Entertainment') ?><i class="fa fa-angle-right"></i></a>
                                                    <ul>
                                                        <li>
                                                            <a target='_blank' href="https://www.youtube.com/"><?= __('Youtube') ?></a>
                                                        </li>
                                                        <li>
                                                            <a target='_blank' href="http://www.hotstar.com/"><?= __('Hotstar') ?></a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a class="page-scroll" href="#tstm_sec"><?= __('About') ?></a></li>
                                        <li><a class="page-scroll" href="#ctn_sec"><?= __('Contact Us') ?></a></li> 
                                        <li><a target='_blank' href="https://www.facebook.com/3wmix/"><i class="fa fa-facebook nav-icon"></i></a></li>
                                        <li><a target='_blank' href="https://twitter.com/WwwmixCom"><i class="fa fa-twitter nav-icon"></i></a></li>
                                        <li><a target='_blank' href="https://www.linkedin.com/in/wwwmix-com-92234b152/"><i class="fa fa-linkedin nav-icon"></i></a></li>
                                    </ul>
                                </div>		
                            </nav>			
                        </div>					
                    </div>
                </div>	
            </div>	
        </div>
    </div>
</header>
<!-- End Header Section -->






