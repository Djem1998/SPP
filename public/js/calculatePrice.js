/**
 * Created by samsung on 22.05.2018.
 */
$(document).ready(function () {
    if ($('#exampleInputBreakage').val() != '' && $('#exampleInputMobile').val() != '') {
        $('#exampleInputBreakage').blur(function (e) {
            var price = 0;
            if ($('#exampleInputMobile').val() == '1' && $('#exampleInputBreakage').val() == '1') {
                price = 110;
            }
            if ($('#exampleInputMobile').val() == '1' && $('#exampleInputBreakage').val() == '2') {
                price = 130;
            }
            if ($('#exampleInputMobile').val() == '1' && $('#exampleInputBreakage').val() == '3') {
                price = 150;
            }
            if ($('#exampleInputMobile').val() == '1' && $('#exampleInputBreakage').val() == '4') {
                price = 170;
            }
            if ($('#exampleInputMobile').val() == '1' && $('#exampleInputBreakage').val() == '5') {
                price = 190;
            }
            if ($('#exampleInputMobile').val() == '2' && $('#exampleInputBreakage').val() == '1') {
                price = 210;
            }
            if ($('#exampleInputMobile').val() == '2' && $('#exampleInputBreakage').val() == '2') {
                price = 230;
            }
            if ($('#exampleInputMobile').val() == '2' && $('#exampleInputBreakage').val() == '3') {
                price = 250;
            }
            if ($('#exampleInputMobile').val() == '2' && $('#exampleInputBreakage').val() == '4') {
                price = 270;
            }
            if ($('#exampleInputMobile').val() == '2' && $('#exampleInputBreakage').val() == '5') {
                price = 290;
            }
            if ($('#exampleInputMobile').val() == '3' && $('#exampleInputBreakage').val() == '1') {
                price = 310;
            }
            if ($('#exampleInputMobile').val() == '3' && $('#exampleInputBreakage').val() == '2') {
                price = 330;
            }
            if ($('#exampleInputMobile').val() == '3' && $('#exampleInputBreakage').val() == '3') {
                price = 350;
            }
            if ($('#exampleInputMobile').val() == '3' && $('#exampleInputBreakage').val() == '4') {
                price = 370;
            }
            if ($('#exampleInputMobile').val() == '3' && $('#exampleInputBreakage').val() == '5') {
                price = 390;
            }
            $('#price').val(price)
        });
        $('#exampleInputMobile').blur(function (e) {
            var price = 0;
            if ($('#exampleInputMobile').val() == '1'&& $('#exampleInputBreakage').val() == '1'){
                price = 110;
            }
            if ($('#exampleInputMobile').val() == '1'&& $('#exampleInputBreakage').val() == '2'){
                price = 130;
            }
            if ($('#exampleInputMobile').val() == '1'&& $('#exampleInputBreakage').val() == '3'){
                price = 150;
            }
            if ($('#exampleInputMobile').val() == '1'&& $('#exampleInputBreakage').val() == '4'){
                price = 170;
            }
            if ($('#exampleInputMobile').val() == '1'&& $('#exampleInputBreakage').val() == '5'){
                price = 190;
            }
            if ($('#exampleInputMobile').val() == '2'&& $('#exampleInputBreakage').val() == '1'){
                price = 210;
            }
            if ($('#exampleInputMobile').val() == '2'&& $('#exampleInputBreakage').val() == '2'){
                price = 230;
            }
            if ($('#exampleInputMobile').val() == '2'&& $('#exampleInputBreakage').val() == '3'){
                price = 250;
            }
            if ($('#exampleInputMobile').val() == '2'&& $('#exampleInputBreakage').val() == '4'){
                price = 270;
            }
            if ($('#exampleInputMobile').val() == '2'&& $('#exampleInputBreakage').val() == '5'){
                price = 290;
            }
            if ($('#exampleInputMobile').val() == '3'&& $('#exampleInputBreakage').val() == '1'){
                price = 310;
            }
            if ($('#exampleInputMobile').val() == '3'&& $('#exampleInputBreakage').val() == '2'){
                price = 330;
            }
            if ($('#exampleInputMobile').val() == '3'&& $('#exampleInputBreakage').val() == '3'){
                price = 350;
            }
            if ($('#exampleInputMobile').val() == '3'&& $('#exampleInputBreakage').val() == '4'){
                price = 370;
            }
            if ($('#exampleInputMobile').val() == '3'&& $('#exampleInputBreakage').val() == '5'){
                price = 390;
            }
            debugger
            $('#price').val(price)
        });
    }
});