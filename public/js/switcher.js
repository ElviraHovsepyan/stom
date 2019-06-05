$(document).ready(function () {
    // var type = 'normal';
    //

    $('#source').typeSwitch();

});

$.fn.typeSwitch = function () {
    var elem = this;
    var switcher = this.parent().find('.switcher');
    var type = 'normal';
    var startType = 'normal';

    var dataNormalList = [''];
    var dataSublList = [''];

    initDataAttributes();

    this.on('keyup', function (e) {
        if((e.originalEvent.key !== 'Delete') && (e.originalEvent.key !== 'Backspace')){
            if(e.originalEvent.key === " "){
                addSpace();
            }
            else{
                var val = $(this).text();
                replaceContent(val);
                renderContent();
            }
        }
        else{
            var html = $(this).text();
            reinitDataLists(html);
        }
    });

    function initDataAttributes(){
        $(this).attr('data-normal', '');
        $(this).attr('data-sub', '');
    }

    /*---------- Switcher button ----------*/

    switcher.on('click', function () {
        initStartType();
        switchType();
        focusElem();
    });

    function focusElem() {
        var preHtml = $(elem).html();
        $(elem).html(preHtml);
        $(elem).focus();
        placeCaretAtEnd( document.getElementById("source") );
    }

    function switchType() {
        if(type === 'normal'){
            type = 'sub';
            if(dataSublList[0].length > 0) dataSublList.push('');
        }
        else{
            type = 'normal';
            if(dataNormalList[0].length > 0) dataNormalList.push('');
        }
    }

    function initStartType(){
        if((dataNormalList[0] === '') && (dataSublList[0] === '')){
            if(startType === 'normal') startType = 'sub';
            else startType = 'normal';
        }
    }

    function placeCaretAtEnd(el) {
        el.focus();
        if (typeof window.getSelection != "undefined"
            && typeof document.createRange != "undefined") {
            var range = document.createRange();
            range.selectNodeContents(el);
            range.collapse(false);
            var sel = window.getSelection();
            sel.removeAllRanges();
            sel.addRange(range);
        } else if (typeof document.body.createTextRange != "undefined") {
            var textRange = document.body.createTextRange();
            textRange.moveToElementText(el);
            textRange.collapse(false);
            textRange.select();
        }
    }

    /*------------    ---------------------*/

    function replaceContent(currentValue) {
        var content = '';
        var normalListLength = dataNormalList.length;
        var subListLength = dataSublList.length;
        var smallIndex = subListLength;
        if(subListLength > normalListLength ) smallIndex = normalListLength;
        for(var i = 0; i < smallIndex; i++){
            if(startType === 'normal'){
                content += dataNormalList[i];
                content += dataSublList[i];
            }
            else{
                content += dataSublList[i];
                content += dataNormalList[i];
            }
        }
        var whatsLeft = currentValue.replace(content, '');
        if(type === 'normal'){
            if(normalListLength === 1) dataNormalList[normalListLength - 1] += whatsLeft;
            else dataNormalList[normalListLength - 1] = whatsLeft;
        }
        else dataSublList[subListLength - 1] += whatsLeft;
    }

    function renderContent() {
        var htmlContent = '';
        var normalListLength = dataNormalList.length;
        var subListLength = dataSublList.length;
        var bigIndex = normalListLength;
        if(subListLength > normalListLength ) bigIndex = subListLength;
        for(var i = 0; i < bigIndex; i++){
            if(startType === 'normal'){
                if(i in dataNormalList) htmlContent += '<span>' + dataNormalList[i] + '</span>';
                if(i in dataSublList) htmlContent += '<sup>' + dataSublList[i] + '</sup>';
            }
            else{
                if(i in dataNormalList) htmlContent += '<span>' + dataNormalList[i] + '</span>';
                if(i in dataSublList) htmlContent += '<sup>' + dataSublList[i] + '</sup>';
            }
        }
        $(elem).html(htmlContent);
        focusElem();
    }

    function reinitDataLists(htmlContent) {
        var tmpStr = htmlContent.replace(/<(.|\n)*?>/g, '+++');
        var tmpArr = tmpStr.split('+++');
        dataNormalList = [];
        dataSublList = [];
        var st = 'normal';
        if(startType !== 'normal') st = 'sub';
        for(var i = 0; i < tmpArr.length; i++){
            if(!tmpArr[i]) continue;
            if(st === 'normal'){
                dataNormalList.push(tmpArr[i]);
                st = 'sub';
            }
            else{
                dataSublList.push(tmpArr[i]);
                st = 'normal';
            }
        }
        if(dataNormalList.length === 0) dataNormalList = [''];
        if(dataSublList.length === 0) dataSublList = [''];
        tmpArr = htmlContent.split('</');
        if(tmpArr[tmpArr.length - 1].indexOf('span') !== -1) type = 'normal';
        else type = 'sub';
        if(!dataNormalList[0] && !dataSublList[0]) type = 'normal';
    }

    function addSpace() {
        if(type === 'normal'){
            dataNormalList[dataNormalList.length - 1] += ' ';
        }
        else{
            dataNormalList.push(' ');
            type = 'normal';
        }
        console.log(dataNormalList, dataSublList);
    }
};