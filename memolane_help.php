<div class="wrap">
	<h2><?php echo _e( 'Memolane Embed Help' ); ?></h2>
	<p>
	<strong>=== Memolane Embed ===</strong><br/><br/>
	 Contributors: memolane Donate<br/>
	link: http://memolane.com/ Tags: Memolane, media embedding, timeline view <br/>
	Requires at least: 2.0.2 <br/>
	Tested up to: 3.4 <br/>
	Stable tag: 3.4
	</p>
	<p>
	<strong>== Description ==</strong><br/><br/>
	This WordPress plugin adds a simple shortcode to embed the awesome Memolane media timeline view in your blog posts and pages.<br/>
	When adding a post with a Memolane embed, first add and configure your lane via the Memolane plugin administrator menu.
	</p>
	<p>
	<strong>== Installation ==</strong><br/><br/>
	1. Plugins >> Add New >> Upload the .zip file OR Unzip ‘memolane.zip’ and place the resulting folder, or just the contained ‘memolane.php’ file, in the ‘/wp-content/plugins/’ directory<br/>
	 2. Activate the plugin through the 'Plugins' menu in WordPress (in the left bar)<br/>
	 3. Start using the shortcode! 
	</p>
	<p>	
	<strong>== How To Use ==</strong><br/><br/>
	To embed the Memolane lane with all the default settings, use the shortcode:<br/>
	<strong> [memolane]</strong><br/><br/>
	You want to specify a lane that you've set up in the admin menu, like this (otherwise you'll just get ours!):<br/>
	 <strong>[memolane id=1]</strong><br/><br/>
	The following parameters are available (these are just sample values--replace with yours):<br/><br/>
	 <strong>Username</strong> - the memolane user name associated with this lane (ex: Eric) can be found on the lane url on memolane.com/username/lane-title<br/><br/>
	 <strong>Title</strong> - the case insensitive title of the lane to be embedded (ex: Memolane Journey). If left blank memolane.com/username is loaded as the embedded lane<br/><br/>
	 <strong>Width</strong> - the width (in px) to display for the embedded lane. Default is 500<br/><br/>
	 <strong>Height</strong> - the height (in px) to display for the embedded lane. Default is 500<br/><br/>
	 <strong>Background Color</strong> - the background color of the iframe of the embedded lane. <br/>
	Use a css value or default. (ex: #fffffff, red, transparent, etc…) *note: if value is invalid memolane's background will be loaded<br/><br/>
	<strong> Border</strong> - the border of the iframe of the embedded lane. Use a css value or default. (ex: 1px solid white)<br/><br/>
	
	For a complete tutorial and details, refer to: https://memolane.uservoice.com/knowledgebase/articles/8443-a-guide-to-embedding-your-memolane
	</p>
	<p>	
	<strong>== Changelog ==</strong><br/><br/>
	= 1.1 =<br/> 
    * Bug fix for reading lane's titles<br/><br/>
	= 1.0 =<br/> 
	* Added in admin menu to configure the lane via a ui. Now shortcode only uses id of lane created/configured in wordpress admin.<br/><br/>
	= 0.02 = <br/>
	* Validate parameters<br/><br/>
	= 0.01 = <br/>
	* Initial version
	</p>
</div>