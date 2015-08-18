<?php
require_once 'obj/FormUtil.php';

$bio_data_active = "";
$id_card_active = "";
$year_book_active = "";
$student_affairs_active = "";

require_once 'processor.php';

switch($next_tab){
    case 1:
        $id_card_active = "active";
        break;
    case 2:
        $year_book_active = "active";
        break;
    case 3:
        $student_affairs_active = "active";
        break;
    case 4:
        $student_affairs_active = "active";
        break;
    default:
        $bio_data_active = "active";
}
?>

<div class='container' style="background:white;">
    <div class="row">
        <div class="col-md-12" style="margin:10px 0px 14px 0px;">
            <div class="text-center" id="wizard">
                <h5>COUNCIL OF LEGAL EDUCATION</h5>
                <h5>NIGERIAN LAW SCHOOL</h5>
                <h5>LAGOS CAMPUS</h5>
                <h5>2014/2015 (NOVEMBER) ACADEMIC SESSION</h5>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <div>
              <!-- Nav tabs -->
              <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="<?php echo $bio_data_active ?>"><a href="#bio_data" aria-controls="bio_data" role="tab" data-toggle="tab">BIO DATA <span class="badge ">1/4</span></a></li>
                <li role="presentation" class="<?php echo $id_card_active ?>"><a href="#id_card" aria-controls="id_card" role="tab" data-toggle="tab">ID card <span class="badge">2/4</span></a></li>
                <li role="presentation" class="<?php echo $year_book_active ?>"><a href="#year_book" aria-controls="year_book" role="tab" data-toggle="tab">Year book <span class="badge">3/4</span></a></li>
                <li role="presentation" class="<?php echo $student_affairs_active ?>"><a href="#student_affairs" aria-controls="student_affairs" role="tab" data-toggle="tab">Student Affairs form-cb <span class="badge">4/4</span></a></li>
                <li role="presentation" ><a href="?logout=yes" aria-controls="logout" role="tab"  class="text-danger"><strong>Logout <i class="glyphicon glyphicon-off"></i></strong></a></li>
              </ul>

              <!-- Tab panes -->
              <div class="tab-content">
                <div role="tabpanel" class="tab-pane <?php echo $bio_data_active ?>" id="bio_data">
                    <?php require_once 'forms/bio_data.php'; ?>
                </div>
                <div role="tabpanel" class="tab-pane <?php echo $id_card_active ?>" id="id_card">
                    <?php require_once 'forms/id_card.php'; ?>
                </div>
                <div role="tabpanel" class="tab-pane <?php echo $year_book_active ?>" id="year_book">
                    <?php require_once 'forms/year_book.php'; ?>
                </div>
                <div role="tabpanel" class="tab-pane <?php echo $student_affairs_active ?>" id="student_affairs">
                    <?php require_once 'forms/student_affairs.php'; ?>
                </div>
                  
                <div role="tabpanel" class="tab-pane" id="logout">
                </div>
              </div>

            </div>
        </div>
    </div>
</div>