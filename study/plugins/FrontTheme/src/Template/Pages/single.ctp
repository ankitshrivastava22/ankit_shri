
<!-- start blog Section -->
<section id="blg_sec">
	<div class="container">
		<div class="row">
			<div class="title_sec">
				<h1><?= __('Single Page') ?></h1>
				<h2><?= __('WE’RE BRANDING & DIGITAL STUDIO FROM VIET NAM') ?></h2>
			</div>		
			<div class="col-lg-8 col-md-8 col-sm-8 ">
				<div class="sngl_blg">
                                     <a href=""><?= $this->Url->image('http://cdn.shopify.com/s/files/1/1039/5466/files/blog-img1.jpg?1960436319992241823') ?></a>
					
					<div class="post_info">
						<div class="post_intro">
							<h2><?= __('there are a few things') ?></h2>	
							<i class="fa fa-picture-o"></i>									
						</div>						
						<ul>
							<li><?= __('Oct 23 2015 //') ?></li>
							<li><?= __('Oct 23 2015 //') ?></li>
							<li><?= __('1 comment') ?></li>
						</ul>
					</div>
					<div class="post_content">
						<p><?= __('Vestibulum sed pharetra risus, ac lacinia lorem. Etiam commodo laoreet rutrum. Praesent ut nulla in erat accumsan egestas pulvinar at ipsum. Aenean auctor, neque et dapibus lacinia, leo mauris rhoncus elit, id tincidunt purus orci ut eros. Suspendisse potenti. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus') ?></p>
						<a href=""><?= __('Read more') ?> <i class="fa fa-long-arrow-right"></i></a>
					</div>
				</div>	
				<div class="author_info">
                                    <?= $this->Url->image('admin.jpg') ?>
                                        <div class="author_dec">
						<ul class="social_link">
							<li><a href=""><i class="fa fa-flickr"></i></a></li>
							<li><a href=""><i class="fa fa-pinterest"></i></a></li>
							<li><a href=""><i class="fa fa-linkedin"></i></a></li>
							<li><a href=""><i class="fa fa-skype"></i></a></li>
							<li><a href=""><i class="fa fa-google"></i></a></li>
						</ul>
						<h3><?= __('Admin') ?> </h3>
						<p><?= __(' Phasellus facilisis convallis metus, ut imperdiet augue auctor nec. Duis at velit id augue lobortis porta. Sed varius, enim accumsan aliquam tincidunt, tortor urna vulputate quam, eget finibus urna est in augue. Etiam in sem non tellus volutpat lacinia.') ?></p>					
					</div>
				</div>	

											<div id="cnt_form">
												<div class="status alert alert-success" style="display: none"></div>
												<?= $this->Form->create(NULL, ['id' => 'contact-form','name'=>'contact-form','method'=>'post']) ?>
					
						<div class="form-group">
                                                    <?= $this->Form->input('name', [ 'class' => 'form-control name-field', 'placeholder' => __('Your Name'), 'required' => 'required', 'type' => 'text']); ?>
                                               </div>
						<div class="form-group">
                                                         <?= $this->Form->input('email', [ 'class' => 'form-control mail-field', 'placeholder' => __('Your Email'), 'required' => 'required', 'type' => 'text']); ?>
                                               </div> 
						<div class="form-group">
                                                         <?= $this->Form->input('message', ['id'=>'message','class' => 'form-control', 'placeholder' => __('Message'), 'required' => 'required', 'type' => 'textarea']); ?>
                                               
						</div> 
						<div class="form-group">
                                                         <?= $this->Form->input('submit', ['class' => 'btn btn-primary', 'type' => 'submit']); ?>
                                               
						</div>
				 <?= $this->Form->end() ?>
												</div>

			</div>				
			
			<div class="col-lg-4 col-md-4 col-sm-4">
				<div class="sidebar">						
					<div class="search_widget">
                                            <?= $this->Form->input('message', ['id'=>'sr_bx','class' => 'form-control', 'placeholder' => __('Search'), 'required' => 'required', 'type' => 'text']); ?>
                                        </div>				
					<div class="widget">
                                            <h2><?= __('categories') ?></h2>
						<div class="title_br"></div>
						<ul>
							<li><a href=""><?= __('Donec nec pretium felis') ?></a></li>
							<li><a href=""><?= __('Donec nec pretium felis') ?></a></li>
                                                        <li><a href=""><?= __('Donec nec pretium felis') ?></a></li>
                                                        <li><a href=""><?= __('Donec nec pretium felis') ?></a></li>
                                                        <li><a href=""><?= __('Donec nec pretium felis') ?></a></li>
						</ul>
					</div>				
					<div class="widget">
						<h2><?= __('categories') ?></h2>
						<div class="title_br"></div>
						<ul>
							<li><a href=""><?= __('Donec nec pretium felis') ?></a></li>
							<li><a href=""><?= __('Donec nec pretium felis') ?></a></li>
                                                        <li><a href=""><?= __('Donec nec pretium felis') ?></a></li>
                                                        <li><a href=""><?= __('Donec nec pretium felis') ?></a></li>
                                                        <li><a href=""><?= __('Donec nec pretium felis') ?></a></li>
						</ul>
					</div>				
					<div class="widget">
						<h2><?= __('categories') ?></h2>
						<div class="title_br"></div>
						<ul class="flickr">
							<li><a href=""><?= $this->Url->image('flckr.jpg') ?></a></li>
						<li><a href=""><?= $this->Url->image('flckr.jpg') ?></a></li>
							<li><a href=""><?= $this->Url->image('flckr.jpg') ?></a></li>
							<li><a href=""><?= $this->Url->image('flckr.jpg') ?></a></li>
							<li><a href=""><?= $this->Url->image('flckr.jpg') ?></a></li>
                                                        <li><a href=""><?= $this->Url->image('flckr.jpg') ?></a></li>
                                                        <li><a href=""><?= $this->Url->image('flckr.jpg') ?></a></li>
                                                        <li><a href=""><?= $this->Url->image('flckr.jpg') ?></a></li>
                                                        <li><a href=""><?= $this->Url->image('flckr.jpg') ?></a></li>
						</ul>
					</div>
					<div class="widget">
						<h2>categories</h2>
						<div class="title_br"></div>
						<ul class="tag">
							<li><a href=""><?= __('php') ?></a></li>
							<li><a href=""><?= __('css') ?></a></li>
							<li><a href=""><?= __('wordpress') ?></a></li>
							<li><a href=""><?= __('photoshop') ?></a></li>
							<li><a href=""><?= __('html') ?></a></li>
							<li><a href=""><?= __('js') ?></a></li>

						</ul>
					</div>							
				</div>
			</div>	
		</div>
	</div>
</section>
<!-- start Blog Section -->

