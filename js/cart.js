//$.ajaxSetup({
//    global: true,
//    dataFilter: function (data, type) {
//        //  only 'text' and 'html' dataType should be filtered
//        if (type && type != "html" && type != "text") {
//            return data;
//        }
//
//        //var selector = 'script[src],link[rel="stylesheet"]';
//        var selector = 'script';
//
//        // get loaded scripts from DOM the first time we execute.
//        if (!$._loadedScripts) {
//            $._loadedScripts = {};
//            $._dataHolder = $(document.createElement('div'));
//
//            var loadedScripts = $(document).find(selector);
//
//            //fetching scripts from the DOM
//            for (var i = 0, len = loadedScripts.length; i < len; i++) {
//                $._loadedScripts[loadedScripts[i].src] = 1;
//            }
//        }
//
//        //$._dataHolder.html(data) does not work
//        $._dataHolder[0].innerHTML = data;
//
//        // iterate over new scripts and remove if source is already in DOM:
//        var incomingScripts = $($._dataHolder).find(selector);
//        for (var i = 0, len = incomingScripts.length; i < len; i++) {
//            if ($._loadedScripts[incomingScripts[i].src]) {
//                $(incomingScripts[i]).remove();
//            }
//            else {
//                $._loadedScripts[incomingScripts[i].src] = 1;
//            }
//        }
//
//        return $._dataHolder[0].innerHTML;
//    }
//});

function processAjaxResponce(data, status, jqXHR) {
    $("#content").html(data);
}

$(function(){
    $("#checkScripts").click(function(){
        checkDOMScripts();
    });
})

function checkDOMScripts(){
    var selector = 'script';
    var loadedScripts = $(document).find(selector);
    for (var i = 0, len = loadedScripts.length; i < len; i++) {
        console.log(loadedScripts[i].innerHTML);
    }
}