<script>
$(document).ready(function(){

    var bgColor = $('.albumTitle').css('background-color');
    var fgColor = $('.albumTitle span').css('color');

    $('.albumTitle span').css('color', bgColor);
    $('.albumTitle').css('background-color', fgColor);

    // Triggering a click event on page which has to be opened
    $('.toc a').on('click', function(e){

        var imageID = $(this).attr('data-href');
        $('#' + imageID).trigger('click');
    });
});
</script>
<div class="container">
    <div class="row">
        <div class="col-md-12 gap-above">
            <!-- <ul class="pager">
                <?php if($data['neighbours']['prevID']) {?> 
                <li class="previous"><a href="<?=BASE_URL?>describe/artefact/<?=$data['neighbours']['prevID']?>?<?=$data['filter']?>">&lt; Previous</a></li>
                <?php } ?>
                <?php if($data['neighbours']['nextID']) {?> 
                <li class="next"><a href="<?=BASE_URL?>describe/artefact/<?=$data['neighbours']['nextID']?>?<?=$data['filter']?>">Next &gt;</a></li>
                <?php } ?>
            </ul> -->
            <div class="row eBookDetails">
                <div class="col-md-3 leftPannel">   <!-- style="border: solid 1px red;" -->
                    <img class="img-responsive" data-original="" src="<?=DATA_URL . $data['details']['id']?>/cover.JPG">
                </div>
                <div class="col-md-6 middelPannel">
                    <p class="title"><?=$data['details']['Title']?></p>
                    <p class="author"><?=$data['details']['Author']?></p>
                    <p class="amount">&#8377; <?=$data['details']['Amount']?></p>
                    <div class="row description">
                        <div class="col-md-2">Description:</div>
                        <div class="col-md-8">
                            <p>ಸೌಂದರ್ಯ ತ್ರಿಕೂಟ-ಸಹಿತತೆಯಿಂದ ಸಾಹಿತ್ಯ-ಸಾಹಿತ್ಯ ಸಂಹಿತೆ-ರಸ-ರಸಭ್ರಾಂತಿ-ಕಾವ್ಯದ ಕೆಲಸ-ಷೇಕ್ಸ್‍ಪಿಯರಿಗೆ ನಮಸ್ಕಾರ-ಮಹಾಭಾರತದ ಪಾತ್ರಗಳು-ಕಾವ್ಯವು ಸ್ವಭಾವೋಲ್ಲಾಸ-ಈ ಪ್ರಬಂಧಗಳಲ್ಲಿ ಶ್ರೀ ಡಿ.ವಿ.ಜಿ. ಯವರು ಕಾವ್ಯದ ಸ್ವಭಾವ ರಸಾನುಭವಗಳಿಗೆ ಸಂಬಂಧಪಟ್ಟಂತೆ ವಿಷಯಗಳನ್ನು ವಿವೇಚಿಸಿದ್ದಾರೆ  <!-- <a href="javascript:void(0);"><span class="readMore">...more</span></a> --></p>
                        </div>
                    </div>
                    <div class="row highlights">
                        <div class="col-md-2">Highlights:</div>
                        <div class="col-md-8">
                            <p>Language: <?=$data['details']['Language']?></p>
                            <p>Published: <?=$data['details']['Datepublished']?></p>
                            <p>Type: <?=$data['details']['Type']?></p>
                            <p>Creator: <?=$data['details']['Creator']?></p>
                            <p>Publisher: <?=$data['details']['Publisher']?></p>
                        </div>
                    </div>

                </div>
                <div class="col-md-2 rightPannel online">
                    <h4>Purchase Through</h4>
                    <div class="row">
                        <div class="col-md-12"><a href="javascript:void(0);"><button type="button" class="btn btn-amazon">Amazon<br>Kindle</button></a></div>
                        <div class="col-md-12"><a href="javascript:void(0);"><button type="button" class="btn btn-apple">Apple<br>iBooks</button></a></div>
                        <div class="col-md-12"><a href="javascript:void(0);"><button type="button" class="btn btn-google">Google<br>Play Books</button></a></div>
                        <div class="col-md-12"><a href="javascript:void(0);"><button type="button" class="btn btn-online">Online<br>Book Purchase</button></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="<?=PUBLIC_URL?>js/viewer.js"></script>
