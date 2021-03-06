<?php
ini_set('include_path', $_SERVER['DOCUMENT_ROOT'].'/includes/');
$body_classes = "home";
$home = true;
include 'header.php';
?>


		<section id="main" role="main">
				<div class="wrapper">

<div class="demo">
	<div class="demo-div demo-mediaQuery">
		<p>Media Query example</p>
		<p class="desktopOnly">Desktop only</p>
		<p class="tabletOnly">Tablet only</p>
		<p class="mobileOnly">Mobile only</p>
		<p class="nonMobile">non mobile</p>
		<p class="nonDesktop">non desktop</p>
	</div>

	<div class="demo-div demo-gradient">
		<p>Gradient example</p>
	</div>

	<div class="demo-div demo-multiGrad">
		<p>Multi Gradient example</p>
	</div>

	<div class="demo-div relative">
		<p>Triangle &amp; centered example</p>
		<div class="demo-triangle"></div>
	</div>

	<div class="demo-div">
		<p class="sprite-primary-pdf">retina pdf sprite class</p>
		<p class="sprite-secondary-podcast">standard podcast sprite class</p>
		<p class="demo-autoSprite">Sprite added using mixin</p>
	</div>

	<div class="demo-div">
		<p class="icon-pdf">pdf icon class</p>
		<p class="demo-icon">icon added using mixin</p>
	</div>

	<div class="demo-div">
		<p class="demo-kfAnimate">KF Animation example</p>
		<p class="demo-kfAnimate--multi">KF Animation example</p>
	</div>

	<div class="demo-themes">
		<p class="demo-div themed-header">Themed header</p>
		<p class="demo-div themed-nav">Themed nav</p>
		<p class="demo-div themed-footer">Themed footer</p>
	</div>
</div>


<div class="full-screen-div-example js-fullScreen">
	<h2>Full screen div example</h2>
	<p>Scroll down to see more content</p>
</div>

				<a href="javascript:void(0)" id="contentStart"></a>
				<div class="content">

						<h2 class="sprite-primary-pdf">To do list:</h2>
						<ol>
							<li>Add the animation Javascript stuff from the DoC project</li>
							<li>Add an example of a responsive youtube video</li>
							<li>Change structure to allow for BEM structuring. Look into <a href="https://github.com/mksanderson/crank" title="">Matt S&rsquo;s Crank starter kit</a> for ideas on folder structure and see what else his kit does</li>
							<li>Add <a href="http://vodkabears.github.io/remodal/#" title="">jQuery remodal lightbox</a> so it&rsquo;s ready to go on any project (need to add the js and create a backup cross icon)</li>
							<li>Change the styling for the select boxes to the type that requires a little bit of JS</li>
							<li>Make ready to go, custom styled checkboxes and radio buttons</li>
							<li>Make the media query mixin automatically convert pixel values to em values</li>
							<li>Make a zip download icon</li>
							<li>Make grunt compile always loaded files into a single js file</li>
							<li>Make js load minified files - make it easy to switch for development</li>
							<li>Get selectivizor to work.</li>
							<!--<li>get <a href="https://www.npmjs.org/package/grunt-svg2png">svg2png</a> grunt plugin working</li>--><!--I don't think we'll use this-->
							<li>Create a content manageable pure css pie chart</li>
						</ol>

						<h2>Test list</h2>
						<ul>
							<li>Lorem ipsum
								<ul>
									<li>Lorem ipsum</li>
									<li>Lorem ipsum</li>
									<li>Lorem ipsum</li>
								</ul>
							</li>
							<li>Lorem ipsum</li>
							<li>Lorem ipsum</li>
						</ul>

						<ol>
							<li>Lorem ipsum
								<ol>
									<li>Lorem ipsum</li>
									<li>Lorem ipsum</li>
									<li>Lorem ipsum</li>
								</ol>
							</li>
							<li>Lorem ipsum</li>
							<li>Lorem ipsum</li>
						</ol>

						<h2>Heading</h2>
						<p>Quae qui non vident, nihil umquam magnum ac cognitione dignum amaverunt. Itaque nostrum est-quod nostrum dico, artis est-ad ea principia, quae accepimus. Duo Reges: constructio interrete. Sed quanta sit alias, nunc tantum possitne esse tanta. Id est enim, de quo quaerimus. Varietates autem iniurasque fortunae facile veteres <a href="http://www.googl.com" title="">philosophorum</a> praeceptis instituta vita superabat. Quamquam in hac divisione rem ipsam prorsus probo, elegantiam desidero. Hos contra singulos dici est melius. Sed tamen enitar et, si minus multa mihi occurrent, non fugiam ista popularia. An vero, inquit, quisquam potest probare, quod perceptfum, quod. Quod autem meum munus dicis non equidem recuso, sed te adiungo socium.</p>

