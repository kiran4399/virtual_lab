<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>EasyAuthor</title>
<!-- Bootstrap -->
<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="../prettify.css" rel="stylesheet">

<?php

require '/home/kiran/vendor/autoload.php';

use Stichoza\GoogleTranslate\TranslateClient;
function translate($text, $lang){


$tr = new TranslateClient(); // Default is from 'auto' to 'en'
$tr->setSource('en'); // Translate from English
$tr->setTarget($lang); // Translate to Georgian

echo $tr->translate($text);
}

$lang = 'ta';
?>


</head>
<body>
<div class='container'>

    <section id="wizard">
        <div class="page-header">

            <h1><?php translate('Design your own EasyAuthor', $lang) ?> </h1>
	<h2> <?php translate('You can design your own easyauthor. Input the given details and generate your app', $lang) ?></h2>
        </div>
        <form id="commentForm" method="get" action="" class="form-horizontal">
            <div id="rootwizard">
                <ul>
<li><a href='#tab1' data-toggle='tab'>మీరు మాట్లాడే భాష అనువర్తనం నిర్మించడానికి అనుకుంటున్నారు?</a></li><li><a href='#tab2' data-toggle='tab'>మీ ప్రణాళికలో మీకు కావలసిన టాబ్లను సంఖ్య ఏమిటి?</a></li><li><a href='#tab3' data-toggle='tab'>numbers</a></li><li><a href='#tab4' data-toggle='tab'>మీ అనువర్తనం పరిష్కరించడానికి ప్రయత్నిస్తున్నారు సమస్య ఏమిటి?</a></li><li><a href='#tab5' data-toggle='tab'>కొన్ని జ్ఞానార్జన వాతావరణాలలో</a></li><li><a href='#tab6' data-toggle='tab'>ముందు షరతులు ఏమిటి?</a></li><li><a href='#tab7' data-toggle='tab'>విద్యార్థి కోసం లక్ష్యాలు </a></li><li><a href='#tab8' data-toggle='tab'>ఇక్కడ మీరు మీ పేజీలను చూడవచ్చు ఎలా ఇవ్వాల్సి ఉంటుంది</a></li><li><a href='#tab9' data-toggle='tab'>కొన్ని జ్ఞానార్జన వాతావరణాలలో</a></li><li><a href='#tab10' data-toggle='tab'>ఎలా మీరు విద్యార్థులు అంచనా వేసింది?</a></li>                </ul>
                <div id="bar" class="progress progress-info progress-striped">
                    <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>
                </div>




                <div class="tab-content">

