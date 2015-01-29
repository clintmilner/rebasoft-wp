<?php
/**
 * The template for displaying the footer.
 *
 *
 * @package Bizway
 * @since Bizway 1.0
 */
?>
<style>
.footer-link {
color:#666 !important;
}
.footer-link a:hover {
text-decoration:underline;
}
</style>
<div id="footer_page">
<div class="footer-wrapper">
    </div>
  <div class="footer-link">
    <ul style="list-style-type:none;text-align:center;">
      <li style="display:inline;"><a href="/">Home</a></li>
      <li style="display:inline;">&#124;</li>
      <li style="display:inline;"><a href="/partners">Partners</a></li>
      <li style="display:inline;">&#124;</li>
      <li style="display:inline;"><a href="/support-home">Support</a></li>
      <li style="display:inline;">&#124;</li>
      <li style="display:inline;"><a href="/news">News</a></li>
      <li style="display:inline;">&#124;</li>
      <li style="display:inline;"><a href="/company">Company</a></li>
      <li style="display:inline;">&#124;</li>
      <li style="display:inline;"><a href="/site-map">Site Map</a></li>
</ul> </div>
<div class="footer_wrapper">
   <div align="left" style="margin-left:20px;font-size:12px;color:#333;"><?php echo get_bloginfo ( 'description' ); ?>
       <?php echo bizway_get_option('bizway_footertext'); ?>&nbsp;<a href="/privacy" style="color:#2B9ACB;">Privacy Policy</a></div>
   <div align="right" style="margin-top:-25px;"><?php echo do_shortcode('[feather_follow]'); ?></div>    
</div>
</div>
<?php wp_footer(); ?>
<script type="text/javascript">
var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-34829205-1']);
_gaq.push(['_trackPageview']);
(function() {
var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true; 
ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();
</script>
<!--<br />Registered Office: 21 London Road, Twyford, Berkshire, RG10 9EH. Registered in England and Wales 06914233 -->
</body>
</html>