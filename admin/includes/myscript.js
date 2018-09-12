/**
 * Created by Maliq on 9/8/2018.
 */
$('#seconds').spinner({
    spin: function (event, ui) {
        if (ui.value >= 60) {
            $(this).spinner('value', ui.value - 60);
            $('#minutes').spinner('stepUp');
            return false;
        } else if (ui.value < 0) {
            $(this).spinner('value', ui.value + 60);
            $('#minutes').spinner('stepDown');
            return false;
        }
    }
});
