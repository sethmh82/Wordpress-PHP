
<?php if( get_field('stock_symbol') ||  get_field('year_established')   ): ?>
<?php if( wp_is_mobile() ): ?>
<?php else: ?>
<div style="width:100%; height:240px; ">
<div style="height:220px; width: 220px; float: left;  padding:5px; margin-top:10px; border: 1px solid #ccc;">
<?php if ( has_post_thumbnail() ) : the_post_thumbnail( 'medium' ); endif; ?>
</div>
<div style="height:190px; min-width: 380px; float: left;  padding: 20px; margin-top:10px;">
<?php if( get_field('stock_symbol') ): ?>
<span style="font-size:16px; padding: 6px; color: #878a37;  letter-spacing: 4px; ">STOCK PRICE</span>
<div style="margin-top:10px; margin-bottom:0px;" id="barchar">
<div style="" id="barchar2">
<script type="text/javascript" src="https://www.barchart.com/widget.js?uid=1974def13c3a16690f1bea81e0749111&widgetType=singlequote&widgetWidth=360&primaryPrice=last&fontColor%5Blinks%5D=e8ba21&font=2&symbol=<?php the_field('stock_symbol') ?>&fields%5B%5D=name&fields%5B%5D=symbol&fields%5B%5D=last&fields%5B%5D=change&fields%5B%5D=pctchange&fields%5B%5D=displaytime&displayChars="></script>
</div></div>
<?php endif; ?>
</div></div>
<div style="width:100%; height: 290px; ">
<div style="height:260px; float: left; background: #f4f4f4; color: #B19B57; padding:20px; margin-top:20px; width:48%;">
<p style="padding-left:20px;">Year Established<br>
<span style="font-size:24px; margin-bottom:10px;"><?php the_field('year_established') ?></span><br></p>
<p style="padding-left:20px;">Company Headquarters<br>
<span style="font-size:24px; margin-bottom:10px;"><?php the_field('  ') ?></span><br></p>
<p style="padding-left:20px;">Fortune 500 Rank<br>
<span style="font-size:24px; margin-bottom:10px;"><?php the_field('fortune_500_rank') ?></span><br></p>
</div>
<div style="height:260px; float: left; background: #f4f4f4; color: #B19B57; padding:20px; margin-top:20px; width:48%;">
<p>Number of Employees<br>
<span style="font-size:24px; margin-bottom:10px;"><?php the_field('number_of_employees') ?></span><br>
</p><p>Annual Revenue<br>
<span style="font-size:24px; margin-bottom:10px;"><?php the_field('annual_revenue') ?></span><br>
</p>Industry<br>
<span style="font-size:24px; "><?php the_field('industry') ?></span>
</div></div>
<?php endif; ?>
<?php endif; ?>
