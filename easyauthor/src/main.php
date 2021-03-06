<!DOCTYPE html>
<html>
<head>
<title>EasyAuthor</title>
<!-- Bootstrap -->
<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="../prettify.css" rel="stylesheet">
</head>
<body>



<section id="wizard">
        <div class="page-header">
            <h1>EasyAuthor </h1>
        </div>
        <form id="commentForm" method="get" action="" class="form-horizontal">
            <div id="rootwizard">
                <ul>


                    <li><a href="#tab1" data-toggle="tab">Context</a></li>
                    <li><a href="#tab2" data-toggle="tab">Goals</a></li>
                    <li><a href="#tab3" data-toggle="tab">Process</a></li>
                    <li><a href="#tab4" data-toggle="tab">Role</a></li>
                    <li><a href="#tab5" data-toggle="tab">Environment</a></li>
                    <li><a href="#tab6" data-toggle="tab">Evaluation</a></li>
                    <li><a href="#tab7" data-toggle="tab">Instructional Material</a></li>
                </ul>
                <div id="bar" class="progress progress-info progress-striped">
                    <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>
                </div>



</div>

 <div class="tab-content">
<div class="tab-pane" id="tab1">
                            <div class="control-group">
                                <label class="control-label" for="email">Email</label>
                                <div class="controls">
                                  <input type="text" id="emailfield" name="emailfield" class="required email">
                                </div>
                              </div>

                              <div class="control-group">
                                <label class="control-label" for="name">Name</label>
                                <div class="controls">
                                  <input type="text" id="namefield" name="namefield" class="required">
                                </div>
                              </div>
                        </div>


<div class="tab-pane" id="tab2">
                            <div class="control-group">
                                <label class="control-label" for="name">Name</label>
                                <div class="controls">
                                    <input type="text" id="namefield" name="namefield" class="required">
                                </div>
                            </div>

                              <div class="control-group">
                                <label class="control-label" for="name">Start Date</label>
                                <div class="controls">
                                  <input type="date" id="namefield" name="namefield" class="required">
                                </div>
                              </div>
                        </div>

      <div class="control-group">
                                <label class="control-label" for="name">Deadline</label>
                                <div class="controls">
                                  <input type="date" id="namefield" name="namefield" class="required">
                                </div>
                              </div>
                        </div>


 <div class="control-group">
                                <label class="control-label" for="goal_desc">Goal description</label>
                                <div class="controls">
                                    <textarea name="message" rows="10" cols="30">
The cat was playing in the garden.
</textarea>
                                </div>
                            </div>
 <div class="control-group">
                                <label class="control-label" for="bloom">Bloom's level</label>
                                <div class="controls">
                                    <input type="text" id="namefield" name="namefield" class="required">
                                </div>
                            </div>
            </div>

 <div class="control-group">
                                <label class="control-label" for="priority">Priority</label>
                                <div class="controls">
                                    <input type="text" id="namefield" name="namefield" class="required">
                                </div>
                            </div>
            </div>





</div>
                   <ul class="pager wizard">
                        <li class="previous first" style="display:none;"><a href="#">First</a></li>
                        <li class="previous"><a href="#">Previous</a></li>
                        <li class="next last" style="display:none;"><a href="#">Last</a></li>
                        <li class="next"><a href="#">Next</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-12">
                <input type='text' name='stepid' id='stepid' value='1' size='2' style='width:20px;' />
                <input type='button' class='btn' id='disable-step' value='Disable' />
                <input type='button' class='btn' id='enable-step' value='Enable' />
                <input type='button' class='btn' id='show-step' value='Show' />
                <input type='button' class='btn' id='hide-step' value='Hide' />
                <input type='button' class='btn' id='remove-step' value='Remove' />
            </div>
        </form>




    </section>
</div>




        <script src="http://code.jquery.com/jquery-latest.js"></script>
        <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
        <script src="../bootstrap/js/bootstrap.min.js"></script>
        <script src="../jquery.bootstrap.wizard.js"></script>
        <script src="../prettify.js"></script>
    <script src="form.js"></script>
<script>
$(document).ready(function() {

    $('#rootwizard').bootstrapWizard({onTabShow: function(tab, navigation, index) {

        if(index==2) {
            // Make sure we entered the name
            if(!$('#name').val()) {
                alert('You must enter your name');
                $('#name').focus();
                return false;
                }
            }

            // Set the name for the next tab
            $('#tab3').html('Hello, ' + $('#name').val());
            var $total = navigation.find('li').length;
            var $current = index+1;
            var $percent = ($current/$total) * 100;
            $('#rootwizard .progress-bar').css({width:$percent+'%'});
            }});

        $('#pills').bootstrapWizard({'tabClass': 'nav nav-pills', 'debug': false, onShow: function(tab, navigation, index) {
            console.log('onShow');
            }, onNext: function(tab, navigation, index) {
                console.log('onNext');
            }, onPrevious: function(tab, navigation, index) {
                console.log('onPrevious');
            }, onLast: function(tab, navigation, index) {
                console.log('onLast');
            }, onTabClick: function(tab, navigation, index) {
                console.log('onTabClick');
                alert('on tab click disabled');
            }, onTabShow: function(tab, navigation, index) {
                console.log('onTabShow');
                var $total = navigation.find('li').length;
                var $current = index+1;
                var $percent = ($current/$total) * 100;
                $('#pills .progress-bar').css({width:$percent+'%'});
            }});
        $('#rootwizard').bootstrapWizard({'tabClass': 'nav nav-pills'});

        // Disable step
        $('#disable-step').on('click', function() {
            $('#rootwizard').bootstrapWizard('disable', $('#stepid').val());
                });

        // Enable step
        $('#enable-step').on('click', function() {
            $('#rootwizard').bootstrapWizard('enable', $('#stepid').val());
                });

        // Remove step
        $('#remove-step').on('click', function() {
            $('#rootwizard').bootstrapWizard('remove', $('#stepid').val(), true);
                });

        // Show step
        $('#show-step').on('click', function() {
            $('#rootwizard').bootstrapWizard('display', $('#stepid').val());
                });

        // Hide step
        $('#hide-step').on('click', function() {
            $('#rootwizard').bootstrapWizard('hide', $('#stepid').val());
                });

        var $validator = $("#commentForm").validate({
            rules: {
                emailfield: {
                    required: true,
                        email: true,
                        minlength: 3
},
namefield: {
    required: true,
        minlength: 3
},
urlfield: {
    required: true,
        minlength: 3,
        url: true
}
}

});

$('#rootwizard').bootstrapWizard({
    'tabClass': 'nav nav-pills',
        'onNext': function(tab, navigation, index) {
            var $valid = $("#commentForm").valid();
            if(!$valid) {
                $validator.focusInvalid();
                return false;
        }
        }
        });
window.prettyPrint && prettyPrint()
    });
        </script>
        </body>
        </html>