<h2>Pure CSS pointing arrows !</h2>

	<ul>
		<li>Up arrow <span class="arrow up"></span></li>
		<li>Down arrow <span class="arrow down"></span></li>
		<li>Left arrow <span class="arrow left"></span></li>
		<li>Right arrow <span class="arrow right"></span></li>
	</ul>



<h2>Animations</h2>

<h3>Simple re-usable pop-in animation</h3>

<ul class="popinDemo js-popins columns--tabular columns--sixths">
<?php
	for ($i = 0; $i < 6; $i++) {
		echo
		'<li class="popinDemo-piece js-popins-piece columns-col">
			<p class="animationDemoItem">Pop-in item '.($i+1).'</p>
		</li>';
	};
?>
</ul>

<h3>Simple multistage animation</h3>
<ul id="js-simpleExampleElement" class="columns--floated columns--halves simpleAnimationExample">
<?php
	for ($i = 0; $i < 4; $i++) {
		echo
		'<li class="simple'.($i+1).' simpleAnimationExample-piece columns-col halves">
			<p class="animationDemoItem">Staged animation item '.($i+1).'</p>
		</li>';
	}
?>
</ul>

<h2>Form styles</h2>

<form method="get" action="#">
	<fieldset>
		<div class="form-row">
			<ul>
				<?php
					$radio_array = array(
						'radio1',
						'radio2',
						'radio3'
					);
					for ($i = 0; $i < count($radio_array); $i++) {
						$radio_id = preg_replace("/[^A-Za-z0-9]/", "", $radio_array[$i]);
						echo
						'<li>
							<input id="'.$radio_id.'" type="radio" name="radio_name" />
							<label for="'.$radio_id.'">'.$radio_array[$i].'</label>
						</li>';
					}
				?>
			</ul>
		</div>
		<div class="form-row">
			<ul>
				<?php
					$checkbox_array = array(
						'checkbox1',
						'checkbox2',
						'checkbox3'
					);
					for ($i = 0; $i < count($checkbox_array); $i++) {
						$checkbox_id = preg_replace("/[^A-Za-z0-9]/", "", $checkbox_array[$i]);
						echo
						'<li>
							<input id="'.$checkbox_id.'" type="checkbox" />
							<label for="'.$checkbox_id.'">'.$checkbox_array[$i].'</label>
						</li>';
					}
				?>
			</ul>
		</div>
<?php
	$input_array = array(
		array(
			'label' => 'xxxxxxxxx',
			'placeholder' => 'Enter text here'
		),
		array(
			'label' => 'xxxxxxxxx',
			'placeholder' => 'Enter text here'
		),
		array(
			'label' => 'xxxxxxxxx',
			'placeholder' => 'Enter text here'
		),
	);
	for ($i = 0; $i < count($input_array); $i++) {

		$id = preg_replace("/[^A-Za-z0-9]/", "", $input_array[$i]);
		$label = $input_array[$i]['label'];
		$placeholder = $input_array[$i]['placeholder'];

		echo
		'<div class="from-row">
			<label for="'.$id.'">'.$label.'</label>
			<input id="'.$id.'" placeholder="'.$placeholder.'" type="text"/>
		</div>';
	}
?>
		<div class="form-row">
			<label for="styled-browse">Styled browse button</label>
			<input id="styled-browse" type="file" />
		</div>
		<div class="form-row">
			<label for="styled-select">Styled select</label>
			<select id="styled-select">
				<option>Select box</option>
				<option>xxxxxx</option>
				<option>xxxxxx</option>
			</select>
		</div>
		<div class="form-row">
			<input type="submit" />
			<input type="reset" />
		</div>
	</fieldset>
</form>


<div class="hyphenTest">
	<h2>Hyphenation test</h2>
	<p>Transmogrification</p>
</div>

<div id="equalTest">
	<div>
		fbhsdjkfbsjkfb<br>
		fsjkhnwejkfhn<br>
		jfsdjsdfjf
	</div>
	<div>
		dfsfklsdfklsd
	</div>
	<br>
	<div>
		fhnsdjkf<br>
		fsdjksd
	</div>
	<div>mjsdfkl</div>
</div>

			<ul class="downloads">
				<li><a href="downloads/sample.pdf">PDF</a> <small>(2MB)</small></li>
				<li><a href="downloads/sample.docx">Word</a> <small>(2.5MB)</small></li>
				<li><a href="downloads/sample.xls">Excel</a> <small>(2MB)</small></li>
				<li class="exclude"><a href="downloads/sample.pptx">Powerpoint</a> <small>(3MB)</small></li>
				<li><a href="downloads/sample.txt">Text</a> <small>(100KB)</small></li>
				<li><a href="downloads/sample.mp3">Audio</a> <small>(10MB)</small></li>
				<li><a href="http://www.itunes.com">Podcast</a></li>
				<li><a href="#" class="htmlDownload">For the rare instances when a html icon is necessary</a></li>
				<li><a href="http://www.example.com" title="example of an external link">External link</a></li>
			</ul>

					</div>
				</div>
		</section><!-- #main-->

<?php include 'footer.php'; ?>
