<div class="right-sidebar">
                        <div class="sidebar-item">
                            <h4 class="sidebar-title">নোটিশ বোর্ড </h4>
                            <?php foreach ($notices as $notice): ?>
                                <div  style="height: <?php echo $notice->min_height; ?>; margin-bottom:10px;" ><a href="<?php echo $notice->link_address; ?>" target="_blank" ><img src="<?php echo base_url('assets/site/notice'); ?>/<?php echo $notice->image_url; ?>" alt="<?php echo $notice->notice_title; ?>" style="height: <?php echo $notice->min_height; ?>" border="0" longdesc="<?php echo $notice->notice_title; ?>" />
                                    </a>
                                </div>
                            <?php endforeach; ?> 
                        </div>
                        <div class="sidebar-item">
                            <h4 class="sidebar-title">গুরুত্বপূর্ণ প্রবন্ধ</h4>
                            <ul class="list-post-item">
                                <li>  <a href="http://www.at-tahreek.com/august2013/article0901.html">প্রসঙ্গ : সারা বিশ্বে একই দিনে ছিয়াম ও ঈদ</a></li>                      
                                <li> <a href="april2013/article0601.html">নাস্তিকতার ভয়ংকর ছোবলে  বাংলাদেশের যুবসমাজ</a></li>
                                <li> <a href="april2013/editorial.html">মৌলিক পরিবর্তন কাম্য</a></li>
                                <li> <a href="http://www.at-tahreek.com/october2012/2-1.html">ফেরকা নাজিয়া-এর পরিচয়</a> </li>
                                <li> <a href="http://www.at-tahreek.com/august2012/1.html">কোয়ান্টাম মেথড : একটি শয়তানী ফাঁদ</a> </li>
                                <li> <a href="http://www.at-tahreek.com/June2012/1.html">বাঁচার  পথ</a></li>
                                <li> <a href="http://www.at-tahreek.com/june2011/2-5.html">ওয়াহ্হাবী আন্দোলন : উৎপত্তি, ক্রমবিকাশ</a></li>
                                <li> <a href="http://www.at-tahreek.com/may2011/4.html">আল্লামা ইহসান ইলাহী যহীর</a></li>
                                <li><a href="http://www.at-tahreek.com/september2012/2-3.html">পরহেযগারিতা</a></li>
                            </ul>
                        </div>
                        <div class="sidebar-item">
                            <h4 class="sidebar-title">গুরুত্বপূর্ণ প্রশ্নোত্তর</h4>
                            <ul class="list-post-item">
                                <li><a href="http://at-tahreek.com/december2012/question.html">পুরাতন মসজিদের জায়গা বিক্রি করা যাবে কি?</a></li>
                            </ul>
                        </div>
                        <div class="sidebar-item">
                            <h4 class="sidebar-title">পুরাতন সংখ্যা</h4>
                            <div class="old-number">
                            <?php foreach ($monthinfo as $month): ?>
                                <a href="<?php echo site_url('archive/' . date("MY", strtotime($month->publish_date))); ?>" class="old-number-item">
                                    <img src="<?php echo base_url() . 'assets/site/images/' . $month->cover_photo ?>" alt="">
                                    <span><?php echo $month->title; ?></span>
                                </a>
                            <?php endforeach; ?> 
                            </div>
                        </div>
                    </div>