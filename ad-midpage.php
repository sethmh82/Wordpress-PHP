<?php if( get_field('stat_sec2') OR get_field('stat_table_2') ): ?>
<?php if( get_field('remove_ads') ): ?>
<?php else: ?>
<?php if ( current_user_can('um_business-subscriber', 'read')  ||  current_user_can('um_standard-subscriber', 'read') ||  current_user_can('administrator', 'read'))  { echo ' '; } else { echo ' 
<div class="xmid-ad">
ADVERTISEMENT
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-9114682784380624"
     data-ad-slot="5998051517"
     data-ad-format="auto"></ins>
<script> (adsbygoogle = window.adsbygoogle || []).push({}); </script> </div>
  ';}?>
<?php endif; ?>
