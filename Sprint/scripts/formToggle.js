// let showContent = document.getElementsByClassName('contentVisibility');
// let toggle = document.getElementById('toggle').checked;

// if(!(toggle)) {
//     showContent[0].style.visibility = 'visible';
//     showContent[1].remove();
// }

//$('#toggle').on('click', function() {
    //var form = $('#toggle').val();

    //    alert ( "The form disabled");
  //      $("#formvisible").hide();
//
//});

$(document).ready(function () {
    /*Getting the value of the checked radio buttons*/
    $("input.modeClass").on( 'click', function () {
        var value = $('onform').val();
        if (value === "onform") {
            $("#regForm").show();
            $("#outmessage").hide();
        }
        if (value == "") {
            $("#regForm").hide();
            $("#outmessage").show();
        }
    });
});

// $(document).ready(function() {
//   $("#formToggle").click(function() {
//     $("#form1").toggle();
//   });
// });