var pole_no1 = 1;
var pole_no2 = 2;
var i = 0;
var j = 0;
var car1 = 0;
var car2 = 0;

setInterval(function () {
    var offsets = document.getElementById('car').getBoundingClientRect();
    var offsets2 = document.getElementById('car2').getBoundingClientRect();
    var veh2;
    var veh;
    var left = offsets.left;
    var left2 = offsets2.left;
    //vehicle 1
    if (left < 1200 && left > 550) {
        veh = 1;
        if (j == 0) {
            carPoleCross(1);
            j++;
        }
    }
    else if (left < 300 && left > -280) {
        veh = 2;
        if (j == 0) {
            carPoleCross(1);
            j++;
        }

    }
    else {
        veh = 0;
        j = 0;
    }


    //vehicle 2
    if (left2 < 1450 && left2 > 800) {
        veh2 = 1;
        if (i == 0) {
            carPoleCross(2);
            i++;
        }
    }
    else if (left2 < 550 && left2 > -80) {
        veh2 = 2;
        if (i == 0) {
            poleChnage();
            carPoleCross(2);
            i++;
        }
    }
    else {
        veh2 = 0;
        i = 0;
    }

    if ((left < 1200 && left > 550) || (left2 < 1450 && left2 > 800)) {
        $('.cam2').css('background-color', 'white');
        $('.pole_info2').css('opacity', '1');
        $('.info').css('opacity', '1');
        if (veh == 1) {
            $('.pole_info2 span').html('Vehicle ABCDE12345 Detected');
        }
        else if (veh2 == 1) {
            $('.pole_info2 span').html('Vehicle PQRST98765 Detected');
        }
    }
    else {
        $('.cam2').css('background-color', 'black');
        $('.pole_info2').css('opacity', '0');
        $('.info').css('opacity', '0');

    }

    if ((left < 300 && left > -280) || (left2 < 550 && left2 > -80)) {
        $('.cam1').css('background-color', 'white');
        $('.pole_info1').css('opacity', '1');
        $('.info').css('opacity', '1');
        if (veh == 2) {
            $('.pole_info1 span').html('Vehicle ABCDE12345 Detected');
        }
        else if (veh2 == 2) {
            $('.pole_info1 span').html('Vehicle PQRST98765 Detected');
        }
    }
    else {
        $('.cam1').css('background-color', 'black');
        $('.pole_info1').css('opacity', '0');
    }


}, 100);


function poleChnage() {
    pole_no1 += 2;
    pole_no2 += 2;
    setTimeout(function () {
        $('.pole_no1').html('Pole ' + pole_no2);
        $('.pole_no2').html('Pole ' + pole_no1);
    }, 5000);
};
function carPoleCross($carNo) {
    if ($carNo == 1) {
        car1 += 1;
    }
    else {
        car2 += 1;
    }
    var a = $('#car1_info_value').value = car1;
    var b = $('#car2_info_value').value = car2;
    // console.log(a + " and " + b);

    var val = "<?php echo $c1 ?>";
    console.log(val);

}