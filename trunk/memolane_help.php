<div class="wrap">
	<h2><?php echo _e( 'Memolane Embed Help' ); ?></h2>
	<p>
		=== Memolane Embed ===<br/>
		Contributors: memolane<br/>
		Donate link: http://memolane.com/<br/>
		Tags: Memolane, media embedding, timeline view<br/>
		Requires at least: 2.0.2<br/>
		Tested up to: 3.2<br/>
		Stable tag: 3.2<br/>
	</p>
	<p>	
		Embed the awesome Memolane media timeline view via an easy WordPress shortcode plugin.
	</p>
	<p>	
		== Description ==
	</p>
	<p>		
		This WordPress plugin adds a simple shortcode to embed the awesome Memolane media timeline view in your blog posts.
	</p>
	<p>		
		When adding a post with a Memolane embed, first add and configure your lane via the Memolane plugin administrator menu.
	</p>
	<p>		
		To embed the Memolane lane with all the default settings, use the shortcode:<br/>
		[memolane]
	</p>
	<p>		
		But you probably want to at least specify a lane that you've set up in the admin menu, like this (otherwise you'll just get ours!):<br/>
		[memolane id=1]
	</p>
	<p>		
		The following parameters are available (these are just sample values--replace with yours):<br/>
		Username - the memolane user name associated with this lane (ex: Eric) can be found on the lane url on memolane.com/username/lane-title<br/>
		Title - the case insensitive title of the lane to be embedded (ex: Memolane Journey).  If left blank memolane.com/username is loaded as the embedded lane<br/>
		Width - the width (in px) to display for the embedded lane.  Default is 500<br/>
		Height - the height (in px) to display for the embedded lane.  Default is 500<br/>
		Background Color - the background color of the iframe of the embedded lane.  Use a css value or default. (ex: #fffffff, red, transparent, etc…) *note: if value is invalid memolane's background will be loaded<br/>
		Border - the border of the iframe of the embedded lane.  Use a css value or default. (ex: 1px solid white)
	</p>
	<p>		
		For a complete tutorial and details, refer to:<br/>
		https://memolane.uservoice.com/knowledgebase/articles/8443-a-guide-to-embedding-your-memolane
	</p>
	<p>		
		== Installation ==
	</p>
	<p>		
		1. Unzip `memolane.zip` and place the resulting folder, or just the contained `memolane.php` file, in the `/wp-content/plugins/` directory<br/>
		2. Activate the plugin through the 'Plugins' menu in WordPress (in the left bar)<br/>
		3. Start using the shortcode (by following the directions outlined in the description)!<br/>
	</p>
	<p>	
		== Changelog ==
	</p>
	<p>		
		= 0.03 =<br/>
		* Added in admin menu to configure the lane via a ui.  Now shortcode only uses id of lane created/configured in wordpress admin. 
	</p>
	<p>		
		= 0.02 =<br/>
		* Validate parameters
	</p>
	<p>		
		= 0.01 =<br/>
		* Initial version
	</p>
</div>