<div class='tab-pane' id='tab1'><div class='control-group'>
            <label class='control-label' for=text>name</label>
            <div class='controls'>
            <input type='text' name='fname'>
            </div>
            </div></div><div class='tab-pane' id='tab2'><div class='control-group'>
            <label class='control-label' for=dropdown>encoding</label>
            <div class='controls'>
            <input type='text' name='fname'>
            </div>
            </div><div class='control-group'>
            <label class='control-label' for=dropdown>encoding</label>
            <div class='controls'>
            <input type='text' name='fname'>
            </div>
            </div></div><div class='tab-pane' id='tab3'><div class='control-group'>
            <label class='control-label' for=text>number</label>
            <div class='controls'>
            <input type='text' name='fname'>
            </div>
            </div><div class='control-group'>
            <label class='control-label' for=text>number</label>
            <div class='controls'>
            <input type='text' name='fname'>
            </div>
            </div><div class='control-group'>
            <label class='control-label' for=text>number</label>
            <div class='controls'>
            <input type='text' name='fname'>
            </div>
            </div></div><div class='tab-pane' id='tab4'><div class='control-group'>
            <label class='control-label' for=text>nam</label>
            <div class='controls'>
            <input type='text' name='fname'>
            </div>
            </div><div class='control-group'>
            <label class='control-label' for=text>nam</label>
            <div class='controls'>
            <input type='text' name='fname'>
            </div>
            </div></div><div class='tab-pane' id='tab5'><div class='control-group'>
            <label class='control-label' for=text>list</label>
            <div class='controls'>
            <input type='text' name='fname'>
            </div>
            </div><div class='control-group'>
            <label class='control-label' for=text>list</label>
            <div class='controls'>
            <input type='text' name='fname'>
            </div>
            </div></div><div class='tab-pane' id='tab6'><div class='control-group'>
            <label class='control-label' for=text>list</label>
            <div class='controls'>
            <input type='text' name='fname'>
            </div>
            </div><div class='control-group'>
            <label class='control-label' for=text>list</label>
            <div class='controls'>
            <input type='text' name='fname'>
            </div>
            </div></div><div class='tab-pane' id='tab7'><div class='control-group'>
            <label class='control-label' for=text>list</label>
            <div class='controls'>
            <input type='text' name='fname'>
            </div>
            </div><div class='control-group'>
            <label class='control-label' for=text>list</label>
            <div class='controls'>
            <input type='text' name='fname'>
            </div>
            </div></div><div class='tab-pane' id='tab8'><div class='control-group'>
            <label class='control-label' for=password>password</label>
            <div class='controls'>
            
            </div>
            </div><div class='control-group'>
            <label class='control-label' for=password>password</label>
            <div class='controls'>
            
            </div>
            </div></div><div class='tab-pane' id='tab9'><div class='control-group'>
            <label class='control-label' for=checkbox>checkbox</label>
            <div class='controls'>
            
            </div>
            </div><div class='control-group'>
            <label class='control-label' for=checkbox>checkbox</label>
            <div class='controls'>
            
            </div>
            </div><div class='control-group'>
            <label class='control-label' for=checkbox>checkbox</label>
            <div class='controls'>
            
            </div>
            </div><div class='control-group'>
            <label class='control-label' for=checkbox>checkbox</label>
            <div class='controls'>
            
            </div>
            </div></div><div class='tab-pane' id='tab10'><div class='control-group'>
            <label class='control-label' for=text>dropdown</label>
            <div class='controls'>
            <input type='text' name='fname'>
            </div>
            </div><div class='control-group'>
            <label class='control-label' for=text>dropdown</label>
            <div class='controls'>
            <input type='text' name='fname'>
            </div>
            </div><div class='control-group'>
            <label class='control-label' for=text>dropdown</label>
            <div class='controls'>
            <input type='text' name='fname'>
            </div>
            </div><div class='control-group'>
            <label class='control-label' for=text>dropdown</label>
            <div class='controls'>
            <input type='text' name='fname'>
            </div>
            </div><div class='control-group'>
            <label class='control-label' for=text>dropdown</label>
            <div class='controls'>
            <input type='text' name='fname'>
            </div>
            </div><div class='control-group'>
            <label class='control-label' for=text>dropdown</label>
            <div class='controls'>
            <input type='text' name='fname'>
            </div>
            </div></div></div>
                <ul class="pager wizard">
                    <li class="previous first" style="display:none;"><a href="#"><?php translate('First', $lang) ?></a></li>
                    <li class="previous"><a href="#"><?php translate('Previous', $lang) ?></a></li>
                    <li class="next last" style="display:none;"><a href="#"><?php translate('Last', $lang) ?></a></li>
                    <li class="next"><a href="#"><?php translate('Next', $lang) ?></a></li>
                    <li class="finish"><a href=**><?php translate('Finish', $lang) ?></a></li>
                </ul>
            </div>
        </div>
        <div class="col-xs-12">
            <input type='text' name='stepid' id='stepid' value='1' size='2' style='width:20px;' />
            <input type='button' class='btn' id='disable-step' value=<?php translate('disable', $lang) ?> />
            <input type='button' class='btn' id='enable-step' value='<?php translate('enable', $lang) ?>' />
            <input type='button' class='btn' id='enable-step' value='<?php translate('add', $lang) ?>' />
            <input type='button' class='btn' id='remove-step' value='<?php translate('remove', $lang) ?>' />
        </div>
    </form>




</section>
</div>



        <script src="http://code.jquery.com/jquery-latest.js"></script>
        <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
        <script src="../bootstrap/js/bootstrap.min.js"></script>
        <script src="../jquery.bootstrap.wizard.js"></script>
        <script src="../prettify.js"></script>
        <script>
$(document).ready(function() {

        $('#rootwizard').bootstrapWizard({onTabShow: function(tab, navigation, index) {
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
