function throwExc(msg) {
    layer.msg(msg, {
        icon: 5,
        time:950 //2秒关闭（如果不配置，默认是3秒）
    });
}

function showSucc(msg) {
    layer.msg(msg, {
        icon: 6,
        time: 805 //2秒关闭（如果不配置，默认是3秒）
    });
}
function throwNoti(msg) {
    layer.msg(msg, {
        icon: 3,
        time: 1200 //2秒关闭（如果不配置，默认是3秒）
    });
}