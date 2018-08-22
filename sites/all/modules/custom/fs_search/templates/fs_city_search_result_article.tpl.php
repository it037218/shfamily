
<div class="item-directory col-xs-12">
    <div class="item-wrapper col-xs-12">
        <div class="col-sm-3 item-directory-img-section"><a href="<?php print $item['url']; ?>"><img  src="<?php print $item['preview_image']; ?>" class="img-responsive"/></a></div>
        <div class="col-sm-9 description-item-directory-container">
            <div class="row title-item-directory">
                <span><a href="<?php print $item['url']; ?>"><?php print $item['title']; ?></a></span>
                <div class="underline_directory"></div>                               
            </div>
            <div class="row post-info-search">

                <a href="<?php print $item["author_url"]; ?>"><img  src="<?php print $item["author_picture"]; ?>" class="alignleft attachment-thumbnail author-thumbnail "  ></a> <?php print $item["author"]; ?> | <i class="fa fa-clock-o"></i> <?php print date("j F Y", $item["created"]); ?>

            </div>
            <div class="row description-item-directory">
                <?php
                if (isset($item['summary'])) {
                  //  print substr($node['body'],0,296);
                  if (strlen($item['summary']) > 296) {
                    print substr(strip_tags(html_entity_decode($item['summary'])), 0, 296) . " ...";
                  }
                  else {
                    print substr(strip_tags(html_entity_decode($item['summary'])), 0, 296);
                  }
                }
                ?>
            </div>
            <div class="row col-xs-12 btn-details"><a class="btn btn-default big" href="<?php print $item['url']; ?>">Details</a></div>

        </div>
        <!--                    <div class="col-sm-12 col-md-2 rigth-container">
                                <div class="my-rate col-sm-4 col-md-12">Rating <?php //print $item['editor_rating'];    ?></div>
                                <div class="btn-details col-sm-4 col-md-12"><a href="<?php //print $item['url'];    ?>">Details</a></div>
                                <div class="btn-website col-sm-4 col-md-12"><a href="#" class="btn btn-default" >Web Site <span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></a></div>
                            </div>-->
    </div>
</div>



